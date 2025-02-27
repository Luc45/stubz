#!/usr/bin/env php
<?php

/**
 * stubz.php
 *
 * - A "flat" stub generator that uses a custom or default Finder,
 * - Generates stubs in parallel (if possible),
 * - Writes a single `<?php` tag per output file,
 * - Logs reflection timing,
 * - And supports command-line options for excludes, verbose mode, etc.
 */

declare( strict_types=1 );

// Include Composer's autoload
require_once __DIR__ . '/vendor/autoload.php';

( static function ( array $argv ): void {

	/**
	 * Local closure to parse the command line, allowing:
	 * --exclude[=DIR]   (can be repeated)
	 * --finder[=PATH]   (custom Finder, cannot combine with --exclude)
	 * --parallel[=INT]  (number of parallel processes to use)
	 * --verbose         (print missing references at the end)
	 *
	 * Usage:
	 *   Normal mode:   php stubz.php [options] <source-dir> <output-dir>
	 *   Finder mode:   php stubz.php --finder=path/to/customFinder.php <output-dir>
	 */
	$parseCommandLine = static function ( array $argv ): array {
		// Detect if --finder is present
		$hasFinder = false;
		foreach ( $argv as $testArg ) {
			if ( str_starts_with( $testArg, '--finder' ) ) {
				$hasFinder = true;
				break;
			}
		}

		// If using --finder, we need 1 non-option arg (outputDir).
		// Otherwise, we need 2 (sourceDir, outputDir).
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
			fwrite( STDERR, "  --parallel[=INT]  How many parallel processes to use (default=auto)\n" );
			fwrite( STDERR, "  --verbose         Print verbose output\n" );
			exit( 1 );
		}

		$sourceDir = null;  // might be null if using --finder
		$outputDir = null;
		$parallel  = null;
		$excludes  = [];
		$finderPhp = null;
		$verbose   = false;

		$i = 1;
		while ( $i < count( $argv ) ) {
			$arg = $argv[ $i ];

			// Handle --exclude
			if ( preg_match( '/^--exclude(=.+)?$/', $arg, $m ) ) {
				if ( isset( $m[1] ) && $m[1] !== '' ) {
					// e.g. --exclude=someDir
					$excludes[] = ltrim( $m[1], '=' );
					$i ++;
					continue;
				}
				// e.g. --exclude someDir
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
					// e.g. --finder=path/to/Finder.php
					$finderPhp = ltrim( $m[1], '=' );
					$i ++;
					continue;
				}
				// e.g. --finder path/to/Finder.php
				if ( isset( $argv[ $i + 1 ] ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
					$finderPhp = $argv[ $i + 1 ];
					$i         += 2;
					continue;
				}
				fwrite( STDERR, "Warning: --finder used with no path\n" );
				$i ++;
				continue;
			}

			// Handle --parallel
			if ( preg_match( '/^--parallel(=.+)?$/', $arg, $m ) ) {
				if ( isset( $m[1] ) && $m[1] !== '' ) {
					// e.g. --parallel=4
					$parallel = ltrim( $m[1], '=' );
					$i ++;
					continue;
				}
				// e.g. --parallel 4
				if ( isset( $argv[ $i + 1 ] ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
					$parallel = $argv[ $i + 1 ];
					$i        += 2;
					continue;
				}
				fwrite( STDERR, "Warning: --parallel used with no value\n" );
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
				// If using --finder, first non-option is outputDir
				if ( $outputDir === null ) {
					$outputDir = $arg;
				} else {
					fwrite( STDERR, "Warning: Unrecognized argument: {$arg}\n" );
				}
			} else {
				// Normal mode => need sourceDir and outputDir
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

		// Validate final arguments
		if ( $hasFinder ) {
			if ( ! $outputDir ) {
				fwrite( STDERR, "Error: Missing required <output-dir> when using --finder.\n" );
				exit( 1 );
			}
		} else {
			// Normal mode => must have <sourceDir> & <outputDir>
			if ( ! $sourceDir || ! $outputDir ) {
				fwrite( STDERR, "Error: Missing <source-dir> or <output-dir>.\n" );
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
			'parallel'  => $parallel,
			'verbose'   => $verbose,
		];
	};

	// Main logic after parsing
	$run = static function ( array $options ): void {
		// Extract options
		$sourceDir = $options['sourceDir'];
		$outputDir = $options['outputDir'];
		$excludes  = $options['excludes'];
		$finderPhp = $options['finderPhp'];
		$parallel  = $options['parallel'];
		$verbose   = $options['verbose'];

		// Decide if we can run parallel
		$parallelAllowed = function_exists( 'pcntl_fork' );

		// Build or load a Finder
		$makeFinder = require __DIR__ . '/src/finder.php';
		$finder     = $makeFinder( $sourceDir ?? '', $excludes, $finderPhp );

		// Convert Finder -> array of file paths
		$allFiles = [];
		foreach ( $finder as $file ) {
			$rp = $file->getRealPath();
			if ( $rp !== false ) {
				$allFiles[] = $rp;
			}
		}
		$totalFiles = count( $allFiles );
		echo "Found {$totalFiles} PHP files.\n";
		if ( $totalFiles === 0 ) {
			echo "No files found. Exiting.\n";

			return;
		}

		// Track missing references
		$missingReferences = [];

		// The Worker class orchestrates chunking/forking
		$worker       = new \Stubz\Worker();
		$minChunkSize = $worker->getMinimumChunkSize();

		// Decide how to run (parallel or single)
		// We only try parallel if we have enough files to form at least one chunk with >= minChunkSize
		if ( $parallelAllowed && $totalFiles >= $minChunkSize ) {
			// Determine how many processes we might spawn
			$numCores = $parallel ?? $worker->detectCpuCores();

			// Compute a raw chunk size based on #files / #cores
			$rawChunkSize = (int) ceil( $totalFiles / $numCores );
			// Ensure chunk size is at least the minimum
			$chunkSize = max( $rawChunkSize, $minChunkSize );

			// Split into chunks
			$chunks = array_chunk( $allFiles, $chunkSize );

			// If the last chunk is smaller than the min size, merge it with the previous chunk
			if ( count( $chunks ) > 1 && count( end( $chunks ) ) < $minChunkSize ) {
				$last                           = array_pop( $chunks );
				$chunks[ count( $chunks ) - 1 ] = array_merge( $chunks[ count( $chunks ) - 1 ], $last );
			}

			// If, after chunking, we only have one chunk, just do single-process
			if ( count( $chunks ) > 1 ) {
				$worker->runParallel( $chunks, $sourceDir ?? '', $outputDir, $missingReferences, $verbose );
			} else {
				$worker->processFilesChunk(
					$chunks[0],
					$sourceDir ?? '',
					$outputDir,
					$missingReferences,
					0,
					1,
                    $verbose
				);
			}
		} else {
			// Single process
			$worker->processFilesChunk(
				$allFiles,
				$sourceDir ?? '',
				$outputDir,
				$missingReferences,
				0,
				1,
                $verbose
			);
		}

		// Print missing references if verbose
		if ( $verbose && ! empty( $missingReferences ) ) {
			$totalMissingCount = array_sum( $missingReferences );
			$unique            = count( $missingReferences );
			echo "\nMissing references: {$totalMissingCount} total, across {$unique} unique symbols.\n";
			foreach ( $missingReferences as $sym => $count ) {
				echo "  - {$sym} ({$count} times)\n";
			}
		}

		echo "Done.\n";
	};

	// Parse + execute
	$options = $parseCommandLine( $argv );
	$run( $options );

} )( $argv );