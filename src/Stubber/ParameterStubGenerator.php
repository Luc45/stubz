<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionParameter as BRParameter;
use Throwable;

class ParameterStubGenerator {
	/**
	 * Generate a parameter stub.
	 *
	 * @param array<string,int> $missingReferences
	 */
	public function generateParameterStub( BRParameter $param, array &$missingReferences ): string {
		$startTime = microtime( true );

		try {
			$typeObj = $param->getType();
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
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
				$defVal = $param->getDefaultValue();
				$valStr = ( new Helpers() )->convertVarExportToWpStyle( $defVal );
				$out    .= ' = ' . $valStr;
			} catch ( Throwable $ex ) {
				( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
			}
		}

		( new Helpers() )->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'declaringFunction' => $param->getDeclaringFunction()->getName(),
			'paramName'         => $param->getName(),
		] );

		return $out;
	}
}