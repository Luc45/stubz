<?php

use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;
use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;

/**
 * // ADDED
 * Logs timing data for each function to "stub-benchmark.log"
 *
 * @param string $functionName The name of the function we are timing
 * @param float $startTime microtime(true) at start
 * @param float $endTime microtime(true) at end
 * @param array $context Additional info
 */
function logBenchmark( string $functionName, float $startTime, float $endTime, array $context = [] ): void {
	static $fh = null;
	if ( ! $fh ) {
		$logPath = __DIR__ . '/stub-benchmark.log';
		$fh      = fopen( $logPath, 'ab' );
	}

	$duration = round( $endTime - $startTime, 4 );
	$time     = date( 'Y-m-d H:i:s' );
	$details  = json_encode( $context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	// If it took less than 1 second, ignore.
	if ( $duration < 1 ) {
		return;
	}

	fwrite( $fh, "[$time] $functionName took {$duration}s, context=$details\n" );
	fflush( $fh );
}

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
	$__start = microtime( true ); // ADDED

	$fileToClasses   = [];
	$fileToFunctions = [];
	$fileToConstants = [];

	// --- ADDED instrumentation for class collection ---
	$t1 = microtime( true );
	foreach ( $allClasses as $classReflection ) {
		$file = $classReflection->getFileName();
		if ( $file !== null ) {
			$fileToClasses[ $file ][] = $classReflection;
		}
	}
	$t2 = microtime( true );
	logBenchmark(
		__FUNCTION__ . ' - classCollection',
		$t1,
		$t2,
		[ 'countAllClasses' => count( $allClasses ) ]
	);

	$t3 = microtime( true );
	foreach ( $fileToClasses as $file => $classList ) {
		usort( $classList, fn( ReflectionClass $a, ReflectionClass $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToClasses[ $file ] = $classList;
	}
	$t4 = microtime( true );
	logBenchmark(
		__FUNCTION__ . ' - classSorting',
		$t3,
		$t4,
		[ 'filesWithClasses' => count( $fileToClasses ) ]
	);

	// --- ADDED instrumentation for function collection ---
	$t5 = microtime( true );
	foreach ( $allFunctions as $functionReflection ) {
		$file = $functionReflection->getFileName();
		if ( $file !== null ) {
			$fileToFunctions[ $file ][] = $functionReflection;
		}
	}
	$t6 = microtime( true );
	logBenchmark(
		__FUNCTION__ . ' - functionCollection',
		$t5,
		$t6,
		[ 'countAllFunctions' => count( $allFunctions ) ]
	);

	$t7 = microtime( true );
	foreach ( $fileToFunctions as $file => $funcList ) {
		usort( $funcList, fn( ReflectionFunction $a, ReflectionFunction $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToFunctions[ $file ] = $funcList;
	}
	$t8 = microtime( true );
	logBenchmark(
		__FUNCTION__ . ' - functionSorting',
		$t7,
		$t8,
		[ 'filesWithFunctions' => count( $fileToFunctions ) ]
	);

	// --- ADDED instrumentation for constant collection ---
	$t9 = microtime( true );
	foreach ( $allConstants as $constantReflection ) {
		$file = $constantReflection->getFileName();
		if ( $file !== null ) {
			$fileToConstants[ $file ][] = $constantReflection;
		}
	}
	$t10 = microtime( true );
	logBenchmark(
		__FUNCTION__ . ' - constantCollection',
		$t9,
		$t10,
		[ 'countAllConstants' => count( $allConstants ) ]
	);

	$t11 = microtime( true );
	foreach ( $fileToConstants as $file => $constList ) {
		usort( $constList, fn( ReflectionConstant $a, ReflectionConstant $b ) => $a->getStartLine() <=> $b->getStartLine() );
		$fileToConstants[ $file ] = $constList;
	}
	$t12 = microtime( true );
	logBenchmark(
		__FUNCTION__ . ' - constantSorting',
		$t11,
		$t12,
		[ 'filesWithConstants' => count( $fileToConstants ) ]
	);

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[
			'totalFiles'     => count( array_unique( array_merge(
				array_keys( $fileToClasses ),
				array_keys( $fileToFunctions ),
				array_keys( $fileToConstants )
			) ) ),
			'totalClasses'   => count( $allClasses ),
			'totalFunctions' => count( $allFunctions ),
			'totalConstants' => count( $allConstants ),
		]
	);

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
	$__start = microtime( true ); // ADDED

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

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[
			'realpath'     => $realpath,
			'hasClasses'   => isset( $fileToClassesMap[ $realpath ] ) ? count( $fileToClassesMap[ $realpath ] ) : 0,
			'hasFunctions' => isset( $fileToFunctionsMap[ $realpath ] ) ? count( $fileToFunctionsMap[ $realpath ] ) : 0,
			'hasConstants' => isset( $fileToConstantsMap[ $realpath ] ) ? count( $fileToConstantsMap[ $realpath ] ) : 0,
		]
	);

	return $stub;
}

/**
 * Generates the stub code for a single class.
 *
 * @param array<string,int> $missingReferences
 */
function generateClassStub( ReflectionClass $class, array &$missingReferences ): string {
	$__start = microtime( true );

	$buffer = '';

	// Fine-grained timing around doc comment, attributes, etc.
	$t1        = microtime( true );
	$namespace = $class->getNamespaceName();
	$t2        = microtime( true );
	logBenchmark( "ReflectionClass::getNamespaceName", $t1, $t2, [
		'className' => $class->getName(),
	] );

	$t1  = microtime( true );
	$doc = $class->getDocComment();
	$t2  = microtime( true );
	logBenchmark( "ReflectionClass::getDocComment", $t1, $t2, [
		'className' => $class->getName(),
		'docLength' => $doc ? strlen( $doc ) : 0,
	] );

	$t1         = microtime( true );
	$attributes = $class->getAttributes();
	$t2         = microtime( true );
	logBenchmark( "ReflectionClass::getAttributes", $t1, $t2, [
		'className' => $class->getName(),
		'attrCount' => count( $attributes ),
	] );

	// Optional namespace line
	$buffer .= $namespace ? "namespace {$namespace};\n\n" : '';

	// Doc comment
	if ( $doc ) {
		$buffer .= $doc . "\n";
	}

	// Class-level attributes
	$t1 = microtime( true );
	foreach ( $attributes as $attr ) {
		$buffer .= generateAttributeLine( $attr ) . "\n";
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getAttributes", $t1, $t2, [
		'className' => $class->getName(),
		'attrCount' => count( $attributes ),
	] );

	// Declaration (class / interface / trait / enum)
	$t1 = microtime( true );
	$decl = getClassDeclaration( $class );
	$t2 = microtime( true );
	logBenchmark( "getClassDeclaration", $t1, $t2, [
		'className' => $class->getName(),
	] );

	// === Parent class name (string, not ReflectionClass) ===
	$t1 = microtime( true );
	try {
		$parent = $class->getParentClassName(); // returns FQCN or null
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$parent = null;
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getParentClassName", $t1, $t2, [
		'className' => $class->getName(),
		'parent'    => $parent,
	] );

	// === Interface class names (array of strings) ===
	$t1 = microtime( true );
	try {
		$interfaces = $class->getInterfaceClassNames(); // array of ReflectionClass
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$interfaces = [];
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getInterfaceClassNames", $t1, $t2, [
		'className'      => $class->getName(),
		'interfaceCount' => count( $interfaces ),
	] );

	// Build the stub "class Foo extends ... implements ..."
	$t1 = microtime( true );
	$buffer .= $decl;
	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		if ( $parent !== null ) {
			$buffer .= ' extends \\' . ltrim( $parent, '\\' );
		}
		if ( $interfaces !== [] ) {
			$impls  = array_map(
				static fn( string $ifc ) => '\\' . ltrim( $ifc, '\\' ),
				$interfaces
			);
			$buffer .= ' implements ' . implode( ', ', $impls );
		}
	}
	$buffer .= "\n{\n";
	$t2 = microtime( true );
	logBenchmark( "class declaration", $t1, $t2, [
		'className' => $class->getName(),
	] );

	// === Enum cases
	$t1 = microtime( true );
	if ( $class->isEnum() && $class instanceof ReflectionEnum ) {
		$t1    = microtime( true );
		$cases = $class->getCases();
		$t2    = microtime( true );
		logBenchmark( "ReflectionEnum::getCases", $t1, $t2, [
			'className' => $class->getName(),
			'caseCount' => count( $cases ),
		] );

		foreach ( $cases as $case ) {
			try {
				$value = $case->getValue();
			} catch ( \Throwable $ex ) {
				handleBetterReflectionException( $ex, $missingReferences );
				$value = null;
			}
			if ( $value !== null ) {
				$buffer .= "    case {$case->getName()} = " . var_export( $value, true ) . ";\n\n";
			} else {
				$buffer .= "    case {$case->getName()};\n\n";
			}
		}
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionEnum::getCases", $t1, $t2, [
		'className' => $class->getName(),
	] );

	// === Immediate constants
	$t1                 = microtime( true );
	$immediateConstants = $class->getImmediateConstants();
	$t2                 = microtime( true );
	logBenchmark( "ReflectionClass::getImmediateConstants", $t1, $t2, [
		'className'     => $class->getName(),
		'constantCount' => count( $immediateConstants ),
	] );

	$t1 = microtime( true );
	foreach ( $immediateConstants as $constName => $reflectionConstant ) {
		try {
			$val    = var_export( $reflectionConstant->getValue(), true );
			$buffer .= "    const {$constName} = {$val};\n\n";
		} catch ( \Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
		}
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getImmediateConstants", $t1, $t2, [
		'className'     => $class->getName(),
		'constantCount' => count( $immediateConstants ),
	] );

	// === Properties
	$t1 = microtime( true );
	try {
		$props = $class->getImmediateProperties();
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$props = [];
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getImmediateProperties", $t1, $t2, [
		'className'     => $class->getName(),
		'propertyCount' => count( $props ),
	] );

	$t1 = microtime( true );
	foreach ( $props as $property ) {
		if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generatePropertyStub( $property, $missingReferences );
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getImmediateProperties", $t1, $t2, [
		'className'     => $class->getName(),
		'propertyCount' => count( $props ),
	] );

	// === Methods
	$t1 = microtime( true );
	try {
		$methods = $class->getImmediateMethods();
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$methods = [];
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getImmediateMethods", $t1, $t2, [
		'className'   => $class->getName(),
		'methodCount' => count( $methods ),
	] );

	$t1 = microtime( true );
	foreach ( $methods as $method ) {
		if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generateMethodStub( $method, $missingReferences );
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionClass::getImmediateMethods", $t1, $t2, [
		'className'   => $class->getName(),
		'methodCount' => count( $methods ),
	] );

	$buffer .= "}\n\n";

	// Overall timing
	$__end = microtime( true );
	logBenchmark( __FUNCTION__, $__start, $__end, [
		'className' => $class->getName(),
	] );

	return $buffer;
}

/**
 * Generates the stub code for a standalone function.
 *
 * @param array<string,int> $missingReferences
 */
function generateFunctionStub( ReflectionFunction $function, array &$missingReferences ): string {
	$__start = microtime( true ); // ADDED

	$t1  = microtime( true );
	$doc = $function->getDocComment();
	$t2  = microtime( true );
	logBenchmark( "ReflectionFunction::getDocComment", $t1, $t2, [
		'functionName' => $function->getName(),
		'docLength'    => $doc ? strlen( $doc ) : 0,
	] );

	$t1         = microtime( true );
	$attributes = $function->getAttributes();
	$t2         = microtime( true );
	logBenchmark( "ReflectionFunction::getAttributes", $t1, $t2, [
		'functionName' => $function->getName(),
		'attrCount'    => count( $attributes ),
	] );

	$buf = '';
	if ( $doc ) {
		$buf .= $doc . "\n";
	}
	foreach ( $attributes as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	$buf    .= 'function ' . $function->getName() . '(';
	$params = [];

	$t1             = microtime( true );
	$functionParams = $function->getParameters();
	$t2             = microtime( true );
	logBenchmark( "ReflectionFunction::getParameters", $t1, $t2, [
		'functionName' => $function->getName(),
		'paramCount'   => count( $functionParams ),
	] );

	foreach ( $functionParams as $param ) {
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	$t1 = microtime( true );
	try {
		$returnType = $function->getReturnType();
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$returnType = null;
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionFunction::getReturnType", $t1, $t2, [
		'functionName'  => $function->getName(),
		'hasReturnType' => $returnType !== null,
	] );

	if ( $returnType ) {
		$buf .= ': ' . (string) $returnType;
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[ 'functionName' => $function->getName() ]
	);

	return $buf;
}

/**
 * Generates the stub code for a top-level constant.
 *
 * @param array<string,int> $missingReferences
 */
function generateConstantStub( ReflectionConstant $constant, array &$missingReferences ): string {
	$__start = microtime( true ); // ADDED

	try {
		$val  = var_export( $constant->getValue(), true );
		$stub = "const {$constant->getName()} = {$val};\n\n";
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$stub = '';
	}

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[ 'constantName' => $constant->getName() ]
	);

	return $stub;
}

function getClassDeclaration( ReflectionClass $class ): string {
	$__start = microtime( true ); // ADDED

	if ( $class->isInterface() ) {
		$result = 'interface ' . $class->getShortName();
	} elseif ( $class->isTrait() ) {
		$result = 'trait ' . $class->getShortName();
	} elseif ( $class->isEnum() ) {
		$result = 'enum ' . $class->getShortName();
	} elseif ( $class->isAbstract() ) {
		$result = 'abstract class ' . $class->getShortName();
	} elseif ( $class->isFinal() ) {
		$result = 'final class ' . $class->getShortName();
	} else {
		$result = 'class ' . $class->getShortName();
	}

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[ 'className' => $class->getName() ]
	);

	return $result;
}

/**
 * Generates the stub code for a single property.
 *
 * @param array<string,int> $missingReferences
 */
function generatePropertyStub( ReflectionProperty $property, array &$missingReferences ): string {
	$__start = microtime( true ); // ADDED

	$t1  = microtime( true );
	$doc = $property->getDocComment();
	$t2  = microtime( true );
	logBenchmark( "ReflectionProperty::getDocComment", $t1, $t2, [
		'className'    => $property->getDeclaringClass()->getName(),
		'propertyName' => $property->getName(),
		'docLength'    => $doc ? strlen( $doc ) : 0,
	] );

	$t1    = microtime( true );
	$attrs = $property->getAttributes();
	$t2    = microtime( true );
	logBenchmark( "ReflectionProperty::getAttributes", $t1, $t2, [
		'className'    => $property->getDeclaringClass()->getName(),
		'propertyName' => $property->getName(),
		'attrCount'    => count( $attrs ),
	] );

	$out = '';
	if ( $doc ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$out .= "    {$line}\n";
		}
	}
	foreach ( $attrs as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );
	$static     = $property->isStatic() ? ' static' : '';
	$readonly   = $property->isReadOnly() ? 'readonly ' : '';

	$t1 = microtime( true );
	try {
		$type = $property->getType();
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$type = null;
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionProperty::getType", $t1, $t2, [
		'className'    => $property->getDeclaringClass()->getName(),
		'propertyName' => $property->getName(),
		'hasType'      => $type !== null,
	] );

	$typeStr = $type ? ( (string) $type . ' ' ) : '';

	$out .= "    {$visibility}{$static} {$readonly}{$typeStr}\${$property->getName()};\n\n";

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[
			'className'    => $property->getDeclaringClass()->getName(),
			'propertyName' => $property->getName()
		]
	);

	return $out;
}

/**
 * Generates the stub code for a single method.
 *
 * @param array<string,int> $missingReferences
 */
function generateMethodStub( ReflectionMethod $method, array &$missingReferences ): string {
	$__start = microtime( true ); // ADDED

	$t1  = microtime( true );
	$doc = $method->getDocComment();
	$t2  = microtime( true );
	logBenchmark( "ReflectionMethod::getDocComment", $t1, $t2, [
		'className'  => $method->getDeclaringClass()->getName(),
		'methodName' => $method->getName(),
		'docLength'  => $doc ? strlen( $doc ) : 0,
	] );

	$t1    = microtime( true );
	$attrs = $method->getAttributes();
	$t2    = microtime( true );
	logBenchmark( "ReflectionMethod::getAttributes", $t1, $t2, [
		'className'  => $method->getDeclaringClass()->getName(),
		'methodName' => $method->getName(),
		'attrCount'  => count( $attrs ),
	] );

	$buf = '';
	if ( $doc ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}
	foreach ( $attrs as $attr ) {
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

	$buf .= 'function ' . $method->getName() . '(';

	$t1           = microtime( true );
	$methodParams = $method->getParameters();
	$t2           = microtime( true );
	logBenchmark( "ReflectionMethod::getParameters", $t1, $t2, [
		'className'  => $method->getDeclaringClass()->getName(),
		'methodName' => $method->getName(),
		'paramCount' => count( $methodParams ),
	] );

	$params = [];
	foreach ( $methodParams as $param ) {
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	$t1 = microtime( true );
	try {
		$returnType = $method->getReturnType();
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$returnType = null;
	}
	$t2 = microtime( true );
	logBenchmark( "ReflectionMethod::getReturnType", $t1, $t2, [
		'className'  => $method->getDeclaringClass()->getName(),
		'methodName' => $method->getName(),
		'hasType'    => $returnType !== null,
	] );

	if ( $returnType ) {
		$buf .= ': ' . (string) $returnType;
	}

	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[
			'className'  => $method->getDeclaringClass()->getName(),
			'methodName' => $method->getName()
		]
	);

	return $buf;
}

/**
 * Generates an attribute line from a ReflectionAttribute.
 */
function generateAttributeLine( ReflectionAttribute $attr ): string {
	$__start = microtime( true ); // ADDED

	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = $args ? '(' . implode( ', ', $args ) . ')' : '';

	$result = "#[{$attr->getName()}{$argsString}]";

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[ 'attributeName' => $attr->getName() ]
	);

	return $result;
}

/**
 * Generates the stub code for one function/method parameter.
 *
 * @param array<string,int> $missingReferences
 */
function generateParameterStub( ReflectionParameter $param, array &$missingReferences ): string {
	$__start = microtime( true ); // ADDED

	try {
		$type = $param->getType();
	} catch ( \Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
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
		try {
			$defaultVal = $param->getDefaultValue();
			$out        .= ' = ' . var_export( $defaultVal, true );
		} catch ( \Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			// If we can't compile the default, we won't set it
		}
	}

	$__end = microtime( true ); // ADDED
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[
			'declaringFunction' => $param->getDeclaringFunction()->getName(),
			'paramName'         => $param->getName()
		]
	);

	return $out;
}

/**
 * Given a thrown exception from BetterReflection, we try to figure out
 * which symbol is missing, record it in $missingReferences, and move on.
 *
 * @param \Throwable $ex
 * @param array<string,int> $missingReferences
 */
function handleBetterReflectionException( \Throwable $ex, array &$missingReferences ): void {
	$__start = microtime( true ); // ADDED

	if ( $ex instanceof IdentifierNotFound ) {
		$symbol                       = $ex->getIdentifier()->getName();
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;

		$__end = microtime( true );
		logBenchmark(
			__FUNCTION__,
			$__start,
			$__end,
			[ 'exceptionType' => get_class( $ex ), 'symbol' => $symbol ]
		);

		return;
	}

	if ( $ex instanceof UnableToCompileNode ) {
		$symbol = method_exists( $ex, 'constantName' ) && $ex->constantName()
			? $ex->constantName()
			: 'UnknownConstant';

		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;

		$__end = microtime( true );
		logBenchmark(
			__FUNCTION__,
			$__start,
			$__end,
			[ 'exceptionType' => get_class( $ex ), 'symbol' => $symbol ]
		);

		return;
	}

	$missingReferences[ $ex::class ] = ( $missingReferences[ $ex::class ] ?? 0 ) + 1;

	$__end = microtime( true );
	logBenchmark(
		__FUNCTION__,
		$__start,
		$__end,
		[ 'exceptionType' => get_class( $ex ) ]
	);
}