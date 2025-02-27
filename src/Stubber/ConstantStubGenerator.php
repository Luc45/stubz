<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionConstant as BRConstant;
use Throwable;

/**
 * Generate a global constant stub ("const FOO = ...;").
 */
class ConstantStubGenerator {
	public function generateConstantStub( BRConstant $constant ): string {
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
			Helpers::handleBetterReflectionException( $ex );
		}

		return $buf;
	}
}