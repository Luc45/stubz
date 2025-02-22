<?php

use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;

// If you're using BetterReflection 6.0 or higher (with enums):
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Roave\BetterReflection\Reflection\ReflectionEnumCase;

/**
 * Categorizes classes, functions, and constants by file path.
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
	$fileToClasses   = [];
	$fileToFunctions = [];
	$fileToConstants = [];

	// Classes
	foreach ( $allClasses as $class ) {
		$file = $class->getFileName();
		if ( $file !== null ) {
			$fileToClasses[ $file ][] = $class;
		}
	}
	foreach ( $fileToClasses as $file => $classList ) {
		usort( $classList, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToClasses[ $file ] = $classList;
	}

	// Functions
	foreach ( $allFunctions as $function ) {
		$file = $function->getFileName();
		if ( $file !== null ) {
			$fileToFunctions[ $file ][] = $function;
		}
	}
	foreach ( $fileToFunctions as $file => $funcList ) {
		usort( $funcList, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToFunctions[ $file ] = $funcList;
	}

	// Constants
	foreach ( $allConstants as $constant ) {
		$file = $constant->getFileName();
		if ( $file !== null ) {
			$fileToConstants[ $file ][] = $constant;
		}
	}
	foreach ( $fileToConstants as $file => $constList ) {
		usort( $constList, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToConstants[ $file ] = $constList;
	}

	return [ $fileToClasses, $fileToFunctions, $fileToConstants ];
}

/**
 * Generates the combined stub content for a single file.
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
 * Builds stub text for a reflected class/interface/trait/enum.
 */
function generateClassStub( ReflectionClass $class ): string {
	global $IGNORE_MISSING;

	$buffer    = '';
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

	$declaration = getClassDeclaration( $class );
	$buffer      .= $declaration;

	// If it's a normal class (not interface/trait/enum), handle "extends" + "implements"
	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		$parent     = null;
		$interfaces = [];
		try {
			$parent = $class->getParentClass();
		} catch ( IdentifierNotFound $ex ) {
			if ( ! $IGNORE_MISSING ) {
				throw $ex;
			}
			echo color( "Warning: Missing parent for class {$class->getName()}\n", 'yellow' );
		}
		if ( $parent ) {
			$buffer .= ' extends \\' . $parent->getName();
		}

		try {
			$interfaces = $class->getInterfaces();
		} catch ( IdentifierNotFound $ex ) {
			if ( ! $IGNORE_MISSING ) {
				throw $ex;
			}
			echo color( "Warning: Missing interface(s) for class {$class->getName()}\n", 'yellow' );
		}
		if ( $interfaces !== [] ) {
			$impls  = array_map(
				static fn( ReflectionClass $i ) => '\\' . $i->getName(),
				$interfaces
			);
			$buffer .= ' implements ' . implode( ', ', $impls );
		}
	}

	$buffer .= "\n{\n";

	// If it's an enum, handle cases
	if ( $class->isEnum() && $class instanceof ReflectionEnum ) {
		foreach ( $class->getCases() as $case ) {
			$caseName = $case->getName();
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

	// Class constants
	try {
		foreach ( $class->getImmediateConstants() as $constName => $constReflection ) {
			try {
				$val    = var_export( $constReflection->getValue(), true );
				$buffer .= "    const {$constName} = {$val};\n\n";
			} catch ( IdentifierNotFound ) {
				// Possibly can't resolve the constant's value
				if ( ! $IGNORE_MISSING ) {
					throw new IdentifierNotFound( "Cannot resolve constant $constName in {$class->getName()}" );
				}
				echo color( "Warning: Missing constant value for {$constName} in {$class->getName()}\n", 'yellow' );
			}
		}
	} catch ( IdentifierNotFound $ex ) {
		if ( ! $IGNORE_MISSING ) {
			throw $ex;
		}
		echo color( "Warning: Could not locate some constants for {$class->getName()}\n", 'yellow' );
	}

	// Properties
	try {
		foreach ( $class->getProperties() as $property ) {
			// skip inherited
			if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
				continue;
			}
			$buffer .= generatePropertyStub( $property );
		}
	} catch ( IdentifierNotFound $ex ) {
		if ( ! $IGNORE_MISSING ) {
			throw $ex;
		}
		echo color( "Warning: Could not locate some properties for {$class->getName()}\n", 'yellow' );
	}

	// Methods
	try {
		foreach ( $class->getMethods() as $method ) {
			// skip inherited
			if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
				continue;
			}
			$buffer .= generateMethodStub( $method );
		}
	} catch ( IdentifierNotFound $ex ) {
		if ( ! $IGNORE_MISSING ) {
			throw $ex;
		}
		echo color( "Warning: Could not locate some methods for {$class->getName()}\n", 'yellow' );
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
		// Possibly the constant's value can't be resolved
		global $IGNORE_MISSING;
		if ( ! $IGNORE_MISSING ) {
			throw new IdentifierNotFound( "Cannot resolve constant {$constant->getName()}" );
		}
		echo color( "Warning: Missing value for constant {$constant->getName()}\n", 'yellow' );

		return "const {$constant->getName()};\n\n";
	}
}

/**
 * Decides how to declare a class, interface, trait, or enum (accounting for abstract/final).
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
 * Returns a stub for a single reflected property.
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

	$static   = $property->isStatic() ? ' static' : '';
	$readonly = method_exists( $property, 'isReadOnly' ) && $property->isReadOnly() ? 'readonly ' : '';

	$typeStr = '';
	$type    = $property->getType();
	if ( $type ) {
		$typeStr = (string) $type . ' ';
	}

	$out .= "    {$visibility}{$static} {$readonly}{$typeStr}\${$property->getName()};\n\n";

	return $out;
}

/**
 * Creates a stub for a method, with docblock, attributes, final/abstract, etc.
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
 * Renders an attribute line like #[SomeAttr(...)] using var_export() for arguments.
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
		$defaultVal = $param->getDefaultValue();
		$out        .= ' = ' . var_export( $defaultVal, true );
	}

	return $out;
}