<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionProperty as BRProperty;
use Throwable;

class PropertyStubGenerator {
	/**
	 * Generate a property stub.
	 *
	 * @param array<string,int> $missingReferences
	 */
	public function generatePropertyStub( BRProperty $prop, array &$missingReferences ): string {
		$startTime = microtime( true );
		$out       = '';

		$doc = $prop->getDocComment();
		if ( $doc !== null && $doc !== '' ) {
			foreach ( explode( "\n", $doc ) as $line ) {
				$out .= "    {$line}\n";
			}
		}

		foreach ( $prop->getAttributes() as $attr ) {
			$out .= '    ' . ( new AttributeStubGenerator() )->generateAttributeLine( $attr, $missingReferences ) . "\n";
		}

		$vis      = $prop->isPrivate()
			? 'private'
			: ( $prop->isProtected() ? 'protected' : 'public' );
		$static   = $prop->isStatic() ? ' static' : '';
		$readonly = $prop->isReadOnly() ? 'readonly ' : '';

		try {
			$typeObj = $prop->getType();
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
			$typeObj = null;
		}
		$typeStr = $typeObj ? ( (string) $typeObj . ' ' ) : '';

		$out .= "    {$vis}{$static} {$readonly}{$typeStr}\${$prop->getName()}";

		// Default value if any
		try {
			if ( $prop->hasDefaultValue() ) {
				$defVal = $prop->getDefaultValue();
				$valStr = ( new Helpers() )->convertVarExportToWpStyle( $defVal );
				$out    .= ' = ' . $valStr;
			}
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
		}

		$out .= ";\n\n";

		( new Helpers() )->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'className'    => $prop->getDeclaringClass()->getName(),
			'propertyName' => $prop->getName(),
		] );

		return $out;
	}
}