<?php

use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;

/**
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

	foreach ( $allClasses as $classReflection ) {
		$file = $classReflection->getFileName();
		if ( $file !== null ) {
			$fileToClasses[ $file ][] = $classReflection;
		}
	}
	foreach ( $fileToClasses as $file => $classList ) {
		usort( $classList, fn( ReflectionClass $a, ReflectionClass $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToClasses[ $file ] = $classList;
	}

	foreach ( $allFunctions as $functionReflection ) {
		$file = $functionReflection->getFileName();
		if ( $file !== null ) {
			$fileToFunctions[ $file ][] = $functionReflection;
		}
	}
	foreach ( $fileToFunctions as $file => $funcList ) {
		usort( $funcList, fn( ReflectionFunction $a, ReflectionFunction $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToFunctions[ $file ] = $funcList;
	}

	foreach ( $allConstants as $constantReflection ) {
		$file = $constantReflection->getFileName();
		if ( $file !== null ) {
			$fileToConstants[ $file ][] = $constantReflection;
		}
	}
	foreach ( $fileToConstants as $file => $constList ) {
		usort( $constList, fn( ReflectionConstant $a, ReflectionConstant $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToConstants[ $file ] = $constList;
	}

	return [ $fileToClasses, $fileToFunctions, $fileToConstants ];
}

/**
 * @param string $realpath
 * @param array<string,ReflectionClass[]> $fileToClassesMap
 * @param array<string,ReflectionFunction[]> $fileToFunctionsMap
 * @param array<string,ReflectionConstant[]> $fileToConstantsMap
 * @param array<string,int> $missingReferences
 */
function generateStubContent(
	string $realpath,
	array $fileToClassesMap,
	array $fileToFunctionsMap,
	array $fileToConstantsMap,
	array &$missingReferences
): string {
	$stub = "<?php\n\n";

	if ( isset( $fileToClassesMap[ $realpath ] ) ) {
		foreach ( $fileToClassesMap[ $realpath ] as $reflectionClass ) {
			$stub .= generateClassStub( $reflectionClass, $missingReferences );
		}
	}
	if ( isset( $fileToFunctionsMap[ $realpath ] ) ) {
		foreach ( $fileToFunctionsMap[ $realpath ] as $reflectionFunction ) {
			$stub .= generateFunctionStub( $reflectionFunction, $missingReferences );
		}
	}
	if ( isset( $fileToConstantsMap[ $realpath ] ) ) {
		foreach ( $fileToConstantsMap[ $realpath ] as $reflectionConstant ) {
			$stub .= generateConstantStub( $reflectionConstant, $missingReferences );
		}
	}

	return $stub;
}

/**
 * Generates the stub code for a single class.
 *
 * @param array<string,int> $missingReferences
 */
function generateClassStub( ReflectionClass $class, array &$missingReferences ): string {
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

	$decl = getClassDeclaration( $class );

	// We do local catch-blocks to record missing references in $missingReferences
	try {
		$parent = $class->getParentClass();
	} catch ( IdentifierNotFound $e ) { // @phpstan-ignore-line catch.neverThrown
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$parent                       = null;
	}

	try {
		$interfaces = $class->getInterfaces();
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$interfaces                   = [];
	}

	$buffer .= $decl;

	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		if ( $parent ) {
			$buffer .= ' extends \\' . $parent->getName();
		}
		if ( $interfaces !== [] ) {
			$impls  = array_map(
				static fn( ReflectionClass $iface ): string => '\\' . $iface->getName(),
				$interfaces
			);
			$buffer .= ' implements ' . implode( ', ', $impls );
		}
	}

	$buffer .= "\n{\n";

	if ( $class->isEnum() && $class instanceof ReflectionEnum ) {
		foreach ( $class->getCases() as $case ) {
			try {
				$value = $case->getValue();
			} catch ( IdentifierNotFound $e ) {
				$symbol                       = $e->getIdentifier()->getName();
				$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
				$value                        = null;
			}
			if ( $value !== null ) {
				$buffer .= "    case {$case->getName()} = " . var_export( $value, true ) . ";\n\n";
			} else {
				$buffer .= "    case {$case->getName()};\n\n";
			}
		}
	}

	foreach ( $class->getImmediateConstants() as $constName => $reflectionConstant ) {
		try {
			$val    = var_export( $reflectionConstant->getValue(), true );
			$buffer .= "    const {$constName} = {$val};\n\n";
		} catch ( IdentifierNotFound $e ) {
			$symbol                       = $e->getIdentifier()->getName();
			$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		}
	}

	try {
		$props = $class->getProperties();
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$props                        = [];
	}
	foreach ( $props as $property ) {
		if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generatePropertyStub( $property, $missingReferences );
	}

	try {
		$methods = $class->getMethods();
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$methods                      = [];
	}
	foreach ( $methods as $method ) {
		if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generateMethodStub( $method, $missingReferences );
	}

	$buffer .= "}\n\n";

	return $buffer;
}

/**
 * Generates the stub code for a standalone function.
 *
 * @param array<string,int> $missingReferences
 */
function generateFunctionStub( ReflectionFunction $function, array &$missingReferences ): string {
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
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$returnType = $function->getReturnType();
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$returnType                   = null;
	}
	if ( $returnType ) {
		$buf .= ': ' . (string) $returnType;
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	return $buf;
}

/**
 * Generates the stub code for a top-level constant.
 *
 * @param array<string,int> $missingReferences
 */
function generateConstantStub( ReflectionConstant $constant, array &$missingReferences ): string {
	try {
		$val = var_export( $constant->getValue(), true );

		return "const {$constant->getName()} = {$val};\n\n";
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;

		return '';
	}
}

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
 * Generates the stub code for a single property.
 *
 * @param array<string,int> $missingReferences
 */
function generatePropertyStub( ReflectionProperty $property, array &$missingReferences ): string {
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
	$readonly   = $property->isReadOnly() ? 'readonly ' : '';

	try {
		$type = $property->getType();
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$type                         = null;
	}
	$typeStr = $type ? ( (string) $type . ' ' ) : '';

	$out .= "    {$visibility}{$static} {$readonly}{$typeStr}\${$property->getName()};\n\n";

	return $out;
}

/**
 * Generates the stub code for a single method.
 *
 * @param array<string,int> $missingReferences
 */
function generateMethodStub( ReflectionMethod $method, array &$missingReferences ): string {
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
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$returnType = $method->getReturnType();
	} catch ( IdentifierNotFound $e ) {
		$symbol                       = $e->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		$returnType                   = null;
	}
	if ( $returnType ) {
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
 * Generates an attribute line from a ReflectionAttribute.
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
 * Generates the stub code for one function/method parameter.
 *
 * @param array<string,int> $missingReferences
 */
function generateParameterStub( ReflectionParameter $param, array &$missingReferences ): string {
	try {
		$type = $param->getType();
	} catch ( IdentifierNotFound $e ) {
		$symbol = $e->getIdentifier()->getName();
		if ( ! isset( $missingReferences[ $symbol ] ) ) {
			$missingReferences[ $symbol ] = 1;
		} else {
			$missingReferences[ $symbol ] ++;
		}
		$type = null;
	}

	$out = $type ? ( (string) $type . ' ' ) : '';
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