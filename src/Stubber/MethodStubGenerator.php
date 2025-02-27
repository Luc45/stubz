<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionMethod as BRMethod;
use Throwable;

class MethodStubGenerator {
	/**
	 * Generate a method stub.
	 *
	 * @param array<string,int> $missingReferences
	 */
	public function generateMethodStub( BRMethod $method, array &$missingReferences ): string {
		$startTime = microtime( true );
		$buf       = '';

		$doc = $method->getDocComment();
		if ( $doc !== null && $doc !== '' ) {
			foreach ( explode( "\n", $doc ) as $line ) {
				$buf .= "    {$line}\n";
			}
		}

		foreach ( $method->getAttributes() as $attr ) {
			$buf .= '    ' . ( new AttributeStubGenerator() )->generateAttributeLine( $attr, $missingReferences ) . "\n";
		}

		if ( $method->isPrivate() ) {
			$buf .= '    private ';
		} elseif ( $method->isProtected() ) {
			$buf .= '    protected ';
		} else {
			$buf .= '    public ';
		}
		if ( $method->isStatic() ) {
			$buf .= 'static ';
		}
		if ( $method->isFinal() && ! $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
			$buf .= 'final ';
		}
		if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
			$buf .= 'abstract ';
		}

		$buf    .= 'function ' . $method->getName() . '(';
		$params = [];
		foreach ( $method->getParameters() as $pm ) {
			$params[] = ( new ParameterStubGenerator() )->generateParameterStub( $pm, $missingReferences );
		}
		$buf .= implode( ', ', $params ) . ')';

		try {
			$ret = $method->getReturnType();
			if ( $ret !== null ) {
				$buf .= ': ' . (string) $ret;
			}
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
		}

		if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
			$buf .= ";\n\n";
		} else {
			$buf .= "\n    {\n        // stub\n    }\n\n";
		}

		( new Helpers() )->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'className'  => $method->getDeclaringClass()->getName(),
			'methodName' => $method->getName(),
		] );

		return $buf;
	}
}