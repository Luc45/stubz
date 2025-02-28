<?php

/**
 * php-stubs-generator.php
 *
 * Usage:
 *   # Stub a single file into a specific file (add .php if missing)
 *   php php-stubs-generator.php /path/to/source.php /path/to/output-file.php
 *
 *   # Stub a single file into an output directory
 *   php php-stubs-generator.php /path/to/source.php /path/to/some-directory
 *
 *   # Stub an entire directory (recursively) into an output directory
 *   php php-stubs-generator.php /path/to/source-dir /path/to/output-dir
 *
 * Notes:
 *   - If the source is a directory, the output must be a directory (will be created if missing).
 *   - If the source is a file:
 *       -- If the output is an existing directory, we keep the same filename in that directory.
 *       -- Otherwise, the output is treated as a file path; we'll append .php if missing.
 */

if ( $argc < 3 ) {
	echo "Usage: php php-stubs-generator.php [source_file_or_dir] [output_file_or_dir]\n";
	exit( 1 );
}

$source = rtrim( $argv[1], DIRECTORY_SEPARATOR );
$output = rtrim( $argv[2], DIRECTORY_SEPARATOR );

/**
 * Ensures that we have a .php extension on a file path (unless the user already appended it).
 *
 * @param string $filePath
 *
 * @return string
 */
function ensurePhpExtension( $filePath ) {
	// If it already has .php (case-insensitive), return as is
	if ( preg_match( '/\.php$/i', $filePath ) ) {
		return $filePath;
	}

	return $filePath . '.php';
}

/**
 * Creates directories recursively if they do not exist.
 *
 * @param string $directory
 *
 * @return bool
 */
function createDirectoryIfMissing( $directory ) {
	if ( ! is_dir( $directory ) ) {
		// Attempt to create recursively
		if ( ! mkdir( $directory, 0777, true ) && ! is_dir( $directory ) ) {
			// mkdir failed and still not a directory => error
			return false;
		}
	}

	return true;
}

/**
 * Generates stubs for a single file by invoking the `generate-stubs` command.
 *
 * @param string $sourceFile
 * @param string $outputFile
 */
function generateStubsForFile( $sourceFile, $outputFile ) {
	// Make sure directories exist for the $outputFile
	$outDir = dirname( $outputFile );
	if ( ! createDirectoryIfMissing( $outDir ) ) {
		echo "Error: Could not create directory: $outDir\n";

		return;
	}

	$cmd = sprintf(
		'generate-stubs %s --out %s',
		escapeshellarg( $sourceFile ),
		escapeshellarg( $outputFile )
	);

	echo "Invoking command: $cmd\n";
	system( $cmd, $returnVar );

	if ( $returnVar !== 0 ) {
		echo "Error: Stub generation failed for file: $sourceFile\n";
	}
}

// -------------------------------------------------------------------
// Main logic
// -------------------------------------------------------------------

if ( is_dir( $source ) ) {
	// -------------------------------------------------------------------
	// Source is a directory => we recursively find *.php files
	// -------------------------------------------------------------------
	if ( file_exists( $output ) && ! is_dir( $output ) ) {
		echo "Error: When the source is a directory, the output must be a directory.\n";
		exit( 1 );
	}

	// Ensure the output directory exists (create if missing).
	if ( ! createDirectoryIfMissing( $output ) ) {
		echo "Error: Could not create output directory: $output\n";
		exit( 1 );
	}

	// Recursively iterate over directory
	$directoryIterator = new RecursiveDirectoryIterator( $source, RecursiveDirectoryIterator::SKIP_DOTS );
	$iterator          = new RecursiveIteratorIterator( $directoryIterator, RecursiveIteratorIterator::SELF_FIRST );

	foreach ( $iterator as $item ) {
		if ( $item->isFile() && strtolower( $item->getExtension() ) === 'php' ) {
			// Get relative path from the source directory
			$relativePath = str_replace( $source, '', $item->getPathname() );
			// Build the corresponding output path
			$outputPath = $output . DIRECTORY_SEPARATOR . ltrim( $relativePath, DIRECTORY_SEPARATOR );
			// We ensure that the extension is .php
			$outputPath = ensurePhpExtension( $outputPath );
			generateStubsForFile( $item->getPathname(), $outputPath );
		}
	}
} else {
	// -------------------------------------------------------------------
	// Source is a single file => generate stubs for this specific file
	// -------------------------------------------------------------------
	if ( ! file_exists( $source ) || ! is_file( $source ) ) {
		echo "Error: Source file does not exist or is not a file: $source\n";
		exit( 1 );
	}

	if ( is_dir( $output ) ) {
		// If the user gave an existing directory for output, keep the same filename but ensure .php
		$filename   = basename( $source );
		$filename   = ensurePhpExtension( $filename );
		$outputFile = $output . DIRECTORY_SEPARATOR . $filename;
	} else {
		// Output is presumably a file path
		// We'll attach .php if it doesn't have it
		$outputFile = ensurePhpExtension( $output );
	}

	generateStubsForFile( $source, $outputFile );
}