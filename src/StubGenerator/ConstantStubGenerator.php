<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use PhpParser\Node\Scalar\MagicConst\Dir;
use PhpParser\Node\Scalar\MagicConst\File;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Throwable;

class ConstantStubGenerator {
	public function generateConstantStub( ReflectionConstant $constant ): string {
		// If it's a class constant, skip
		if ( method_exists( $constant, 'getDeclaringClass' ) ) {
			return '';
		}

		$constName = $constant->getName();

		try {
			// Get the AST node representing the value
			$astNode = $constant->getValueExpression();

			if ( $astNode instanceof File ) {
				// If originally defined with __FILE__
				$val = '__FILE__';
			} elseif ( $astNode instanceof Dir ) {
				// If originally defined with __DIR__
				$val = '__DIR__';
			} else {
				// Otherwise, fall back on the evaluated value
				// e.g. a real string, an integer, etc.
				$val = var_export( $constant->getValue(), true );
			}

			return "const {$constName} = {$val};\n";
		} catch ( Throwable $ex ) {
			// handle any reflection exceptions
			Helpers::handleBetterReflectionException( $ex );

			return '';
		}
	}
}