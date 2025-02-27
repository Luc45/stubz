<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionClass as BRClass;
use Roave\BetterReflection\Reflection\ReflectionEnum as BREnum;
use Throwable;

class ClassStubGenerator {
	/**
	 * Generate a class/trait/interface/enum stub from reflection.
	 *
	 * @param array<string,int> $missingReferences
	 */
	public function generateClassStub( BRClass $class, array &$missingReferences ): string {
		$startTime = microtime( true );
		$buf       = '';

		// Doc comment
		$doc = $class->getDocComment();
		if ( $doc !== null && $doc !== '' ) {
			$buf .= $doc . "\n";
		}

		// Attributes
		foreach ( $class->getAttributes() as $attr ) {
			$buf .= ( new AttributeStubGenerator() )->generateAttributeLine( $attr, $missingReferences ) . "\n";
		}

		// Class declaration
		$buf .= $this->getClassDeclaration( $class, $missingReferences );

		// Handle extends/implements if not interface/trait/enum
		$parentReflection = null;
		try {
			$possibleParent = $class->getParentClass();
			if (
				$possibleParent &&
				! $possibleParent->isInterface() &&
				! $possibleParent->isTrait() &&
				! $possibleParent->isEnum()
			) {
				$parentReflection = $possibleParent;
			}
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
		}

		if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
			// extends
			if ( $parentReflection ) {
				$parentName = ltrim( $parentReflection->getName(), '\\' );
				if ( $parentName !== '' ) {
					$buf .= ' extends \\' . $parentName;
				}
			}

			// implements
			$interfaces = [];
			try {
				$ifaceRefs = $class->getInterfaces(); // name => ReflectionClass
				ksort( $ifaceRefs );
				foreach ( $ifaceRefs as $iRef ) {
					$interfaces[] = '\\' . ltrim( $iRef->getName(), '\\' );
				}
			} catch ( Throwable $ex ) {
				( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
			}

			if ( ! empty( $interfaces ) ) {
				$buf .= ' implements ' . implode( ', ', $interfaces );
			}
		}

		$buf .= "\n{\n";

		// If enum, add cases
		if ( $class->isEnum() && $class instanceof BREnum ) {
			foreach ( $class->getCases() as $case ) {
				try {
					$val = $case->getValue();
					if ( $val !== null ) {
						$valStr = ( new Helpers() )->convertVarExportToWpStyle( $val );
						$buf    .= "    case {$case->getName()} = {$valStr};\n\n";
					} else {
						$buf .= "    case {$case->getName()};\n\n";
					}
				} catch ( Throwable $ex ) {
					( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
				}
			}
		}

		// Class constants
		foreach ( $class->getImmediateConstants() as $constName => $refConst ) {
			try {
				$value    = $refConst->getValue();
				$valueStr = ( new Helpers() )->convertVarExportToWpStyle( $value );
				$buf      .= "    const {$constName} = {$valueStr};\n\n";
			} catch ( Throwable $ex ) {
				( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
			}
		}

		// Properties
		try {
			$props = $class->getImmediateProperties();
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
			$props = [];
		}
		foreach ( $props as $prop ) {
			if ( $prop->getDeclaringClass()->getName() === $class->getName() ) {
				$buf .= ( new PropertyStubGenerator() )->generatePropertyStub( $prop, $missingReferences );
			}
		}

		// Methods
		try {
			$methods = $class->getImmediateMethods();
		} catch ( Throwable $ex ) {
			( new Helpers() )->handleBetterReflectionException( $ex, $missingReferences );
			$methods = [];
		}
		foreach ( $methods as $method ) {
			if ( $method->getDeclaringClass()->getName() === $class->getName() ) {
				$buf .= ( new MethodStubGenerator() )->generateMethodStub( $method, $missingReferences );
			}
		}

		$buf .= "}\n\n";

		( new Helpers() )->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'className' => $class->getName(),
		] );

		return $buf;
	}

	/**
	 * Describe how the class is declared: interface, trait, enum, abstract, final, etc.
	 */
	private function getClassDeclaration( BRClass $class, array &$missingReferences ): string {
		$startTime = microtime( true );
		$out       = '';

		if ( $class->isInterface() ) {
			$out = 'interface ' . $class->getShortName();
		} elseif ( $class->isTrait() ) {
			$out = 'trait ' . $class->getShortName();
		} elseif ( $class->isEnum() ) {
			$out = 'enum ' . $class->getShortName();
		} elseif ( $class->isAbstract() ) {
			$out = 'abstract class ' . $class->getShortName();
		} elseif ( $class->isFinal() ) {
			$out = 'final class ' . $class->getShortName();
		} else {
			$out = 'class ' . $class->getShortName();
		}

		( new Helpers() )->logBenchmark( __METHOD__, $startTime, microtime( true ), [
			'className' => $class->getName(),
		] );

		return $out;
	}
}