#!/usr/bin/env php
<?php

/**
 * Stub generator for a directory using BetterReflection, skipping external parents/interfaces
 * if they are not found within the scanned directory.
 * Also generates function & global constant stubs.
 */

require_once __DIR__ . '/vendor/autoload.php';

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionParameter;
use Roave\BetterReflection\Reflection\ReflectionProperty;
use Roave\BetterReflection\Reflection\ReflectionConstant;

// for global constants
use Roave\BetterReflection\SourceLocator\Type\DirectoriesSourceLocator;
use Roave\BetterReflection\Reflector\Exception\IdentifierNotFound;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

function main( array $argv ): void {
	if ( count( $argv ) < 3 ) {
		echo "Usage: php generate-stubs.php <source-dir> <output-dir>\n";
		exit( 1 );
	}

	$sourceDir = rtrim( $argv[1], DIRECTORY_SEPARATOR );
	$outputDir = rtrim( $argv[2], DIRECTORY_SEPARATOR );

	// Kick off the generation
	generateStubs( $sourceDir, $outputDir );
}

function generateStubs( string $sourceDir, string $outputDir ): void {
	// 1) Reflect the entire directory
	$astLocator         = ( new BetterReflection() )->astLocator();
	$directoriesLocator = new DirectoriesSourceLocator( [ $sourceDir ], $astLocator );
	$reflector          = new DefaultReflector( $directoriesLocator );

	// --- Reflect classes, functions, constants ---
	$allClasses   = $reflector->reflectAllClasses();
	$allFunctions = $reflector->reflectAllFunctions();
	$allConstants = $reflector->reflectAllConstants();

	// 2) Group them by file
	$fileToClassesMap   = [];
	$fileToFunctionsMap = [];
	$fileToConstantsMap = [];

	foreach ( $allClasses as $classReflection ) {
		$fileName = $classReflection->getFileName();
		if ( $fileName === null ) {
			continue;
		}
		$fileToClassesMap[ $fileName ][] = $classReflection;
	}

	foreach ( $allFunctions as $functionReflection ) {
		$fileName = $functionReflection->getFileName();
		if ( $fileName === null ) {
			continue;
		}
		$fileToFunctionsMap[ $fileName ][] = $functionReflection;
	}

	foreach ( $allConstants as $constantReflection ) {
		$fileName = $constantReflection->getFileName();
		if ( $fileName === null ) {
			continue;
		}
		$fileToConstantsMap[ $fileName ][] = $constantReflection;
	}

	// 3) Use Symfony Finder to go file-by-file
	$finder = new Finder();
	$finder->files()->in( $sourceDir )->name( '*.php' );

	// 4) For each file, see if we have classes/functions/constants
	foreach ( $finder as $file ) {
		$realpath   = $file->getRealPath();
		$hasSymbols = (
			isset( $fileToClassesMap[ $realpath ] ) ||
			isset( $fileToFunctionsMap[ $realpath ] ) ||
			isset( $fileToConstantsMap[ $realpath ] )
		);

		if ( ! $hasSymbols ) {
			// Nothing to stub here
			continue;
		}

		// 5) Generate the stub content
		$stubContent = "<?php\n\n";

		// a) Classes
		if ( isset( $fileToClassesMap[ $realpath ] ) ) {
			foreach ( $fileToClassesMap[ $realpath ] as $reflectionClass ) {
				$stubContent .= generateClassStub( $reflectionClass );
			}
		}

		// b) Functions
		if ( isset( $fileToFunctionsMap[ $realpath ] ) ) {
			foreach ( $fileToFunctionsMap[ $realpath ] as $reflectionFunction ) {
				$stubContent .= generateFunctionStub( $reflectionFunction );
			}
		}

		// c) Global Constants
		if ( isset( $fileToConstantsMap[ $realpath ] ) ) {
			foreach ( $fileToConstantsMap[ $realpath ] as $reflectionConstant ) {
				$stubContent .= generateConstantStub( $reflectionConstant );
			}
		}

		// 6) Write the stub file
		$relativePath = str_replace( $sourceDir, '', $realpath );
		$targetPath   = $outputDir . $relativePath;

		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}

		file_put_contents( $targetPath, $stubContent );
	}
}

/**
 * Build the stub for one class, interface, trait, or enum.
 * If external parents/interfaces can't be found, we skip them.
 */
function generateClassStub( ReflectionClass $class ): string {
	$buffer = '';

	// Namespace
	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buffer .= "namespace {$namespace};\n\n";
	}

	// Class DocBlock
	if ( $docComment = $class->getDocComment() ) {
		$buffer .= $docComment . "\n";
	}

	// E.g. "abstract class Foo" or "interface Foo", etc.
	$buffer .= getClassDeclaration( $class );

	// If it's not interface or trait, try extends/implements
	if ( ! $class->isInterface() && ! $class->isTrait() ) {
		// Try to reflect parent class. If missing externally, skip
		if ( $parent = safeGetParentClass( $class ) ) {
			$buffer .= ' extends \\' . $parent->getName();
		}

		// Try to reflect interface names. If missing externally, skip
		$interfaces = safeGetInterfaceNames( $class );
		if ( count( $interfaces ) > 0 ) {
			$buffer .= ' implements ' . implode( ', ', array_map( fn( $i ) => '\\' . $i, $interfaces ) );
		}
	}

	$buffer .= "\n{\n";

	/**
	 * Class-level constants:
	 * Wrap in a try/catch so we skip them if we can't resolve the parent class or any references.
	 */
	try {
		foreach ( $class->getImmediateConstants() as $constName => $reflectionConstant ) {
			// getValue() can fail if it references an external class constant
			try {
				$value = var_export( $reflectionConstant->getValue(), true );
			} catch ( IdentifierNotFound $e ) {
				// Skip constants we can't resolve
				continue;
			}
			$buffer .= "    const {$constName} = {$value};\n\n";
		}
	} catch ( IdentifierNotFound $e ) {
		// Couldn’t reflect immediate constants => skip them altogether
	}

	/**
	 * Local properties only; skip external parents.
	 */
	$properties = [];
	try {
		$properties = $class->getProperties();
	} catch ( IdentifierNotFound $e ) {
		// Couldn't reflect parent => skip all properties
	}

	foreach ( $properties as $property ) {
		if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generatePropertyStub( $property );
	}

	/**
	 * Local methods only; skip external parents.
	 */
	$methods = [];
	try {
		$methods = $class->getMethods();
	} catch ( IdentifierNotFound $e ) {
		// Couldn't reflect parent => skip all methods
	}

	foreach ( $methods as $method ) {
		if ( $method->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generateMethodStub( $method );
	}

	$buffer .= "}\n\n";

	return $buffer;
}

/**
 * Generate a stub for a single function.
 * (If you need doc comments, you can include them similarly to how we do for classes.)
 */
function generateFunctionStub( ReflectionFunction $function ): string {
	$buf = '';

	// Optional doc comment
	if ( $docComment = $function->getDocComment() ) {
		$buf .= $docComment . "\n";
	}

	// function name (+ parameters)
	// For minimal approach, we do something simple:
	$buf         .= 'function ' . $function->getName() . '(';
	$paramChunks = [];
	foreach ( $function->getParameters() as $param ) {
		$paramChunks[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $paramChunks ) . ')';

	// return type
	if ( $returnType = $function->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}

	// function body
	$buf .= "\n{\n    // stub\n}\n\n";

	return $buf;
}

/**
 * Generate a stub for a single global constant.
 */
function generateConstantStub( ReflectionConstant $constant ): string {
	$buf = '';
	// If the constant is namespaced, ReflectionConstant::getName() includes the namespace.
	// For minimal approach, just use the fully-qualified name:
	$constantName = $constant->getName();

	try {
		$value = var_export( $constant->getValue(), true );
	} catch ( IdentifierNotFound $e ) {
		// If referencing an external constant or something, skip
		return '';
	}

	$buf .= "const {$constantName} = {$value};\n\n";

	return $buf;
}

/**
 * Provide a safe wrapper to getParentClass().
 * If the parent is in external code, we'll catch the exception and return null.
 */
function safeGetParentClass( ReflectionClass $class ): ?ReflectionClass {
	try {
		return $class->getParentClass();
	} catch ( IdentifierNotFound $e ) {
		// skip external or unknown
		return null;
	}
}

/**
 * Provide a safe wrapper to getInterfaceNames().
 * If an interface is external, reflection could throw an exception.
 */
function safeGetInterfaceNames( ReflectionClass $class ): array {
	try {
		return $class->getInterfaceNames();
	} catch ( IdentifierNotFound $e ) {
		return [];
	}
}

/**
 * Return a string like "interface Foo" or "abstract class Foo", etc.
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
 * Generate a stub line for a single property.
 */
function generatePropertyStub( ReflectionProperty $property ): string {
	$out = '';

	// docblock
	if ( $docComment = $property->getDocComment() ) {
		$out .= "    {$docComment}\n";
	}

	// visibility
	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );

	// static?
	$static = $property->isStatic() ? ' static' : '';

	// typed property?
	$type       = $property->getType();
	$typeString = $type ? (string) $type . ' ' : '';

	$out .= "    {$visibility}{$static} {$typeString}\${$property->getName()};\n\n";

	return $out;
}

/**
 * Generate a stub for a single method (including docblock, attributes, signature, and empty body if not abstract).
 */
function generateMethodStub( \Roave\BetterReflection\Reflection\ReflectionMethod $method ): string {
	$buf = '';

	// 1) Doc comment
	if ( $docComment = $method->getDocComment() ) {
		foreach ( explode( "\n", $docComment ) as $line ) {
			$buf .= "    {$line}\n";
		}
	}

	// 2) Attributes (PHP 8+)
	//    Each attribute is placed on its own line before the signature.
	foreach ( $method->getAttributes() as $attr ) {
		$buf .= '    ' . generateAttributeLine( $attr ) . "\n";
	}

	// 3) Visibility
	if ( $method->isPrivate() ) {
		$buf .= '    private ';
	} elseif ( $method->isProtected() ) {
		$buf .= '    protected ';
	} else {
		$buf .= '    public ';
	}

	// 4) Static?
	if ( $method->isStatic() ) {
		$buf .= 'static ';
	}

	// 5) Abstract? (if not an interface)
	if ( $method->isAbstract() && ! $method->getDeclaringClass()->isInterface() ) {
		$buf .= 'abstract ';
	}

	// 6) Method name + parameters
	$buf         .= 'function ' . $method->getName() . '(';
	$paramChunks = [];
	foreach ( $method->getParameters() as $param ) {
		$paramChunks[] = generateParameterStub( $param );
	}
	$buf .= implode( ', ', $paramChunks ) . ')';

	// 7) Return type
	if ( $returnType = $method->getReturnType() ) {
		$buf .= ': ' . (string) $returnType;
	}

	// 8) Abstract or interface -> no body
	if ( $method->isAbstract() || $method->getDeclaringClass()->isInterface() ) {
		$buf .= ";\n\n";
	} else {
		$buf .= "\n    {\n        // stub\n    }\n\n";
	}

	return $buf;
}

// Minimal utility to convert a ReflectionAttribute to a string like #[Foo('arg')]
function generateAttributeLine( \Roave\BetterReflection\Reflection\ReflectionAttribute $attr ): string {
	// Convert arguments to a comma-separated list, e.g. (1, 'abc')
	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = count( $args ) ? '(' . implode( ', ', $args ) . ')' : '';

	// Return "#[AttributeName(...)]" (we’ll prepend a `#` manually above)
	return "[{$attr->getName()}{$argsString}]";
}

/**
 * Generate the parameter signature: type + byref + variadic + default value
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
		$defaultVal = var_export( $param->getDefaultValue(), true );
		$out        .= ' = ' . $defaultVal;
	}

	return $out;
}

// ---- Only run `main` if called directly from CLI
if ( PHP_SAPI === 'cli' && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}