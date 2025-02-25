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
 * Usage:
 *   php flat-stubz.php <source-dir> <output-dir> [stub-b-dir] [--exclude=dir] [--finder=path] [--verbose]
 *
 * Examples:
 *   php flat-stubz.php src stubs
 *   php flat-stubz.php src stubs stubsB --exclude=vendor
 *   php flat-stubz.php src stubs stubsB --finder=my-finder.php --verbose
 *
 * In "my-finder.php", you must return a Symfony\Component\Finder\Finder instance:
 *   <?php
 *   use Symfony\Component\Finder\Finder;
 *   $finder = new Finder();
 *   $finder->files()->name('*.php')->in(__DIR__ . '/special');
 *   return $finder;
 */

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Finder\Finder;
use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;
use Throwable;

function main( array $argv ): void {
	// 1) Parse args
	$options   = parseCommandLine( $argv );
	$sourceDir = $options['sourceDir'];
	$outputDir = $options['outputDir'];
	$stubBDir  = $options['stubBDir'];
	$exclude   = $options['exclude'];
	$finderPhp = $options['finderPhp'];
	$verbose   = $options['verbose'];

	// 2) Check pcntl availability
	$parallelAllowed = function_exists( 'pcntl_fork' );
	$childPids       = [];
	if ( ! $parallelAllowed ) {
		fwrite( STDERR, "WARNING: pcntl is not available; falling back to single-process mode.\n" );
	}

	// 3) Build Finder instance
	if ( $finderPhp ) {
		// We load the custom finder from that file
		// The user is expected to "return $finder;" in that file.
		$finder = require $finderPhp;
		if ( ! $finder instanceof Finder ) {
			fwrite( STDERR, "Error: The file '{$finderPhp}' did not return a Finder instance.\n" );
			exit( 1 );
		}
	} else {
		// Our default Finder
		$finder = new Finder();
		$finder->files()->name( '*.php' )->in( $sourceDir );

		// If exclude is set, exclude it
		if ( $exclude ) {
			$finder->exclude( $exclude );
		}
	}

	// Convert Finder to array of file paths
	$allFiles = [];
	foreach ( $finder as $file ) {
		$rp = $file->getRealPath();
		if ( $rp ) {
			$allFiles[] = $rp;
		}
	}
	$totalFiles = count( $allFiles );

	echo "Found {$totalFiles} PHP files in '{$sourceDir}'.\n";

	if ( $totalFiles === 0 ) {
		echo "No files found. Exiting.\n";
		exit( 0 );
	}

	// 4) If parallel is available, detect CPU cores & chunk
	//    Else do single-chunk
	if ( $parallelAllowed ) {
		$numCores = detectCpuCores();
		echo "Using up to {$numCores} parallel processes.\n";
		$chunks = array_chunk( $allFiles, (int) ceil( $totalFiles / $numCores ) );
	} else {
		// Single chunk
		$chunks = [ $allFiles ];
	}

	// Prepare temp dir for child missing-ref data
	$tmpDir = sys_get_temp_dir() . '/flat-stubz-' . uniqid();
	mkdir( $tmpDir, 0777, true );

	// We'll collect missing references from child processes (or this single process).
	$missingReferences = [];

	// 5) Fork children or do single-process
	foreach ( $chunks as $chunkIndex => $chunkFiles ) {
		if ( $parallelAllowed && count( $chunks ) > 1 ) {
			// Fork
			$pid = pcntl_fork();
			if ( $pid === - 1 ) {
				fwrite( STDERR, "Error: pcntl_fork() failed.\n" );
				exit( 1 );
			}
			if ( $pid === 0 ) {
				// CHILD
				$childMissingRefs = [];
				processFilesChunk( $chunkFiles, $sourceDir, $outputDir, $stubBDir, $childMissingRefs, $chunkIndex, count( $chunks ) );

				$jsonPath = $tmpDir . "/missing-refs-{$chunkIndex}.json";
				file_put_contents( $jsonPath, json_encode( $childMissingRefs ) );
				exit( 0 ); // done
			} else {
				// PARENT
				$childPids[] = $pid;
			}
		} else {
			// Single-process path
			// We just process the chunk directly in this process
			processFilesChunk( $chunkFiles, $sourceDir, $outputDir, $stubBDir, $missingReferences, $chunkIndex, 1 );
		}
	}

	// If parallel, wait for children
	if ( $parallelAllowed && count( $chunks ) > 1 ) {
		foreach ( $childPids as $pid ) {
			pcntl_waitpid( $pid, $status );
		}
		// Merge child missing references
		foreach ( range( 0, count( $chunks ) - 1 ) as $i ) {
			$fileJson = $tmpDir . "/missing-refs-{$i}.json";
			if ( file_exists( $fileJson ) ) {
				$childRefs = json_decode( file_get_contents( $fileJson ), true ) ?: [];
				foreach ( $childRefs as $sym => $count ) {
					if ( ! isset( $missingReferences[ $sym ] ) ) {
						$missingReferences[ $sym ] = 0;
					}
					$missingReferences[ $sym ] += $count;
				}
			}
		}
	}

	// 6) Print missing references only if --verbose
	if ( $verbose && ! empty( $missingReferences ) ) {
		$count  = array_sum( $missingReferences );
		$unique = count( $missingReferences );
		echo "\nMissing references: {$count} total references to {$unique} unique symbols.\n";
		foreach ( $missingReferences as $symbol => $times ) {
			echo "  - {$symbol} ({$times} times)\n";
		}
	}

	// If pcntl wasn't available, print a final reminder
	if ( ! $parallelAllowed ) {
		fwrite( STDERR, "WARNING: pcntl was not available; used single-process mode.\n" );
	}

	echo "Done.\n";
}

/**
 * processFilesChunk
 * Called per child or in single-process to handle a subset of files.
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
	$br              = new BetterReflection();
	$astLocator      = $br->astLocator();
	$internalLocator = new PhpInternalSourceLocator( $astLocator, $br->sourceStubber() );

	$countFiles = count( $filePaths );
	echo "[Chunk {$chunkIndex}] Handling {$countFiles} files...\n";

	$i = 0;
	foreach ( $filePaths as $realpath ) {
		$i ++;
		// SingleFileSourceLocator
		$fileLocator = new SingleFileSourceLocator( $realpath, $astLocator );
		$aggregate   = new AggregateSourceLocator( [ $internalLocator, $fileLocator ] );
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
		foreach ( $allConstants as $const ) {
			$stubBody .= generateConstantStub( $const, $missingReferences );
		}

		if ( trim( $stubBody ) === '' ) {
			echo "[Chunk {$chunkIndex}] [{$i}/{$countFiles}] Skipped empty: " . str_replace( $sourceDir, '', $realpath ) . "\n";
			continue;
		}

		if ( $stubBDir ) {
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
 * parseCommandLine
 * Extracts:
 *   <sourceDir>, <outputDir>, [stubBDir],
 *   --exclude=..., --finder=..., --verbose
 * Ensures --exclude and --finder are not used together.
 */
function parseCommandLine( array $argv ): array {
	if ( count( $argv ) < 3 ) {
		fwrite( STDERR, "Usage: php flat-stubz.php <source-dir> <output-dir> [stub-b-dir] [--exclude=dir] [--finder=path] [--verbose]\n" );
		exit( 1 );
	}

	$sourceDir = $argv[1];
	$outputDir = $argv[2];
	$stubBDir  = $argv[3] ?? null;

	// We'll parse further flags from $argv[4..end]
	$exclude   = null;
	$finderPhp = null;
	$verbose   = false;

	// If there's a third positional but it starts with --, maybe there's no stubBDir
	if ( $stubBDir && str_starts_with( $stubBDir, '--' ) ) {
		// shift it back
		array_splice( $argv, 3, 0, [ null ] );
		$stubBDir = null;
	}

	// Start from index=4 or 5, depending on if we have stubBDir
	$startIndex = 4;
	if ( $stubBDir !== null ) {
		$startIndex = 4;
	} else {
		$startIndex = 3;
	}

	for ( $i = $startIndex; $i < count( $argv ); $i ++ ) {
		$arg = $argv[ $i ];
		if ( ! is_string( $arg ) ) {
			continue;
		}
		if ( str_starts_with( $arg, '--exclude=' ) ) {
			$exclude = substr( $arg, strlen( '--exclude=' ) );
		} elseif ( str_starts_with( $arg, '--finder=' ) ) {
			$finderPhp = substr( $arg, strlen( '--finder=' ) );
		} elseif ( $arg === '--verbose' ) {
			$verbose = true;
		}
	}

	if ( $exclude && $finderPhp ) {
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
 * detectCpuCores
 * Tries nproc (Linux) or sysctl (macOS). Fallback=2 if unknown.
 */
function detectCpuCores(): int {
	$nproc = @trim( (string) shell_exec( 'nproc 2>/dev/null' ) );
	if ( $nproc !== '' && ctype_digit( $nproc ) ) {
		return max( 1, (int) $nproc );
	}
	$sysctl = @trim( (string) shell_exec( 'sysctl -n hw.ncpu 2>/dev/null' ) );
	if ( $sysctl !== '' && ctype_digit( $sysctl ) ) {
		return max( 1, (int) $sysctl );
	}

	return 2;
}

/**
 * Merges "Stub B" extra private props/methods. Naive text-based approach.
 */
function mergeStubBExtras( string $generatedBody, string $sourceFile, string $sourceDir, string $stubBDir ): string {
	$relative  = ltrim( str_replace( $sourceDir, '', $sourceFile ), DIRECTORY_SEPARATOR );
	$stubBFile = rtrim( $stubBDir, DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR . $relative;
	if ( ! file_exists( $stubBFile ) ) {
		return $generatedBody;
	}
	$stubBContent = file_get_contents( $stubBFile );
	if ( ! $stubBContent ) {
		return $generatedBody;
	}

	$injection = '';

	// Example injection logic for private $api;
	if ( preg_match( '/private\s+\$api;/', $stubBContent ) && ! preg_match( '/private\s+\$api;/', $generatedBody ) ) {
		$matchesDoc = [];
		if ( preg_match( '/(\/\*\*[\s\S]*?\*\/)\s+private\s+\$api;/', $stubBContent, $matchesDoc ) ) {
			$injection .= "    " . trim( $matchesDoc[1] ) . "\n";
		}
		$injection .= "    /**\n";
		$injection .= "     * @deprecated This property is kept for backward compatibility.\n";
		$injection .= "     */\n";
		$injection .= "    private \$api;\n\n";
	}

	// Example injection logic for protected static $_instance;
	if ( preg_match( '/protected\s+static\s+\$_instance;/', $stubBContent )
	     && ! preg_match( '/protected\s+static\s+\$_instance;/', $generatedBody )
	) {
		$injection .= "    protected static \$_instance;\n\n";
	}

	// Example injection logic for specific private methods
	$privateMethods = [
		'init_hooks',
		'define_tables',
		'is_request',
		'load_webhooks',
	];
	foreach ( $privateMethods as $pm ) {
		if ( preg_match( '/function\s+' . $pm . '\s*\(/', $stubBContent )
		     && ! preg_match( '/function\s+' . $pm . '\s*\(/', $generatedBody )
		) {
			$methodRegex = '/(\/\*\*[\s\S]*?\*\/)?\s+private\s+function\s+' . $pm . '\s*\([^)]*\)\s*\{[\s\S]*?\}/';
			if ( preg_match( $methodRegex, $stubBContent, $m ) ) {
				$injection .= "\n    " . trim( $m[0] ) . "\n";
			}
		}
	}

	if ( ! $injection ) {
		return $generatedBody;
	}

	$pos = strpos( $generatedBody, "\n{\n" );
	if ( $pos === false ) {
		return $generatedBody . "\n" . $injection;
	}

	return substr( $generatedBody, 0, $pos + 3 ) . $injection . substr( $generatedBody, $pos + 3 );
}

/**
 * Logging for performance data.
 */
function logBenchmark( string $functionName, float $startTime, float $endTime, array $context = [] ): void {
	static $fh = null;
	if ( ! $fh ) {
		$logPath = __DIR__ . '/stub-benchmark.log';
		$fh      = fopen( $logPath, 'ab' );
	}
	$duration = round( $endTime - $startTime, 4 );
	if ( $duration < 1 ) {
		return; // skip
	}
	$time    = date( 'Y-m-d H:i:s' );
	$details = json_encode( $context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
	fwrite( $fh, "[{$time}] {$functionName} took {$duration}s, context={$details}\n" );
	fflush( $fh );
}

/**
 * Reflection => build class stub.
 */
function generateClassStub( ReflectionClass $class, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buf .= "namespace {$namespace};\n\n";
	}

	$doc = $class->getDocComment();
	if ( $doc ) {
		$buf .= $doc . "\n";
	}

	$attrs = $class->getAttributes();
	foreach ( $attrs as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	$decl = getClassDeclaration( $class );
	$buf  .= $decl;

	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		// extends
		try {
			$parent = $class->getParentClassName();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$parent = null;
		}
		if ( $parent !== null ) {
			$buf .= ' extends \\' . ltrim( $parent, '\\' );
		}

		// implements
		try {
			$interfaces = $class->getInterfaceClassNames();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$interfaces = [];
		}
		if ( ! empty( $interfaces ) ) {
			$impls = array_map( fn( string $i ) => '\\' . ltrim( $i, '\\' ), $interfaces );
			$buf   .= ' implements ' . implode( ', ', $impls );
		}
	}

	$buf .= "\n{\n";

	if ( $class->isEnum() && $class instanceof ReflectionEnum ) {
		$cases = $class->getCases();
		foreach ( $cases as $case ) {
			try {
				$value = $case->getValue();
				if ( $value !== null ) {
					$buf .= "    case {$case->getName()} = " . convertVarExportToWpStyle( $value ) . ";\n\n";
				} else {
					$buf .= "    case {$case->getName()};\n\n";
				}
			} catch ( Throwable $ex ) {
				handleBetterReflectionException( $ex, $missingReferences );
			}
		}
	}

	$constants = $class->getImmediateConstants();
	foreach ( $constants as $constName => $reflConst ) {
		try {
			$val = convertVarExportToWpStyle( $reflConst->getValue() );
			$buf .= "    const {$constName} = {$val};\n\n";
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	}

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
 * Reflection => build function stub.
 */
function generateFunctionStub( ReflectionFunction $fn, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$ns = $fn->getNamespaceName();
	if ( $ns ) {
		$buf .= "namespace {$ns};\n\n";
	}

	$doc = $fn->getDocComment();
	if ( $doc ) {
		$buf .= $doc . "\n";
	}

	$attrs = $fn->getAttributes();
	foreach ( $attrs as $attr ) {
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
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$ret = null;
	}
	if ( $ret ) {
		$buf .= ': ' . (string) $ret;
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'functionName' => $fn->getName(),
	] );

	return $buf;
}

/**
 * Reflection => build constant stub (class constants => const, global => define).
 */
function generateConstantStub( ReflectionConstant $constant, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$ns = $constant->getNamespaceName();
	if ( $ns ) {
		$buf .= "namespace {$ns};\n\n";
	}

	try {
		$declaringClass = $constant->getDeclaringClass();
	} catch ( Throwable ) {
		$declaringClass = null;
	}

	if ( $declaringClass ) {
		// Class constant
		try {
			$val = convertVarExportToWpStyle( $constant->getValue() );
			$buf .= "const {$constant->getName()} = {$val};\n\n";
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	} else {
		// Global constant => define
		$name = $constant->getName();
		try {
			$value = $constant->getValue();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$value = null;
		}

		try {
			$mapped = mapValueForDefine( $value, $name );
			$buf    .= "\\define('{$name}', {$mapped});\n\n";
		} catch ( \UnexpectedValueException $ex ) {
			$buf .= "// Skipped constant '{$name}' of invalid type.\n\n";
		}
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'constantName' => $constant->getName(),
	] );

	return $buf;
}

/**
 * Figure out whether we have class, interface, trait, or enum, etc.
 */
function getClassDeclaration( ReflectionClass $class ): string {
	$__start = microtime( true );
	if ( $class->isInterface() ) {
		$result = 'interface ' . $class->getShortName();
	} elseif ( $class->isTrait() ) {
		$result = 'trait ' . $class->getShortName();
	} elseif ( $class->isEnum() ) {
		$result = 'enum ' . $class->getShortName();
	} elseif ( $class->isAbstract() ) {
		$result = 'abstract class ' . $class->getShortName();
	} elseif ( $class->isFinal() ) {
		$result = 'final class ' . $class->getShortName();
	} else {
		$result = 'class ' . $class->getShortName();
	}
	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className' => $class->getName(),
	] );

	return $result;
}

/**
 * Reflection => build property stub.
 */
function generatePropertyStub( ReflectionProperty $prop, array &$missingReferences ): string {
	$__start = microtime( true );
	$out     = '';

	$doc = $prop->getDocComment();
	if ( $doc ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$out .= "    {$line}\n";
		}
	}

	$attrs = $prop->getAttributes();
	foreach ( $attrs as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	if ( $prop->isPrivate() ) {
		$vis = 'private';
	} elseif ( $prop->isProtected() ) {
		$vis = 'protected';
	} else {
		$vis = 'public';
	}

	$static   = $prop->isStatic() ? ' static' : '';
	$readonly = $prop->isReadOnly() ? 'readonly ' : '';

	try {
		$type = $prop->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$type = null;
	}
	$typeStr = $type ? ( (string) $type . ' ' ) : '';

	$out .= "    {$vis}{$static} {$readonly}{$typeStr}\${$prop->getName()}";

	try {
		if ( $prop->hasDefaultValue() ) {
			$defaultValue = $prop->getDefaultValue();
			$out          .= ' = ' . convertVarExportToWpStyle( $defaultValue );
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
 * Reflection => build method stub.
 */
function generateMethodStub( ReflectionMethod $method, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$doc = $method->getDocComment();
	if ( $doc ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}

	$attrs = $method->getAttributes();
	foreach ( $attrs as $attr ) {
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

	$buf       .= 'function ' . $method->getName() . '(';
	$paramBits = [];
	foreach ( $method->getParameters() as $param ) {
		$paramBits[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $paramBits ) . ')';

	try {
		$retType = $method->getReturnType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$retType = null;
	}
	if ( $retType ) {
		$buf .= ': ' . (string) $retType;
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
 * Reflection => build attribute line.
 */
function generateAttributeLine( ReflectionAttribute $attr ): string {
	$__start = microtime( true );
	$args    = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsStr = $args ? '(' . implode( ', ', $args ) . ')' : '';
	$line    = "#[{$attr->getName()}{$argsStr}]";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'attributeName' => $attr->getName(),
	] );

	return $line;
}

/**
 * Reflection => build parameter stub.
 */
function generateParameterStub( ReflectionParameter $param, array &$missingReferences ): string {
	$__start = microtime( true );
	try {
		$type = $param->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$type = null;
	}

	$out = $type ? ( (string) $type . ' ' ) : '';
	if ( $param->isPassedByReference() ) {
		$out .= '&';
	}
	if ( $param->isVariadic() ) {
		$out .= '...';
	}
	$out .= '$' . $param->getName();

	if ( $param->isDefaultValueAvailable() ) {
		try {
			$defaultVal = $param->getDefaultValue();
			$out        .= ' = ' . convertVarExportToWpStyle( $defaultVal );
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
 * Convert var_export() output to typical WP style: "NULL" => "null", "array(...)" => "array()"
 */
function convertVarExportToWpStyle( mixed $value ): string {
	$export = var_export( $value, true );
	$export = str_ireplace( 'NULL', 'null', $export );
	$export = preg_replace( '/array\s*\(/', 'array(', $export );
	$export = preg_replace( '/\)(\s*)$/', ')', $export );

	return $export;
}

/**
 * Record missing references from reflection exceptions.
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
		$symbol                       = method_exists( $ex, 'constantName' ) && $ex->constantName()
			? $ex->constantName()
			: 'UnknownConstant';
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		logBenchmark( __FUNCTION__, $__start, microtime( true ), [
			'exceptionType' => get_class( $ex ),
			'symbol'        => $symbol,
		] );

		return;
	}
	$missingReferences[ $ex::class ] = ( $missingReferences[ $ex::class ] ?? 0 ) + 1;
	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'exceptionType' => get_class( $ex ),
	] );
}

/**
 * For a global constant, we define('FOO', ...), but only with valid scalar/array.
 * If it's an object or resource, throw.
 */
function mapValueForDefine( mixed $value, string $constantName ): string {
	$type = gettype( $value );

	switch ( $type ) {
		case 'boolean':
			return $value ? 'true' : 'false';
		case 'integer':
			return (string) $value;
		case 'double':
			return (string) $value;
		case 'string':
			// Keep empty or real string:
			// return var_export($value, true);
			return "''";
		case 'NULL':
			return 'null';
		case 'array':
			return 'array()';
		case 'object':
		case 'resource':
		default:
			throw new \UnexpectedValueException(
				"Cannot define constant '{$constantName}' with value of type {$type}."
			);
	}
}

/**
 * Actually run main() if invoked via CLI.
 */
if ( PHP_SAPI === 'cli' && isset( $argv[0] ) && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}