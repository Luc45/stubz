<?php

/**
 * Shows a simple textual summary of how many files were processed, how many used cached data,
 * and how many stale cache files got removed, using colored output.
 */
function printStats( array $stats ): void {
	echo "\n" . color( "=== Stub Generation Summary ===\n", 'light_cyan' );

	echo color( "    PHP files found: ", 'cyan' ) . $stats['filesTotal'] . "\n";
	echo color( "    With symbols:    ", 'cyan' ) . $stats['filesWithSyms'] . "\n";

	$totalParsed = $stats['cacheHits'] + $stats['cacheMisses'];
	if ( $totalParsed === 0 ) {
		echo color( "    No files had to be parsed.\n", 'yellow' );
	} else {
		$hitPercent = ( $stats['cacheHits'] / $totalParsed ) * 100;
		echo color( "    Cache hits:      ", 'green' )
		     . $stats['cacheHits'] . " / {$totalParsed} ("
		     . number_format( $hitPercent, 2 ) . "%)\n";
		echo color( "    Cache misses:    ", 'red' ) . $stats['cacheMisses'] . "\n";
	}

	echo color( "    Old cache deleted: ", 'cyan' ) . $stats['deleted'] . "\n";
	echo color( "===============================\n\n", 'light_cyan' );
}

/**
 * Applies ANSI escape codes to render text in color, if the terminal supports it. Defaults to
 * no color if an invalid color is passed.
 */
function color( string $text, string $color = 'none' ): string {
	static $colors = [
		'none'          => '0',
		'black'         => '0;30',
		'red'           => '0;31',
		'green'         => '0;32',
		'yellow'        => '0;33',
		'blue'          => '0;34',
		'magenta'       => '0;35',
		'cyan'          => '0;36',
		'white'         => '0;37',
		'light_gray'    => '0;37',
		'light_red'     => '1;31',
		'light_green'   => '1;32',
		'light_yellow'  => '1;33',
		'light_blue'    => '1;34',
		'light_magenta' => '1;35',
		'light_cyan'    => '1;36',
		'light_white'   => '1;37',
	];

	$code = $colors[ $color ] ?? $colors['none'];
	if ( $code === '0' ) {
		return $text;
	}

	return "\033[{$code}m{$text}\033[0m";
}