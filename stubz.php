#!/usr/bin/env php
<?php

/**
 * This script examines a specified directory (or a custom Finder) to create PHP stub files
 * for classes, interfaces, traits, enums, functions, and constants. It uses BetterReflection
 * while ignoring certain external dependencies if they fall outside the targeted folders.
 *
 * It also manages stubs for functions and global constants, while utilizing a basic caching
 * system keyed by a "slug" to track multiple sets of generated stubs. The code includes a
 * version constant (STUBZ_CACHEBURST) to invalidate any stale cached data, and a cleanup step
 * to remove leftover .stubcache files.
 *
 * Progress information is displayed in color, including file parsing stats, the time needed
 * for scanning, and whether caching was used. Reflection calls happen in a deliberate order,
 * and we flush most output after the results are gathered.
 *
 * Additional environment variables:
 * - STUB_CACHE_DIR: overrides the default .reflection-cache folder for storing cache files.
 * - NO_STUB_CACHE=1: turns off both reading and writing the stub cache.
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

define( 'STUBZ_CACHEBURST', 1 );

/**
 * Entry point: processes the command-line arguments and decides whether to use a Finder file
 * or a direct path, including optional excludes. Then calls generateStubs.
 */
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

	// Process flags from the arguments (e.g., --exclude or --finder).
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

	// Choose the operating mode: a direct directory or a Finder-based approach.
	if ( $finderFile ) {
		// If using a Finder, no excludes are allowed simultaneously.
		if ( count( $excludes ) > 0 ) {
			echo color( "Error: You cannot use --exclude with --finder. Please remove --exclude.\n", 'light_red' );
			exit( 1 );
		}
		if ( count( $argv ) !== 1 ) {
			echo color( "Error: When using --finder, the only additional argument is <output-dir>.\n", 'light_red' );
			exit( 1 );
		}
		$outputDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );

		// Load the Finder instance from the specified file.
		$finder = include $finderFile;
		if ( ! $finder instanceof Finder ) {
			echo color( "Error: The file '{$finderFile}' did not return a Symfony\\Component\\Finder\\Finder instance.\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = null;
		$slug      = basename( $finderFile, '.php' );
	} else {
		// Normal approach: must have source and output directories, with possible excludes.
		if ( count( $argv ) < 2 ) {
			echo color( "Usage: php generate-stubs.php [--exclude <dir>]... <source-dir> <output-dir>\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );
		$outputDir = rtrim( $argv[1], DIRECTORY_SEPARATOR );

		// Create a Finder for .php files, skipping directories named in excludes.
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
 * Examines the given finder or directory (plus optional caching) to produce stub files. If no
 * sourceDir is provided, an AggregateSourceLocator is built from single-file locators. When
 * sourceDir is present, a DirectoriesSourceLocator is used instead. Results can be cached to
 * speed subsequent runs.
 *
 * Caching is optional. If NO_STUB_CACHE=1 is set, nothing is read or written to disk. If a
 * STUB_CACHE_DIR is set, that folder is used for storing .stubcache files.
 */
function generateStubs( Finder $finder, ?string $sourceDir, string $outputDir, string $slug ): void {
	$fileCount = $finder->count();
	echo color( "Parsing {$fileCount} PHP files...", 'light_cyan' );
	$finderStart = microtime( true );

	$disableCache = ( getenv( 'NO_STUB_CACHE' ) === '1' );
	$cacheRoot    = getenv( 'STUB_CACHE_DIR' ) ?: ( __DIR__ . '/.reflection-cache' );
	$cacheDir     = rtrim( $cacheRoot, DIRECTORY_SEPARATOR ) . '/' . $slug;

	if ( ! $disableCache && ! is_dir( $cacheDir ) ) {
		mkdir( $cacheDir, 0777, true );
	}

	$betterReflection = new BetterReflection();
	$astLocator       = $betterReflection->astLocator();
	$sourceStubber    = $betterReflection->sourceStubber();

	// A locator that knows about internal classes like Attribute or Iterator.
	$internalLocator = new PhpInternalSourceLocator( $astLocator, $sourceStubber );

	if ( $sourceDir !== null ) {
		$directoriesLocator = new DirectoriesSourceLocator( [ $sourceDir ], $astLocator );

		// Combine internal stubs with local directories in an aggregate source.
		$aggregateLocator = new AggregateSourceLocator( [
			$internalLocator,
			$directoriesLocator,
		] );

		$reflector = new DefaultReflector( $aggregateLocator );
	} else {
		// For custom Finder-based runs, gather single-file locators plus the internal stubs.
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

		// Check if the file has relevant classes, functions, or constants.
		$hasSymbols = (
			isset( $fileToClassesMap[ $realpath ] ) ||
			isset( $fileToFunctionsMap[ $realpath ] ) ||
			isset( $fileToConstantsMap[ $realpath ] )
		);
		if ( ! $hasSymbols ) {
			continue;
		}
		$stats['filesWithSyms'] ++;

		// Use cached stubs if available (and caching is enabled).
		$fileHash  = md5( STUBZ_CACHEBURST . '_' . md5_file( $realpath ) );
		$cacheFile = $cacheDir . '/' . $fileHash . '.stubcache';

		if ( ! $disableCache && file_exists( $cacheFile ) ) {
			$stats['cacheHits'] ++;
			$stubContent = file_get_contents( $cacheFile );
		} else {
			$stats['cacheMisses'] ++;
			$stubContent = "<?php\n\n";

			// Construct stubs for each class, function, and constant in the file.
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

			// Write the generated stub to cache if caching is active.
			if ( ! $disableCache ) {
				file_put_contents( $cacheFile, $stubContent );
			}
		}

		if ( ! $disableCache ) {
			$usedHashes[] = $fileHash;
		}

		// Decide where to place the generated stub file based on the mode.
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

	// If caching is used, remove any .stubcache files that aren't referenced this run.
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
 * Categorizes classes, functions, and constants by the file they originate from, so we can
 * group symbols according to file paths and build stubs for each file accordingly.
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
 * Shows a simple textual summary of how many files were processed, how many used cached data,
 * and how many stale cache files got removed, using colored output.
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
 * Applies ANSI escape codes to render text in color, if the terminal supports it. Defaults to
 * no color if an invalid color is passed.
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
		return $text;
	}

	return "\033[{$code}m{$text}\033[0m";
}

/**
 * Builds stub text for a reflected class, interface, trait, or enum. It includes doc comments,
 * attributes, possible inheritance details, constants, properties, and methods. Enum cases are
 * also handled if relevant.
 */
function generateClassStub( ReflectionClass $class ): string {
	$buffer = '';

	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buffer .= "namespace {$namespace};\n\n";
	}

	if ( $docComment = $class->getDocComment() ) {
		$buffer .= $docComment . "\n";
	}

	foreach ( $class->getAttributes() as $attr ) {
		$buffer .= generateAttributeLine( $attr ) . "\n";
	}

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

	if ( $class->isEnum() ) {
		$cases = [];
		try {
			if ( method_exists( $class, 'getCases' ) ) {
				$cases = $class->getCases();
			}
		} catch ( IdentifierNotFound $e ) {
			// do nothing
		}
		foreach ( $cases as $case ) {
			$caseName = $case->getName();
			try {
				$value = $case->getValue();
			} catch ( IdentifierNotFound $ignore ) {
				$value = null;
			}
			if ( $value !== null ) {
				$valueCode = var_export( $value, true );
				$buffer    .= "    case {$caseName} = {$valueCode};\n\n";
			} else {
				$buffer .= "    case {$caseName};\n\n";
			}
		}
	}

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
	}

	$properties = [];
	try {
		$properties = $class->getProperties();
	} catch ( IdentifierNotFound $e ) {
	}
	foreach ( $properties as $property ) {
		if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generatePropertyStub( $property );
	}

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

/**
 * Builds a function stub from reflection data, including docblocks and typed parameters.
 * Body is replaced with "// stub" to keep it minimal, but complete for analysis.
 */
function generateFunctionStub( ReflectionFunction $function ): string {
	$buf = '';
	if ( $docComment = $function->getDocComment() ) {
		$buf .= $docComment . "\n";
	}
	// Function-level attributes could be inserted similarly to class-level ones.

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
 * Creates a stub for a global or namespaced constant identified by reflection. Excludes any
 * that cannot be read properly.
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

/**
 * Attempts to retrieve a class's parent via reflection. If reflection data isn't available,
 * returns null instead of throwing.
 */
function safeGetParentClass( ReflectionClass $class ): ?ReflectionClass {
	try {
		return $class->getParentClass();
	} catch ( IdentifierNotFound $e ) {
		return null;
	}
}

/**
 * Safely retrieves all interface names a class implements, or returns an empty array if they
 * can't be resolved.
 */
function safeGetInterfaceNames( ReflectionClass $class ): array {
	try {
		return $class->getInterfaceNames();
	} catch ( IdentifierNotFound $e ) {
		return [];
	}
}

/**
 * Decides how to declare a class, interface, trait, or enum, including whether it should be
 * labeled abstract or final.
 */
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
	if ( $class->isAbstract() ) {
		return 'abstract class ' . $class->getShortName();
	}
	if ( $class->isFinal() ) {
		return 'final class ' . $class->getShortName();
	}

	return 'class ' . $class->getShortName();
}

/**
 * Returns a stub for a reflected property, including docblocks, attributes, visibility,
 * static, readonly, and type information. Method checks if reflection knows about readonly.
 */
function generatePropertyStub( \Roave\BetterReflection\Reflection\ReflectionProperty $property ): string {
	$out = '';

	if ( $docComment = $property->getDocComment() ) {
		$lines = explode( "\n", $docComment );
		foreach ( $lines as $line ) {
			$out .= "    {$line}\n";
		}
	}

	foreach ( $property->getAttributes() as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );
	$static     = $property->isStatic() ? ' static' : '';

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
 * Creates a stub for a method, reflecting doc comments, attributes, final/abstract flags,
 * visibility, parameters, and return types. The body is replaced with "// stub".
 */
function generateMethodStub( \Roave\BetterReflection\Reflection\ReflectionMethod $method ): string {
	$buf = '';

	if ( $docComment = $method->getDocComment() ) {
		foreach ( explode( "\n", $docComment ) as $line ) {
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

	$buf .= 'function ' . $method->getName() . '(';

	$params = [];
	foreach ( $method->getParameters() as $param ) {
		$params[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $params ) . ')';

	if ( $returnType = $method->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}

	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	return $buf;
}

/**
 * Renders an attribute line like #[SomeAttr(...)] using var_export() for attribute arguments.
 */
function generateAttributeLine( \Roave\BetterReflection\Reflection\ReflectionAttribute $attr ): string {
	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = $args ? '(' . implode( ', ', $args ) . ')' : '';

	return "#[{$attr->getName()}{$argsString}]";
}

/**
 * Builds a parameter stub with type, reference, variadic, and default value if available,
 * e.g. "int $id = 123". Also used by function stubs and method stubs.
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

// Execute main() if this file is invoked directly via CLI.
if ( PHP_SAPI === 'cli' && realpath( $_SERVER['argv'][0] ) === __FILE__ ) {
	main( $_SERVER['argv'] );
}