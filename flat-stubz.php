#!/usr/bin/env php
<?php

/**
 * flat-stubz.php
 *
 * A "flat" stub generator that:
 *  - Uses SingleFileSourceLocator on each *.php file
 *  - Generates stubs for the file (classes/functions/constants) in one pass
 *  - Writes exactly ONE <?php tag per file
 *  - Skips creating empty stub files if a source file has no symbols
 *  - Logs reflection timing data to "stub-benchmark.log"
 *  - Can run in parallel (if pcntl is available) or fallback to single process
 *  - Supports --exclude=... or --finder=..., but not both
 *  - Only prints missing references if --verbose is passed
 *
 * Compatible with stricter PHPStan rules.
 */

declare( strict_types=1 );

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Finder\Finder;
use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;

use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass as BRClass;
use Roave\BetterReflection\Reflection\ReflectionConstant as BRConstant;
use Roave\BetterReflection\Reflection\ReflectionEnum as BREnum;
use Roave\BetterReflection\Reflection\ReflectionFunction as BRFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod as BRMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter as BRParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty as BRProperty;

use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;

use Throwable;

/**
 * Main entry point
 *
 * @param array<int, string> $argv
 */
function main( array $argv ): void {
	$options   = parseCommandLine( $argv );
	$sourceDir = $options['sourceDir']; // always string
	$outputDir = $options['outputDir']; // always string
	$stubBDir  = $options['stubBDir'];  // string|null
	$exclude   = $options['exclude'];   // string|null
	$finderPhp = $options['finderPhp']; // string|null
	$verbose   = $options['verbose'];   // bool

	$parallelAllowed = function_exists( 'pcntl_fork' );
	if ( ! $parallelAllowed ) {
		fwrite( STDERR, "WARNING: pcntl is not available; falling back to single-process mode.\n" );
	}

	// Build or load Finder
	$finder = makeFinder( $sourceDir, $exclude, $finderPhp );

	// Convert Finder -> array of file paths
	$allFiles = [];
	foreach ( $finder as $file ) {
		$rp = $file->getRealPath();
		if ( $rp !== false ) {
			$allFiles[] = $rp;
		}
	}
	$totalFiles = count( $allFiles );
	echo "Found {$totalFiles} PHP files in '{$sourceDir}'.\n";
	if ( $totalFiles === 0 ) {
		echo "No files found. Exiting.\n";

		return;
	}

	$missingReferences = []; // array<string,int>

	// Parallel or single
	if ( $parallelAllowed && $totalFiles > 1 ) {
		$numCores = detectCpuCores();
		echo "Using up to {$numCores} parallel processes.\n";

		// Force a positive chunk size so array_chunk param #2 is valid
		$chunkSize = (int) max( 1, ceil( $totalFiles / $numCores ) );
		/** @var array<int,array<int,string>> $chunks */
		$chunks = array_chunk( $allFiles, $chunkSize );
		if ( count( $chunks ) > 1 ) {
			runParallel( $chunks, $sourceDir, $outputDir, $stubBDir, $missingReferences );
		} else {
			// If only one chunk, just do single
			processFilesChunk( $chunks[0], $sourceDir, $outputDir, $stubBDir, $missingReferences, 0, 1 );
		}
	} else {
		// Single process
		processFilesChunk( $allFiles, $sourceDir, $outputDir, $stubBDir, $missingReferences, 0, 1 );
	}

	// Print missing refs only if verbose
	if ( $verbose && ! empty( $missingReferences ) ) {
		$totalMissingCount = 0;
		foreach ( $missingReferences as $val ) {
			$totalMissingCount += $val;
		}
		$unique = count( $missingReferences );

		echo "\nMissing references: {$totalMissingCount} total references to {$unique} unique symbols.\n";
		foreach ( $missingReferences as $sym => $count ) {
			echo "  - {$sym} ({$count} times)\n";
		}
	}

	if ( ! $parallelAllowed ) {
		fwrite( STDERR, "WARNING: pcntl was not available; used single-process mode.\n" );
	}

	echo "Done.\n";
}

/**
 * If multiple chunks, fork child processes. Merge child missing-refs data.
 *
 * @param array<int,array<int,string>> $chunks
 * @param string $sourceDir
 * @param string $outputDir
 * @param string|null $stubBDir
 * @param array<string,int> $missingReferences
 */
function runParallel(
	array $chunks,
	string $sourceDir,
	string $outputDir,
	?string $stubBDir,
	array &$missingReferences
): void {
	$childPids = [];
	$tmpDir    = sys_get_temp_dir() . '/flat-stubz-' . uniqid();
	mkdir( $tmpDir, 0777, true );

	foreach ( $chunks as $idx => $chunkFiles ) {
		$pid = pcntl_fork();
		if ( $pid === - 1 ) {
			fwrite( STDERR, "Error: pcntl_fork() failed.\n" );
			exit( 1 );
		}
		if ( $pid === 0 ) {
			// Child
			$childMissing = [];
			processFilesChunk( $chunkFiles, $sourceDir, $outputDir, $stubBDir, $childMissing, $idx, count( $chunks ) );
			file_put_contents( $tmpDir . "/refs-{$idx}.json", json_encode( $childMissing ) );
			exit( 0 );
		}
		$childPids[] = $pid;
	}

	// Wait + merge
	foreach ( $childPids as $cpid ) {
		pcntl_waitpid( $cpid, $status );
	}
	// Merge
	foreach ( range( 0, count( $chunks ) - 1 ) as $i ) {
		$jsonPath = $tmpDir . "/refs-{$i}.json";
		if ( ! is_file( $jsonPath ) ) {
			continue;
		}
		$data = file_get_contents( $jsonPath );
		if ( ! is_string( $data ) ) {
			continue;
		}
		$arr = json_decode( $data, true );
		if ( ! is_array( $arr ) ) {
			continue;
		}
		foreach ( $arr as $sym => $count ) {
			if ( ! isset( $missingReferences[ $sym ] ) ) {
				$missingReferences[ $sym ] = 0;
			}
			$missingReferences[ $sym ] += (int) $count;
		}
	}
}

/**
 * Create or load Finder instance
 *
 * @param string $sourceDir
 * @param string|null $exclude
 * @param string|null $finderPhp
 *
 * @return Finder
 */
function makeFinder( string $sourceDir, ?string $exclude, ?string $finderPhp ): Finder {
	if ( $finderPhp !== null ) {
		/** @psalm-suppress UnresolvableInclude */
		$finder = require $finderPhp;
		if ( ! $finder instanceof Finder ) {
			fwrite( STDERR, "Error: The file '{$finderPhp}' did not return a Finder instance.\n" );
			exit( 1 );
		}

		return $finder;
	}

	$finder = new Finder();
	$finder->files()->name( '*.php' )->in( $sourceDir );

	if ( $exclude !== null && $exclude !== '' ) {
		$finder->exclude( $exclude );
	}

	return $finder;
}

/**
 * @param array<int,string> $filePaths
 * @param string $sourceDir
 * @param string $outputDir
 * @param string|null $stubBDir
 * @param array<string,int> $missingReferences
 */
function processFilesChunk(
	array $filePaths,
	string $sourceDir,
	string $outputDir,
	?string $stubBDir,
	array &$missingReferences,
	int $chunkIndex,
	int $totalChunks
): void {
	$br         = new BetterReflection();
	$astLocator = $br->astLocator();
	$internal   = new PhpInternalSourceLocator( $astLocator, $br->sourceStubber() );

	$countFiles = count( $filePaths );
	echo "[Chunk {$chunkIndex}] Handling {$countFiles} files...\n";

	$i = 0;
	foreach ( $filePaths as $realpath ) {
		$i ++;
		if ( $realpath === '' ) {
			// Shouldn't happen, but just in case
			echo "[Chunk {$chunkIndex}] [{$i}/{$countFiles}] Skipped empty realpath?\n";
			continue;
		}

		$fileLocator = new SingleFileSourceLocator( $realpath, $astLocator );
		$aggregate   = new AggregateSourceLocator( [ $internal, $fileLocator ] );
		$reflector   = new DefaultReflector( $aggregate );

		$allClasses   = $reflector->reflectAllClasses();
		$allFunctions = $reflector->reflectAllFunctions();
		$allConstants = $reflector->reflectAllConstants();

		usort( $allClasses, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		usort( $allFunctions, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		usort( $allConstants, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );

		$stubBody = '';
		foreach ( $allClasses as $class ) {
			$stubBody .= generateClassStub( $class, $missingReferences );
		}
		foreach ( $allFunctions as $fn ) {
			$stubBody .= generateFunctionStub( $fn, $missingReferences );
		}
		foreach ( $allConstants as $cst ) {
			$stubBody .= generateConstantStub( $cst, $missingReferences );
		}

		if ( trim( $stubBody ) === '' ) {
			echo "[Chunk {$chunkIndex}] [{$i}/{$countFiles}] Skipped empty: " . str_replace( $sourceDir, '', $realpath ) . "\n";
			continue;
		}

		if ( $stubBDir !== null && $stubBDir !== '' ) {
			$stubBody = mergeStubBExtras( $stubBody, $realpath, $sourceDir, $stubBDir );
		}

		$stubContent  = "<?php\n\n" . $stubBody;
		$relativePath = ltrim( str_replace( $sourceDir, '', $realpath ), DIRECTORY_SEPARATOR );
		$targetPath   = $outputDir . DIRECTORY_SEPARATOR . $relativePath;

		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );

		echo "[Chunk {$chunkIndex}] [{$i}/{$countFiles}] Wrote stub for: " . str_replace( $sourceDir, '', $realpath ) . "\n";
	}

	echo "[Chunk {$chunkIndex}] Done.\n";
}

/**
 * @param array<int,string> $argv
 *
 * @return array{
 *   sourceDir: string,
 *   outputDir: string,
 *   stubBDir: string|null,
 *   exclude: string|null,
 *   finderPhp: string|null,
 *   verbose: bool
 * }
 */
function parseCommandLine( array $argv ): array {
	if ( count( $argv ) < 3 ) {
		fwrite( STDERR, "Usage: php flat-stubz.php <source-dir> <output-dir> [stub-b-dir] [--exclude=dir] [--finder=path] [--verbose]\n" );
		exit( 1 );
	}
	$sourceDir = $argv[1];
	$outputDir = $argv[2];

	$stubBDir  = null;
	$exclude   = null;
	$finderPhp = null;
	$verbose   = false;

	// 3rd arg might be stub-b-dir if not starting with --
	if ( isset( $argv[3] ) && ! str_starts_with( $argv[3], '--' ) ) {
		$stubBDir = $argv[3];
		$startIdx = 4;
	} else {
		$startIdx = 3;
	}

	for ( $i = $startIdx; $i < count( $argv ); $i ++ ) {
		$arg = $argv[ $i ];
		if ( str_starts_with( $arg, '--exclude=' ) ) {
			$exclude = substr( $arg, 10 );
		} elseif ( str_starts_with( $arg, '--finder=' ) ) {
			$finderPhp = substr( $arg, 9 );
		} elseif ( $arg === '--verbose' ) {
			$verbose = true;
		}
	}

	if ( $exclude !== null && $finderPhp !== null ) {
		fwrite( STDERR, "Error: Cannot use --exclude and --finder together.\n" );
		exit( 1 );
	}

	return [
		'sourceDir' => $sourceDir,
		'outputDir' => $outputDir,
		'stubBDir'  => $stubBDir,
		'exclude'   => $exclude,
		'finderPhp' => $finderPhp,
		'verbose'   => $verbose,
	];
}

/**
 * Attempt to detect CPU cores, fallback=2 if unknown
 */
function detectCpuCores(): int {
	$nproc = @shell_exec( 'nproc 2>/dev/null' );
	$nproc = is_string( $nproc ) ? trim( $nproc ) : '';
	if ( $nproc !== '' && ctype_digit( $nproc ) ) {
		return max( 1, (int) $nproc );
	}

	$sysctl = @shell_exec( 'sysctl -n hw.ncpu 2>/dev/null' );
	$sysctl = is_string( $sysctl ) ? trim( $sysctl ) : '';
	if ( $sysctl !== '' && ctype_digit( $sysctl ) ) {
		return max( 1, (int) $sysctl );
	}

	return 2;
}

/**
 * Merge stub B extras. Naive text approach.
 */
function mergeStubBExtras( string $generatedBody, string $sourceFile, string $sourceDir, string $stubBDir ): string {
	$relative  = ltrim( str_replace( $sourceDir, '', $sourceFile ), DIRECTORY_SEPARATOR );
	$stubBFile = rtrim( $stubBDir, DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR . $relative;
	if ( ! is_file( $stubBFile ) ) {
		return $generatedBody;
	}
	$stubBContent = file_get_contents( $stubBFile );
	if ( ! is_string( $stubBContent ) || $stubBContent === '' ) {
		return $generatedBody;
	}

	$injection = '';

	// Example injection for private $api
	if ( preg_match( '/private\s+\$api;/', $stubBContent ) === 1
	     && preg_match( '/private\s+\$api;/', $generatedBody ) === 0
	) {
		$matchesDoc = [];
		if ( preg_match( '/(\/\*\*[\s\S]*?\*\/)\s+private\s+\$api;/', $stubBContent, $matchesDoc ) === 1 ) {
			$injection .= "    " . trim( $matchesDoc[1] ) . "\n";
		}
		$injection .= "    /**\n";
		$injection .= "     * @deprecated This property is kept for backward compatibility.\n";
		$injection .= "     */\n";
		$injection .= "    private \$api;\n\n";
	}

	if ( preg_match( '/protected\s+static\s+\$_instance;/', $stubBContent ) === 1
	     && preg_match( '/protected\s+static\s+\$_instance;/', $generatedBody ) === 0
	) {
		$injection .= "    protected static \$_instance;\n\n";
	}

	$privateMethods = [
		'init_hooks',
		'define_tables',
		'is_request',
		'load_webhooks',
	];
	foreach ( $privateMethods as $pm ) {
		if ( preg_match( '/function\s+' . $pm . '\s*\(/', $stubBContent ) === 1
		     && preg_match( '/function\s+' . $pm . '\s*\(/', $generatedBody ) === 0
		) {
			$methodRegex = '/(\/\*\*[\s\S]*?\*\/)?\s+private\s+function\s+' . $pm . '\s*\([^)]*\)\s*\{[\s\S]*?\}/';
			if ( preg_match( $methodRegex, $stubBContent, $m ) === 1 && isset( $m[0] ) ) {
				$injection .= "\n    " . trim( $m[0] ) . "\n";
			}
		}
	}

	if ( $injection === '' ) {
		return $generatedBody;
	}

	$pos = strpos( $generatedBody, "\n{\n" );
	if ( $pos === false ) {
		return $generatedBody . "\n" . $injection;
	}

	return substr( $generatedBody, 0, $pos + 3 ) . $injection . substr( $generatedBody, $pos + 3 );
}

/**
 * Log benchmarks if they take >= 1s
 *
 * @param array<string,mixed> $context
 */
function logBenchmark( string $functionName, float $startTime, float $endTime, array $context = [] ): void {
	static $fh = null;
	if ( ! is_resource( $fh ) ) {
		$fp = @fopen( __DIR__ . '/stub-benchmark.log', 'ab' );
		if ( is_resource( $fp ) ) {
			$fh = $fp;
		} else {
			return;
		}
	}
	$duration = $endTime - $startTime;
	if ( $duration < 1.0 ) {
		return;
	}
	$time    = date( 'Y-m-d H:i:s' );
	$details = json_encode( $context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) ?: '';
	fwrite( $fh, "[{$time}] {$functionName} took " . round( $duration, 4 ) . "s, context={$details}\n" );
	fflush( $fh );
}

/**
 * Generate a class stub from reflection.
 *
 * @param BRClass $class
 * @param array<string,int> $missingReferences
 */
function generateClassStub( BRClass $class, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$namespace = $class->getNamespaceName();
	if ( $namespace !== '' ) {
		$buf .= "namespace {$namespace};\n\n";
	}

	$doc = $class->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		$buf .= $doc . "\n";
	}

	foreach ( $class->getAttributes() as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	// Build "class" / "interface" / "enum" / "abstract" / etc.
	$buf .= getClassDeclaration( $class );

	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		try {
			$parent = $class->getParentClassName();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$parent = '';
		}
		if ( $parent !== '' ) {
			$buf .= ' extends \\' . ltrim( $parent, '\\' );
		}

		try {
			$interfaces = $class->getInterfaceNames();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$interfaces = [];
		}
		if ( $interfaces !== [] ) {
			$impls = array_map( fn( string $i ) => '\\' . ltrim( $i, '\\' ), $interfaces );
			$buf   .= ' implements ' . implode( ', ', $impls );
		}
	}

	$buf .= "\n{\n";

	if ( $class->isEnum() && $class instanceof BREnum ) {
		// Cases
		foreach ( $class->getCases() as $case ) {
			try {
				$val = $case->getValue();
				if ( $val !== null ) {
					$buf .= "    case {$case->getName()} = " . convertVarExportToWpStyle( $val ) . ";\n\n";
				} else {
					$buf .= "    case {$case->getName()};\n\n";
				}
			} catch ( Throwable $ex ) {
				handleBetterReflectionException( $ex, $missingReferences );
			}
		}
	}

	// Class constants
	foreach ( $class->getImmediateConstants() as $constName => $refConst ) {
		try {
			$value = $refConst->getValue();
			$buf   .= "    const {$constName} = " . convertVarExportToWpStyle( $value ) . ";\n\n";
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	}

	// Props
	try {
		$props = $class->getImmediateProperties();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$props = [];
	}
	foreach ( $props as $prop ) {
		if ( $prop->getDeclaringClass()->getName() === $class->getName() ) {
			$buf .= generatePropertyStub( $prop, $missingReferences );
		}
	}

	// Methods
	try {
		$methods = $class->getImmediateMethods();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$methods = [];
	}
	foreach ( $methods as $method ) {
		if ( $method->getDeclaringClass()->getName() === $class->getName() ) {
			$buf .= generateMethodStub( $method, $missingReferences );
		}
	}

	$buf .= "}\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className' => $class->getName(),
	] );

	return $buf;
}

/**
 * Generate a function stub
 *
 * @param BRFunction $fn
 * @param array<string,int> $missingReferences
 */
function generateFunctionStub( BRFunction $fn, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$ns = $fn->getNamespaceName();
	if ( $ns !== '' ) {
		$buf .= "namespace {$ns};\n\n";
	}

	$doc = $fn->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		$buf .= $doc . "\n";
	}

	foreach ( $fn->getAttributes() as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	$buf    .= 'function ' . $fn->getName() . '(';
	$params = [];
	foreach ( $fn->getParameters() as $param ) {
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$ret = $fn->getReturnType();
		if ( $ret !== null ) {
			$buf .= ': ' . (string) $ret;
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'functionName' => $fn->getName(),
	] );

	return $buf;
}

/**
 * Generate a constant stub. For BetterReflection 5.x, everything is ReflectionConstant
 * (global or in a class). We'll detect a class-constant if there's a "getDeclaringClass()".
 *
 * @param BRConstant $constant
 * @param array<string,int> $missingReferences
 */
function generateConstantStub( BRConstant $constant, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$ns = $constant->getNamespaceName();
	if ( $ns !== '' ) {
		$buf .= "namespace {$ns};\n\n";
	}

	// method_exists check: if getDeclaringClass() exists and returns a class => it's a class constant
	if ( method_exists( $constant, 'getDeclaringClass' ) ) {
		// Class constant
		try {
			$value = $constant->getValue();
			$name  = $constant->getName();
			$val   = convertVarExportToWpStyle( $value );
			$buf   .= "const {$name} = {$val};\n\n";
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	} else {
		// Global constant
		$name = $constant->getName();
		try {
			$value  = $constant->getValue();
			$mapped = mapValueForDefine( $value, $name );
			$buf    .= "\\define('{$name}', {$mapped});\n\n";
		} catch ( Throwable $ex ) {
			$buf .= "// Skipped constant '{$name}' of invalid type.\n\n";
		}
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'constantName' => $constant->getName(),
	] );

	return $buf;
}

/**
 * Describe how the class is declared: interface, trait, enum, abstract, final, etc.
 *
 * @param BRClass $class
 */
function getClassDeclaration( BRClass $class ): string {
	$__start = microtime( true );

	$out = '';
	if ( $class->isInterface() ) {
		$out = 'interface ' . $class->getShortName();
	} elseif ( $class->isTrait() ) {
		$out = 'trait ' . $class->getShortName();
	} elseif ( $class->isEnum() ) {
		$out = 'enum ' . $class->getShortName();
	} elseif ( $class->isAbstract() ) {
		$out = 'abstract class ' . $class->getShortName();
	} elseif ( $class->isFinal() ) {
		$out = 'final class ' . $class->getShortName();
	} else {
		$out = 'class ' . $class->getShortName();
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className' => $class->getName(),
	] );

	return $out;
}

/**
 * Generate a property stub
 *
 * @param BRProperty $prop
 * @param array<string,int> $missingReferences
 */
function generatePropertyStub( BRProperty $prop, array &$missingReferences ): string {
	$__start = microtime( true );
	$out     = '';

	$doc = $prop->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$out .= "    {$line}\n";
		}
	}

	foreach ( $prop->getAttributes() as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	$vis = 'public';
	if ( $prop->isPrivate() ) {
		$vis = 'private';
	} elseif ( $prop->isProtected() ) {
		$vis = 'protected';
	}
	$static   = $prop->isStatic() ? ' static' : '';
	$readonly = $prop->isReadOnly() ? 'readonly ' : '';

	try {
		$typeObj = $prop->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$typeObj = null;
	}
	$typeStr = ( $typeObj !== null ) ? ( (string) $typeObj . ' ' ) : '';

	$out .= "    {$vis}{$static} {$readonly}{$typeStr}\${$prop->getName()}";

	try {
		if ( $prop->hasDefaultValue() ) {
			$defVal = $prop->getDefaultValue();
			$out    .= ' = ' . convertVarExportToWpStyle( $defVal );
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	$out .= ";\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className'    => $prop->getDeclaringClass()->getName(),
		'propertyName' => $prop->getName(),
	] );

	return $out;
}

/**
 * Generate a method stub
 *
 * @param BRMethod $method
 * @param array<string,int> $missingReferences
 */
function generateMethodStub( BRMethod $method, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$doc = $method->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}

	foreach ( $method->getAttributes() as $attr ) {
		$buf .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	if ( $method->isPrivate() ) {
		$buf .= '    private ';
	} elseif ( $method->isProtected() ) {
		$buf .= '    protected ';
	} else {
		$buf .= '    public ';
	}
	if ( $method->isStatic() ) {
		$buf .= 'static ';
	}
	if ( $method->isFinal() && ! $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'final ';
	}
	if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'abstract ';
	}

	$buf    .= 'function ' . $method->getName() . '(';
	$params = [];
	foreach ( $method->getParameters() as $pm ) {
		$params[] = generateParameterStub( $pm, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$ret = $method->getReturnType();
		if ( $ret !== null ) {
			$buf .= ': ' . (string) $ret;
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className'  => $method->getDeclaringClass()->getName(),
		'methodName' => $method->getName(),
	] );

	return $buf;
}

/**
 * Generate an attribute line
 *
 * @param ReflectionAttribute $attr
 */
function generateAttributeLine( ReflectionAttribute $attr ): string {
	$__start = microtime( true );

	$args = [];
	foreach ( $attr->getArguments() as $argVal ) {
		$args[] = var_export( $argVal, true );
	}
	$argsStr = $args ? '(' . implode( ', ', $args ) . ')' : '';
	$line    = "#[{$attr->getName()}{$argsStr}]";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'attributeName' => $attr->getName(),
	] );

	return $line;
}

/**
 * Generate a parameter stub
 *
 * @param BRParameter $param
 * @param array<string,int> $missingReferences
 */
function generateParameterStub( BRParameter $param, array &$missingReferences ): string {
	$__start = microtime( true );

	try {
		$typeObj = $param->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$typeObj = null;
	}
	$out = ( $typeObj !== null ) ? ( (string) $typeObj . ' ' ) : '';

	if ( $param->isPassedByReference() ) {
		$out .= '&';
	}
	if ( $param->isVariadic() ) {
		$out .= '...';
	}
	$out .= '$' . $param->getName();

	if ( $param->isDefaultValueAvailable() ) {
		try {
			$defVal = $param->getDefaultValue();
			$out    .= ' = ' . convertVarExportToWpStyle( $defVal );
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'declaringFunction' => $param->getDeclaringFunction()->getName(),
		'paramName'         => $param->getName(),
	] );

	return $out;
}

/**
 * Convert var_export output to WP style
 *
 * @param mixed $value
 */
function convertVarExportToWpStyle( $value ): string {
	$out = var_export( $value, true );
	$out = str_ireplace( 'NULL', 'null', $out );

	// preg_replace can return string|null, so cast to string
	$out = (string) preg_replace( '/array\s*\(/', 'array(', $out );
	$out = (string) preg_replace( '/\)(\s*)$/', ')', $out );

	return $out;
}

/**
 * Increment missingReferences for reflection exceptions
 *
 * @param Throwable $ex
 * @param array<string,int> $missingReferences
 */
function handleBetterReflectionException( Throwable $ex, array &$missingReferences ): void {
	$__start = microtime( true );

	if ( $ex instanceof IdentifierNotFound ) {
		$symbol                       = $ex->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		logBenchmark( __FUNCTION__, $__start, microtime( true ), [
			'exceptionType' => get_class( $ex ),
			'symbol'        => $symbol,
		] );

		return;
	}
	if ( $ex instanceof UnableToCompileNode ) {
		$constantName                 = method_exists( $ex, 'constantName' ) ? $ex->constantName() : null;
		$symbol                       = is_string( $constantName ) && $constantName !== '' ? $constantName : 'UnknownConstant';
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		logBenchmark( __FUNCTION__, $__start, microtime( true ), [
			'exceptionType' => get_class( $ex ),
			'symbol'        => $symbol,
		] );

		return;
	}

	$cls                       = get_class( $ex );
	$missingReferences[ $cls ] = ( $missingReferences[ $cls ] ?? 0 ) + 1;
	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'exceptionType' => $cls,
	] );
}

/**
 * Convert any global constant value to a valid define() expression
 *
 * @param mixed $value
 * @param string $constantName
 *
 * @return string
 */
function mapValueForDefine( $value, string $constantName ): string {
	$t = gettype( $value );
	switch ( $t ) {
		case 'boolean':
			return $value ? 'true' : 'false';
		case 'integer':
			return (string) $value;
		case 'double':
			return (string) $value;
		case 'string':
			// either real string or empty
			// return var_export($value, true);
			return "''";
		case 'NULL':
			return 'null';
		case 'array':
			return 'array()';
		default:
			// object, resource, unknown => throw
			throw new \UnexpectedValueException(
				"Cannot define constant '{$constantName}' with value of type {$t}."
			);
	}
}

// If invoked via CLI
if ( PHP_SAPI === 'cli' && isset( $argv[0] ) && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}