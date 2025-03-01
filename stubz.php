<?php
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Immediately invoked function to encapsulate CLI logic.
 *
 * @param array<int,string> $argv
 */
( static function ( array $argv ): void {
	// 1) Parse and validate the CLI arguments
	$options = parseCommandLine( $argv );

	// 2) Run the stubbing logic using the Stubz class.
	$stubz = new \Stubz\Stubz();
	$stubz->generateStubs( $options );

} )( $argv );

/**
 * Parse the command line, returning a typed array of options.
 *
 * @param array<int,string> $argv
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
function parseCommandLine( array $argv ): array {
	// Detect if we have a --finder argument
	$hasFinder = false;
	foreach ( $argv as $cliArg ) {
		if ( str_starts_with( $cliArg, '--finder' ) ) {
			$hasFinder = true;
			break;
		}
	}

	// If we have --finder, only 1 non-option arg is needed (the <output-dir>).
	// Otherwise, we need 2 non-option args: <source-dir-or-file> <output-dir>.
	$minNonOptions = $hasFinder ? 1 : 2;
	if ( count( $argv ) < ( $minNonOptions + 1 ) ) {
		fwrite( STDERR, "Usage:\n" );
		fwrite( STDERR, "  Normal mode (directory):\n" );
		fwrite( STDERR, "    php stubz.php [options] <source-dir> <output-dir>\n" );
		fwrite( STDERR, "    e.g. php stubz.php path/to/myplugin path/to/stubs\n\n" );

		fwrite( STDERR, "  Normal mode (single file):\n" );
		fwrite( STDERR, "    php stubz.php [options] <single-file.php> <output-dir>\n" );
		fwrite( STDERR, "    e.g. php stubz.php myfile.php path/to/stubs\n\n" );

		fwrite( STDERR, "  Finder mode:\n" );
		fwrite( STDERR, "    php stubz.php --finder=path/to/customFinder.php <output-dir>\n" );
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
	$excludes  = [];
	$finderPhp = '';
	$parallel  = '';
	$verbose   = false;

	$i = 1;
	while ( $i < count( $argv ) ) {
		$arg = $argv[ $i ];

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
			// Normal mode => 2 required: $sourceDir-or-file and $outputDir
			if ( $sourceDir === '' ) {
				$sourceDir = $arg;  // This can be either a dir or a single PHP file
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
		fwrite( STDERR, "Error: Missing <source-dir-or-file> or <output-dir>.\n" );
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
}