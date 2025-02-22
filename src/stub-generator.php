<?php

use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflection\ReflectionMethod;

/**
 * Categorizes classes, functions, and constants by the file they originate from.
 *
 * Returns an array: [ $fileToClasses, $fileToFunctions, $fileToConstants ]
 */
function buildSymbolMaps( array $allClasses, array $allFunctions, array $allConstants ): array {
	$fileToClasses   = [];
	$fileToFunctions = [];
	$fileToConstants = [];

	foreach ( $allClasses as $classReflection ) {
		if ( $file = $classReflection->getFileName() ) {
			$fileToClasses[ $file ][] = $classReflection;
		}
	}
	foreach ( $fileToClasses as $file => $classList ) {
		usort( $classList, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToClasses[ $file ] = $classList;
	}

	foreach ( $allFunctions as $functionReflection ) {
		if ( $file = $functionReflection->getFileName() ) {
			$fileToFunctions[ $file ][] = $functionReflection;
		}
	}
	foreach ( $fileToFunctions as $file => $funcList ) {
		usort( $funcList, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToFunctions[ $file ] = $funcList;
	}

	foreach ( $allConstants as $constantReflection ) {
		if ( $file = $constantReflection->getFileName() ) {
			$fileToConstants[ $file ][] = $constantReflection;
		}
	}
	foreach ( $fileToConstants as $file => $constList ) {
		usort( $constList, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToConstants[ $file ] = $constList;
	}

	return [ $fileToClasses, $fileToFunctions, $fileToConstants ];
}

/**
 * Generates the combined stub content for a file: all classes, functions, and constants it contains.
 */
function generateStubContent(
	string $realpath,
	array $fileToClassesMap,
	array $fileToFunctionsMap,
	array $fileToConstantsMap
): string {
	$stub = "<?php\n\n";

	if ( isset( $fileToClassesMap[ $realpath ] ) ) {
		foreach ( $fileToClassesMap[ $realpath ] as $reflectionClass ) {
			$stub .= generateClassStub( $reflectionClass );
		}
	}

	if ( isset( $fileToFunctionsMap[ $realpath ] ) ) {
		foreach ( $fileToFunctionsMap[ $realpath ] as $reflectionFunction ) {
			$stub .= generateFunctionStub( $reflectionFunction );
		}
	}

	if ( isset( $fileToConstantsMap[ $realpath ] ) ) {
		foreach ( $fileToConstantsMap[ $realpath ] as $reflectionConstant ) {
			$stub .= generateConstantStub( $reflectionConstant );
		}
	}

	return $stub;
}

/**
 * Builds stub text for a reflected class, interface, trait, or enum.
 */
function generateClassStub( ReflectionClass $class ): string {
	$buffer = '';

	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buffer .= "namespace {$namespace};\n\n";
	}

	if ( $doc = $class->getDocComment() ) {
		$buffer .= $doc . "\n";
	}

	foreach ( $class->getAttributes() as $attr ) {
		$buffer .= generateAttributeLine( $attr ) . "\n";
	}

	$buffer .= getClassDeclaration( $class );

	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		if ( $parent = safeGetParentClass( $class ) ) {
			$buffer .= ' extends \\' . $parent->getName();
		}
		$interfaces = safeGetInterfaceNames( $class );
		if ( $interfaces ) {
			$buffer .= ' implements ' . implode( ', ', array_map( fn( $i ) => '\\' . $i, $interfaces ) );
		}
	}

	$buffer .= "\n{\n";

	if ( $class->isEnum() ) {
		try {
			if ( method_exists( $class, 'getCases' ) ) {
				foreach ( $class->getCases() as $case ) {
					$caseName = $case->getName();
					$value    = null;
					try {
						$value = $case->getValue();
					} catch ( IdentifierNotFound $ignore ) {
						// do nothing
					}
					if ( $value !== null ) {
						$buffer .= "    case {$caseName} = " . var_export( $value, true ) . ";\n\n";
					} else {
						$buffer .= "    case {$caseName};\n\n";
					}
				}
			}
		} catch ( IdentifierNotFound $e ) {
			// do nothing
		}
	}

	try {
		foreach ( $class->getImmediateConstants() as $constName => $reflectionConstant ) {
			try {
				$val    = var_export( $reflectionConstant->getValue(), true );
				$buffer .= "    const {$constName} = {$val};\n\n";
			} catch ( IdentifierNotFound $ignore ) {
			}
		}
	} catch ( IdentifierNotFound $ignore ) {
	}

	// Properties
	try {
		foreach ( $class->getProperties() as $property ) {
			if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
				continue;
			}
			$buffer .= generatePropertyStub( $property );
		}
	} catch ( IdentifierNotFound $ignore ) {
	}

	// Methods
	try {
		foreach ( $class->getMethods() as $method ) {
			if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
				continue;
			}
			$buffer .= generateMethodStub( $method );
		}
	} catch ( IdentifierNotFound $ignore ) {
	}

	$buffer .= "}\n\n";

	return $buffer;
}

/**
 * Creates a function stub from reflection data.
 */
function generateFunctionStub( ReflectionFunction $function ): string {
	$buf = '';
	if ( $doc = $function->getDocComment() ) {
		$buf .= $doc . "\n";
	}

	foreach ( $function->getAttributes() as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	$buf    .= 'function ' . $function->getName() . '(';
	$params = [];
	foreach ( $function->getParameters() as $param ) {
		$params[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $params ) . ')';

	if ( $returnType = $function->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	return $buf;
}

/**
 * Creates a stub for a global or namespaced constant.
 */
function generateConstantStub( ReflectionConstant $constant ): string {
	try {
		$val = var_export( $constant->getValue(), true );

		return "const {$constant->getName()} = {$val};\n\n";
	} catch ( IdentifierNotFound $ignore ) {
		return '';
	}
}

/**
 * Safely retrieves the parent class or returns null if not resolvable.
 */
function safeGetParentClass( ReflectionClass $class ): ?ReflectionClass {
	try {
		return $class->getParentClass();
	} catch ( IdentifierNotFound $ignore ) {
		return null;
	}
}

/**
 * Safely retrieves all interface names a class implements, or an empty array if not resolvable.
 */
function safeGetInterfaceNames( ReflectionClass $class ): array {
	try {
		return $class->getInterfaceNames();
	} catch ( IdentifierNotFound $ignore ) {
		return [];
	}
}

/**
 * Decides how to declare a class, interface, trait, or enum (abstract/final).
 */
function getClassDeclaration( ReflectionClass $class ): string {
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

/**
 * Returns a stub for a reflected property.
 */
function generatePropertyStub( ReflectionProperty $property ): string {
	$out = '';
	if ( $doc = $property->getDocComment() ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$out .= "    {$line}\n";
		}
	}
	foreach ( $property->getAttributes() as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );
	$static     = $property->isStatic() ? ' static' : '';

	$readonly = '';
	if ( method_exists( $property, 'isReadOnly' ) && $property->isReadOnly() ) {
		$readonly = 'readonly ';
	}

	$typeStr = '';
	$type    = $property->getType();
	if ( $type ) {
		$typeStr = (string) $type . ' ';
	}

	$out .= "    {$visibility}{$static} {$readonly}{$typeStr}\${$property->getName()};\n\n";

	return $out;
}

/**
 * Creates a stub for a method, including docblock, attributes, final/abstract flags, etc.
 */
function generateMethodStub( ReflectionMethod $method ): string {
	$buf = '';

	if ( $doc = $method->getDocComment() ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}
	foreach ( $method->getAttributes() as $attr ) {
		$buf .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	// Visibility
	if ( $method->isPrivate() ) {
		$buf .= '    private ';
	} elseif ( $method->isProtected() ) {
		$buf .= '    protected ';
	} else {
		$buf .= '    public ';
	}

	if ( $method->isStatic() ) {
		$buf .= 'static ';
	}

	// final or abstract
	if ( $method->isFinal() && ! $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'final ';
	}
	if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'abstract ';
	}

	$buf    .= 'function ' . $method->getName() . '(';
	$params = [];
	foreach ( $method->getParameters() as $param ) {
		$params[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $params ) . ')';

	if ( $returnType = $method->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}

	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	return $buf;
}

/**
 * Renders an attribute line like #[SomeAttr(...)] using var_export() for attribute arguments.
 */
function generateAttributeLine( ReflectionAttribute $attr ): string {
	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = $args ? '(' . implode( ', ', $args ) . ')' : '';

	return "#[{$attr->getName()}{$argsString}]";
}

/**
 * Builds a parameter stub with type, reference, variadic, and default value if available.
 */
function generateParameterStub( ReflectionParameter $param ): string {
	$out = '';
	if ( $type = $param->getType() ) {
		$out .= (string) $type . ' ';
	}
	if ( $param->isPassedByReference() ) {
		$out .= '&';
	}
	if ( $param->isVariadic() ) {
		$out .= '...';
	}
	$out .= '$' . $param->getName();
	if ( $param->isDefaultValueAvailable() ) {
		$out .= ' = ' . var_export( $param->getDefaultValue(), true );
	}

	return $out;
}