<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionFunction as BRFunction;
use Throwable;

class FunctionStubGenerator {
	/**
	 * Generate a function stub.
	 *
	 * @param array<string,int> $missingReferences
	 */
	public function generateFunctionStub( BRFunction $fn, array &$missingReferences ): string {
		$startTime = microtime( true );
		$buf       = '';

		$funcName = $fn->getName();

		// Doc comment
		$doc = $fn->getDocComment();
		if ( $doc !== null && $doc !== '' ) {
			$buf .= $doc . "\n";
		}

		// Attributes
		foreach ( $fn->getAttributes() as $attr ) {
			$buf .= ( new AttributeStubGenerator() )->generateAttributeLine( $attr, $missingReferences ) . "\n";
		}

		$buf .= 'function ' . $funcName . '(';

		// Parameters
		$params = [];
		foreach ( $fn->getParameters() as $param ) {
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

		// Optional: log benchmarks
		( new Helpers() )->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'functionName' => $fn->getName(),
		] );

		return $buf;
	}
}