<?php

use Symfony\Component\Finder\Finder;

/**
 * Create or load Finder instance.
 *
 * @param string $sourceDir Empty string if using custom finder
 * @param array<string> $excludes
 * @param string|null $finderPhp
 */
function makeFinder( string $sourceDir, array $excludes, ?string $finderPhp ): Finder {
	if ( $finderPhp !== null ) {
		// If a custom Finder is loaded, it must set up ->in(...) calls, etc.
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
}