<?php
/**
 * src/parser.php
 *
 * This helper is a strictly "per-file" reflection approach:
 * we iterate each file from the Finder, then create a SingleFileSourceLocator
 * that references ONLY that file (plus the built-in stubs locator).
 * That way, we do NOT break out to other user files if a class extends or implements
 * something from another file. We simply won't find it.
 *
 * The result is purely "flat" data: for each file,
 * - reflectAllClasses()
 * - reflectAllFunctions()
 * - reflectAllConstants()
 *
 * Then we pass all these reflection objects into buildSymbolMaps() to get a final:
 * [ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ]
 * which is used by stubz.php to generate stubs.
 */

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflector\DefaultReflector;
use Roave\BetterReflection\SourceLocator\Type\SingleFileSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\PhpInternalSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\AggregateSourceLocator;
use Roave\BetterReflection\SourceLocator\Type\MemoizingSourceLocator;
use Symfony\Component\Finder\Finder;

/**
 * parseSymbolsPerFile()
 *
 * @param Finder $finder A Symfony Finder of .php files
 *
 * @return array{
 *   0: array<string, list<Roave\BetterReflection\Reflection\ReflectionClass>>,
 *   1: array<string, list<Roave\BetterReflection\Reflection\ReflectionFunction>>,
 *   2: array<string, list<Roave\BetterReflection\Reflection\ReflectionConstant>>
 * }
 *
 * We gather all ReflectionClass / ReflectionFunction / ReflectionConstant
 * objects from each file, then call buildSymbolMaps() (which is defined
 * in stub-generator.php) to group them by file.
 */
function parseSymbolsPerFile( Finder $finder ): array {
	// Prepare a single BetterReflection instance
	$br = new BetterReflection();
	// We'll need the AST locator for single-file reflection
	$astLocator = $br->astLocator();

	// Also prepare an internal stub locator so built-in symbols (e.g. \Exception) are recognized
	$internalLocator = new PhpInternalSourceLocator( $astLocator, $br->sourceStubber() );

	// We'll accumulate reflection objects from each file in these arrays
	$allClasses   = [];
	$allFunctions = [];
	$allConstants = [];

	// For progress display, we may do a small progress bar
	$count   = $finder->count();
	$progCtx = startProgressBarContext( $count, 50, canUseCarriageReturn() );
	$i       = 0;

	foreach ( $finder as $file ) {
		$i ++;
		advanceProgressBar( $progCtx, $i );

		if ( ! $file->isFile() || $file->getExtension() !== 'php' ) {
			continue;
		}
		$realpath = $file->getRealPath();
		if ( ! $realpath ) {
			continue;
		}

		// 1) Build a SingleFileSourceLocator for that file
		$fileLocator = new SingleFileSourceLocator( $realpath, $astLocator );

		// 2) Combine with internal stubs, but NOT with any other directories
		$aggregate = new AggregateSourceLocator( [
			$internalLocator,
			$fileLocator,
		] );

		// 3) Memoizing locator to speed repeated lookups (some overhead is saved)
		$memoLocator = new MemoizingSourceLocator( $aggregate );

		// 4) Reflector
		$reflector = new DefaultReflector( $memoLocator );

		// 5) Collect any classes/functions/constants physically declared in that file
		//    This won't break out to other user-defined files, only built-in stubs.
		$fileClasses   = $reflector->reflectAllClasses();
		$fileFunctions = $reflector->reflectAllFunctions();
		$fileConstants = $reflector->reflectAllConstants();

		// Merge into the big arrays
		$allClasses   = array_merge( $allClasses, $fileClasses );
		$allFunctions = array_merge( $allFunctions, $fileFunctions );
		$allConstants = array_merge( $allConstants, $fileConstants );
	}

	finishProgressBar( $progCtx );

	// Now that we have all reflection objects, we call buildSymbolMaps()
	// (which is defined in stub-generator.php). That function returns:
	// [
	//   fileToClasses => array<string, ReflectionClass[]>,
	//   fileToFunctions => array<string, ReflectionFunction[]>,
	//   fileToConstants => array<string, ReflectionConstant[]>
	// ]
	// grouped by each file's real path, sorted by line number.
	// We just destructure that into [ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ].

	// buildSymbolMaps() expects three arrays of reflection objects:
	[ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ] =
		buildSymbolMaps( $allClasses, $allFunctions, $allConstants );

	return [ $fileToClassesMap, $fileToFunctionsMap, $fileToConstantsMap ];
}