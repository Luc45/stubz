#!/usr/bin/env php
<?php

/**
 * Stub generator for a directory using BetterReflection, skipping external parents/interfaces
 * if they are not found within the scanned directory.
 * Also generates function & global constant stubs.
 *
 * Added minimal file-based caching with a top-level "slug" for multiple caches,
 * plus a PARSER_VERSION to invalidate older caches and a cleanup step
 * to remove stale .stubcache files.
 *
 * Now includes colored console output with stats on cache hits/misses/deleted items, etc.
 * And a "Discovering files..." message at the start, with the count and elapsed time.
 *
 * IMPORTANT: We have NOT reordered reflection calls. We only flush output after printing.
 *
 * EXTRA:
 * - STUB_CACHE_DIR env var to override the default ./reflection-cache path.
 * - NO_STUB_CACHE=1 to disable reading/writing the cache entirely.
 */

require_once __DIR__ . '/vendor/autoload.php';

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\DirectoriesSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

define( 'PARSER_VERSION', 1 );

function main( array $argv ): void {
	array_shift( $argv );

	if ( count( $argv ) === 0 ) {
		echo color( "Usage:\n", 'light_red' );
		echo color( "  1) php generate-stubs.php [--exclude <dir>]... <source-dir> <output-dir>\n", 'light_red' );
		echo color( "  2) php generate-stubs.php --finder <finder-file.php> <output-dir>\n\n", 'light_red' );
		exit( 1 );
	}

	$excludes   = [];
	$finderFile = null;

	// Parse optional flags.
	$parsedFlags = true;
	while ( $parsedFlags && count( $argv ) > 0 ) {
		$peek = $argv[0];
		switch ( $peek ) {
			case '--exclude':
				array_shift( $argv );
				if ( ! isset( $argv[0] ) ) {
					echo color( "Error: Missing <dir> after --exclude\n", 'light_red' );
					exit( 1 );
				}
				$excludes[] = array_shift( $argv );
				break;
			case '--finder':
				array_shift( $argv );
				if ( ! isset( $argv[0] ) ) {
					echo color( "Error: Missing <finder-file.php> after --finder\n", 'light_red' );
					exit( 1 );
				}
				$finderFile = array_shift( $argv );
				break;
			default:
				$parsedFlags = false;
		}
	}

	// Decide which mode we're in.
	if ( $finderFile ) {
		// --finder mode
		if ( count( $excludes ) > 0 ) {
			echo color( "Error: You cannot use --exclude with --finder. Please remove --exclude.\n", 'light_red' );
			exit( 1 );
		}
		if ( count( $argv ) !== 1 ) {
			echo color( "Error: When using --finder, the only additional argument is <output-dir>.\n", 'light_red' );
			exit( 1 );
		}
		$outputDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );

		// Load the custom Finder from file.
		$finder = include $finderFile;
		if ( ! $finder instanceof Finder ) {
			echo color( "Error: The file '{$finderFile}' did not return a Symfony\\Component\\Finder\\Finder instance.\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = null;
		$slug      = basename( $finderFile, '.php' );
	} else {
		// Normal mode, must have <source-dir> and <output-dir>
		if ( count( $argv ) < 2 ) {
			echo color( "Usage: php generate-stubs.php [--exclude <dir>]... <source-dir> <output-dir>\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );
		$outputDir = rtrim( $argv[1], DIRECTORY_SEPARATOR );

		// Build a default Finder, applying excludes.
		$finder = new Finder();
		$finder->files()->in( $sourceDir )->name( '*.php' );
		foreach ( $excludes as $exDir ) {
			$finder->exclude( $exDir );
		}
		$slug = basename( $sourceDir );
	}

	generateStubs( $finder, $sourceDir, $outputDir, $slug );
}

/**
 * Generate stubs using a single logic, with optional caching.
 *
 * - If $sourceDir is null, we use an AggregateSourceLocator with the provided Finder files.
 * - If $sourceDir is non-null, we use a DirectoriesSourceLocator for reflection.
 * - If NO_STUB_CACHE=1 is set, we skip reading/writing the cache entirely.
 * - If STUB_CACHE_DIR is set, we store in that directory instead of the default.
 */
function generateStubs( Finder $finder, ?string $sourceDir, string $outputDir, string $slug ): void {
	$fileCount = $finder->count();
	echo color( "Parsing {$fileCount} PHP files...", 'light_cyan' );
	$finderStart = microtime( true );

	// ENV variables for controlling cache.
	$disableCache = ( getenv( 'NO_STUB_CACHE' ) === '1' );
	$cacheRoot    = getenv( 'STUB_CACHE_DIR' ) ?: ( __DIR__ . '/.reflection-cache' );
	$cacheDir     = rtrim( $cacheRoot, DIRECTORY_SEPARATOR ) . '/' . $slug;

	if ( ! $disableCache && ! is_dir( $cacheDir ) ) {
		mkdir( $cacheDir, 0777, true );
	}

	$betterReflection = new BetterReflection();
	$astLocator       = $betterReflection->astLocator();
	$sourceStubber    = $betterReflection->sourceStubber();

	$internalLocator = new PhpInternalSourceLocator( $astLocator, $sourceStubber );

	if ( $sourceDir !== null ) {
		$directoriesLocator = new DirectoriesSourceLocator( [ $sourceDir ], $astLocator );

		$aggregateLocator = new AggregateSourceLocator( [
			$internalLocator,
			$directoriesLocator,
		] );

		$reflector = new DefaultReflector( $aggregateLocator );
	} else {
		$singleLocators   = [];
		$singleLocators[] = $internalLocator;

		/** @var \SplFileInfo $file */
		foreach ( $finder as $file ) {
			if ( ! $file->isFile() || $file->getExtension() !== 'php' ) {
				continue;
			}

			if ( $realPath = $file->getRealPath() ) {
				$singleLocators[] = new SingleFileSourceLocator( $realPath, $astLocator );
			}
		}

		$aggregateLocator = new AggregateSourceLocator( $singleLocators );
		$reflector        = new DefaultReflector( $aggregateLocator );
	}
    
	$allClasses   = $reflector->reflectAllClasses();
	$allFunctions = $reflector->reflectAllFunctions();
	$allConstants = $reflector->reflectAllConstants();

	[ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ] =
		buildSymbolMaps( $allClasses, $allFunctions, $allConstants );

	$timeAfterBuiltASTTree = microtime( true );
	echo color( " Done in " . round( $timeAfterBuiltASTTree - $finderStart, 2 ) . "s.\n", 'light_cyan' );
	echo color( "Generating stubs...", 'light_cyan' );

	$stats      = [
		'filesTotal'    => 0,
		'filesWithSyms' => 0,
		'cacheHits'     => 0,
		'cacheMisses'   => 0,
		'deleted'       => 0,
	];
	$usedHashes = [];

	/** @var \SplFileInfo $file */
	foreach ( $finder as $file ) {
		if ( ! $file->isFile() || $file->getExtension() !== 'php' ) {
			continue;
		}

		$stats['filesTotal'] ++;
		$realpath = $file->getRealPath();
		if ( ! $realpath ) {
			continue;
		}

		$hasSymbols = (
			isset( $fileToClassesMap[ $realpath ] ) ||
			isset( $fileToFunctionsMap[ $realpath ] ) ||
			isset( $fileToConstantsMap[ $realpath ] )
		);
		if ( ! $hasSymbols ) {
			continue;
		}
		$stats['filesWithSyms'] ++;

		// Use caching
		$fileHash  = md5( PARSER_VERSION . '_' . md5_file( $realpath ) );
		$cacheFile = $cacheDir . '/' . $fileHash . '.stubcache';

		if ( ! $disableCache && file_exists( $cacheFile ) ) {
			// Cache hit
			$stats['cacheHits'] ++;
			$stubContent = file_get_contents( $cacheFile );
		} else {
			// Either caching is disabled, or the cache file doesn't exist => build fresh
			$stats['cacheMisses'] ++;
			$stubContent = "<?php\n\n";

			// Build stubs for classes, functions, constants
			if ( isset( $fileToClassesMap[ $realpath ] ) ) {
				foreach ( $fileToClassesMap[ $realpath ] as $reflectionClass ) {
					$stubContent .= generateClassStub( $reflectionClass );
				}
			}
			if ( isset( $fileToFunctionsMap[ $realpath ] ) ) {
				foreach ( $fileToFunctionsMap[ $realpath ] as $reflectionFunction ) {
					$stubContent .= generateFunctionStub( $reflectionFunction );
				}
			}
			if ( isset( $fileToConstantsMap[ $realpath ] ) ) {
				foreach ( $fileToConstantsMap[ $realpath ] as $reflectionConstant ) {
					$stubContent .= generateConstantStub( $reflectionConstant );
				}
			}

			// If caching is enabled, write the new cache file
			if ( ! $disableCache ) {
				file_put_contents( $cacheFile, $stubContent );
			}
		}

        // If caching is enabled, mark this file's cache hash as "used"
		if ( ! $disableCache ) {
			$usedHashes[] = $fileHash;
		}

		// Write stub file
		if ( $sourceDir !== null ) {
			$relativePath = str_replace( $sourceDir, '', $realpath );
			$targetPath   = $outputDir . $relativePath;
		} else {
			$relativePath = ltrim( str_replace( dirname( __FILE__ ), '', $realpath ), DIRECTORY_SEPARATOR );
			$targetPath   = rtrim( $outputDir, DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR . $relativePath;
		}

		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );
	}

	echo color( " Done in " . round( microtime( true ) - $timeAfterBuiltASTTree, 2 ) . "s.\n", 'light_cyan' );

	// Clean up old caches only if caching is enabled
	if ( ! $disableCache ) {
		$allCacheFiles = glob( $cacheDir . '/*.stubcache' );
		if ( is_array( $allCacheFiles ) ) {
			foreach ( $allCacheFiles as $cacheFilePath ) {
				$filename = basename( $cacheFilePath, '.stubcache' );
				if ( ! in_array( $filename, $usedHashes, true ) ) {
					unlink( $cacheFilePath );
					$stats['deleted'] ++;
				}
			}
		}
	}

	printStats( $stats );
}

/**
 * Helper to group classes/functions/constants by file path.
 */
function buildSymbolMaps( array $allClasses, array $allFunctions, array $allConstants ): array {
	$fileToClassesMap   = [];
	$fileToFunctionsMap = [];
	$fileToConstantsMap = [];

	foreach ( $allClasses as $classReflection ) {
		$fileName = $classReflection->getFileName();
		if ( $fileName ) {
			$fileToClassesMap[ $fileName ][] = $classReflection;
		}
	}
	foreach ( $allFunctions as $functionReflection ) {
		$fileName = $functionReflection->getFileName();
		if ( $fileName ) {
			$fileToFunctionsMap[ $fileName ][] = $functionReflection;
		}
	}
	foreach ( $allConstants as $constantReflection ) {
		$fileName = $constantReflection->getFileName();
		if ( $fileName ) {
			$fileToConstantsMap[ $fileName ][] = $constantReflection;
		}
	}

	return [ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ];
}

/**
 * Print a summary of the results, with ANSI colors for style.
 */
function printStats( array $stats ): void {
	echo "\n" . color( "=== Stub Generation Summary ===\n", 'light_cyan' );

	echo color( "    PHP files found: ", 'cyan' ) . $stats['filesTotal'] . "\n";
	echo color( "    With symbols:    ", 'cyan' ) . $stats['filesWithSyms'] . "\n";

	$totalParsed = $stats['cacheHits'] + $stats['cacheMisses'];
	if ( $totalParsed === 0 ) {
		echo color( "    No files had to be parsed.\n", 'yellow' );
	} else {
		$hitPercent = ( $stats['cacheHits'] / $totalParsed ) * 100;
		echo color( "    Cache hits:      ", 'green' )
		     . $stats['cacheHits'] . " / {$totalParsed} ("
		     . number_format( $hitPercent, 2 ) . "%)\n";
		echo color( "    Cache misses:    ", 'red' ) . $stats['cacheMisses'] . "\n";
	}

	echo color( "    Old cache deleted: ", 'cyan' ) . $stats['deleted'] . "\n";
	echo color( "===============================\n\n", 'light_cyan' );
}

/**
 * Simple color helper using ANSI escape codes.
 */
function color( string $text, string $color = 'none' ): string {
	static $colors = [
		'none'          => '0',
		'black'         => '0;30',
		'red'           => '0;31',
		'green'         => '0;32',
		'yellow'        => '0;33',
		'blue'          => '0;34',
		'magenta'       => '0;35',
		'cyan'          => '0;36',
		'white'         => '0;37',
		'light_gray'    => '0;37',
		'light_red'     => '1;31',
		'light_green'   => '1;32',
		'light_yellow'  => '1;33',
		'light_blue'    => '1;34',
		'light_magenta' => '1;35',
		'light_cyan'    => '1;36',
		'light_white'   => '1;37',
	];

	$code = $colors[ $color ] ?? $colors['none'];
	if ( $code === '0' ) {
		return $text; // no color
	}

	return "\033[{$code}m{$text}\033[0m";
}

/**
 * Generate class stub code (namespace, docblock, signature, properties, methods, enum cases, etc.).
 */
function generateClassStub( ReflectionClass $class ): string {
	$buffer = '';

	// Namespace
	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buffer .= "namespace {$namespace};\n\n";
	}

	// DocBlock
	if ( $docComment = $class->getDocComment() ) {
		$buffer .= $docComment . "\n";
	}

	// **Add class-level attributes** before the class definition:
	foreach ( $class->getAttributes() as $attr ) {
		$buffer .= generateAttributeLine( $attr ) . "\n";
	}

	// Class definition line
	$buffer .= getClassDeclaration( $class );

	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		if ( $parent = safeGetParentClass( $class ) ) {
			$buffer .= ' extends \\' . $parent->getName();
		}
		$interfaces = safeGetInterfaceNames( $class );
		if ( $interfaces ) {
			$buffer .= ' implements ' . implode( ', ', array_map( fn( $i ) => '\\' . $i, $interfaces ) );
		}
	}
	$buffer .= "\n{\n";

	// **Enum Cases** (if it's an enum)
	if ( $class->isEnum() ) {
		// getCases() is available in Better Reflection 5+
		$cases = [];
		try {
			if ( method_exists( $class, 'getCases' ) ) {
				$cases = $class->getCases();
			}
		} catch ( IdentifierNotFound $e ) {
			// skip
		}
		foreach ( $cases as $case ) {
			$caseName = $case->getName();
			// getValue() might be null for pure enums
			try {
				$value = $case->getValue();
			} catch ( IdentifierNotFound $ignore ) {
				$value = null;
			}
			if ( $value !== null ) {
				$valueCode = var_export( $value, true );
				$buffer    .= "    case {$caseName} = {$valueCode};\n\n";
			} else {
				// pure enum (no scalar value)
				$buffer .= "    case {$caseName};\n\n";
			}
		}
	}

	// Constants
	try {
		foreach ( $class->getImmediateConstants() as $constName => $reflectionConstant ) {
			try {
				$value = var_export( $reflectionConstant->getValue(), true );
			} catch ( IdentifierNotFound $e ) {
				continue;
			}
			$buffer .= "    const {$constName} = {$value};\n\n";
		}
	} catch ( IdentifierNotFound $e ) {
		// skip
	}

	// Properties
	$properties = [];
	try {
		$properties = $class->getProperties();
	} catch ( IdentifierNotFound $e ) {
	}
	foreach ( $properties as $property ) {
		// Skip inherited
		if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generatePropertyStub( $property );
	}

	// Methods
	$methods = [];
	try {
		$methods = $class->getMethods();
	} catch ( IdentifierNotFound $e ) {
	}
	foreach ( $methods as $method ) {
		if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generateMethodStub( $method );
	}

	$buffer .= "}\n\n";

	return $buffer;
}

function generateFunctionStub( ReflectionFunction $function ): string {
	$buf = '';
	if ( $docComment = $function->getDocComment() ) {
		$buf .= $docComment . "\n";
	}
	// Add function-level attributes if you wish. For instance:
	// foreach ($function->getAttributes() as $attr) {
	//     $buf .= generateAttributeLine($attr) . "\n";
	// }

	$buf    .= 'function ' . $function->getName() . '(';
	$params = [];
	foreach ( $function->getParameters() as $param ) {
		$params[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $params ) . ')';
	if ( $returnType = $function->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}
	$buf .= "\n{\n    // stub\n}\n\n";

	return $buf;
}

/**
 * Generate constant stub code.
 */
function generateConstantStub( ReflectionConstant $constant ): string {
	$buf  = '';
	$name = $constant->getName();
	try {
		$value = var_export( $constant->getValue(), true );
	} catch ( IdentifierNotFound $e ) {
		return '';
	}
	$buf .= "const {$name} = {$value};\n\n";

	return $buf;
}

function safeGetParentClass( ReflectionClass $class ): ?ReflectionClass {
	try {
		return $class->getParentClass();
	} catch ( IdentifierNotFound $e ) {
		return null;
	}
}

function safeGetInterfaceNames( ReflectionClass $class ): array {
	try {
		return $class->getInterfaceNames();
	} catch ( IdentifierNotFound $e ) {
		return [];
	}
}

function getClassDeclaration( ReflectionClass $class ): string {
	if ( $class->isInterface() ) {
		return 'interface ' . $class->getShortName();
	}
	if ( $class->isTrait() ) {
		return 'trait ' . $class->getShortName();
	}
	if ( $class->isEnum() ) {
		return 'enum ' . $class->getShortName();
	}
	// We do keep final or abstract on classes
	if ( $class->isAbstract() ) {
		return 'abstract class ' . $class->getShortName();
	}
	if ( $class->isFinal() ) {
		return 'final class ' . $class->getShortName();
	}

	return 'class ' . $class->getShortName();
}

/**
 * Generate property stub code, preserving readonly and property-level attributes.
 */
function generatePropertyStub( \Roave\BetterReflection\Reflection\ReflectionProperty $property ): string {
	$out = '';

	// Property doc comment
	if ( $docComment = $property->getDocComment() ) {
		$lines = explode( "\n", $docComment );
		foreach ( $lines as $line ) {
			$out .= "    {$line}\n";
		}
	}

	// **Property-level attributes** (rare, but possible)
	foreach ( $property->getAttributes() as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	// Visibility
	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );
	$static     = $property->isStatic() ? ' static' : '';

	// **Preserve `readonly`** (PHP 8.1+). If older reflection, this might not exist.
	$readonly = '';
	if ( method_exists( $property, 'isReadOnly' ) && $property->isReadOnly() ) {
		$readonly = 'readonly ';
	}

	$type       = $property->getType();
	$typeString = $type ? (string) $type . ' ' : '';

	$out .= "    {$visibility}{$static} {$readonly}{$typeString}\${$property->getName()};\n\n";

	return $out;
}

/**
 * Generate method stub code, preserving final, attributes, etc.
 */
function generateMethodStub( \Roave\BetterReflection\Reflection\ReflectionMethod $method ): string {
	$buf = '';

	// Doc comment
	if ( $docComment = $method->getDocComment() ) {
		foreach ( explode( "\n", $docComment ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}

	// Method-level attributes
	foreach ( $method->getAttributes() as $attr ) {
		$buf .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	// Visibility
	if ( $method->isPrivate() ) {
		$buf .= '    private ';
	} elseif ( $method->isProtected() ) {
		$buf .= '    protected ';
	} else {
		$buf .= '    public ';
	}

	// Static
	if ( $method->isStatic() ) {
		$buf .= 'static ';
	}

	// **Preserve final** if not abstract / not interface
	if ( $method->isFinal() && ! $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'final ';
	}

	// If the method is abstract, but not in an interface, preserve it
	if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'abstract ';
	}

	$buf .= 'function ' . $method->getName() . '(';

	// Parameters
	$params = [];
	foreach ( $method->getParameters() as $param ) {
		$params[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $params ) . ')';

	// Return type
	if ( $returnType = $method->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}

	// If it's an abstract method or interface method => no body
	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	return $buf;
}

function generateAttributeLine( \Roave\BetterReflection\Reflection\ReflectionAttribute $attr ): string {
	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = $args ? '(' . implode( ', ', $args ) . ')' : '';

	return "#[{$attr->getName()}{$argsString}]";
}

/**
 * Generate parameter stub (type, reference, variadic, default).
 */
function generateParameterStub( \Roave\BetterReflection\Reflection\ReflectionParameter $param ): string {
	$out = '';
	if ( $type = $param->getType() ) {
		$out .= (string) $type . ' ';
	}
	if ( $param->isPassedByReference() ) {
		$out .= '&';
	}
	if ( $param->isVariadic() ) {
		$out .= '...';
	}
	$out .= '$' . $param->getName();
	if ( $param->isDefaultValueAvailable() ) {
		$defaultVal = var_export( $param->getDefaultValue(), true );
		$out        .= ' = ' . $defaultVal;
	}

	return $out;
}

// Only run main if called directly
if ( PHP_SAPI === 'cli' && realpath( $_SERVER['argv'][0] ) === __FILE__ ) {
	main( $_SERVER['argv'] );
}