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

	// If it’s a normal class (not interface/trait/enum), handle extends/implements
	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		// extends
		try {
			$parent = $class->getParentClassName(); // may be '' or '\\' if unknown
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$parent = '';
		}
		// Only print extends if non-empty and not just '\'
		if ( $parent !== '' && $parent !== '\\' ) {
			$buf .= ' extends \\' . ltrim( $parent, '\\' );
		}

		// implements
		try {
			$interfaces = $class->getInterfaceNames();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$interfaces = [];
		}
		if ( ! empty( $interfaces ) ) {
			$impls = array_map( fn( string $i ) => '\\' . ltrim( $i, '\\' ), $interfaces );
			$buf   .= ' implements ' . implode( ', ', $impls );
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

	// If the function name has a slash (like "GlobalExample\foo"), we consider it in global scope
	// so skip printing namespace line. Otherwise, if ns is non-empty, print it.
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
 * If it's actually a class constant (getDeclaringClass()), skip.
 * If the name includes a backslash, skip printing "namespace X;" line.
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

	// If there's a real namespace and the const name doesn't have a backslash => print "namespace"
	if ( $ns !== '' && strpos( $constName, '\\' ) === false ) {
		$buf .= "namespace {$ns};\n\n";
	}

	// define('Foo\BAR', ...)
	try {
		$value  = $constant->getValue();
		$mapped = mapValueForDefine( $value, $constName );
		$buf    .= "\\define('{$constName}', {$mapped});\n\n";
	} catch ( Throwable $ex ) {
		$buf .= "// Skipped constant '{$constName}' of invalid type.\n\n";
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

	try {
		if ( $prop->hasDefaultValue() ) {
			$defVal = $prop->getDefaultValue();
			$out    .= ' = ' . convertVarExportToWpStyle( $defVal );
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
 * @param mixed $value
 */
function convertVarExportToWpStyle( $value ): string {
	$out = var_export( $value, true );
	$out = str_ireplace( 'NULL', 'null', $out );

	// Force array() instead of array (
	$out = (string) preg_replace( '/array\s*\(/', 'array(', $out );
	$out = (string) preg_replace( '/\)(\s*)$/', ')', $out );

	return $out;
}

/**
 * Convert any global constant value to a valid define() expression
 *
 * @param mixed $value
 * @param string $constantName
 *
 * @return string
 * @throws \UnexpectedValueException
 */
function mapValueForDefine( $value, string $constantName ): string {
	$t = gettype( $value );
	switch ( $t ) {
		case 'boolean':
			return $value ? 'true' : 'false';
		case 'integer':
		case 'double':
			return (string) $value;
		case 'string':
			return var_export( $value, true );
		case 'NULL':
			return 'null';
		case 'array':
			return 'array()';
		default:
			throw new \UnexpectedValueException(
				"Cannot define constant '{$constantName}' with value of type {$t}."
			);
	}
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