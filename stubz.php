#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/terminal.php';
require_once __DIR__ . '/src/stub-generator.php';

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\DirectoriesSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\MemoizingSourceLocator;
use Symfony\Component\Finder\Finder;

define( 'STUBZ_CACHEBURST', 1 );

function main( array $argv ): void {
	array_shift( $argv );

	if ( count( $argv ) === 0 ) {
		echo color( "Usage:\n", 'light_red' );
		echo color( "  1) php stubz.php [--exclude <dir>]... <source-dir> <output-dir>\n", 'light_red' );
		echo color( "  2) php stubz.php --finder <finder-file.php> <output-dir>\n\n", 'light_red' );
		exit( 1 );
	}

	$excludes   = [];
	$finderFile = null;

	// Process CLI flags
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

	// Decide if we’re in direct-dir mode or finder-file mode
	if ( $finderFile ) {
		if ( count( $excludes ) > 0 ) {
			echo color( "Error: You cannot use --exclude with --finder.\n", 'light_red' );
			exit( 1 );
		}
		if ( count( $argv ) !== 1 ) {
			echo color( "Error: With --finder, the only extra arg is <output-dir>.\n", 'light_red' );
			exit( 1 );
		}
		$outputDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );
		$finder    = include $finderFile;
		if ( ! $finder instanceof Finder ) {
			echo color( "Error: Finder file did not return a Finder instance.\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = null;
		$slug      = basename( $finderFile, '.php' );
	} else {
		if ( count( $argv ) < 2 ) {
			echo color( "Usage: php stubz.php [--exclude <dir>]... <source-dir> <output-dir>\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );
		$outputDir = rtrim( $argv[1], DIRECTORY_SEPARATOR );

		$finder = new Finder();
		$finder->files()->in( $sourceDir )->name( '*.php' );
		foreach ( $excludes as $exDir ) {
			$finder->exclude( $exDir );
		}
		$slug = basename( $sourceDir );
	}

	$finder->sortByName();
	generateStubs( $finder, $sourceDir, $outputDir, $slug );
}

/**
 * Orchestrates reflection, caching, and writing stub files for each discovered symbol.
 */
function generateStubs( Finder $finder, ?string $sourceDir, string $outputDir, string $slug ): void {
	$fileCount = $finder->count();
	echo color( "Parsing {$fileCount} PHP files...", 'light_cyan' );
	$startTime = microtime( true );

	// ------------------------------------------
	// 1) Setup cache details
	// ------------------------------------------
	$disableCache = ( getenv( 'NO_STUB_CACHE' ) === '1' );
	$cacheRoot    = getenv( 'STUB_CACHE_DIR' ) ?: ( __DIR__ . '/.reflection-cache' );
	$cacheDir     = rtrim( $cacheRoot, DIRECTORY_SEPARATOR ) . '/' . $slug;

	if ( ! $disableCache && ! is_dir( $cacheDir ) ) {
		mkdir( $cacheDir, 0777, true );
	}

	// ------------------------------------------
	// 2) Build reflection
	// ------------------------------------------
	$br            = new BetterReflection();
	$astLocator    = $br->astLocator();
	$sourceStubber = $br->sourceStubber();

	// The internal locator (for references to built-in classes etc.)
	$internalLocator = new PhpInternalSourceLocator( $astLocator, $sourceStubber );

	// Build the array of user-land locators: either a DirectoriesSourceLocator
	// or a series of SingleFileSourceLocators, but all appended to $locators
	$locators = [ $internalLocator ];

	if ( $sourceDir ) {
		// If we were given a directory, add a DirectoriesSourceLocator
		$locators[] = new DirectoriesSourceLocator( [ $sourceDir ], $astLocator );
	} else {
		// Otherwise, gather SingleFileSourceLocators from the Finder
		foreach ( $finder as $file ) {
			if ( $file->isFile() && $file->getExtension() === 'php' ) {
				$realPath = $file->getRealPath();
				if ( $realPath ) {
					$locators[] = new SingleFileSourceLocator( $realPath, $astLocator );
				}
			}
		}
	}

	// Aggregate + memoize
	$aggregate = new AggregateSourceLocator( $locators );
	$memoized  = new MemoizingSourceLocator( $aggregate );
	$reflector = new DefaultReflector( $memoized );

	// ------------------------------------------
	// 3) Gather all classes, functions, constants
	// ------------------------------------------
	$allClasses   = array_filter( $reflector->reflectAllClasses(), fn( $c ) => $c->getFileName() !== null );
	$allFunctions = array_filter( $reflector->reflectAllFunctions(), fn( $f ) => $f->getFileName() !== null );
	$allConstants = array_filter( $reflector->reflectAllConstants(), fn( $c ) => $c->getFileName() !== null );

	// Build file-to-symbol maps (classes, functions, consts)
	[ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ] =
		buildSymbolMaps( $allClasses, $allFunctions, $allConstants );

	$timeAfterAST = microtime( true );
	echo color( " Done in " . round( $timeAfterAST - $startTime, 2 ) . "s.\n", 'light_cyan' );
	echo color( "Generating stubs...", 'light_cyan' );

	// ------------------------------------------
	// 4) Iterate over each PHP file from Finder,
	//    cache as needed, and write stub files
	// ------------------------------------------
	$stats      = [
		'filesTotal'    => 0,
		'filesWithSyms' => 0,
		'cacheHits'     => 0,
		'cacheMisses'   => 0,
		'deleted'       => 0,
	];
	$usedHashes = [];

	foreach ( $finder as $file ) {
		if ( ! $file->isFile() || $file->getExtension() !== 'php' ) {
			continue;
		}
		$stats['filesTotal'] ++;
		$realpath = $file->getRealPath();
		if ( ! $realpath ) {
			continue;
		}

		// Does this file have classes/functions/constants?
		$hasSymbols = (
			isset( $fileToClassesMap[ $realpath ] ) ||
			isset( $fileToFunctionsMap[ $realpath ] ) ||
			isset( $fileToConstantsMap[ $realpath ] )
		);
		if ( ! $hasSymbols ) {
			continue;
		}
		$stats['filesWithSyms'] ++;

		// ------------------------------------------
		// Cache check
		// ------------------------------------------
		$fileHash  = md5( STUBZ_CACHEBURST . '_' . md5_file( $realpath ) );
		$cacheFile = "{$cacheDir}/{$fileHash}.stubcache";

		if ( ! $disableCache && file_exists( $cacheFile ) ) {
			$stats['cacheHits'] ++;
			$stubContent = file_get_contents( $cacheFile );
		} else {
			$stats['cacheMisses'] ++;
			$stubContent = generateStubContent(
				$realpath,
				$fileToClassesMap,
				$fileToFunctionsMap,
				$fileToConstantsMap
			);
			if ( ! $disableCache ) {
				file_put_contents( $cacheFile, $stubContent );
			}
		}

		if ( ! $disableCache ) {
			$usedHashes[] = $fileHash;
		}

		// ------------------------------------------
		// Compute target path
		// ------------------------------------------
		// If we have a sourceDir, we remove that prefix from the realpath;
		// otherwise, we remove the stubz script's dir. Then we unify how we
		// build the final $targetPath:
		$basePath     = $sourceDir ?: dirname( __FILE__ );
		$relativePath = ltrim( str_replace( $basePath, '', $realpath ), DIRECTORY_SEPARATOR );

		// Prepend the output directory:
		$targetPath = rtrim( $outputDir, DIRECTORY_SEPARATOR )
		              . DIRECTORY_SEPARATOR
		              . ltrim( $relativePath, DIRECTORY_SEPARATOR );

		// Create dirs if needed and write out the stub content
		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );
	}

	// ------------------------------------------
	// 5) Done generating; show time and do cleanup
	// ------------------------------------------
	echo color( " Done in " . round( microtime( true ) - $timeAfterAST, 2 ) . "s.\n", 'light_cyan' );

	if ( ! $disableCache ) {
		$allCacheFiles = glob( "{$cacheDir}/*.stubcache" );
		if ( is_array( $allCacheFiles ) ) {
			foreach ( $allCacheFiles as $cachedPath ) {
				$filename = basename( $cachedPath, '.stubcache' );
				if ( ! in_array( $filename, $usedHashes, true ) ) {
					unlink( $cachedPath );
					$stats['deleted'] ++;
				}
			}
		}
	}

	printStats( $stats );
}

// Invoke main()
if ( PHP_SAPI === 'cli' && realpath( $_SERVER['argv'][0] ) === __FILE__ ) {
	main( $_SERVER['argv'] );
}