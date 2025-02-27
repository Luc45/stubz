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
	public static function toPhpLiteral( $value ): string {
		$value = var_export( $value, true );

		$value = str_replace( 'NULL', 'null', $value );

		return $value;
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
	 *
	 * @param-out array<string,int> $missingReferences
	 */
	public static function handleBetterReflectionException( Throwable $ex ): void {
		if ( $ex instanceof IdentifierNotFound ) {
			$symbol = $ex->getIdentifier()->getName();
			self::trackMissingReference( $symbol );

			return;
		}

		if ( $ex instanceof UnableToCompileNode ) {
			$symbol = $ex->constantName();
			self::trackMissingReference( $symbol );

			return;
		}

		$cls = get_class( $ex );
		self::trackMissingReference( $cls );
	}
}