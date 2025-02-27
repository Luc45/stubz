<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionAttribute;

class AttributeStubGenerator {
	/**
	 * Generate an attribute line: #[Attr(...)]
	 *
	 * @param-out array<string,int> $missingReferences
	 */
	public function generateAttributeLine(
		ReflectionAttribute $attr,
		array &$missingReferences
	): string {
		/** @var array<string,int> $missingReferences */

		$args = [];
		foreach ( $attr->getArguments() as $argVal ) {
			$args[] = var_export( $argVal, true );
		}
		$argsStr = $args ? '(' . implode( ', ', $args ) . ')' : '';
		$line    = "#[{$attr->getName()}{$argsStr}]";

		return $line;
	}
}