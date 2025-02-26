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

require_once __DIR__ . '/src/finder.php';
require_once __DIR__ . '/src/stubber.php';
require_once __DIR__ . '/src/worker.php';

/**
 * Parse the command line, allowing multiple --exclude in any order, and supporting a custom Finder.
 *
 * When --finder is used, we only need 1 non-option argument: <output-dir>.
 * Otherwise, we need at least 2: <source-dir> <output-dir>.
 */
function parseCommandLine( array $argv ): array {
	// Detect if --finder is present
	$hasFinder = false;
	foreach ( $argv as $testArg ) {
		if ( str_starts_with( $testArg, '--finder' ) ) {
			$hasFinder = true;
			break;
		}
	}

	// If using finder, we need 1 non-option arg (outputDir). Otherwise, 2 (sourceDir + outputDir).
	$minNonOptions = $hasFinder ? 1 : 2;
	if ( count( $argv ) < ( $minNonOptions + 1 ) ) {
		fwrite( STDERR, "Usage:\n" );
		fwrite( STDERR, "  Normal mode: php stubz.php [options] <source-dir> <output-dir>\n" );
		fwrite( STDERR, "    (Requires at least 2 non-option args)\n\n" );
		fwrite( STDERR, "  Finder mode: php stubz.php --finder=path/to/finder.php <output-dir>\n" );
		fwrite( STDERR, "    (Requires at least 1 non-option arg)\n\n" );
		fwrite( STDERR, "Options:\n" );
		fwrite( STDERR, "  --exclude[=DIR]   Exclude one or more directories (repeatable) [* Not with --finder]\n" );
		fwrite( STDERR, "  --finder[=PATH]   Use a custom Finder definition (cannot combine with --exclude)\n" );
		fwrite( STDERR, "  --verbose         Print verbose output\n" );
		exit( 1 );
	}

	$sourceDir = null; // might be null if using --finder
	$outputDir = null;
	$excludes  = [];
	$finderPhp = null;
	$verbose   = false;

	$i = 1;
	while ( $i < count( $argv ) ) {
		$arg = $argv[ $i ];

		// Handle --exclude
		if ( preg_match( '/^--exclude(=.+)?$/', $arg, $m ) ) {
			if ( isset( $m[1] ) && $m[1] !== '' ) {
				$excludes[] = ltrim( $m[1], '=' );
				$i ++;
				continue;
			}
			if ( isset( $argv[ $i + 1 ] ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
				$excludes[] = $argv[ $i + 1 ];
				$i          += 2;
				continue;
			}
			fwrite( STDERR, "Warning: --exclude used with no directory\n" );
			$i ++;
			continue;
		}

		// Handle --finder
		if ( preg_match( '/^--finder(=.+)?$/', $arg, $m ) ) {
			if ( isset( $m[1] ) && $m[1] !== '' ) {
				$finderPhp = ltrim( $m[1], '=' );
				$i ++;
				continue;
			}
			if ( isset( $argv[ $i + 1 ] ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
				$finderPhp = $argv[ $i + 1 ];
				$i         += 2;
				continue;
			}
			fwrite( STDERR, "Warning: --finder used with no path\n" );
			$i ++;
			continue;
		}

		// Handle --verbose
		if ( $arg === '--verbose' ) {
			$verbose = true;
			$i ++;
			continue;
		}

		// Non-option argument => either sourceDir/outputDir (normal) or outputDir (finder)
		if ( $hasFinder ) {
			// If using --finder, first non-option is <outputDir>
			if ( $outputDir === null ) {
				$outputDir = $arg;
			} else {
				fwrite( STDERR, "Warning: Unrecognized argument: {$arg}\n" );
			}
		} else {
			// Normal mode: need <sourceDir> and <outputDir>
			if ( $sourceDir === null ) {
				$sourceDir = $arg;
			} elseif ( $outputDir === null ) {
				$outputDir = $arg;
			} else {
				fwrite( STDERR, "Warning: Unrecognized argument: {$arg}\n" );
			}
		}
		$i ++;
	}

	// Validation after collecting
	if ( $hasFinder ) {
		// Must at least have <outputDir>
		if ( ! $outputDir ) {
			fwrite( STDERR, "Error: Missing required <output-dir> when using --finder.\n" );
			exit( 1 );
		}
	} else {
		// Must have <sourceDir> and <outputDir>
		if ( ! $sourceDir || ! $outputDir ) {
			fwrite( STDERR, "Error: Missing required <source-dir> or <output-dir>.\n" );
			exit( 1 );
		}
	}

	// Disallow combining exclude and finder
	if ( ! empty( $excludes ) && $finderPhp !== null ) {
		fwrite( STDERR, "Error: Cannot use --exclude and --finder together.\n" );
		exit( 1 );
	}

	return [
		'sourceDir' => $sourceDir,
		'outputDir' => $outputDir,
		'excludes'  => $excludes,
		'finderPhp' => $finderPhp,
		'verbose'   => $verbose,
	];
}

/**
 * Main entry point
 *
 * @param array<int, string> $argv
 */
function main( array $argv ): void {
	$options   = parseCommandLine( $argv );
	$sourceDir = $options['sourceDir'];  // may be null if --finder used
	$outputDir = $options['outputDir'];
	$excludes  = $options['excludes'];
	$finderPhp = $options['finderPhp'];
	$verbose   = $options['verbose'];

	$parallelAllowed = function_exists( 'pcntl_fork' );
	if ( ! $parallelAllowed ) {
		fwrite( STDERR, "WARNING: pcntl is not available; falling back to single-process mode.\n" );
	}

	// Build or load Finder
	// If $finderPhp is set, we won't rely on $sourceDir at all
	// We'll pass '' if sourceDir is null, so if the user uses finder, we skip ->in($sourceDir)
	$finalSourceDir = $sourceDir ?? '';
	$finder         = makeFinder( $finalSourceDir, $excludes, $finderPhp );

	// Convert Finder -> array of real file paths
	$allFiles = [];
	foreach ( $finder as $file ) {
		$rp = $file->getRealPath();
		if ( $rp !== false ) {
			$allFiles[] = $rp;
		}
	}
	$totalFiles = count( $allFiles );
	echo "Found {$totalFiles} PHP files in ";
	echo $finderPhp ? "[Custom Finder]" : "'{$finalSourceDir}'";
	echo ".\n";

	if ( $totalFiles === 0 ) {
		echo "No files found. Exiting.\n";

		return;
	}

	$missingReferences = []; // array<string,int>

	// Parallel or single
	if ( $parallelAllowed && $totalFiles > 1 ) {
		$numCores = detectCpuCores();
		echo "Using up to {$numCores} parallel processes.\n";

		$chunkSize = (int) max( 1, ceil( $totalFiles / $numCores ) );
		/** @var array<int,array<int,string>> $chunks */
		$chunks = array_chunk( $allFiles, $chunkSize );
		if ( count( $chunks ) > 1 ) {
			runParallel( $chunks, $finalSourceDir, $outputDir, $missingReferences );
		} else {
			// Only one chunk => do single
			processFilesChunk( $chunks[0], $finalSourceDir, $outputDir, $missingReferences, 0, 1 );
		}
	} else {
		// Single process
		processFilesChunk( $allFiles, $finalSourceDir, $outputDir, $missingReferences, 0, 1 );
	}

	// Print missing refs if verbose
	if ( $verbose && ! empty( $missingReferences ) ) {
		$totalMissingCount = array_sum( $missingReferences );
		$unique            = count( $missingReferences );
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

// If invoked via CLI, run main().
if ( PHP_SAPI === 'cli' && isset( $argv[0] ) && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}