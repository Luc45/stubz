<?php

/**
 * Shows a simple textual summary of how many files were processed, how many used cached data,
 * and how many stale cache files got removed, using colored output.
 *
 * @param array{
 *     filesTotal: int,
 *     filesWithSyms: int,
 *     cacheHits: int,
 *     cacheMisses: int,
 *     deleted: int
 * } $stats
 */
function printStats( array $stats ): void {
	echo "\n" . color( "=== Stub Generation Summary ===\n", 'light_cyan' );

	echo color( "    PHP files found: ", 'cyan' ) . $stats['filesTotal'] . "\n";
	echo color( "    With symbols:    ", 'cyan' ) . $stats['filesWithSyms'] . "\n";

	$totalParsed = $stats['cacheHits'] + $stats['cacheMisses'];
	if ( $totalParsed === 0 ) {
		echo color( "    No files had to be parsed.\n", 'yellow' );
	} else {
		// $stats['cacheHits'] and $stats['cacheMisses'] are ints, so $hitPercent is float
		$hitPercent = ( $stats['cacheHits'] / $totalParsed ) * 100;
		echo color( "    Cache hits:      ", 'green' )
		     . $stats['cacheHits']
		     . " / {$totalParsed} ("
		     . number_format( $hitPercent, 2 )
		     . "%)\n";
		echo color( "    Cache misses:    ", 'red' ) . $stats['cacheMisses'] . "\n";
	}

	echo color( "    Old cache deleted: ", 'cyan' ) . $stats['deleted'] . "\n";
	echo color( "===============================\n\n", 'light_cyan' );
}

/**
 * Applies ANSI escape codes to render text in color, if the terminal supports it. Defaults to
 * no color if an invalid color is passed.
 *
 * @param string $text
 * @param string $color
 *
 * @return string
 */
function color( string $text, string $color = 'none' ): string {
	/**
	 * @var array<string, string> $colors
	 */
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
		// '0' means reset/no color
		return $text;
	}

	// $code is now definitely a string, so string interpolation is safe
	return "\033[{$code}m{$text}\033[0m";
}

/**
 * As a small helper, detect if we can likely use carriage returns on this OS and environment.
 *
 * @return bool
 */
function canUseCarriageReturn(): bool {
	// This is naive. Adjust as needed for your environment.
	if ( stripos( PHP_OS, 'WIN' ) === 0 ) {
		// Windows: often not well-supported
		return false;
	}
	if ( function_exists( 'posix_isatty' ) && defined( 'STDOUT' ) ) {
		return posix_isatty( STDOUT );
	}

	// If none of these checks exist, fallback
	return true;
}

/**
 * Create (and optionally immediately display) a progress bar context.
 * If $useCR is true, we do single-line progress updates with "\r".
 * If $useCR is false, we do multi-line updates, printing once every $stepSize steps.
 *
 * @param int $total
 * @param int $stepSize
 * @param bool $useCR
 *
 * @return array<string,mixed> A context array you must pass to other functions below.
 */
function startProgressBarContext( int $total, int $stepSize, bool $useCR ): array {
	// If carriage return is supported, we don’t need stepSize for anything:
	if ( $useCR ) {
		$stepSize = 1;
	}

	// Create an associative array with relevant data.
	$ctx = [
		'current'  => 0,
		'total'    => $total,
		'useCR'    => $useCR,
		'stepSize' => $stepSize,
	];

	// Optionally display initial 0% bar:
	updateProgressBar( $ctx, 0 );

	return $ctx;
}

/**
 * Advance the progress bar to $current or by $amount.
 * (Here we do "absolute" logic: we set the bar to exactly $newCurrent)
 *
 * @param array<string,mixed> $ctx
 * @param int $newCurrent
 */
function advanceProgressBar( array &$ctx, int $newCurrent ): void {
	if ( $newCurrent > $ctx['total'] ) {
		$newCurrent = $ctx['total'];
	}
	$ctx['current'] = $newCurrent;
	updateProgressBar( $ctx, $newCurrent );
}

/**
 * Finish the progress bar at 100%, and print a final newline if we’re using single-line mode.
 *
 * @param array<string,mixed> $ctx
 */
function finishProgressBar( array &$ctx ): void {
	updateProgressBar( $ctx, $ctx['total'] );
	if ( $ctx['useCR'] ) {
		echo "\n"; // finalize with a newline
	}
}

/**
 * Actually renders the progress bar. If $useCR is true, we overwrite the same line using "\r".
 * Otherwise we print a new line every $stepSize steps, plus always at 100%.
 *
 * @param array<string,mixed> $ctx
 * @param int $current
 */
function updateProgressBar( array $ctx, int $current ): void {
	$total    = $ctx['total'];
	$useCR    = $ctx['useCR'];
	$stepSize = $ctx['stepSize'];

	if ( $total <= 0 ) {
		return;
	}
	if ( $current > $total ) {
		$current = $total;
	}

	$percent  = ( $current / $total ) * 100;
	$progress = (int) round( $percent );
	$barWidth = 50; // how wide the text bar is
	$filled   = (int) floor( $progress / ( 100 / $barWidth ) );
	$bar      = str_repeat( '#', $filled ) . str_repeat( '-', $barWidth - $filled );

	$display = sprintf( "[%s] %3d%% (%d/%d)", $bar, $progress, $current, $total );

	if ( $useCR ) {
		// Single-line mode with carriage return
		echo "\r" . $display;
		flush();
	} else {
		// Multi-line mode: only print if we hit step boundary or final
		if ( $current % $stepSize === 0 || $current === $total ) {
			echo $display . "\n";
		}
	}
}

function parseStep( string $label, callable $reflectionCall ): array {
	$initialLine = "Processing $label";
	echo $initialLine;
	$start = microtime( true );

	$result = $reflectionCall();

	$elapsed = round( microtime( true ) - $start, 2 );
	echo str_pad( "\r✓ $label [{$elapsed}s]\n", strlen( $initialLine ) + 10, ' ', STR_PAD_RIGHT );

	return $result;
}