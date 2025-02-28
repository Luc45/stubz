<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use Roave\BetterReflection\Reflection\ReflectionMethod;
use Throwable;

class MethodStubGenerator {
	/**
	 * Generate a method stub.
	 */
	public function generateMethodStub( ReflectionMethod $method ): string {
		$buf = '';

		$doc = $method->getDocComment();
		if ( $doc !== null ) {
			foreach ( explode( "\n", $doc ) as $line ) {
				$buf .= "    {$line}\n";
			}
		}

		foreach ( $method->getAttributes() as $attr ) {
			$buf .= '    ' . ( new AttributeStubGenerator() )->generateAttributeLine( $attr ) . "\n";
		}

		// --- NEW ORDER STARTS HERE ---
		$buf .= '    ';

		// 1) abstract if needed
		if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
			$buf .= 'abstract ';
		}

		// 2) final if needed
		if ( $method->isFinal() && ! $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
			$buf .= 'final ';
		}

		// 3) visibility
		if ( $method->isPrivate() ) {
			$buf .= 'private ';
		} elseif ( $method->isProtected() ) {
			$buf .= 'protected ';
		} else {
			$buf .= 'public ';
		}

		// 4) static if needed
		if ( $method->isStatic() ) {
			$buf .= 'static ';
		}

		// 5) now the function keyword + method name
		$buf .= 'function ' . $method->getName() . '(';

		// handle parameters
		$params = [];
		foreach ( $method->getParameters() as $pm ) {
			$params[] = ( new ParameterStubGenerator() )->generateParameterStub( $pm );
		}
		$buf .= implode( ', ', $params ) . ')';

		// optionally add return type
		try {
			$ret = $method->getReturnType();
			if ( $ret !== null ) {
				$buf .= ': ' . (string) $ret;
			}
		} catch ( \Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
		}

		// finalize
		if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
			$buf .= ";\n";
		} else {
			$buf .= "\n{\n}\n";
		}

		return $buf;
	}
}