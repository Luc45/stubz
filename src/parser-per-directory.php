<?php

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\DirectoriesSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\FileIteratorSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\MemoizingSourceLocator;

function parseSymbolsPerDirectory( \Symfony\Component\Finder\Finder $finder, ?string $sourceDir = null ): array {
	$br              = new BetterReflection();
	$astLocator      = $br->astLocator();
	$internalLocator = new PhpInternalSourceLocator( $astLocator, $br->sourceStubber() );

	if ( $sourceDir ) {
		$userLocator = new DirectoriesSourceLocator( [ $sourceDir ], $astLocator );
	} else {
		$userLocator = new FileIteratorSourceLocator( $finder->getIterator(), $astLocator );
	}

	$aggregateSources = [
		$internalLocator,
		$userLocator,
	];

	$aggregateLocator = new AggregateSourceLocator( $aggregateSources );
	$memoizedLocator  = new MemoizingSourceLocator( $aggregateLocator );
	$reflector        = new DefaultReflector( $memoizedLocator );

	$allClasses   = parseStep( "Classes", fn() => $reflector->reflectAllClasses() );
	$allFunctions = parseStep( "Functions", fn() => $reflector->reflectAllFunctions() );
	$allConstants = parseStep( "Constants", fn() => $reflector->reflectAllConstants() );

	return buildSymbolMaps( $allClasses, $allFunctions, $allConstants );
}