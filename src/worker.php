<?php

/**
 * If multiple chunks, fork child processes. Merge child missing-refs data.
 *
 * @param array<int,array<int,string>> $chunks
 * @param string $sourceDir
 * @param string $outputDir
 * @param array<string,int> $missingReferences
 */
function runParallel(
	array $chunks,
	string $sourceDir,
	string $outputDir,
	array &$missingReferences
): void {
	$childPids = [];
	$tmpDir    = sys_get_temp_dir() . '/flat-stubz-' . uniqid();
	mkdir( $tmpDir, 0777, true );

	foreach ( $chunks as $idx => $chunkFiles ) {
		$pid = pcntl_fork();
		if ( $pid === - 1 ) {
			fwrite( STDERR, "Error: pcntl_fork() failed.\n" );
			exit( 1 );
		}
		if ( $pid === 0 ) {
			// Child
			$childMissing = [];
			processFilesChunk( $chunkFiles, $sourceDir, $outputDir, $childMissing, $idx, count( $chunks ) );
			file_put_contents( $tmpDir . "/refs-{$idx}.json", json_encode( $childMissing ) );
			exit( 0 );
		}
		$childPids[] = $pid;
	}

	// Wait + merge
	foreach ( $childPids as $cpid ) {
		pcntl_waitpid( $cpid, $status );
	}
	// Merge
	foreach ( range( 0, count( $chunks ) - 1 ) as $i ) {
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
}

/**
 * Process a chunk of file paths. Reflect and generate stubs.
 *
 * @param array<int,string> $filePaths
 * @param string $sourceDir
 * @param string $outputDir
 * @param array<string,int> $missingReferences
 * @param int $chunkIndex
 * @param int $totalChunks
 */
function processFilesChunk(
	array $filePaths,
	string $sourceDir,
	string $outputDir,
	array &$missingReferences,
	int $chunkIndex,
	int $totalChunks
): void {
	$br         = new \Roave\BetterReflection\BetterReflection();
	$astLocator = $br->astLocator();
	$internal   = new \Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator( $astLocator, $br->sourceStubber() );

	echo "[Chunk {$chunkIndex}] Handling " . count( $filePaths ) . " files...\n";

	$i = 0;
	foreach ( $filePaths as $realpath ) {
		$i ++;
		if ( $realpath === '' ) {
			// Shouldn't happen, but just in case
			echo "[Chunk {$chunkIndex}] [{$i}/" . count( $filePaths ) . "] Skipped empty realpath?\n";
			continue;
		}

		$fileLocator = new \Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator( $realpath, $astLocator );
		$aggregate   = new \Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator( [ $internal, $fileLocator ] );
		$reflector   = new \Roave\BetterReflection\Reflector\DefaultReflector( $aggregate );

		$allClasses   = $reflector->reflectAllClasses();
		$allFunctions = $reflector->reflectAllFunctions();
		$allConstants = $reflector->reflectAllConstants();

		usort( $allClasses, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		usort( $allFunctions, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		usort( $allConstants, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );

		$stubBody = '';
		foreach ( $allClasses as $class ) {
			$stubBody .= generateClassStub( $class, $missingReferences );
		}
		foreach ( $allFunctions as $fn ) {
			$stubBody .= generateFunctionStub( $fn, $missingReferences );
		}
		foreach ( $allConstants as $cst ) {
			$stubBody .= generateConstantStub( $cst, $missingReferences );
		}

		if ( trim( $stubBody ) === '' ) {
			echo "[Chunk {$chunkIndex}] [{$i}/" . count( $filePaths ) . "] Skipped empty: " . str_replace( $sourceDir, '', $realpath ) . "\n";
			continue;
		}

		$stubContent  = "<?php\n\n" . $stubBody;
		$relativePath = ltrim( str_replace( $sourceDir, '', $realpath ), DIRECTORY_SEPARATOR );
		$targetPath   = $outputDir . DIRECTORY_SEPARATOR . $relativePath;

		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );

		echo "[Chunk {$chunkIndex}] [{$i}/" . count( $filePaths ) . "] Wrote stub for: " . str_replace( $sourceDir, '', $realpath ) . "\n";
	}

	echo "[Chunk {$chunkIndex}] Done.\n";
}

/**
 * Attempt to detect CPU cores, fallback=2 if unknown
 */
function detectCpuCores(): int {
	$nproc = @shell_exec( 'nproc 2>/dev/null' );
	$nproc = is_string( $nproc ) ? trim( $nproc ) : '';
	if ( $nproc !== '' && ctype_digit( $nproc ) ) {
		return max( 1, (int) $nproc );
	}

	$sysctl = @shell_exec( 'sysctl -n hw.ncpu 2>/dev/null' );
	$sysctl = is_string( $sysctl ) ? trim( $sysctl ) : '';
	if ( $sysctl !== '' && ctype_digit( $sysctl ) ) {
		return max( 1, (int) $sysctl );
	}

	return 2;
}