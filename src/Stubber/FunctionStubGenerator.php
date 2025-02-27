<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionFunction as BRFunction;
use Throwable;

class FunctionStubGenerator {
	/**
	 * Generate a function stub.
	 *
	 * @param-out array<string,int> $missingReferences
	 */
	public function generateFunctionStub( BRFunction $fn, array &$missingReferences ): string {
		/** @var array<string,int> $missingReferences */
		$buf       = '';

		$funcName = $fn->getName();

		$doc = $fn->getDocComment();
		if ( $doc !== null ) {
			$buf .= $doc . "\n";
		}

		foreach ( $fn->getAttributes() as $attr ) {
			$buf .= ( new AttributeStubGenerator() )->generateAttributeLine( $attr, $missingReferences ) . "\n";
		}

		$buf .= 'function ' . $funcName . '(';

		$params = [];
		foreach ( $fn->getParameters() as $param ) {
			// Pass typed $missingReferences:
			$params[] = ( new ParameterStubGenerator() )->generateParameterStub( $param, $missingReferences );
		}
		$buf .= implode( ', ', $params ) . ')';

		// Return type
		try {
			$ret = $fn->getReturnType();
			if ( $ret !== null ) {
				$buf .= ': ' . (string) $ret;
			}
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
		}

		$buf .= "\n{\n    // stub\n}\n\n";

		return $buf;
	}
}