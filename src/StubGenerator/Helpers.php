<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use Throwable;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;

/**
 * Shared helper methods: logging, var_export styles, exception handling, etc.
 */
class Helpers {
	public static function toPhpLiteral( mixed $value ): string {
		// Handle non-array values
		if ( ! is_array( $value ) ) {
			if ( $value === null ) {
				return 'null';
			}
			$exported = var_export( $value, true );

			return str_replace( 'NULL', 'null', $exported );
		}

		// If the array is empty
		if ( empty( $value ) ) {
			return 'array()';
		}

		// Check if keys are [0..n] with no gaps
		$isSequential = array_keys( $value ) === range( 0, count( $value ) - 1 );

		// Build the array lines
		$lines = [];
		foreach ( $value as $k => $v ) {
			$valStr = self::toPhpLiteral( $v );
			if ( $isSequential ) {
				// omit the key for sequential arrays
				$lines[] = $valStr;
			} else {
				// show key => value
				$keyStr  = var_export( $k, true );
				$lines[] = "{$keyStr} => {$valStr}";
			}
		}

		// Always multiline, no indentation
		return "array(\n" . implode( ",\n", $lines ) . "\n)";
	}

	/**
	 * Public static array for collecting missing references
	 * across the entire run (if needed).
	 *
	 * @var array<string,int>
	 */
	public static array $missingReferences = [];

	/**
	 * Standard way to record a missing reference. If the symbol
	 * is missing multiple times, we just increment the count.
	 */
	public static function trackMissingReference( string $symbol, int $count = 1 ): void {
		self::$missingReferences[ $symbol ] = ( self::$missingReferences[ $symbol ] ?? 0 ) + $count;
	}

	/**
	 * Handle reflection exceptions and increment missingReferences
	 */
	public static function handleBetterReflectionException( Throwable $ex ): void {
		if ( $ex instanceof IdentifierNotFound ) {
			$symbol = $ex->getIdentifier()->getName();
			self::trackMissingReference( $symbol );

			return;
		}

		if ( $ex instanceof UnableToCompileNode ) {
			$symbol = $ex->constantName() ?? 'unknown_constant';
			self::trackMissingReference( $symbol );

			return;
		}

		$cls = get_class( $ex );
		self::trackMissingReference( $cls );
	}
}