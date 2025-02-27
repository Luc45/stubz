<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Throwable;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;

/**
 * Shared helper methods: logging, var_export styles, exception handling, etc.
 */
class Helpers {
	/** @var resource|null */
	private static $benchmarkHandle = null;

	/**
	 * Convert var_export output to WP style
	 * - Lowercase 'NULL' => 'null'
	 * - Keep array (\n ) formatting
	 */
	public function convertVarExportToWpStyle( $value ): string {
		$out = var_export( $value, true );
		$out = str_ireplace( 'NULL', 'null', $out );

		// Remove trailing whitespace before closing parenthesis
		$out = (string) preg_replace( '/\)(\s*)$/', ')', $out );

		return $out;
	}

	/**
	 * Log benchmarks if they take >= 1s
	 *
	 * @param array<string,mixed> $context
	 */
	public function logBenchmark(
		string $functionName,
		float $startTime,
		float $endTime,
		array $context = []
	): void {
		$duration = $endTime - $startTime;
		if ( $duration < 1.0 ) {
			return;
		}
		if ( ! is_resource( self::$benchmarkHandle ) ) {
			$fp = @fopen( __DIR__ . '/../../../stub-benchmark.log', 'ab' );
			if ( is_resource( $fp ) ) {
				self::$benchmarkHandle = $fp;
			} else {
				return;
			}
		}
		$time    = date( 'Y-m-d H:i:s' );
		$details = json_encode( $context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) ?: '';
		fwrite(
			self::$benchmarkHandle,
			"[{$time}] {$functionName} took " . round( $duration, 4 ) . "s, context={$details}\n"
		);
		fflush( self::$benchmarkHandle );
	}

	/**
	 * Handle reflection exceptions and increment missingReferences
	 *
	 * @param array<string,int> $missingReferences
	 */
	public function handleBetterReflectionException( Throwable $ex, array &$missingReferences ): void {
		$startTime = microtime( true );

		if ( $ex instanceof IdentifierNotFound ) {
			$symbol                       = $ex->getIdentifier()->getName();
			$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
			$this->logBenchmark( __METHOD__, $startTime, microtime( true ), [
				'exceptionType' => get_class( $ex ),
				'symbol'        => $symbol,
			] );

			return;
		}

		if ( $ex instanceof UnableToCompileNode ) {
			$cName                        = method_exists( $ex, 'constantName' ) ? $ex->constantName() : null;
			$symbol                       = $cName && $cName !== '' ? $cName : 'UnknownConstant';
			$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
			$this->logBenchmark( __METHOD__, $startTime, microtime( true ), [
				'exceptionType' => get_class( $ex ),
				'symbol'        => $symbol,
			] );

			return;
		}

		$cls                       = get_class( $ex );
		$missingReferences[ $cls ] = ( $missingReferences[ $cls ] ?? 0 ) + 1;

		$this->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'exceptionType' => $cls,
		] );
	}
}