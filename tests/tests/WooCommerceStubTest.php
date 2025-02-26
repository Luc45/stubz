<?php

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;
use Spatie\Snapshots\Driver;

/**
 * Inline custom driver to store the snapshot as a .php file,
 * but use normal "snapshot" text comparison in Spatie.
 */
class PhpSnapshotDriver implements Driver {
	public function serialize( $data ): string {
		// You could do newline normalization or other transforms if you like
		return $data;
	}

	public function extension(): string {
		return 'php';
	}

	public function match( $expected, $actual ) {
		// Uses PHPUnit's built-in string comparison
		PHPUnit\Framework\Assert::assertSame( $expected, $this->serialize( $actual ) );
	}
}

/**
 * @group slow
 * This test runs stubz.php, generates stubs in a temp folder,
 * and snapshots them as .php files with a custom driver
 * that bypasses "file extension mismatch" checks.
 */
class WooCommerceStubTest extends TestCase {
	use MatchesSnapshots;

	/**
	 * We'll dynamically set these so that each generated stub
	 * is stored in the correct subfolder (mirroring the original),
	 * and its snapshot filename is the base stub name.
	 */
	protected ?string $snapshotDir = null;
	protected ?string $snapshotId = null;

	public function testGenerateWooCommerceStubs() {
		// 1. Locate stubz.php
		$scriptPath = realpath( __DIR__ . '/../../stubz.php' );
		$this->assertNotFalse( $scriptPath, 'Could not locate stubz.php!' );

		// 2. Define source + output
		$sourceDir = realpath( __DIR__ . '/../plugins/woocommerce' );
		$this->assertNotFalse( $sourceDir, "WooCommerce folder not found: {$sourceDir}" );

		$outputDir = sys_get_temp_dir() . '/woocommerce_stubs_' . uniqid();
		@mkdir( $outputDir, 0777, true );

		// 3. Run stubz.php
		$cmd = sprintf(
			'NO_STUB_CACHE=1 php %s %s %s 2>&1',
			escapeshellarg( $scriptPath ),
			escapeshellarg( $sourceDir ),
			escapeshellarg( $outputDir )
		);
		exec( $cmd, $outputLines, $exitCode );

		$this->assertSame(
			0,
			$exitCode,
			sprintf(
				"stubz.php failed with exit code %d.\nCommand: %s\nOutput:\n%s",
				$exitCode,
				$cmd,
				implode( "\n", $outputLines )
			)
		);

		// 4. Find generated .php stubs
		$stubFiles = $this->findPhpFiles( $outputDir );
		$this->assertNotEmpty( $stubFiles, "No stub files were generated in {$outputDir}" );

		// 5. Snapshot each stub individually
		foreach ( $stubFiles as $stubPath ) {
			// e.g. "includes/class-wc-order.php"
			$relativePath = $this->makeRelative( $stubPath, $outputDir );

			// Subfolder for snapshot: e.g. "__snapshots__/plugins/woocommerce/includes"
			$this->snapshotDir = __DIR__ . '/../__snapshots__/plugins/woocommerce/'
			                     . dirname( $relativePath );

			@mkdir( $this->snapshotDir, 0777, true );

			// The base name "class-wc-order" => final snapshot file "class-wc-order.php"
			$this->snapshotId = pathinfo( $relativePath, PATHINFO_FILENAME );

			// Compare stub contents with our "PhpSnapshotDriver"
			$contents = file_get_contents( $stubPath );

			$this->assertMatchesSnapshot(
				$contents,
				new PhpSnapshotDriver()
			);
		}
	}

	/**
	 * Spatie calls this to get the directory in which to store snapshots
	 * when using "assertMatchesSnapshot()" (rather than file snapshots).
	 */
	protected function getSnapshotDirectory(): string {
		return $this->snapshotDir
			?: __DIR__ . '/../__snapshots__/plugins/woocommerce';
	}

	/**
	 * Spatie calls this to determine the base snapshot name
	 * (before adding the custom driver's extension).
	 */
	protected function getSnapshotId(): string {
		return $this->snapshotId
			?: 'default_id';
	}

	/**
	 * Locate all .php files in a directory (recursive).
	 */
	protected function findPhpFiles( string $directory ): array {
		$iterator = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator( $directory )
		);

		$files = [];
		foreach ( $iterator as $fileInfo ) {
			if ( $fileInfo->isFile() && $fileInfo->getExtension() === 'php' ) {
				$files[] = $fileInfo->getPathname();
			}
		}

		return $files;
	}

	/**
	 * Convert an absolute path to a relative path (unix style).
	 */
	protected function makeRelative( string $full, string $base ): string {
		$full = str_replace( '\\', '/', $full );
		$base = rtrim( str_replace( '\\', '/', $base ), '/' );

		return ltrim( str_replace( $base, '', $full ), '/' );
	}
}