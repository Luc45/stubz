<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use Roave\BetterReflection\Reflection\ReflectionAttribute;

class AttributeStubGenerator {
	/**
	 * Generate an attribute line: #[Attr(...)]
	 */
	public function generateAttributeLine( ReflectionAttribute $attr ): string {
		$args = [];
		foreach ( $attr->getArguments() as $argVal ) {
			$args[] = var_export( $argVal, true );
		}
		$argsStr = $args ? '(' . implode( ', ', $args ) . ')' : '';
		$line    = "#[{$attr->getName()}{$argsStr}]";

		return $line;
	}
}