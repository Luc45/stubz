<?php

use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;

// If you're using BetterReflection 6.0 or higher (with enums):
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Roave\BetterReflection\Reflection\ReflectionEnumCase;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;

/**
 * Categorizes classes, functions, and constants by the file they originate from.
 *
 * @param ReflectionClass[] $allClasses
 * @param ReflectionFunction[] $allFunctions
 * @param ReflectionConstant[] $allConstants
 *
 * @return array{
 *   0: array<string, list<ReflectionClass>>,
 *   1: array<string, list<ReflectionFunction>>,
 *   2: array<string, list<ReflectionConstant>>
 * }
 */
function buildSymbolMaps(
	array $allClasses,
	array $allFunctions,
	array $allConstants
): array {
	/** @var array<string, list<ReflectionClass>> $fileToClasses */
	$fileToClasses = [];
	/** @var array<string, list<ReflectionFunction>> $fileToFunctions */
	$fileToFunctions = [];
	/** @var array<string, list<ReflectionConstant>> $fileToConstants */
	$fileToConstants = [];

	// --- Collect classes by file
	foreach ( $allClasses as $classReflection ) {
		$file = $classReflection->getFileName(); // string|null
		if ( $file !== null ) {
			$fileToClasses[ $file ][] = $classReflection;
		}
	}
	// Sort each file’s classes by start line
	foreach ( $fileToClasses as $file => $classList ) {
		usort( $classList, fn( ReflectionClass $a, ReflectionClass $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToClasses[ $file ] = $classList;
	}

	// --- Collect functions by file
	foreach ( $allFunctions as $functionReflection ) {
		$file = $functionReflection->getFileName();
		if ( $file !== null ) {
			$fileToFunctions[ $file ][] = $functionReflection;
		}
	}
	// Sort each file’s function list
	foreach ( $fileToFunctions as $file => $funcList ) {
		usort( $funcList, fn( ReflectionFunction $a, ReflectionFunction $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToFunctions[ $file ] = $funcList;
	}

	// --- Collect constants by file
	foreach ( $allConstants as $constantReflection ) {
		$file = $constantReflection->getFileName();
		if ( $file !== null ) {
			$fileToConstants[ $file ][] = $constantReflection;
		}
	}
	// Sort each file’s constant list
	foreach ( $fileToConstants as $file => $constList ) {
		usort( $constList, fn( ReflectionConstant $a, ReflectionConstant $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToConstants[ $file ] = $constList;
	}

	return [ $fileToClasses, $fileToFunctions, $fileToConstants ];
}

/**
 * Generates the combined stub content for a file: all classes, functions, and constants it contains.
 *
 * @param array<string, list<ReflectionClass>> $fileToClassesMap
 * @param array<string, list<ReflectionFunction>> $fileToFunctionsMap
 * @param array<string, list<ReflectionConstant>> $fileToConstantsMap
 */
function generateStubContent(
	string $realpath,
	array $fileToClassesMap,
	array $fileToFunctionsMap,
	array $fileToConstantsMap
): string {
	$stub = "<?php\n\n";

	// Classes
	if ( isset( $fileToClassesMap[ $realpath ] ) ) {
		foreach ( $fileToClassesMap[ $realpath ] as $reflectionClass ) {
			$stub .= generateClassStub( $reflectionClass );
		}
	}

	// Functions
	if ( isset( $fileToFunctionsMap[ $realpath ] ) ) {
		foreach ( $fileToFunctionsMap[ $realpath ] as $reflectionFunction ) {
			$stub .= generateFunctionStub( $reflectionFunction );
		}
	}

	// Constants
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

	// If it's a "normal class" (not interface/trait/enum), handle extends/interfaces
	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		if ( $parent = $class->getParentClass() ) {
			$buffer .= ' extends \\' . $parent->getName();
		}
		// $class->getInterfaces() returns an array of ReflectionClass objects
		$interfaces = $class->getInterfaces();
		if ( $interfaces !== [] ) {
			// e.g. " implements \Foo, \Bar"
			$impls  = array_map(
				static fn( ReflectionClass $iface ): string => '\\' . $iface->getName(),
				$interfaces
			);
			$buffer .= ' implements ' . implode( ', ', $impls );
		}
	}

	$buffer .= "\n{\n";

	// If it’s an enum, handle the cases
	if ( $class->isEnum() ) {
		// Roave\BetterReflection\Reflection\ReflectionEnum
		// safe approach:
		if ( $class instanceof ReflectionEnum ) {
			// getCases() returns ReflectionEnumCase[]
			foreach ( $class->getCases() as $case ) {
				$caseName = $case->getName(); // string
				// getValue() might throw IdentifierNotFound
				try {
					$value = $case->getValue();
				} catch ( IdentifierNotFound ) {
					$value = null;
				}
				if ( $value !== null ) {
					$buffer .= "    case {$caseName} = " . var_export( $value, true ) . ";\n\n";
				} else {
					$buffer .= "    case {$caseName};\n\n";
				}
			}
		}
	}

	// Class constants
	try {
		foreach ( $class->getImmediateConstants() as $constName => $reflectionConstant ) {
			try {
				$val    = var_export( $reflectionConstant->getValue(), true );
				$buffer .= "    const {$constName} = {$val};\n\n";
			} catch ( IdentifierNotFound ) {
				// do nothing
			}
		}
	} catch ( IdentifierNotFound ) {
		// do nothing
	}

	// Properties
	try {
		foreach ( $class->getProperties() as $property ) {
			// Skip inherited props
			if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
				continue;
			}
			$buffer .= generatePropertyStub( $property );
		}
	} catch ( IdentifierNotFound ) {
		// do nothing
	}

	// Methods
	try {
		foreach ( $class->getMethods() as $method ) {
			// Skip inherited methods
			if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
				continue;
			}
			$buffer .= generateMethodStub( $method );
		}
	} catch ( IdentifierNotFound ) {
		// do nothing
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
	} catch ( IdentifierNotFound ) {
		return '';
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

	// ReflectionProperty from BetterReflection >=5.0 has isReadOnly()
	// If you no longer support older versions, no need to check method_exists().
	$readonly = $property->isReadOnly() ? 'readonly ' : '';

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
		/** @var scalar|array<mixed>|null $defaultVal */
		$defaultVal = $param->getDefaultValue();
		$out        .= ' = ' . var_export( $defaultVal, true );
	}

	return $out;
}