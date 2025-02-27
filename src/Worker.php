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
	 */
	public function runParallel(
		array $chunks,
		string $sourceDir,
		string $outputDir,
		bool $verbose
	): void {
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

		if ( ! $parallelSupported ) {
			// Single-process fallback
			$allFiles = [];
			foreach ( $chunks as $ch ) {
				$allFiles = array_merge( $allFiles, $ch );
			}
			$this->processFilesChunk( $allFiles, $sourceDir, $outputDir, 0, 1, $verbose );

			return;
		}

		$numChunks = count( $chunks );
		$numCores  = $this->detectCpuCores();
		// Sum the number of files across chunks:
		$totalFiles = 0;
		foreach ( $chunks as $ch ) {
			$totalFiles += count( $ch );
		}

		if ( $verbose ) {
			$filesPerProcess = (int) ceil( $totalFiles / $numChunks );
			echo "Running in parallel with {$numCores} CPU cores, "
			     . "{$totalFiles} total files, {$numChunks} chunks, ~{$filesPerProcess} files/chunk.\n";
		}

		$childPids = [];
		$tmpDir    = sys_get_temp_dir() . '/flat-stubz-' . uniqid();
		mkdir( $tmpDir, 0755, true );

		foreach ( $chunks as $idx => $chunkFiles ) {
			$pid = pcntl_fork();
			if ( $pid === - 1 ) {
				fwrite( STDERR, "Error: pcntl_fork() failed.\n" );
				exit( 1 );
			}
			if ( $pid === 0 ) {
				// CHILD:
				/** @var array<string,int> $childMissing */
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

				file_put_contents( $tmpDir . "/refs-{$idx}.json", json_encode( $childMissing ) );
				exit( $exitCode );
			}
			// PARENT:
			$childPids[] = $pid;
		}

		// PARENT waits:
		$chunksDone = 0;
		foreach ( $childPids as $cpid ) {
			// Initialize $status as int, so pcntl_wifexited sees an int
			$status = 0;
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

			if ( ! $verbose ) {
				$chunksDone ++;
				$this->printChunkProgressBar( $chunksDone, $numChunks );
			}
		}

		// Merge missing refs
		for ( $i = 0; $i < $numChunks; $i ++ ) {
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
		}

		if ( ! $verbose ) {
			echo "\n";
		}
	}

	/**
	 * Process a chunk of file paths. Reflect and generate stubs.
	 *
	 * @param array<int,string> $filePaths
	 */
	public function processFilesChunk(
		array $filePaths,
		string $sourceDir,
		string $outputDir,
		int $chunkIndex,
		int $totalChunks,
		bool $verbose
	): int {
		/** @var callable(string,array<string,int>):string $fileStubber */
		$fileStubber = require __DIR__ . '/file-stubber.php';

		$total = count( $filePaths );
		if ( $verbose ) {
			echo "[Chunk {$chunkIndex}] Handling {$total} files...\n";
		}

		$i = 0;
		foreach ( $filePaths as $realpath ) {
			$i ++;

			if ( $verbose ) {
				if ( $realpath === '' ) {
					echo "[Chunk {$chunkIndex}] [{$i}/{$total}] Skipped empty realpath?\n";
					continue;
				}
			} else {
				// If single-process (or if you want chunk-level progress in the child),
				// show file-based progress
				if ( $totalChunks === 1 ) {
					$this->printFileProgressBar( $i, $total );
				}
			}

			try {
				$stubBody = $fileStubber( $realpath );
				if ( trim( $stubBody ) === '' ) {
					if ( $verbose && $realpath !== '' ) {
						echo "[Chunk {$chunkIndex}] [{$i}/{$total}] Skipped empty: "
						     . str_replace( $sourceDir, '', $realpath ) . "\n";
					}
					continue;
				}

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
				fwrite( STDERR, "[Chunk {$chunkIndex}] Error processing file {$realpath}: {$ex->getMessage()}\n"
				                . "Trace:\n{$ex->getTraceAsString()}\n"
				);

				return 1;
			}
		}

		if ( $verbose ) {
			echo "[Chunk {$chunkIndex}] Done.\n";
		} else {
			if ( $totalChunks === 1 ) {
				echo "\n";
			}
		}

		return 0;
	}

	/**
	 * Attempt to detect CPU cores, fallback=2 if unknown.
	 */
	public function detectCpuCores(): int {
		try {
			$count = ( new CpuCoreCounter() )->getCount();

			return $count; // If phpstan complains int<1,max> always > 0, it’s safe just to return it
		} catch ( \Exception $e ) {
			fwrite( STDERR, "Warning: Failed to detect CPU cores: {$e->getMessage()}\n" );
		}

		return 2;
	}

	/**
	 * Kill remaining children if one fails.
	 *
	 * @param array<int,int> $childPids
	 */
	private function killRemainingChildren( array $childPids, int $failedPid ): void {
		if ( ! function_exists( 'posix_kill' ) ) {
			return;
		}
		foreach ( $childPids as $otherPid ) {
			if ( $otherPid !== $failedPid ) {
				@posix_kill( $otherPid, SIGTERM );
			}
		}
	}

	/**
	 * Print a "chunk-level" progress bar (for parallel usage in the parent).
	 */
	private function printChunkProgressBar( int $chunksDone, int $totalChunks ): void {
		$barSize   = 50;
		$completed = (int) round( $barSize * ( $chunksDone / $totalChunks ) );
		$bar       = str_repeat( '=', $completed ) . str_repeat( ' ', $barSize - $completed );

		printf( "\rChunks progress: [%s] %d/%d", $bar, $chunksDone, $totalChunks );

		if ( $chunksDone === $totalChunks ) {
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

		printf( "\rProcessing files: [%s] %d/%d", $bar, $filesDone, $totalFiles );
		if ( $filesDone === $totalFiles ) {
			echo "\n";
		}
	}
}