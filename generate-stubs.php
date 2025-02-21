#!/usr/bin/env php
<?php

/**
 * Stub generator for a directory using BetterReflection, skipping external parents/interfaces
 * if they are not found within the scanned directory.
 * Also generates function & global constant stubs.
 *
 * Added minimal file-based caching using a top-level "slug" for multiple caches.
 */

require_once __DIR__ . '/vendor/autoload.php';

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\Reflection\ReflectionClass;
use Roave\BetterReflection\Reflection\ReflectionFunction;
use Roave\BetterReflection\Reflection\ReflectionConstant;
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
	/**
	 * 1) Build a top-level "slug" from the source directory,
	 *    so we can store multiple caches in .reflection-cache/<slug>/.
	 */
	$slug     = basename( $sourceDir ); // or customize
	$cacheDir = __DIR__ . '/.reflection-cache/' . $slug;

	if ( ! is_dir( $cacheDir ) ) {
		mkdir( $cacheDir, 0777, true );
	}

	// 2) Reflect the entire directory (as before)
	$astLocator         = ( new BetterReflection() )->astLocator();
	$directoriesLocator = new \Roave\BetterReflection\SourceLocator\Type\DirectoriesSourceLocator( [ $sourceDir ], $astLocator );
	$reflector          = new DefaultReflector( $directoriesLocator );

	// Reflect classes, functions, constants
	$allClasses   = $reflector->reflectAllClasses();
	$allFunctions = $reflector->reflectAllFunctions();
	$allConstants = $reflector->reflectAllConstants();

	// 3) Group them by file
	$fileToClassesMap   = [];
	$fileToFunctionsMap = [];
	$fileToConstantsMap = [];

	foreach ( $allClasses as $classReflection ) {
		$fileName = $classReflection->getFileName();
		if ( $fileName ) {
			$fileToClassesMap[ $fileName ][] = $classReflection;
		}
	}
	foreach ( $allFunctions as $functionReflection ) {
		$fileName = $functionReflection->getFileName();
		if ( $fileName ) {
			$fileToFunctionsMap[ $fileName ][] = $functionReflection;
		}
	}
	foreach ( $allConstants as $constantReflection ) {
		$fileName = $constantReflection->getFileName();
		if ( $fileName ) {
			$fileToConstantsMap[ $fileName ][] = $constantReflection;
		}
	}

	// 4) Go file-by-file via Symfony Finder
	$finder = new Finder();
	$finder->files()->in( $sourceDir )->name( '*.php' );

	foreach ( $finder as $file ) {
		/** @var SplFileInfo $file */
		$realpath = $file->getRealPath();
		if ( ! $realpath ) {
			continue;
		}

		$hasSymbols = (
			isset( $fileToClassesMap[ $realpath ] ) ||
			isset( $fileToFunctionsMap[ $realpath ] ) ||
			isset( $fileToConstantsMap[ $realpath ] )
		);
		if ( ! $hasSymbols ) {
			// No classes/functions/constants => skip
			continue;
		}

		// 5) Compute a checksum and see if we have a cached stub
		$fileHash    = md5_file( $realpath );
		$cacheFile   = $cacheDir . '/' . $fileHash . '.stubcache';
		$stubContent = '';

		if ( file_exists( $cacheFile ) ) {
			// Already cached => just load it
			$stubContent = file_get_contents( $cacheFile );
		} else {
			// Build the stub content
			$stubContent = "<?php\n\n";

			// Classes
			if ( isset( $fileToClassesMap[ $realpath ] ) ) {
				foreach ( $fileToClassesMap[ $realpath ] as $reflectionClass ) {
					$stubContent .= generateClassStub( $reflectionClass );
				}
			}
			// Functions
			if ( isset( $fileToFunctionsMap[ $realpath ] ) ) {
				foreach ( $fileToFunctionsMap[ $realpath ] as $reflectionFunction ) {
					$stubContent .= generateFunctionStub( $reflectionFunction );
				}
			}
			// Constants
			if ( isset( $fileToConstantsMap[ $realpath ] ) ) {
				foreach ( $fileToConstantsMap[ $realpath ] as $reflectionConstant ) {
					$stubContent .= generateConstantStub( $reflectionConstant );
				}
			}

			// Save to cache
			file_put_contents( $cacheFile, $stubContent );
		}

		// 6) Write stub file to output
		$relativePath = str_replace( $sourceDir, '', $realpath );
		$targetPath   = $outputDir . $relativePath;

		if ( ! is_dir( dirname( $targetPath ) ) ) {
			mkdir( dirname( $targetPath ), 0777, true );
		}
		file_put_contents( $targetPath, $stubContent );
	}
}

/**
 * The rest is unchanged...
 */
function generateClassStub( ReflectionClass $class ): string {
	// same as before...
	$buffer = '';

	// Namespace
	$namespace = $class->getNamespaceName();
	if ( $namespace ) {
		$buffer .= "namespace {$namespace};\n\n";
	}

	// DocBlock
	if ( $docComment = $class->getDocComment() ) {
		$buffer .= $docComment . "\n";
	}

	$buffer .= getClassDeclaration( $class );

	if ( ! $class->isInterface() && ! $class->isTrait() ) {
		if ( $parent = safeGetParentClass( $class ) ) {
			$buffer .= ' extends \\' . $parent->getName();
		}
		$interfaces = safeGetInterfaceNames( $class );
		if ( $interfaces ) {
			$buffer .= ' implements ' . implode( ', ', array_map( fn( $i ) => '\\' . $i, $interfaces ) );
		}
	}
	$buffer .= "\n{\n";

	// constants, properties, methods...
	try {
		foreach ( $class->getImmediateConstants() as $constName => $reflectionConstant ) {
			try {
				$value = var_export( $reflectionConstant->getValue(), true );
			} catch ( IdentifierNotFound $e ) {
				continue;
			}
			$buffer .= "    const {$constName} = {$value};\n\n";
		}
	} catch ( IdentifierNotFound $e ) {
		// skip
	}

	$properties = [];
	try {
		$properties = $class->getProperties();
	} catch ( IdentifierNotFound $e ) {
	}
	foreach ( $properties as $property ) {
		if ( $property->getDeclaringClass()->getName() !== $class->getName() ) {
			continue;
		}
		$buffer .= generatePropertyStub( $property );
	}

	$methods = [];
	try {
		$methods = $class->getMethods();
	} catch ( IdentifierNotFound $e ) {
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

function generateFunctionStub( ReflectionFunction $function ): string {
	$buf = '';
	if ( $docComment = $function->getDocComment() ) {
		$buf .= $docComment . "\n";
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

function generateConstantStub( ReflectionConstant $constant ): string {
	$buf  = '';
	$name = $constant->getName();
	try {
		$value = var_export( $constant->getValue(), true );
	} catch ( IdentifierNotFound $e ) {
		return '';
	}
	$buf .= "const {$name} = {$value};\n\n";

	return $buf;
}

function safeGetParentClass( ReflectionClass $class ): ?ReflectionClass {
	try {
		return $class->getParentClass();
	} catch ( IdentifierNotFound $e ) {
		return null;
	}
}

function safeGetInterfaceNames( ReflectionClass $class ): array {
	try {
		return $class->getInterfaceNames();
	} catch ( IdentifierNotFound $e ) {
		return [];
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

function generatePropertyStub( \Roave\BetterReflection\Reflection\ReflectionProperty $property ): string {
	$out = '';
	if ( $docComment = $property->getDocComment() ) {
		$out .= "    {$docComment}\n";
	}
	$visibility = $property->isPrivate()
		? 'private'
		: ( $property->isProtected() ? 'protected' : 'public' );
	$static     = $property->isStatic() ? ' static' : '';
	$type       = $property->getType();
	$typeString = $type ? (string) $type . ' ' : '';
	$out        .= "    {$visibility}{$static} {$typeString}\${$property->getName()};\n\n";

	return $out;
}

function generateMethodStub( \Roave\BetterReflection\Reflection\ReflectionMethod $method ): string {
	$buf = '';
	if ( $docComment = $method->getDocComment() ) {
		foreach ( explode( "\n", $docComment ) as $line ) {
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

function generateAttributeLine( \Roave\BetterReflection\Reflection\ReflectionAttribute $attr ): string {
	$args = [];
	foreach ( $attr->getArguments() as $argValue ) {
		$args[] = var_export( $argValue, true );
	}
	$argsString = $args ? '(' . implode( ', ', $args ) . ')' : '';

	return "#[{$attr->getName()}{$argsString}]";
}

function generateParameterStub( \Roave\BetterReflection\Reflection\ReflectionParameter $param ): string {
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

// Only run main if called directly
if ( PHP_SAPI === 'cli' && realpath( $argv[0] ) === __FILE__ ) {
	main( $argv );
}