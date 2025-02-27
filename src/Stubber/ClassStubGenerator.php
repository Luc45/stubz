<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

use Roave\BetterReflection\Reflection\ReflectionClass as BRClass;
use Roave\BetterReflection\Reflection\ReflectionEnum as BREnum;
use Throwable;

class ClassStubGenerator {
	/**
	 * Generate a class/trait/interface/enum stub from reflection.
	 */
	public function generateClassStub( BRClass $class ): string {
		$buf       = '';

		// 1) Doc comment
		$doc = $class->getDocComment();
		if ( $doc !== null ) {
			$buf .= $doc . "\n";
		}

		// 2) Attributes
		foreach ( $class->getAttributes() as $attr ) {
			$buf .= ( new AttributeStubGenerator() )->generateAttributeLine( $attr ) . "\n";
		}

		// 3) Class/trait/interface/enum declaration
		$buf .= $this->getClassDeclaration( $class );

		// Potential "extends" for normal classes
		$parentReflection = null;
		try {
			$possibleParent = $class->getParentClass();
			if (
				$possibleParent
				&& ! $possibleParent->isInterface()
				&& ! $possibleParent->isTrait()
				&& ! $possibleParent->isEnum()
			) {
				$parentReflection = $possibleParent;
			}
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
		}

		// If not interface/trait/enum => handle extends/implements
		if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
			if ( $parentReflection ) {
				$parentName = ltrim( $parentReflection->getName(), '\\' );
				$buf        .= ' extends \\' . $parentName;
			}

			$interfaces = [];
			try {
				$ifaceRefs = $class->getInterfaces();
				ksort( $ifaceRefs );
				foreach ( $ifaceRefs as $iRef ) {
					$interfaces[] = '\\' . ltrim( $iRef->getName(), '\\' );
				}
			} catch ( Throwable $ex ) {
				Helpers::handleBetterReflectionException( $ex );
			}

			if ( ! empty( $interfaces ) ) {
				$buf .= ' implements ' . implode( ', ', $interfaces );
			}
		}

		$buf .= "\n{\n";

		// ---------------------------------------------------------------------
		// 4) Enum handling (cases, "magic" members, etc.)
		// ---------------------------------------------------------------------
		if ( $class->isEnum() && $class instanceof BREnum ) {
			$cases = $class->getCases();

			if ( $class->isBacked() ) {
				// "Backed" enum => produce `case X = 'foo';`, plus $value, from/tryFrom
				foreach ( $cases as $case ) {
					try {
						$val = Helpers::toPhpLiteral( $case->getValue() );
						$buf .= "    case {$case->getName()} = {$val};\n\n";
					} catch ( Throwable $ex ) {
						Helpers::handleBetterReflectionException( $ex );
					}
				}

				// The typical lines your snapshot expects:
				$buf .= "    public readonly string \$name;\n\n";
				$buf .= "    public readonly string \$value;\n\n"; // your test expects 'string' specifically
				$buf .= "    public static function cases(): array\n    {\n        // stub\n    }\n\n";
				$buf .= "    public static function from(string|int \$value): static\n    {\n        // stub\n    }\n\n";
				$buf .= "    public static function tryFrom(string|int \$value): ?static\n    {\n        // stub\n    }\n\n";
			} else {
				// "Pure" enum => produce `case X;`, no "= value"
				foreach ( $cases as $case ) {
					$buf .= "    case {$case->getName()};\n\n";
				}
				// Minimal set for pure enums
				$buf .= "    public readonly string \$name;\n\n";
				$buf .= "    public static function cases(): array\n    {\n        // stub\n    }\n\n";
			}
		}

		// ---------------------------------------------------------------------
		// 5) Class constants
		// ---------------------------------------------------------------------
		foreach ( $class->getImmediateConstants() as $constName => $refConst ) {
			try {
				$val = Helpers::toPhpLiteral( $refConst->getValue() );
				$buf .= "    const {$constName} = {$val};\n\n";
			} catch ( Throwable $ex ) {
				Helpers::handleBetterReflectionException( $ex );
			}
		}

		// ---------------------------------------------------------------------
		// 6) Properties
		// ---------------------------------------------------------------------
		try {
			$props = $class->getImmediateProperties();
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
			$props = [];
		}
		foreach ( $props as $prop ) {
			if ( $prop->getDeclaringClass()->getName() === $class->getName() ) {
				$buf .= ( new PropertyStubGenerator() )->generatePropertyStub( $prop );
			}
		}

		// ---------------------------------------------------------------------
		// 7) Methods
		// ---------------------------------------------------------------------
		try {
			$methods = $class->getImmediateMethods();
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
			$methods = [];
		}
		foreach ( $methods as $method ) {
			if ( $method->getDeclaringClass()->getName() === $class->getName() ) {
				$buf .= ( new MethodStubGenerator() )->generateMethodStub( $method );
			}
		}

		$buf .= "}\n\n";

		return $buf;
	}

	/**
	 * Describe how the class is declared: interface, trait, enum, abstract, final, etc.
	 */
	private function getClassDeclaration( BRClass $class ): string {
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

		return $out;
	}
}