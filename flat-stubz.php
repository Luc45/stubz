#!/usr/bin/env php
<?php

/**
 * flat-stubz.php
 *
 * A "flat" stub generator that:
 *  - Uses SingleFileSourceLocator on each *.php file
 *  - Generates stubs for the file (classes/functions/constants) in one pass
 *  - Writes exactly ONE `<?php` tag per file
 *  - Skips creating empty stub files if a source file has no symbols
 *  - Logs reflection timing data to "stub-benchmark.log"
 *
 * Usage:
 *   php flat-stubz.php <source-dir> <output-dir>
 */

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Finder\Finder;
use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\MemoizingSourceLocator;
use Roave\BetterReflection\Reflection\ReflectionAttribute;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionConstant;
use Roave\BetterReflection\Reflection\ReflectionEnum;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Roave\BetterReflection\NodeCompiler\Exception\UnableToCompileNode;

function main( array $argv ): void {
	if ( count( $argv ) < 3 ) {
		fwrite( STDERR, "Usage: php flat-stubz.php <source-dir> <output-dir>\n" );
		exit( 1 );
	}

	[ , $sourceDir, $outputDir ] = $argv;
	$sourceDir = rtrim( $sourceDir, DIRECTORY_SEPARATOR );
	$outputDir = rtrim( $outputDir, DIRECTORY_SEPARATOR );

	// 1) Use Symfony Finder to get *.php files
	$finder = new Finder();
	$finder->files()->in( $sourceDir )->name( '*.php' )->sortByName();

	// Missing references (external classes, etc.)
	$missingReferences = [];

	// Prepare BetterReflection
	$br         = new BetterReflection();
	$astLocator = $br->astLocator();

	// Recognize built-in PHP symbols
	$internalLocator = new PhpInternalSourceLocator( $astLocator, $br->sourceStubber() );

	$totalFiles = $finder->count();
	$index      = 0;

	echo "Reflecting {$totalFiles} PHP files from {$sourceDir}...\n";

	foreach ( $finder as $file ) {
		$index ++;
		$realpath = $file->getRealPath();
		if ( ! $realpath ) {
			continue;
		}

		// SingleFileSourceLocator for this file
		$fileLocator = new SingleFileSourceLocator( $realpath, $astLocator );
		$aggregate   = new AggregateSourceLocator( [ $internalLocator, $fileLocator ] );
		$memo        = new MemoizingSourceLocator( $aggregate );
		$reflector   = new DefaultReflector( $memo );

		// Gather symbols physically declared in this file
		$allClasses   = $reflector->reflectAllClasses();
		$allFunctions = $reflector->reflectAllFunctions();
		$allConstants = $reflector->reflectAllConstants();

		// Sort them by start line
		usort( $allClasses, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		usort( $allFunctions, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
		usort( $allConstants, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );

		// Build the stub content (without any leading <?php)
		$stubBody = '';
		foreach ( $allClasses as $class ) {
			$stubBody .= generateClassStub( $class, $missingReferences );
		}
		foreach ( $allFunctions as $fn ) {
			$stubBody .= generateFunctionStub( $fn, $missingReferences );
		}
		foreach ( $allConstants as $const ) {
			$stubBody .= generateConstantStub( $const, $missingReferences );
		}

		// If it's empty (i.e., no classes/functions/constants), skip writing a stub file
		if ( trim( $stubBody ) === '' ) {
			echo "[{$index}/{$totalFiles}] Skipped empty: " . str_replace( $sourceDir, '', $realpath ) . "\n";
			continue;
		}

		// Wrap once in <?php
		$stubContent = "<?php\n\n" . $stubBody;

		// Mirror file path into outputDir
		$relativePath = ltrim( str_replace( $sourceDir, '', $realpath ), DIRECTORY_SEPARATOR );
		$targetPath   = $outputDir . DIRECTORY_SEPARATOR . $relativePath;

		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );

		echo "[{$index}/{$totalFiles}] Wrote stub for: " . str_replace( $sourceDir, '', $realpath ) . "\n";
	}

	// Print missing references
	if ( count( $missingReferences ) > 0 ) {
		$count  = array_sum( $missingReferences );
		$unique = count( $missingReferences );
		echo "\nWarning: {$count} external references not found.\n";
		echo "Missing symbols ({$unique} total):\n";
		foreach ( $missingReferences as $symbol => $times ) {
			echo "  - {$symbol} ({$times} times)\n";
		}
	}

	echo "Done.\n";
}

/**
 * ----------------------------------------------------------------------------------
 * "stub-generator.php" style helpers below, but WITHOUT adding `<?php` in each snippet
 * ----------------------------------------------------------------------------------
 */

/**
 * Write a line to "stub-benchmark.log" if it took >= 1 second.
 */
function logBenchmark( string $functionName, float $startTime, float $endTime, array $context = [] ): void {
	static $fh = null;
	if ( ! $fh ) {
		$logPath = __DIR__ . '/stub-benchmark.log';
		$fh      = fopen( $logPath, 'ab' );
	}
	$duration = round( $endTime - $startTime, 4 );
	if ( $duration < 1 ) {
		return; // skip
	}
	$time    = date( 'Y-m-d H:i:s' );
	$details = json_encode( $context, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
	fwrite( $fh, "[{$time}] {$functionName} took {$duration}s, context={$details}\n" );
	fflush( $fh );
}

function generateClassStub( ReflectionClass $class, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	// Possibly output the namespace line each time. It's valid to have multiple
	// classes in one file, each with the same or different namespace.
	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buf .= "namespace {$namespace};\n\n";
	}

	// Doc comment
	$doc = $class->getDocComment();
	if ( $doc ) {
		$buf .= $doc . "\n";
	}

	// Attributes
	$attrs = $class->getAttributes();
	foreach ( $attrs as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	// Declaration: class vs interface vs trait vs enum
	$decl = getClassDeclaration( $class );
	$buf  .= $decl;

	// If it's a normal class (not an interface/trait/enum), handle extends/implements
	if ( ! $class->isInterface() && ! $class->isTrait() && ! $class->isEnum() ) {
		// extends
		try {
			$parent = $class->getParentClassName();
		} catch ( Throwable $ex ) {
			handleBetterReflectionException( $ex, $missingReferences );
			$parent = null;
		}
		if ( $parent !== null ) {
			$buf .= ' extends \\' . ltrim( $parent, '\\' );
		}

		// implements
		try {
			$interfaces = $class->getInterfaceClassNames();
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

	// Enum cases
	if ( $class->isEnum() && $class instanceof ReflectionEnum ) {
		$cases = $class->getCases();
		foreach ( $cases as $case ) {
			try {
				$value = $case->getValue();
				if ( $value !== null ) {
					$buf .= "    case {$case->getName()} = " . var_export( $value, true ) . ";\n\n";
				} else {
					$buf .= "    case {$case->getName()};\n\n";
				}
			} catch ( Throwable $ex ) {
				handleBetterReflectionException( $ex, $missingReferences );
			}
		}
	}

	// Class constants
	$constants = $class->getImmediateConstants();
	foreach ( $constants as $constName => $reflConst ) {
		try {
			$val = var_export( $reflConst->getValue(), true );
			$buf .= "    const {$constName} = {$val};\n\n";
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

function generateFunctionStub( ReflectionFunction $fn, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	// If the function has a namespace, we can optionally emit it here.
	// But many user-level functions might share the same namespace.
	$ns = $fn->getNamespaceName();
	if ( $ns ) {
		$buf .= "namespace {$ns};\n\n";
	}

	$doc = $fn->getDocComment();
	if ( $doc ) {
		$buf .= $doc . "\n";
	}

	$attrs = $fn->getAttributes();
	foreach ( $attrs as $attr ) {
		$buf .= generateAttributeLine( $attr ) . "\n";
	}

	$buf .= 'function ' . $fn->getName() . '(';

	$params = [];
	foreach ( $fn->getParameters() as $param ) {
		$params[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $params ) . ')';

	try {
		$ret = $fn->getReturnType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$ret = null;
	}
	if ( $ret ) {
		$buf .= ': ' . (string) $ret;
	}

	$buf .= "\n{\n    // stub\n}\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'functionName' => $fn->getName(),
	] );

	return $buf;
}

function generateConstantStub( ReflectionConstant $constant, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	// If it's namespaced, we can optionally do `namespace Foo;`.
	$ns = $constant->getNamespaceName();
	if ( $ns ) {
		$buf .= "namespace {$ns};\n\n";
	}

	try {
		$val = var_export( $constant->getValue(), true );
		$buf .= "const {$constant->getName()} = {$val};\n\n";
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
	}

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'constantName' => $constant->getName(),
	] );

	return $buf;
}

function getClassDeclaration( ReflectionClass $class ): string {
	$__start = microtime( true );
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
	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className' => $class->getName(),
	] );

	return $result;
}

function generatePropertyStub( ReflectionProperty $prop, array &$missingReferences ): string {
	$__start = microtime( true );
	$out     = '';

	$doc = $prop->getDocComment();
	if ( $doc ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$out .= "    {$line}\n";
		}
	}

	$attrs = $prop->getAttributes();
	foreach ( $attrs as $attr ) {
		$out .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	if ( $prop->isPrivate() ) {
		$vis = 'private';
	} elseif ( $prop->isProtected() ) {
		$vis = 'protected';
	} else {
		$vis = 'public';
	}

	$static   = $prop->isStatic() ? ' static' : '';
	$readonly = $prop->isReadOnly() ? 'readonly ' : '';

	try {
		$type = $prop->getType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$type = null;
	}
	$typeStr = $type ? ( (string) $type . ' ' ) : '';

	$out .= "    {$vis}{$static} {$readonly}{$typeStr}\${$prop->getName()};\n\n";

	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'className'    => $prop->getDeclaringClass()->getName(),
		'propertyName' => $prop->getName(),
	] );

	return $out;
}

function generateMethodStub( ReflectionMethod $method, array &$missingReferences ): string {
	$__start = microtime( true );
	$buf     = '';

	$doc = $method->getDocComment();
	if ( $doc ) {
		foreach ( explode( "\n", $doc ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}

	$attrs = $method->getAttributes();
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

	$paramBits = [];
	foreach ( $method->getParameters() as $param ) {
		$paramBits[] = generateParameterStub( $param, $missingReferences );
	}
	$buf .= implode( ', ', $paramBits ) . ')';

	try {
		$retType = $method->getReturnType();
	} catch ( Throwable $ex ) {
		handleBetterReflectionException( $ex, $missingReferences );
		$retType = null;
	}
	if ( $retType ) {
		$buf .= ': ' . (string) $retType;
	}

	// abstract or interface => semicolon, else stub body
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

function generateAttributeLine( ReflectionAttribute $attr ): string {
	$__start = microtime( true );
	$args    = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsStr = $args ? '(' . implode( ', ', $args ) . ')' : '';
	$line    = "#[{$attr->getName()}{$argsStr}]";
	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'attributeName' => $attr->getName(),
	] );

	return $line;
}

function generateParameterStub( ReflectionParameter $param, array &$missingReferences ): string {
	$__start = microtime( true );
	try {
		$type = $param->getType();
	} catch ( Throwable $ex ) {
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
		$symbol                       = method_exists( $ex, 'constantName' ) && $ex->constantName()
			? $ex->constantName()
			: 'UnknownConstant';
		$missingReferences[ $symbol ] = ( $missingReferences[ $symbol ] ?? 0 ) + 1;
		logBenchmark( __FUNCTION__, $__start, microtime( true ), [
			'exceptionType' => get_class( $ex ),
			'symbol'        => $symbol,
		] );

		return;
	}

	// Otherwise record the exception class
	$missingReferences[ $ex::class ] = ( $missingReferences[ $ex::class ] ?? 0 ) + 1;
	logBenchmark( __FUNCTION__, $__start, microtime( true ), [
		'exceptionType' => get_class( $ex ),
	] );
}

if ( PHP_SAPI === 'cli' && isset( $argv[0] ) && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}