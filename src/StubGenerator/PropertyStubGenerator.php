<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use Roave\BetterReflection\Reflection\ReflectionProperty;
use Throwable;

class PropertyStubGenerator {
	public function generatePropertyStub( ReflectionProperty $prop ): string {
		$out = '';

		$doc = $prop->getDocComment();
		if ( $doc !== null ) {
			foreach ( explode( "\n", $doc ) as $line ) {
				$out .= "    {$line}\n";
			}
		}

		foreach ( $prop->getAttributes() as $attr ) {
			$out .= '    ' . ( new AttributeStubGenerator() )->generateAttributeLine( $attr ) . "\n";
		}

		$vis      = $prop->isPrivate()
			? 'private'
			: ( $prop->isProtected() ? 'protected' : 'public' );
		$static   = $prop->isStatic() ? ' static' : '';
		$readonly = $prop->isReadOnly() ? 'readonly ' : '';

		try {
			$typeObj = $prop->getType();
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
			$typeObj = null;
		}
		$typeStr = $typeObj ? ( (string) $typeObj . ' ' ) : '';

		$out .= "    {$vis}{$static} {$readonly}{$typeStr}\${$prop->getName()}";

		try {
			// Only emit a default if there's an actual default expression in code.
			if ( $prop->getDefaultValueExpression() !== null ) {
				$out .= ' = ' . Helpers::toPhpLiteral( $prop->getDefaultValue() );
			}
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
		}

		$out .= ";\n";

		return $out;
	}
}