<?php

require_once __DIR__ . '/vendor/autoload.php';

trait TestHelpers {
	/**
	 * Recursively find all .php files in the given directory.
	 */
	private function findPhpFiles( string $directory ): array {
		$results = [];
		$it      = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator( $directory, \FilesystemIterator::SKIP_DOTS )
		);
		foreach ( $it as $file ) {
			if ( $file->isFile() && $file->getExtension() === 'php' ) {
				$results[] = $file->getRealPath();
			}
		}

		return $results;
	}
}