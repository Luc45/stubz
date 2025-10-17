<?php

declare( strict_types=1 );

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Stubz\StubGenerator\ClassStubGenerator;
use Stubz\StubGenerator\FunctionStubGenerator;
use Stubz\StubGenerator\ConstantStubGenerator;
use Stubz\StubGenerator\NamespaceStubGenerator;
use Stubz\StubGenerator\RuntimeConstantExtractor;

/**
 * This file returns a closure that, given a single file path + reference array,
 * returns the stub content for that file’s classes, functions, and constants.
 *
 * @param non-empty-string $filePath
 */
return static function ( string $filePath ): string {
	// If your PHPDoc says $filePath is non-empty-string, checking for '' is redundant
	if ( $filePath === '' ) {
		throw new \InvalidArgumentException( 'Argument #1 ($filePath) must be a non-empty string.' );
	}

	$br             = new BetterReflection();
	$source_locator = new AggregateSourceLocator( [
		new SingleFileSourceLocator( $filePath, $br->astLocator() ),
		new PhpInternalSourceLocator( $br->astLocator(), $br->sourceStubber() ),
	] );
	$reflector      = new DefaultReflector( $source_locator );

	// 2) Fetch classes, functions, constants
	try {
		$allClasses = $reflector->reflectAllClasses();
	} catch ( Throwable $ex ) {
		echo "DEBUG: parse failure: " . $ex->getMessage() . "\n";
		throw $ex;
	}

	try {
		$allFunctions = $reflector->reflectAllFunctions();
	} catch ( Throwable $ex ) {
		echo "DEBUG: parse failure: " . $ex->getMessage() . "\n";
		throw $ex;
	}

	try {
		$allConstants = $reflector->reflectAllConstants();
	} catch ( Throwable $ex ) {
		echo "DEBUG: parse failure: " . $ex->getMessage() . "\n";
		throw $ex;
	}

	// Sort them by start line for consistent ordering
	usort( $allClasses, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
	usort( $allFunctions, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
	usort( $allConstants, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );

	// 3) Stub generators
	$classGen         = new ClassStubGenerator();
	$funcGen          = new FunctionStubGenerator();
	$constGen         = new ConstantStubGenerator();
	$namespaceStubGen = new NamespaceStubGenerator();
	$runtimeExtractor = new RuntimeConstantExtractor();

	// 4) Generate stubs for each symbol
	foreach ( $allClasses as $classRef ) {
		$stub = $classGen->generateClassStub( $classRef );
		$namespaceStubGen->addStub( $stub );
	}
	foreach ( $allFunctions as $fnRef ) {
		$stub = $funcGen->generateFunctionStub( $fnRef );
		$namespaceStubGen->addStub( $stub );
	}
	foreach ( $allConstants as $cstRef ) {
		$stub = $constGen->generateConstantStub( $cstRef );
		$namespaceStubGen->addStub( $stub );
	}

	// 4.5) Extract and add runtime constants (e.g., from define() calls)
	$runtimeConstants = $runtimeExtractor->extractConstants( $filePath );
	if ( ! empty( $runtimeConstants ) ) {
		$runtimeStub = $runtimeExtractor->generateConstantsStub( $runtimeConstants );
		if ( $runtimeStub ) {
			// Add runtime constants to the stub buffer
			$namespaceStubGen->addStub( $runtimeStub );
		}
	}

	// 5) If no stubs found, return empty
	if ( empty( $allClasses ) && empty( $allFunctions ) && empty( $allConstants ) && empty( $runtimeConstants ) ) {
		return '';
	}

	// 6) Detect the single namespace
	$detectedNamespace = '';
	if ( ! empty( $allClasses ) ) {
		$detectedNamespace = $allClasses[0]->getNamespaceName() ?? '';
	} elseif ( ! empty( $allFunctions ) ) {
		$detectedNamespace = $allFunctions[0]->getNamespaceName() ?? '';
	} elseif ( ! empty( $allConstants ) ) {
		$detectedNamespace = $allConstants[0]->getNamespaceName() ?? '';
	}

	$detectedNamespace = trim( $detectedNamespace );

	// 7) Build the final stub
	$stubBody = $namespaceStubGen->generateFinalStub( $detectedNamespace );

	return $stubBody;
};