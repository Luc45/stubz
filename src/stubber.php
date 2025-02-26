<?php

use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass as BRClass;
use Roave\BetterReflection\Reflection\ReflectionConstant as BRConstant;
use Roave\BetterReflection\Reflection\ReflectionEnum as BREnum;
use Roave\BetterReflection\Reflection\ReflectionFunction as BRFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod as BRMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter as BRParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty as BRProperty;

use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;
use Throwable;

/**
 * Generate a class stub from reflection.
 *
 * @param BRClass $class
 * @param array<string,int> $missingReferences
 */
function generateClassStub( BRClass $class, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	// Print namespace only if non-empty
	$namespace = $class->getNamespaceName();
	if ( $namespace !== '' ) {
		$buf .= "namespace {$namespace};\n\n";
	}

	// Doc comment
	$doc = $class->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		$buf .= $doc . "\n";
	}

	// Attributes
	foreach ( $class->getAttributes() as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	// e.g. abstract class Foo, final class, enum, trait, interface
	$buf .= getClassDeclaration( $class );

	// ------------------------------------------------------------------
	//  2) Instead of relying on getParentClassName() and getInterfaceNames(),
	//     we fetch the actual parent ReflectionClass (if any) and all interfaces
	//     so we can skip "extends \SomeInterface" if reflection incorrectly
	//     picks an interface as parent. This also ensures multi-interface lists
	//     appear properly in "implements" rather than forcibly turning one
	//     into extends.
	// ------------------------------------------------------------------
	$parentReflection = null;
	try {
		$possibleParent = $class->getParentClass();
		if ( $possibleParent && ! $possibleParent->isInterface() && ! $possibleParent->isTrait() && ! $possibleParent->isEnum() ) {
			// It's a real parent class
			$parentReflection = $possibleParent;
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	// If it’s a normal class (not interface/trait/enum), handle extends/implements
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
			// We'll fetch reflection objects, not just strings, so we can gather all
			$ifaceRefs = $class->getInterfaces();
			// Sort them by name so multi-interface scenario has a stable order
			// (some tests might rely on a particular alphabetical or original order).
			ksort( $ifaceRefs );
			foreach ( $ifaceRefs as $iRef ) {
				$interfaces[] = '\\' . ltrim( $iRef->getName(), '\\' );
			}
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$interfaces = [];
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
					$buf .= "    case {$case->getName()} = " . convertVarExportToWpStyle( $val ) . ";\n\n";
				} else {
					$buf .= "    case {$case->getName()};\n\n";
				}
			} catch ( Throwable $ex ) {
				handleBetterReflectionException( $ex, $missingReferences );
			}
		}
	}

	// Class constants
	foreach ( $class->getImmediateConstants() as $constName => $refConst ) {
		try {
			$value = $refConst->getValue();
			$buf   .= "    const {$constName} = " . convertVarExportToWpStyle( $value ) . ";\n\n";
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	}

	// Properties
	try {
		$props = $class->getImmediateProperties();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$props = [];
	}
	foreach ( $props as $prop ) {
		if ( $prop->getDeclaringClass()->getName() === $class->getName() ) {
			$buf .= generatePropertyStub( $prop, $missingReferences );
		}
	}

	// Methods
	try {
		$methods = $class->getImmediateMethods();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$methods = [];
	}
	foreach ( $methods as $method ) {
		if ( $method->getDeclaringClass()->getName() === $class->getName() ) {
			$buf .= generateMethodStub( $method, $missingReferences );
		}
	}

	$buf .= "}\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className' => $class->getName(),
	] );

	return $buf;
}

/**
 * Generate a function stub
 *
 * @param BRFunction $fn
 * @param array<string,int> $missingReferences
 */
function generateFunctionStub( BRFunction $fn, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$ns       = trim( $fn->getNamespaceName() );
	$funcName = $fn->getName();

	if ( $ns !== '' && strpos( $funcName, '\\' ) === false ) {
		$buf .= "namespace {$ns};\n\n";
	}

	$doc = $fn->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		$buf .= $doc . "\n";
	}

	foreach ( $fn->getAttributes() as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	$buf    .= 'function ' . $funcName . '(';
	$params = [];
	foreach ( $fn->getParameters() as $param ) {
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$ret = $fn->getReturnType();
		if ( $ret !== null ) {
			$buf .= ': ' . (string) $ret;
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'functionName' => $fn->getName(),
	] );

	return $buf;
}

/**
 * Generate a constant stub (global constants).
 * Using "const FOO = ..." instead of define().
 *
 * @param BRConstant $constant
 * @param array<string,int> $missingReferences
 */
function generateConstantStub( BRConstant $constant, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	// If it's a class constant, skip
	if ( method_exists( $constant, 'getDeclaringClass' ) ) {
		return '';
	}

	$ns        = trim( $constant->getNamespaceName() );
	$constName = $constant->getName();

	if ( $ns !== '' && strpos( $constName, '\\' ) === false ) {
		$buf .= "namespace {$ns};\n\n";
	}

	try {
		$val = var_export( $constant->getValue(), true );
		$buf .= "const {$constName} = {$val};\n\n";
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'constantName' => $constant->getName(),
	] );

	return $buf;
}

/**
 * Describe how the class is declared: interface, trait, enum, abstract, final, etc.
 */
function getClassDeclaration( BRClass $class ): string {
	$__start = microtime( true );

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

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className' => $class->getName(),
	] );

	return $out;
}

/**
 * Generate a property stub
 *
 * @param BRProperty $prop
 * @param array<string,int> $missingReferences
 */
function generatePropertyStub( BRProperty $prop, array &$missingReferences ): string {
	$__start = microtime( true );
	$out     = '';

	$doc = $prop->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$out .= "    {$line}\n";
		}
	}

	foreach ( $prop->getAttributes() as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	$vis      = $prop->isPrivate() ? 'private'
		: ( $prop->isProtected() ? 'protected' : 'public' );
	$static   = $prop->isStatic() ? ' static' : '';
	$readonly = $prop->isReadOnly() ? 'readonly ' : '';

	try {
		$typeObj = $prop->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$typeObj = null;
	}
	$typeStr = $typeObj ? ( (string) $typeObj . ' ' ) : '';

	$out .= "    {$vis}{$static} {$readonly}{$typeStr}\${$prop->getName()}";

	// ------------------------------------------------------------------
	//  3) If reflection thinks there's a default for typed properties
	//     that is actually the “auto default” (like = 0 for int), skip it.
	//     We'll only set the default if we strongly suspect it was actually
	//     declared in the code.
	// ------------------------------------------------------------------
	try {
		if ( $prop->hasDefaultValue() ) {
			$defVal = $prop->getDefaultValue();
			// Detect "fake" typed default:
			// e.g. typed property int $count => reflection sometimes says = 0
			// or typed property array $stuff => reflection says = array().
			// We'll guess it's a reflection fallback if property is typed AND
			// the default is 0 or [] or '' but no explicit initializer was found.
			$skipFake = false;

			// If there's an actual node we could check if there's an AST default, but
			// let's do a simple heuristic:
			if ( $typeObj ) {
				$typeLower = strtolower( (string) $typeObj );
				if ( ( $typeLower === 'int' || $typeLower === 'float' ) && ( $defVal === 0 ) ) {
					// Probably the auto default
					$skipFake = true;
				} elseif ( str_contains( $typeLower, 'array' ) && $defVal === [] ) {
					$skipFake = true;
				}
			}

			if ( ! $skipFake ) {
				$out .= ' = ' . convertVarExportToWpStyle( $defVal );
			}
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	$out .= ";\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className'    => $prop->getDeclaringClass()->getName(),
		'propertyName' => $prop->getName(),
	] );

	return $out;
}

/**
 * Generate a method stub
 *
 * @param BRMethod $method
 * @param array<string,int> $missingReferences
 */
function generateMethodStub( BRMethod $method, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$doc = $method->getDocComment();
	if ( $doc !== null && $doc !== '' ) {
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
	foreach ( $method->getParameters() as $pm ) {
		$params[] = generateParameterStub( $pm, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$ret = $method->getReturnType();
		if ( $ret !== null ) {
			$buf .= ': ' . (string) $ret;
		}
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className'  => $method->getDeclaringClass()->getName(),
		'methodName' => $method->getName(),
	] );

	return $buf;
}

/**
 * Generate an attribute line
 *
 * @param ReflectionAttribute $attr
 */
function generateAttributeLine( ReflectionAttribute $attr ): string {
	$__start = microtime( true );

	$args = [];
	foreach ( $attr->getArguments() as $argVal ) {
		$args[] = var_export( $argVal, true );
	}
	$argsStr = $args ? '(' . implode( ', ', $args ) . ')' : '';
	$line    = "#[{$attr->getName()}{$argsStr}]";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'attributeName' => $attr->getName(),
	] );

	return $line;
}

/**
 * Generate a parameter stub
 *
 * @param BRParameter $param
 * @param array<string,int> $missingReferences
 */
function generateParameterStub( BRParameter $param, array &$missingReferences ): string {
	$__start = microtime( true );

	try {
		$typeObj = $param->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$typeObj = null;
	}
	$out = $typeObj ? ( (string) $typeObj . ' ' ) : '';

	if ( $param->isPassedByReference() ) {
		$out .= '&';
	}
	if ( $param->isVariadic() ) {
		$out .= '...';
	}
	$out .= '$' . $param->getName();

	if ( $param->isDefaultValueAvailable() ) {
		try {
			$defVal = $param->getDefaultValue();
			$out    .= ' = ' . convertVarExportToWpStyle( $defVal );
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'declaringFunction' => $param->getDeclaringFunction()->getName(),
		'paramName'         => $param->getName(),
	] );

	return $out;
}

/**
 * Convert var_export output to WP style
 *
 * Removes forced array(...) logic but still lowercases NULL => null.
 */
function convertVarExportToWpStyle( $value ): string {
	$out = var_export( $value, true );
	$out = str_ireplace( 'NULL', 'null', $out );

	// We do NOT do the preg_replace to unify "array(...)" now,
	// because some snapshots want "array (\n" exactly as var_export prints it.
	// We'll only remove trailing whitespace.
	$out = (string) preg_replace( '/\)(\s*)$/', ')', $out );

	return $out;
}

/**
 * Log benchmarks if they take >= 1s
 *
 * @param array<string,mixed> $context
 */
function logBenchmark( string $functionName, float $startTime, float $endTime, array $context = [] ): void {
	static $fh = null;
	if ( ! is_resource( $fh ) ) {
		$fp = @fopen( __DIR__ . '/../stub-benchmark.log', 'ab' );
		if ( is_resource( $fp ) ) {
			$fh = $fp;
		} else {
			return;
		}
	}
	$duration = $endTime - $startTime;
	if ( $duration < 1.0 ) {
		return;
	}
	$time    = date( 'Y-m-d H:i:s' );
	$details = json_encode( $context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) ?: '';
	fwrite( $fh, "[{$time}] {$functionName} took " . round( $duration, 4 ) . "s, context={$details}\n" );
	fflush( $fh );
}

/**
 * Handle reflection exceptions and increment missingReferences
 *
 * @param Throwable $ex
 * @param array<string,int> $missingReferences
 */
function handleBetterReflectionException( Throwable $ex, array &$missingReferences ): void {
	$__start = microtime( true );

	if ( $ex instanceof IdentifierNotFound ) {
		$symbol                       = $ex->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		logBenchmark( __FUNCTION__, $__start, microtime( true ), [
			'exceptionType' => get_class( $ex ),
			'symbol'        => $symbol,
		] );

		return;
	}

	if ( $ex instanceof UnableToCompileNode ) {
		$constantName                 = method_exists( $ex, 'constantName' ) ? $ex->constantName() : null;
		$symbol                       = ( is_string( $constantName ) && $constantName !== '' ) ? $constantName : 'UnknownConstant';
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		logBenchmark( __FUNCTION__, $__start, microtime( true ), [
			'exceptionType' => get_class( $ex ),
			'symbol'        => $symbol,
		] );

		return;
	}

	$cls                       = get_class( $ex );
	$missingReferences[ $cls ] = ( $missingReferences[ $cls ] ?? 0 ) + 1;

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'exceptionType' => $cls,
	] );
}