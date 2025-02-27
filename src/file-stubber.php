<?php

declare( strict_types=1 );

use Stubz\Stubber\ClassStubGenerator;
use Stubz\Stubber\FunctionStubGenerator;
use Stubz\Stubber\ConstantStubGenerator;
use Stubz\Stubber\NamespaceStubGenerator;

/**
 * This file returns a closure that, given a single file path + reference array,
 * returns the stub content for that file’s classes, functions, and constants.
 */
return static function ( string $filePath, array &$missingReferences ): string {
	// 1) Set up reflection
	$br         = new \Roave\BetterReflection\BetterReflection();
	$astLocator = $br->astLocator();
	$internal   = new \Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator(
		$astLocator,
		$br->sourceStubber()
	);
	$fileLoc    = new \Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator(
		$filePath,
		$astLocator
	);
	$aggregate  = new \Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator( [
		$internal,
		$fileLoc
	] );

	$reflector = new \Roave\BetterReflection\Reflector\DefaultReflector( $aggregate );

	// 2) Fetch classes, functions, constants
	$allClasses   = $reflector->reflectAllClasses();
	$allFunctions = $reflector->reflectAllFunctions();
	$allConstants = $reflector->reflectAllConstants();

	// Sort them if you want consistent ordering
	usort( $allClasses, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
	usort( $allFunctions, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );
	usort( $allConstants, fn( $a, $b ) => $a->getStartLine() <=> $b->getStartLine() );

	// 3) Use the stub generators
	$classGen = new ClassStubGenerator();
	$funcGen  = new FunctionStubGenerator();
	$constGen = new ConstantStubGenerator();
	$namespaceStubGen = new NamespaceStubGenerator();

	// 4) Generate stubs for each symbol
	foreach ( $allClasses as $classRef ) {
		$stub = $classGen->generateClassStub( $classRef, $missingReferences );
		$namespaceStubGen->addStub( $stub );
	}
	foreach ( $allFunctions as $fnRef ) {
		$stub = $funcGen->generateFunctionStub( $fnRef, $missingReferences );
		$namespaceStubGen->addStub( $stub );
	}
	foreach ( $allConstants as $cstRef ) {
		$stub = $constGen->generateConstantStub( $cstRef, $missingReferences );
		$namespaceStubGen->addStub( $stub );
	}

	// 5) If there are no stubs at all, return empty
	if ( empty( $allClasses ) && empty( $allFunctions ) && empty( $allConstants ) ) {
		return '';
	}

	// 6) Detect the file's single namespace (if any) from the first symbol found
	$detectedNamespace = '';
	if ( ! empty( $allClasses ) ) {
		$detectedNamespace = $allClasses[0]->getNamespaceName() ?? '';
	} elseif ( ! empty( $allFunctions ) ) {
		$detectedNamespace = $allFunctions[0]->getNamespaceName() ?? '';
	} elseif ( ! empty( $allConstants ) ) {
		$detectedNamespace = $allConstants[0]->getNamespaceName() ?? '';
	}

	$detectedNamespace = trim( $detectedNamespace );

	// 7) Build final stub using that single namespace (or none if empty)
	$stubBody = $namespaceStubGen->generateFinalStub( $detectedNamespace );

	return $stubBody;
};