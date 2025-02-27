<?php

declare( strict_types=1 );

use Symfony\Component\Finder\Finder;

/**
 * Create or load Finder instance.
 *
 * Returns a closure that, when invoked, yields a Finder.
 */
return static function ( string $sourceDir, array $excludes, ?string $finderPhp ): Finder {
	if ( ! empty( $finderPhp ) ) {
		/** @psalm-suppress UnresolvableInclude */
		$finder = require $finderPhp;
		if ( ! $finder instanceof Finder ) {
			fwrite( STDERR, "Error: The file '{$finderPhp}' did not return a Finder instance.\n" );
			exit( 1 );
		}

		return $finder;
	}

	$finder = new Finder();
	if ( $sourceDir !== '' ) {
		$finder->files()->name( '*.php' )->in( $sourceDir );
	}
	if ( ! empty( $excludes ) ) {
		$finder->exclude( $excludes );
	}

	return $finder;
};