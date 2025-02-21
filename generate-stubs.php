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
 */

require_once __DIR__ . '/vendor/autoload.php';

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

define( 'PARSER_VERSION', 1 );

function main( array $argv ): void {
	if ( count( $argv ) < 3 ) {
		echo color( "Usage: php generate-stubs.php <source-dir> <output-dir>\n", 'light_red' );
		exit( 1 );
	}

	$sourceDir = rtrim( $argv[1], DIRECTORY_SEPARATOR );
	$outputDir = rtrim( $argv[2], DIRECTORY_SEPARATOR );

	generateStubs( $sourceDir, $outputDir );
}

/**
 * Generate stubs from $sourceDir into $outputDir, using file-based caching.
 */
function generateStubs( string $sourceDir, string $outputDir ): void {
	$slug     = basename( $sourceDir );
	$cacheDir = __DIR__ . '/.reflection-cache/' . $slug;

	if ( ! is_dir( $cacheDir ) ) {
		mkdir( $cacheDir, 0777, true );
	}

	// Print "Discovering files..." then immediately flush
	echo color( "Discovering files...", 'light_cyan' );
	$finderStart = microtime( true );

	$astLocator         = ( new BetterReflection() )->astLocator();
	$directoriesLocator = new \Roave\BetterReflection\SourceLocator\Type\DirectoriesSourceLocator( [ $sourceDir ], $astLocator );
	$reflector          = new DefaultReflector( $directoriesLocator );

	// Reflect classes, functions, constants
	$allClasses   = $reflector->reflectAllClasses();
	$allFunctions = $reflector->reflectAllFunctions();
	$allConstants = $reflector->reflectAllConstants();

	// Group them by file
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

	$finder = new Finder();
	$finder->files()->in( $sourceDir )->name( '*.php' );

	$fileCount  = $finder->count(); // get total # of matched .php files
	$finderTime = microtime( true ) - $finderStart;

	echo color(
		" Found {$fileCount} files (" . round( $finderTime, 2 ) . "s)\n",
		'light_cyan'
	);

	// Track usage stats
	$stats      = [
		'filesTotal'    => 0,
		'filesWithSyms' => 0,
		'cacheHits'     => 0,
		'cacheMisses'   => 0,
		'deleted'       => 0,
	];
	$usedHashes = [];

	foreach ( $finder as $file ) {
		/** @var SplFileInfo $file */
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
			// No classes/functions/constants => skip
			continue;
		}
		$stats['filesWithSyms'] ++;

		// Build a cache file name
		$fileHash    = md5( PARSER_VERSION . '_' . md5_file( $realpath ) );
		$cacheFile   = $cacheDir . '/' . $fileHash . '.stubcache';
		$stubContent = '';

		if ( file_exists( $cacheFile ) ) {
			// Cache hit
			$stats['cacheHits'] ++;
			$stubContent = file_get_contents( $cacheFile );
		} else {
			// Cache miss => reflect & generate
			$stats['cacheMisses'] ++;
			$stubContent = "<?php\n\n";

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

			file_put_contents( $cacheFile, $stubContent );
		}

		$usedHashes[] = $fileHash;

		// Write stub file
		$relativePath = str_replace( $sourceDir, '', $realpath );
		$targetPath   = $outputDir . $relativePath;
		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );
	}

	// Clean up old caches
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

	// Print a summary
	printStats( $stats );
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
		echo color( "    Cache hits:      ", 'green' ) . $stats['cacheHits']
		     . " / {$totalParsed} ("
		     . number_format( $hitPercent, 2 )
		     . "%)\n";
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
 * The rest is unchanged below this point...
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

	$buffer .= getClassDeclaration( $class );

	if ( ! $class->isInterface() && ! $class->isTrait() ) {
		if ( $parent = safeGetParentClass( $class ) ) {
			$buffer .= ' extends \\' . $parent->getName();
		}
		$interfaces = safeGetInterfaceNames( $class );
		if ( $interfaces ) {
			$buffer .= ' implements ' . implode( ', ', array_map( fn( $i ) => '\\' . $i, $interfaces ) );
		}
	}
	$buffer .= "\n{\n";

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

function generateFunctionStub( ReflectionFunction $function ): string {
	$buf = '';
	if ( $docComment = $function->getDocComment() ) {
		$buf .= $docComment . "\n";
	}
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
	if ( $class->isAbstract() ) {
		return 'abstract class ' . $class->getShortName();
	}
	if ( $class->isFinal() ) {
		return 'final class ' . $class->getShortName();
	}

	return 'class ' . $class->getShortName();
}

function generatePropertyStub( \Roave\BetterReflection\Reflection\ReflectionProperty $property ): string {
	$out = '';
	if ( $docComment = $property->getDocComment() ) {
		$out .= "    {$docComment}\n";
	}
	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );
	$static     = $property->isStatic() ? ' static' : '';
	$type       = $property->getType();
	$typeString = $type ? (string) $type . ' ' : '';
	$out        .= "    {$visibility}{$static} {$typeString}\${$property->getName()};\n\n";

	return $out;
}

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
	if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'abstract ';
	}
	$buf    .= 'function ' . $method->getName() . '(';
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

function generateAttributeLine( \Roave\BetterReflection\Reflection\ReflectionAttribute $attr ): string {
	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = $args ? '(' . implode( ', ', $args ) . ')' : '';

	return "#[{$attr->getName()}{$argsString}]";
}

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
if ( PHP_SAPI === 'cli' && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}