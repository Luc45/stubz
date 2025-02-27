<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionParameter as BRParameter;
use Throwable;

class ParameterStubGenerator {
	/**
	 * Generate a parameter stub.
	 */
	public function generateParameterStub( BRParameter $param ): string {
		try {
			$typeObj = $param->getType();
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
			$typeObj = null;
		}
		$out = $typeObj ? ( (string) $typeObj . ' ' ) : '';

		if ( $param->isPassedByReference() ) {
			$out .= '&';
		}
		if ( $param->isVariadic() ) {
			$out .= '...';
		}
		$out .= '$' . $param->getName();

		if ( $param->isDefaultValueAvailable() ) {
			try {
				$out    .= ' = ' . Helpers::toPhpLiteral( $param->getDefaultValue() );
			} catch ( Throwable $ex ) {
				Helpers::handleBetterReflectionException( $ex );
			}
		}

		return $out;
	}
}