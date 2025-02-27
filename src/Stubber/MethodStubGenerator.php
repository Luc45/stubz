<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionMethod as BRMethod;
use Throwable;

class MethodStubGenerator {
	/**
	 * Generate a method stub.
	 */
	public function generateMethodStub( BRMethod $method ): string {
		$buf       = '';

		$doc = $method->getDocComment();
		if ( $doc !== null ) {
			foreach ( explode( "\n", $doc ) as $line ) {
				$buf .= "    {$line}\n";
			}
		}

		foreach ( $method->getAttributes() as $attr ) {
			$buf .= '    ' . ( new AttributeStubGenerator() )->generateAttributeLine( $attr ) . "\n";
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
			$params[] = ( new ParameterStubGenerator() )->generateParameterStub( $pm );
		}
		$buf .= implode( ', ', $params ) . ')';

		try {
			$ret = $method->getReturnType();
			if ( $ret !== null ) {
				$buf .= ': ' . (string) $ret;
			}
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
		}

		if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
			$buf .= ";\n\n";
		} else {
			$buf .= "\n    {\n        // stub\n    }\n\n";
		}

		return $buf;
	}
}