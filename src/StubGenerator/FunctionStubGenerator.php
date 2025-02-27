<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use Roave\BetterReflection\Reflection\ReflectionFunction;
use Throwable;

class FunctionStubGenerator {
	/**
	 * Generate a function stub.
	 */
	public function generateFunctionStub( ReflectionFunction $fn ): string {
		$buf       = '';

		$funcName = $fn->getName();

		$doc = $fn->getDocComment();
		if ( $doc !== null ) {
			$buf .= $doc . "\n";
		}

		foreach ( $fn->getAttributes() as $attr ) {
			$buf .= ( new AttributeStubGenerator() )->generateAttributeLine( $attr ) . "\n";
		}

		$buf .= 'function ' . $funcName . '(';

		$params = [];
		foreach ( $fn->getParameters() as $param ) {
			$params[] = ( new ParameterStubGenerator() )->generateParameterStub( $param );
		}
		$buf .= implode( ', ', $params ) . ')';

		// Return type
		try {
			$ret = $fn->getReturnType();
			if ( $ret !== null ) {
				$buf .= ': ' . (string) $ret;
			}
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
		}

		$buf .= "\n{\n    // stub\n}\n\n";

		return $buf;
	}
}