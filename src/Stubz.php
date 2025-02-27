<?php

namespace Stubz;

use Symfony\Component\Finder\Finder;

class Stubz {
	/**
	 * @param array{
	 *     sourceDir?: string,
	 *     outputDir?: string,
	 *     excludes?: string[],
	 *     finderPhp?: string,
	 *     parallel?: string,
	 *     verbose?: bool
	 * } $options
	 */
	public function generateStubs( array $options ): void {
		$sourceDir = $options['sourceDir'] ?? '';
		$outputDir = $options['outputDir'] ?? '';
		$verbose   = $options['verbose'] ?? false;
		$finder    = $this->getFinder( $options );

		// Convert Finder -> list of file paths
		$filePaths = [];
		foreach ( $finder as $file ) {
			$filePaths[] = $file->getRealPath();
		}
		$totalFiles = \count( $filePaths );

		echo "Found {$totalFiles} PHP files.\n";
		if ( $totalFiles === 0 ) {
			echo "No files found. Exiting.\n";

			return;
		}

		// 1. Set up Worker
		$worker            = new Worker();
		$parallelSupported = function_exists( 'pcntl_fork' ) && function_exists( 'posix_kill' );
		$parallel          = $options['parallel'] ?? '';

		// 2. Determine the number of cores to use
		$numCores = 1;
		if ( $parallelSupported && $totalFiles >= $worker->getMinimumChunkSize() ) {
			if ( $parallel !== '' ) {
				$numCores = (int) $parallel;
			} else {
				$numCores = $worker->detectCpuCores();
			}
		}
		$numCores = max( 1, min( 20, abs( $numCores ) ) );

		// 3. Split into chunks.
		if ( $numCores > 1 ) {
			$chunkSize = (int) max( ceil( $totalFiles / $numCores ), $worker->getMinimumChunkSize() );
			$chunks    = array_chunk( $filePaths, $chunkSize );
		} else {
			$chunks = [ $filePaths ];
		}

		// 6. Either run in parallel or single-process
		if ( count( $chunks ) > 1 ) {
			$worker->runParallel( $chunks, $sourceDir, $outputDir, $verbose );
		} else {
			// Only one chunk, so single-process approach
			$worker->processFilesChunk(
				$chunks[0],
				$sourceDir,
				$outputDir,
				0,      // Current chunk index
				1,      // Total chunks
				$verbose
			);
		}

		echo "Done.\n";
	}

	/**
	 * Decide how to get a Finder:
	 * - If $options['finderPhp'] is non-empty, require that file. It must return a Finder instance.
	 * - Otherwise, build a default Finder.
	 *
	 * @param array{
	 *     sourceDir?: string,
	 *     excludes?: string[],
	 *     finderPhp?: string
	 * } $options
	 */
	private function getFinder( array $options ): Finder {
		$finderPhp = $options['finderPhp'] ?? '';
		if ( $finderPhp !== '' ) {
			$loaded = require $finderPhp;
			if ( ! $loaded instanceof Finder ) {
				fwrite( STDERR, "Error: '{$finderPhp}' did not return a Finder instance.\n" );
				exit( 1 );
			}

			return $loaded;
		}

		// Build default Finder
		$finder = new Finder();
		$finder->files()->name( '*.php' );

		$sourceDir = $options['sourceDir'] ?? '';
		if ( $sourceDir !== '' ) {
			// 1) Single-file mode?
			if ( is_file( $sourceDir ) && pathinfo( $sourceDir, PATHINFO_EXTENSION ) === 'php' ) {
				$finder->append( [ $sourceDir ] );
			} // 2) Directory mode?
			elseif ( is_dir( $sourceDir ) ) {
				$finder->in( $sourceDir );
			} else {
				fwrite( STDERR, "Error: '{$sourceDir}' is neither a PHP file nor a directory.\n" );
				exit( 1 );
			}
		}

		$excludes = $options['excludes'] ?? [];
		if ( ! empty( $excludes ) ) {
			$finder->exclude( $excludes );
		}

		return $finder;
	}
}