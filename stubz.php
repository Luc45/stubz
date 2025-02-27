#!/usr/bin/env php
<?php

declare( strict_types=1 );

/**
 * stubz.php
 *
 * - A "flat" stub generator that uses a custom or default Finder,
 * - Generates stubs in parallel (if possible),
 * - Writes a single `<?php` tag per output file,
 * - Logs reflection timing,
 * - And supports command-line options for excludes, verbose mode, etc.
 */

// Include Composer's autoload
use Stubz\Stubber\Helpers;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Main CLI logic in an immediately-invoked function.
 *
 * @param array<int,string> $argv
 */
( static function ( array $argv ): void {

	/**
	 * Parse the command line, returning a typed array of options.
	 *
	 * @return array{
	 *     sourceDir: string,
	 *     outputDir: string,
	 *     excludes: string[],
	 *     finderPhp: string,
	 *     parallel: string,
	 *     verbose: bool
	 * }
	 */
	$parseCommandLine = static function ( array $argv ): array {
		// If one of the arguments starts with "--finder", that implies Finder mode
		$hasFinder = false;
		foreach ( $argv as $cliArg ) {
			// Already typed as string from the docblock
			if ( str_starts_with( $cliArg, '--finder' ) ) {
				$hasFinder = true;
				break;
			}
		}

		$minNonOptions = $hasFinder ? 1 : 2;
		if ( count( $argv ) < ( $minNonOptions + 1 ) ) {
			fwrite( STDERR, "Usage:\n" );
			fwrite( STDERR, "  Normal mode:  php stubz.php [options] <source-dir> <output-dir>\n" );
			fwrite( STDERR, "    (Requires at least 2 non-option args)\n\n" );
			fwrite( STDERR, "  Finder mode:  php stubz.php --finder=path/to/finder.php <output-dir>\n" );
			fwrite( STDERR, "    (Requires at least 1 non-option arg)\n\n" );
			fwrite( STDERR, "Options:\n" );
			fwrite( STDERR, "  --exclude[=DIR]   Exclude dir(s), repeatable [not with --finder]\n" );
			fwrite( STDERR, "  --finder=PATH     Use a custom Finder definition [cannot combine with --exclude]\n" );
			fwrite( STDERR, "  --parallel=INT    Number of parallel processes (default=auto)\n" );
			fwrite( STDERR, "  --verbose         Print verbose output\n" );
			exit( 1 );
		}

		// Initialize typed local variables
		$sourceDir = '';
		$outputDir = '';
		/** @var string[] $excludes */
		$excludes  = [];
		$finderPhp = '';
		$parallel  = '';
		$verbose   = false;

		$i = 1;
		while ( $i < count( $argv ) ) {
			$arg = $argv[ $i ]; // typed as string

			// Match various options with a simple regex or direct compare:

			// --exclude
			if ( preg_match( '/^--exclude(=.+)?$/', $arg, $m ) ) {
				if ( isset( $m[1] ) ) {
					// e.g. --exclude=someDir
					$excludes[] = ltrim( $m[1], '=' );
					$i ++;
					continue;
				}
				// e.g. --exclude someDir
				if ( ( $i + 1 ) < count( $argv ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
					$excludes[] = $argv[ $i + 1 ];
					$i          += 2;
					continue;
				}
				fwrite( STDERR, "Warning: --exclude used with no directory\n" );
				$i ++;
				continue;
			}

			// --finder
			if ( preg_match( '/^--finder(=.+)?$/', $arg, $m ) ) {
				if ( isset( $m[1] ) ) {
					// e.g. --finder=somePath.php
					$finderPhp = ltrim( $m[1], '=' );
					$i ++;
					continue;
				}
				// e.g. --finder somePath.php
				if ( ( $i + 1 ) < count( $argv ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
					$finderPhp = $argv[ $i + 1 ];
					$i         += 2;
					continue;
				}
				fwrite( STDERR, "Warning: --finder used with no path\n" );
				$i ++;
				continue;
			}

			// --parallel
			if ( preg_match( '/^--parallel(=.+)?$/', $arg, $m ) ) {
				if ( isset( $m[1] ) ) {
					// e.g. --parallel=4
					$parallel = ltrim( $m[1], '=' );
					$i ++;
					continue;
				}
				// e.g. --parallel 4
				if ( ( $i + 1 ) < count( $argv ) && ! str_starts_with( $argv[ $i + 1 ], '--' ) ) {
					$parallel = $argv[ $i + 1 ];
					$i        += 2;
					continue;
				}
				fwrite( STDERR, "Warning: --parallel used with no value\n" );
				$i ++;
				continue;
			}

			// --verbose
			if ( $arg === '--verbose' ) {
				$verbose = true;
				$i ++;
				continue;
			}

			// Non-option argument => either sourceDir/outputDir (normal) or outputDir (finder)
			if ( $hasFinder ) {
				// If using --finder, we only want one non-option arg: $outputDir
				if ( $outputDir === '' ) {
					$outputDir = $arg;
				} else {
					fwrite( STDERR, "Warning: Unrecognized argument: {$arg}\n" );
				}
			} else {
				// Normal mode => 2 required: $sourceDir and $outputDir
				if ( $sourceDir === '' ) {
					$sourceDir = $arg;
				} elseif ( $outputDir === '' ) {
					$outputDir = $arg;
				} else {
					fwrite( STDERR, "Warning: Unrecognized argument: {$arg}\n" );
				}
			}
			$i ++;
		}

		// Validate results
		if ( $hasFinder && $outputDir === '' ) {
			fwrite( STDERR, "Error: Missing required <output-dir> when using --finder.\n" );
			exit( 1 );
		}
		if ( ! $hasFinder && ( $sourceDir === '' || $outputDir === '' ) ) {
			fwrite( STDERR, "Error: Missing <source-dir> or <output-dir>.\n" );
			exit( 1 );
		}
		if ( ! empty( $excludes ) && $finderPhp !== '' ) {
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

	/**
	 * Run the main logic, either single-process or parallel, based on options.
	 *
	 * @param array{
	 *     sourceDir:string,
	 *     outputDir:string,
	 *     excludes:array<int,string>,
	 *     finderPhp:string,
	 *     parallel:string,
	 *     verbose:bool
	 * } $options
	 */
	$run = static function ( array $options ): void {
		$sourceDir = $options['sourceDir'];
		$outputDir = $options['outputDir'];
		$excludes  = $options['excludes'];
		$finderPhp = $options['finderPhp'];
		$parallel  = $options['parallel'];
		$verbose   = $options['verbose'];

		// Check if parallel is possible
		$parallelAllowed = function_exists( 'pcntl_fork' );

		// Build or load a Finder
		$makeFinder = require __DIR__ . '/src/finder.php';
		/** @var \Symfony\Component\Finder\Finder $finder */
		$finder = $makeFinder( $sourceDir, $excludes, $finderPhp );

		echo "DEBUG: Listing .php files for scenario:\n";
		foreach ( $finder as $f ) {
			echo "  " . $f->getRealPath() . "\n";
		}


		// Convert Finder -> array of file paths
		$allFiles = [];
		foreach ( $finder as $file ) {
			$rp = $file->getRealPath(); // string|false
			if ( is_string( $rp ) ) {
				$allFiles[] = $rp;
			}
		}
		$totalFiles = count( $allFiles );
		echo "Found {$totalFiles} PHP files.\n";
		if ( $totalFiles === 0 ) {
			echo "No files found. Exiting.\n";

			return;
		}

		// Worker usage
		$worker       = new \Stubz\Worker();
		$minChunkSize = $worker->getMinimumChunkSize();

		// Decide if we do parallel or single-process
		if ( $parallelAllowed && $totalFiles >= $minChunkSize ) {
			// parse $parallel as int if provided
			$numCores = ( $parallel !== '' ) ? (int) $parallel : $worker->detectCpuCores();

			$rawChunkSize = (int) ceil( $totalFiles / $numCores );
			$chunkSize    = max( $rawChunkSize, $minChunkSize );
			$chunks       = array_chunk( $allFiles, $chunkSize );

			// Merge last chunk if too small
			if ( count( $chunks ) > 1 && count( end( $chunks ) ) < $minChunkSize ) {
				$last                           = array_pop( $chunks );
				$chunks[ count( $chunks ) - 1 ] = array_merge( $chunks[ count( $chunks ) - 1 ], $last );
			}

			if ( count( $chunks ) > 1 ) {
				// Actually run parallel
				$worker->runParallel( $chunks, $sourceDir, $outputDir, $verbose );
			} else {
				// Only 1 chunk => single-process
				$worker->processFilesChunk(
					$chunks[0],
					$sourceDir,
					$outputDir,
					0,
					1,
					$verbose
				);
			}
		} else {
			// Single-process
			$worker->processFilesChunk(
				$allFiles,
				$sourceDir,
				$outputDir,
				0,
				1,
				$verbose
			);
		}

		// If verbose, print missing references
		if ( $verbose && ! empty( Helpers::$missingReferences ) ) {
			$totalMissingCount = array_sum( Helpers::$missingReferences );
			$uniqueCount       = count( Helpers::$missingReferences );
			echo "\nMissing references: {$totalMissingCount} total, across {$uniqueCount} unique symbols.\n";
			foreach ( Helpers::$missingReferences as $sym => $count ) {
				echo "  - {$sym} ({$count} times)\n";
			}
		}

		echo "Done.\n";
	};

	// 1) Parse CLI
	$options = $parseCommandLine( $argv );
	// 2) Execute main logic
	$run( $options );

} )( $argv );