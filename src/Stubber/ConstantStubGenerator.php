<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionConstant as BRConstant;
use Throwable;

/**
 * Generate a global constant stub ("const FOO = ...;").
 */
class ConstantStubGenerator {
	/**
	 * @param-out array<string,int> $missingReferences
	 */
	public function generateConstantStub( BRConstant $constant, array &$missingReferences ): string {
		/** @var array<string,int> $missingReferences */
		$buf       = '';

		// If it's a class constant, skip
		if ( method_exists( $constant, 'getDeclaringClass' ) ) {
			return '';
		}

		$constName = $constant->getName();

		try {
			$val = var_export( $constant->getValue(), true );
			$buf .= "const {$constName} = {$val};\n\n";
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
		}

		return $buf;
	}
}