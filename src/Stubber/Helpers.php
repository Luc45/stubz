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
	public static function toPhpLiteral( $value ): string {
		$value = var_export( $value, true );

		$value = str_replace( 'NULL', 'null', $value );

		return $value;
	}

	/**
	 * Handle reflection exceptions and increment missingReferences
	 *
	 * @param-out array<string,int> $missingReferences
	 */
	public function handleBetterReflectionException( Throwable $ex, array &$missingReferences ): void {
		/** @var array<string,int> $missingReferences */
		if ( $ex instanceof IdentifierNotFound ) {
			$symbol = $ex->getIdentifier()->getName();
			// Force-cast to int so PHPStan knows the result is int
			$missingReferences[ $symbol ] = (int) ( $missingReferences[ $symbol ] ?? 0 ) + 1;

			return;
		}

		if ( $ex instanceof UnableToCompileNode ) {
			// No more method_exists check: always assume constantName() is available
			$symbol                       = $ex->constantName();
			$missingReferences[ $symbol ] = (int) ( $missingReferences[ $symbol ] ?? 0 ) + 1;

			return;
		}

		$cls                       = get_class( $ex );
		$missingReferences[ $cls ] = (int) ( $missingReferences[ $cls ] ?? 0 ) + 1;
	}
}