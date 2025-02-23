<?php

use Symfony\Component\Finder\Finder;

/**
 * Computes an MD5 checksum of all files matched by the Finder.
 * Files are sorted by path so the checksum is consistent.
 *
 * @return string the MD5 hash of all the file contents.
 */
function computeChecksum( Finder $finder ): string {
	$paths = [];

	foreach ( $finder as $file ) {
		if ( ! $file->isFile() || $file->getExtension() !== 'php' ) {
			continue;
		}
		$realpath = $file->getRealPath();
		if ( $realpath ) {
			$paths[] = $realpath;
		}
	}

	sort( $paths, SORT_STRING );

	$md5ctx = hash_init( 'md5' );
	foreach ( $paths as $p ) {
		hash_update_file( $md5ctx, $p );
	}

	return hash_final( $md5ctx );
}