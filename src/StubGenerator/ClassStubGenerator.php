<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Scalar\MagicConst\Dir;
use PhpParser\Node\Scalar\MagicConst\File;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Throwable;

class ClassStubGenerator {
	public function generateClassStub( ReflectionClass $class ): string {
		$buf = '';

		$doc = $class->getDocComment();
		if ( $doc !== null ) {
			$buf .= $doc . "\n";
		}
		foreach ( $class->getAttributes() as $attr ) {
			$buf .= ( new AttributeStubGenerator() )->generateAttributeLine( $attr ) . "\n";
		}

		$buf .= $this->getClassDeclaration( $class );

		$parentName = $class->getParentClassName();

		if ( $class->isInterface() ) {
			$parentInterfaces = [];
			try {
				$ifaceNames = $class->getInterfaceClassNames();
				sort( $ifaceNames );
				foreach ( $ifaceNames as $iname ) {
					$parentInterfaces[] = '\\' . ltrim( $iname, '\\' );
				}
			} catch ( Throwable $ex ) {
				Helpers::handleBetterReflectionException( $ex );
			}
			if ( ! empty( $parentInterfaces ) ) {
				$buf .= ' extends ' . implode( ', ', $parentInterfaces );
			}
		} elseif ( ! $class->isTrait() && ! $class->isEnum() ) {
			if ( $parentName ) {
				$buf .= ' extends \\' . ltrim( $parentName, '\\' );
			}
			$interfaces = [];
			try {
				$ifaceNames = $class->getInterfaceClassNames();
				sort( $ifaceNames );
				foreach ( $ifaceNames as $iname ) {
					$interfaces[] = '\\' . ltrim( $iname, '\\' );
				}
			} catch ( Throwable $ex ) {
				Helpers::handleBetterReflectionException( $ex );
			}
			if ( ! empty( $interfaces ) ) {
				$buf .= ' implements ' . implode( ', ', $interfaces );
			}
		}

		$buf .= "\n{\n";

		// Enums
		if ( $class->isEnum() && $class instanceof ReflectionEnum ) {
			$cases = $class->getCases();
			if ( $class->isBacked() ) {
				foreach ( $cases as $case ) {
					try {
						$val = Helpers::toPhpLiteral( $case->getValue() );
						$buf .= "    case {$case->getName()} = {$val};\n";
					} catch ( Throwable $ex ) {
						Helpers::handleBetterReflectionException( $ex );
					}
				}
				$buf .= "    public readonly string \$name;\n";
				$buf .= "    public readonly string \$value;\n";
				$buf .= "    public static function cases(): array\n    {\n    }\n";
				$buf .= "    public static function from(string|int \$value): static\n    {\n    }\n";
				$buf .= "    public static function tryFrom(string|int \$value): ?static\n    {\n    }\n";
			} else {
				foreach ( $cases as $case ) {
					$buf .= "    case {$case->getName()};\n";
				}
				$buf .= "    public readonly string \$name;\n";
				$buf .= "    public static function cases(): array\n    {\n    }\n";
			}
		}

		// Class constants
		foreach ( $class->getImmediateConstants() as $constName => $refConst ) {
			// Skip private
			if ( $refConst->isPrivate() ) {
				continue;
			}

			$visibility = 'public';
			if ( $refConst->isProtected() ) {
				$visibility = 'protected';
			}

			try {
				// Try to see if it references a global constant, etc.
				$astNode = $refConst->getValueExpression();
				if ( $astNode instanceof File ) {
					$val = '__FILE__';
				} elseif ( $astNode instanceof Dir ) {
					$val = '__DIR__';
				} elseif ( $astNode instanceof ConstFetch ) {
					$val = $astNode->name->toString();
				} else {
					$val = Helpers::toPhpLiteral( $refConst->getValue() );
				}
				$buf .= "    {$visibility} const {$constName} = {$val};\n";
			} catch ( Throwable $ex ) {
				Helpers::handleBetterReflectionException( $ex );
			}
		}

		// Properties
		try {
			$props = $class->getImmediateProperties();
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
			$props = [];
		}
		foreach ( $props as $prop ) {
			if ( $prop->getDeclaringClass()->getName() === $class->getName() && ! $prop->isPrivate() ) {
				$buf .= ( new PropertyStubGenerator() )->generatePropertyStub( $prop );
			}
		}

		// Methods
		try {
			$methods = $class->getImmediateMethods();
		} catch ( Throwable $ex ) {
			Helpers::handleBetterReflectionException( $ex );
			$methods = [];
		}
		foreach ( $methods as $method ) {
			if ( $method->getDeclaringClass()->getName() === $class->getName() && ! $method->isPrivate() ) {
				$buf .= ( new MethodStubGenerator() )->generateMethodStub( $method );
			}
		}

		$buf .= "}\n";

		return $buf;
	}

	private function getClassDeclaration( ReflectionClass $class ): string {
		if ( $class->isInterface() ) {
			return 'interface ' . $class->getShortName();
		}
		if ( $class->isTrait() ) {
			return 'trait ' . $class->getShortName();
		}
		if ( $class->isEnum() ) {
			return 'enum ' . $class->getShortName();
		}
		if ( $class->isAbstract() ) {
			return 'abstract class ' . $class->getShortName();
		}
		if ( $class->isFinal() ) {
			return 'final class ' . $class->getShortName();
		}

		return 'class ' . $class->getShortName();
	}
}