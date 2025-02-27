<?php

declare( strict_types=1 );

namespace Stubz;

use Fidry\CpuCoreCounter\CpuCoreCounter;

class Worker {
	/**
	 * Minimum chunk size for parallel mode.
	 */
	public static function getMinimumChunkSize(): int {
		return 100;
	}

	/**
	 * Run stubs in parallel if pcntl is available and more than one chunk exists,
	 * otherwise fall back to single-process mode.
	 *
	 * @param array<int,array<int,string>> $chunks
	 * @param array<string,int> $missingReferences
	 */
	public function runParallel(
		array $chunks,
		string $sourceDir,
		string $outputDir,
		array &$missingReferences,
		bool $verbose
	): void {
		// Check required extensions
		$parallelSupported = true;
		if ( ! function_exists( 'pcntl_fork' ) ) {
			if ( $verbose ) {
				fwrite( STDERR, "Warning: pcntl extension not available. Falling back to single-process.\n" );
			}
			$parallelSupported = false;
		}
		if ( ! function_exists( 'posix_kill' ) ) {
			if ( $verbose ) {
				fwrite( STDERR, "Warning: posix extension not available. Falling back to single-process.\n" );
			}
			$parallelSupported = false;
		}

		// If parallel not supported => single-process
		if ( ! $parallelSupported ) {
			$allFiles = [];
			foreach ( $chunks as $chunk ) {
				$allFiles = array_merge( $allFiles, $chunk );
			}
			$this->processFilesChunk( $allFiles, $sourceDir, $outputDir, $missingReferences, 0, 1, $verbose );

			return;
		}

		// Actually run in parallel
		$numChunks  = count( $chunks );
		$numCores   = $this->detectCpuCores();
		$totalFiles = array_sum( array_map( 'count', $chunks ) );

		if ( $verbose ) {
			// In verbose mode, print some stats
			$filesPerProcess = (int) ceil( $totalFiles / $numChunks );
			echo "Running in parallel with {$numCores} CPU cores, "
			     . "{$totalFiles} total files, {$numChunks} chunks, ~{$filesPerProcess} files/chunk.\n";
		}

		$childPids = [];
		$tmpDir    = sys_get_temp_dir() . '/flat-stubz-' . uniqid();
		mkdir( $tmpDir, 0755, true );

		// Fork a child for each chunk
		foreach ( $chunks as $idx => $chunkFiles ) {
			$pid = pcntl_fork();
			if ( $pid === - 1 ) {
				fwrite( STDERR, "Error: pcntl_fork() failed.\n" );
				exit( 1 );
			}
			if ( $pid === 0 ) {
				// Child process: do the stub generation
				$childMissing = [];
				$exitCode     = $this->processFilesChunk(
					$chunkFiles,
					$sourceDir,
					$outputDir,
					$childMissing,
					$idx,
					$numChunks,
					$verbose
				);

				// Write missing refs to a JSON file so parent can merge them
				file_put_contents( $tmpDir . "/refs-{$idx}.json", json_encode( $childMissing ) );
				exit( $exitCode );
			}
			$childPids[] = $pid;
		}

		// Parent: wait for children and handle chunk-level progress if not verbose
		$chunksDone = 0;
		foreach ( $childPids as $cpid ) {
			pcntl_waitpid( $cpid, $status );

			if ( ! pcntl_wifexited( $status ) ) {
				fwrite( STDERR, "Child process {$cpid} died abnormally.\n" );
				$this->killRemainingChildren( $childPids, $cpid );
				exit( 1 );
			}
			$exitCode = pcntl_wexitstatus( $status );
			if ( $exitCode !== 0 ) {
				fwrite( STDERR, "Child process {$cpid} exited with code {$exitCode}.\n" );
				$this->killRemainingChildren( $childPids, $cpid );
				exit( 1 );
			}

			// Update chunk-level progress if not verbose
			if ( ! $verbose ) {
				$chunksDone ++;
				$this->printChunkProgressBar( $chunksDone, $numChunks );
			}
		}

		// If all children succeeded, merge their missingReferences
		foreach ( range( 0, $numChunks - 1 ) as $i ) {
			$jsonPath = $tmpDir . "/refs-{$i}.json";
			if ( ! is_file( $jsonPath ) ) {
				continue;
			}
			$data = file_get_contents( $jsonPath );
			if ( ! is_string( $data ) ) {
				continue;
			}
			$arr = json_decode( $data, true );
			if ( ! is_array( $arr ) ) {
				continue;
			}
			foreach ( $arr as $sym => $count ) {
				if ( ! isset( $missingReferences[ $sym ] ) ) {
					$missingReferences[ $sym ] = 0;
				}
				$missingReferences[ $sym ] += (int) $count;
			}
		}

		if ( ! $verbose ) {
			// End the progress bar line
			echo "\n";
		}
	}

	/**
	 * Process a chunk of file paths. Reflect and generate stubs.
	 *
	 * Returns 0 on success or a non-zero integer on error.
	 *
	 * @param array<int,string> $filePaths
	 * @param array<string,int> $missingReferences
	 */
	public function processFilesChunk(
		array $filePaths,
		string $sourceDir,
		string $outputDir,
		array &$missingReferences,
		int $chunkIndex,
		int $totalChunks,
		bool $verbose
	): int {
		// We'll load the single-file stubber closure
		$fileStubber = require __DIR__ . '/file-stubber.php'; // adjust path if needed

		// If verbose, we do the original line-by-line logs
		if ( $verbose ) {
			echo "[Chunk {$chunkIndex}] Handling " . count( $filePaths ) . " files...\n";
		}

		$total = count( $filePaths );

		// We'll track how many we've processed to show a local progress bar (single-process mode)
		// or file logs (verbose mode).
		$i = 0;
		foreach ( $filePaths as $realpath ) {
			$i ++;

			if ( $verbose ) {
				// Detailed line-by-line
				if ( $realpath === '' ) {
					echo "[Chunk {$chunkIndex}] [{$i}/{$total}] Skipped empty realpath?\n";
					continue;
				}
			} else {
				// Non-verbose single-process: show progress if we're *not* in parallel,
				// or if we are in parallel (child) and still want a local file-based bar.
				// But typically, for parallel child we do no output to avoid interleaving.
				if ( $totalChunks === 1 ) {
					// Single-process run => show a file-level progress bar
					$this->printFileProgressBar( $i, $total );
				}
			}

			// Generate stubs
			try {
				$stubBody = $fileStubber( $realpath, $missingReferences );

				if ( trim( $stubBody ) === '' ) {
					if ( $verbose && $realpath !== '' ) {
						echo "[Chunk {$chunkIndex}] [{$i}/{$total}] Skipped empty: "
						     . str_replace( $sourceDir, '', $realpath ) . "\n";
					}
					continue;
				}

				// Write to output
				$relativePath = ltrim( str_replace( $sourceDir, '', $realpath ), DIRECTORY_SEPARATOR );
				$targetPath   = $outputDir . DIRECTORY_SEPARATOR . $relativePath;

				if ( ! is_dir( dirname( $targetPath ) ) ) {
					mkdir( dirname( $targetPath ), 0755, true );
				}
				file_put_contents( $targetPath, $stubBody );

				if ( $verbose && $realpath !== '' ) {
					echo "[Chunk {$chunkIndex}] [{$i}/{$total}] Wrote stub for: "
					     . str_replace( $sourceDir, '', $realpath ) . "\n";
				}
			} catch ( \Throwable $ex ) {
				fwrite( STDERR, "[Chunk {$chunkIndex}] Error processing file {$realpath}: {$ex->getMessage()}\n" .
					"Trace:\n{$ex->getTraceAsString()}\n" );

				return 1; // Non-zero => error
			}
		}

		if ( $verbose ) {
			echo "[Chunk {$chunkIndex}] Done.\n";
		} else {
			// If single-process and we've been printing a progress bar,
			// end the line after the loop
			if ( $totalChunks === 1 ) {
				echo "\n";
			}
		}

		return 0; // success
	}

	/**
	 * Attempt to detect CPU cores, fallback=2 if unknown.
	 */
	public function detectCpuCores(): int {
		try {
			$count = ( new CpuCoreCounter() )->getCount();
			if ( $count > 0 ) {
				return $count;
			}
		} catch ( \Exception $e ) {
			fwrite( STDERR, "Warning: Failed to detect CPU cores: {$e->getMessage()}\n" );
		}

		return 2; // fallback
	}

	/**
	 * Kill remaining children if one fails (posix_kill only if available).
	 *
	 * @param array<int,int> $childPids
	 */
	private function killRemainingChildren( array $childPids, int $failedPid ): void {
		foreach ( $childPids as $otherPid ) {
			if ( $otherPid !== $failedPid ) {
				@posix_kill( $otherPid, SIGTERM );
			}
		}
	}

	/**
	 * Print a "chunk-level" progress bar (for parallel usage in the parent).
	 * Called each time a child chunk completes.
	 */
	private function printChunkProgressBar( int $chunksDone, int $totalChunks ): void {
		// E.g., just do a simple bar with 1 '=' per chunk
		// For example, a 50 char bar max:
		$barSize   = 50;
		$completed = (int) round( $barSize * ( $chunksDone / $totalChunks ) );
		$bar       = str_repeat( '=', $completed ) . str_repeat( ' ', $barSize - $completed );

		// Move cursor to the start of the line (\r) and overwrite
		printf( "\rChunks progress: [%s] %d/%d", $bar, $chunksDone, $totalChunks );

		// If done, we won't add a newline yet, because we do so after the loop
		if ( $chunksDone === $totalChunks ) {
			// Force a flush
			fflush( STDOUT );
		}
	}

	/**
	 * Print a file-level progress bar for single-process mode (non-verbose).
	 */
	private function printFileProgressBar( int $filesDone, int $totalFiles ): void {
		$barSize   = 50;
		$completed = (int) round( $barSize * ( $filesDone / $totalFiles ) );
		$bar       = str_repeat( '=', $completed ) . str_repeat( ' ', $barSize - $completed );

		// Overwrite same line
		printf( "\rProcessing files: [%s] %d/%d", $bar, $filesDone, $totalFiles );

		if ( $filesDone === $totalFiles ) {
			// On final iteration, break line
			echo "\n";
		}
	}
}