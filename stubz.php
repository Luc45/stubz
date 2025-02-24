#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/terminal.php';
require_once __DIR__ . '/src/checksum.php';
require_once __DIR__ . '/src/stub-generator.php';
require_once __DIR__ . '/src/parser-per-directory.php';
require_once __DIR__ . '/src/parser-per-file.php';

use Symfony\Component\Finder\Finder;

/**
 * Try to increase memory to 2GB if not set.
 */
if ( ! ini_get( 'memory_limit' ) || (int) ini_get( 'memory_limit' ) < 2048 ) {
	ini_set( 'memory_limit', '2048M' );
}

define( 'STUBZ_CACHEBURST', 1 );

/**
 * CLI entry point
 *
 * @param array<int,string> $argv
 */
function main( array $argv ): void {

	array_shift( $argv ); // remove script name

	if ( count( $argv ) === 0 ) {
		echo color( "Usage:\n", 'light_red' );
		echo color( "  php stubz.php [--exclude <dir>]... [--checksum] <source-dir> <output-dir>\n", 'light_red' );
		echo color( "\nWe always ignore missing references.\n", 'light_red' );
		echo color( "  --checksum      Print an MD5 checksum of all files (with excludes) and exit.\n", 'light_red' );
		exit( 1 );
	}

	$excludes     = [];
	$finderFile   = null;
	$checksumMode = false;

	// We hold missing references in a local array:
	$missingReferences = [];

	// Parse CLI flags
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
			case '--checksum':
				array_shift( $argv );
				$checksumMode = true;
				break;
			default:
				$parsedFlags = false;
		}
	}

	// If user gave --finder, parse as before
	if ( $finderFile ) {
		if ( count( $excludes ) > 0 ) {
			echo color( "Error: You cannot use --exclude with --finder.\n", 'light_red' );
			exit( 1 );
		}
		if ( count( $argv ) !== 1 && ! $checksumMode ) {
			echo color( "Error: With --finder, the only extra arg is <output-dir>.\n", 'light_red' );
			exit( 1 );
		}
		$outputDir = rtrim( $argv[0] ?? '', DIRECTORY_SEPARATOR );
		$finder    = include $finderFile;
		if ( ! $finder instanceof Finder ) {
			echo color( "Error: Finder file did not return a Finder instance.\n", 'light_red' );
			exit( 1 );
		}
		$sourceDir = null;
		$slug      = basename( $finderFile, '.php' );

	} else {
		// Otherwise, parse normal <source-dir> <output-dir>
		if ( $checksumMode && count( $argv ) < 1 ) {
			echo color( "Usage (checksum): php stubz.php [--exclude <dir>]... --checksum <source-dir>\n", 'light_red' );
			exit( 1 );
		}
		if ( ! $checksumMode && count( $argv ) < 2 ) {
			echo color( "Usage: php stubz.php [--exclude <dir>]... <source-dir> <output-dir>\n", 'light_red' );
			exit( 1 );
		}

		$sourceDir = rtrim( $argv[0], DIRECTORY_SEPARATOR );
		$outputDir = $checksumMode ? '' : rtrim( $argv[1] ?? '', DIRECTORY_SEPARATOR );

		$finder = new Finder();
		$finder->files()->in( $sourceDir )->name( '*.php' );
		foreach ( $excludes as $exDir ) {
			$finder->exclude( $exDir );
		}
		$slug = basename( $sourceDir );
	}

	// Sort the finder results
	$finder->sortByName();
	// Filter only .php
	$finder->filter( fn( \SplFileInfo $file ) => $file->getExtension() === 'php' );

	// If user wants checksum, compute & exit
	if ( $checksumMode ) {
		$chksum = computeChecksum( $finder );
		echo $chksum . "\n";
		exit( 0 );
	}

	// Normal stub logic
	generateStubs( $finder, $sourceDir, $outputDir, $slug, $missingReferences );

	// Show missing references
	if ( count( $missingReferences ) > 0 ) {
		$count  = array_sum( $missingReferences );
		$unique = count( $missingReferences );

		echo color( "\nNote: {$count} external references were not found in this scan.\n", 'yellow' );
		echo color( "This won't affect your plugin's stub files, but you may need separate stubs\n", 'yellow' );
		echo color( "or code for these libraries during analysis.\n", 'yellow' );
		echo color( "Missing symbols ({$unique} total):\n\n", 'yellow' );

		foreach ( $missingReferences as $symbolName => $hits ) {
			echo color( "  - {$symbolName} (encountered {$hits} times)\n", 'yellow' );
		}
		echo "\n";
	}
}

/**
 * Orchestrates reflection, caching, and writing stub files for each discovered symbol.
 *
 * @param array<string,int> $missingReferences
 */
function generateStubs(
	Finder $finder,
	?string $sourceDir,
	string $outputDir,
	string $slug,
	array &$missingReferences
): void {
	try {
		$fileCount = $finder->count();
		echo color( "Parsing {$fileCount} PHP files...\n", 'light_cyan' );
		$startTime = microtime( true );

		$disableCache = ( getenv( 'NO_STUB_CACHE' ) === '1' );
		$cacheRoot    = getenv( 'STUB_CACHE_DIR' ) ?: ( __DIR__ . '/.reflection-cache' );
		$cacheDir     = rtrim( $cacheRoot, DIRECTORY_SEPARATOR ) . '/' . $slug;

		if ( ! $disableCache && ! is_dir( $cacheDir ) ) {
			mkdir( $cacheDir, 0755, true );
		}

        $parser_type = 'directory';

		if ( $parser_type === 'file' ) {
			// ------------------------------------------------
			// 1) PER-FILE "FLAT" PARSING PHASE:
			//    We'll call the helper in src/parser.php, which uses
			//    SingleFileSourceLocator + internal stubs to collect
			//    only the classes, functions, constants physically
			//    declared in each file.
			// ------------------------------------------------
			$parseStart = microtime( true );
			[ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ] = parseSymbolsPerFile( $finder );
			$parseEnd = microtime( true );

			echo color( "Per‑file parsing complete in " . round( $parseEnd - $parseStart, 2 ) . "s.\n", 'light_cyan' );
		} else {
			// ------------------------------------------------
			// 1) PER-DIRECTORY "DEEP" PARSING PHASE:
			//    We'll call the helper in src/parser.php, which uses
			//    AggregateSourceLocator + internal stubs to collect
			//    all classes, functions, constants in the entire
			//    directory tree.
			// ------------------------------------------------
			$parseStart = microtime( true );
			[ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ] = parseSymbolsPerDirectory( $finder, $sourceDir );
			$parseEnd = microtime( true );

			echo color( "Per‑directory parsing complete in " . round( $parseEnd - $parseStart, 2 ) . "s.\n", 'light_cyan' );
		}

		$timeAfterAST = microtime( true );
		echo color( "Done in " . round( $timeAfterAST - $startTime, 2 ) . "s.\n", 'light_cyan' );
		echo color( "Generating stubs...\n", 'light_cyan' );

		// We'll keep track of some stats for printing at the end
		$stats = [
			'filesTotal'    => 0,
			'filesWithSyms' => 0,
			'cacheHits'     => 0,
			'cacheMisses'   => 0,
			'deleted'       => 0,
		];
		$usedHashes = [];

		// Start a second progress bar for the actual stub generation
		$supportsCR = canUseCarriageReturn();
		$progress   = startProgressBarContext( $fileCount, 50, $supportsCR );
		$i          = 0;

		foreach ( $finder as $file ) {
			$i ++;
			advanceProgressBar( $progress, $i );

			if ( ! $file->isFile() || $file->getExtension() !== 'php' ) {
				continue;
			}
			$stats['filesTotal'] ++;
			$realpath = $file->getRealPath();
			if ( ! $realpath ) {
				continue;
			}

			// If file has no declarations, skip
			$hasSymbols = (
				isset( $fileToClassesMap[ $realpath ] ) ||
				isset( $fileToFunctionsMap[ $realpath ] ) ||
				isset( $fileToConstantsMap[ $realpath ] )
			);
			if ( ! $hasSymbols ) {
				continue;
			}
			$stats['filesWithSyms'] ++;

			// Stub caching logic
			$fileHash  = md5( STUBZ_CACHEBURST . '_' . md5_file( $realpath ) );
			$cacheFile = "{$cacheDir}/{$fileHash}.stubcache";

			if ( ! $disableCache && file_exists( $cacheFile ) ) {
				$stats['cacheHits'] ++;
				$stubContent = file_get_contents( $cacheFile );
			} else {
				$stats['cacheMisses'] ++;

				// Actually build the stub content for this file
				$stubContent = generateStubContent(
					$realpath,
					$fileToClassesMap,
					$fileToFunctionsMap,
					$fileToConstantsMap,
					$missingReferences
				);

				if ( ! $disableCache ) {
					file_put_contents( $cacheFile, $stubContent );
				}
			}

			if ( ! $disableCache ) {
				$usedHashes[] = $fileHash;
			}

			// Write the stub file in the same directory structure as the original
			$basePath     = $sourceDir ?: dirname( __FILE__ );
			$relativePath = ltrim( str_replace( $basePath, '', $realpath ), DIRECTORY_SEPARATOR );

			$targetPath = rtrim( $outputDir, DIRECTORY_SEPARATOR )
			              . DIRECTORY_SEPARATOR
			              . ltrim( $relativePath, DIRECTORY_SEPARATOR );

			if ( ! is_dir( dirname( $targetPath ) ) ) {
				mkdir( dirname( $targetPath ), 0777, true );
			}
			file_put_contents( $targetPath, $stubContent );
		}

		finishProgressBar( $progress );

		echo color( "Done in " . round( microtime( true ) - $timeAfterAST, 2 ) . "s.\n", 'light_cyan' );

		// Remove any stale cache files
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

		// Print a small stats summary
		printStats( $stats );

	} catch ( \Roave\BetterReflection\Reflector\Exception\IdentifierNotFound $ex ) {
		// We always ignore missing references, so do nothing special.
	}
}

// If running via CLI, call main()
if ( PHP_SAPI === 'cli' ) {
	/** @var array<int,string> $cliArgs */
	$cliArgs = $_SERVER['argv'] ?? [];
	if ( isset( $cliArgs[0] ) && realpath( $cliArgs[0] ) === __FILE__ ) {
		main( $cliArgs );
	}
}
