<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

/**
 * This test calls generate-stubs.php in both normal and finder modes,
 * with each scenario living in `tests/scenarios/<scenarioKey>/`.
 */
class GenerateStubsTest extends TestCase {
	use MatchesSnapshots;

	/**
	 * We'll store the current scenario name here,
	 * so we can override getSnapshotDirectory() to use a subfolder.
	 */
	protected ?string $currentScenario = null;

	/**
	 * Data provider for scenarios. Each key is the subdir in `tests/scenarios`.
	 * - 'finder' => the .php file if we want to run `--finder file.php <outputDir>`.
	 * - 'exclude' => array of directories to exclude in normal mode. (Optional)
	 *
	 * If 'finder' is NOT set, we do: `[--exclude ...] <sourceDir> <outputDir>`.
	 * If 'finder' IS set, we do: `--finder <finderFile> <outputDir>`.
	 */
	public static function scenariosProvider(): array {
		return [
			'Simple Class'                            => [ 'simpleClass', [ 'finder' => null, 'exclude' => [], ] ],
			'Complex Class'                           => [ 'complexClass', [ 'finder' => null, 'exclude' => [ 'vendor', 'someSubDir' ], ] ],
			'With Finder'                             => [ 'myFinderScenario', [ 'finder' => 'someFinder.php', 'exclude' => [], ] ],
			'Enum Scenario'                           => [ 'enumScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Traits Scenario'                         => [ 'traitsScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Globals Scenario'                        => [ 'globalsScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Abstract Scenario'                       => [ 'abstractScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Inheritance Scenario'                    => [ 'inheritanceScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Multi-Interface Scenario'                => [ 'multiInterfaceScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Attributes Scenario'                     => [ 'attributesScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Anonymous Class Scenario'                => [ 'anonymousClassScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Intersection Types Scenario'             => [ 'intersectionTypesScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Generics Scenario'                       => [ 'genericsScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Typed Properties Scenario'               => [ 'typedPropertiesScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Union Types Scenario'                    => [ 'unionTypesScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Static Scenario'                         => [ 'staticScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Closure Scenario'                        => [ 'closureScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Strict Types Scenario'                   => [ 'strictTypesScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Final Scenario'                          => [ 'finalScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Namespace Collision Scenario'            => [ 'namespaceCollisionScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Magic Methods Scenario'                  => [ 'magicMethodsScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Constructor Property Promotion Scenario' => [ 'constructorPropertyPromotionScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Match Expression Scenario'               => [ 'matchExpressionScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Readonly Properties Scenario'            => [ 'readonlyPropertiesScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Named Arguments Scenario'                => [ 'namedArgumentsScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'Reflection Scenario'                     => [ 'reflectionScenario', [ 'finder' => null, 'exclude' => [] ] ],
			'WooCommerce Integration Scenario'        => [
				'WooCommerceIntegrationScenario',
				[
					'exclude' => [ 'Admin' ],
					'finder'  => null,
				],
			],
			'AJAX Handlers Scenario'                  => [
				'AjaxHandlersScenario',
				[
					'exclude' => [ 'ajax/partials' ],
					'finder'  => null,
				],
			],
			'Block Editor Enhancements Scenario'      => [
				'BlockEditorEnhancementsScenario',
				[
					'finder'  => 'blockFinder.php',
					'exclude' => [],
				],
			],
		];
	}

	/**
	 * Single test method, called once for each scenario by the data provider.
	 *
	 * @dataProvider scenariosProvider
	 */
	public function testGenerateStubs( string $scenarioKey = '', array $config = [] ) {
		// 1) We'll store the scenario name in a property
		//    so we can override getSnapshotDirectory() below
		$this->currentScenario = $scenarioKey;

		// 2) Locate generate-stubs.php
		$scriptPath = realpath( __DIR__ . '/../../generate-stubs.php' );
		$this->assertNotFalse( $scriptPath, 'Could not locate generate-stubs.php!' );

		// 3) Build a unique output directory under /tmp
		$outputDir = sys_get_temp_dir() . '/stubs_test_' . $scenarioKey . '_' . uniqid();
		@mkdir( $outputDir, 0777, true );

		// 4) Build the path to the scenario folder (sourceDir)
		$sourceDir = realpath( __DIR__ . "/../scenarios/{$scenarioKey}" );
		$this->assertNotFalse( $sourceDir, "Scenario folder not found: {$scenarioKey} (" . __DIR__ . "/scenarios/{$scenarioKey})" );

		$finderFile = $config['finder'] ?? null;
		$exclude    = $config['exclude'] ?? [];

		// 5) Construct the CLI command for generate-stubs.php
		if ( $finderFile ) {
			// Finder mode
			// usage: php generate-stubs.php --finder <finder-file.php> <outputDir>
			$finderPath = realpath( $sourceDir . '/' . $finderFile );
			$this->assertNotFalse( $finderPath, "Finder file '$finderFile' not found in $sourceDir!" );

			$cmd = sprintf(
				'NO_STUB_CACHE=1 php %s --finder %s %s 2>&1',
				escapeshellarg( $scriptPath ),
				escapeshellarg( $finderPath ),
				escapeshellarg( $outputDir )
			);
		} else {
			// Normal mode: php generate-stubs.php [--exclude <dir>]... <sourceDir> <outputDir>
			$excludeFlags = '';
			foreach ( $exclude as $ex ) {
				$excludeFlags .= ' --exclude ' . escapeshellarg( $ex );
			}

			$cmd = sprintf(
				'NO_STUB_CACHE=1 php %s%s %s %s 2>&1',
				escapeshellarg( $scriptPath ),
				$excludeFlags,
				escapeshellarg( $sourceDir ),
				escapeshellarg( $outputDir )
			);
		}

		// 6) Run the command
		exec( $cmd, $outputLines, $exitCode );

		// 7) Assert success
		$this->assertSame(
			0,
			$exitCode,
			sprintf(
				"generate-stubs.php failed with exit code %d.\nCommand: %s\nOutput:\n%s",
				$exitCode,
				$cmd,
				implode( "\n", $outputLines )
			)
		);

		// 8) Find all generated .php stub files in $outputDir
		$stubFiles = $this->findPhpFiles( $outputDir );
		$this->assertNotEmpty( $stubFiles, "No stub files were generated in {$outputDir}" );

		// 9) Snapshot each stub file individually,
		//    but store them in a subfolder for this scenario.
		foreach ( $stubFiles as $index => $stubPath ) {
			$content = file_get_contents( $stubPath );

			// We'll pass $fileNameOnly to the snapshot method, so each file gets a distinct snapshot.
			// The actual snapshot will be saved in __snapshots__/GenerateStubsTest/<scenarioKey>/<fileNameOnly>...
			$this->assertMatchesSnapshot( $content );
		}

		// We do NOT remove the $outputDir, so it's left in /tmp for inspection.
	}

	/**
	 * Override the default snapshot directory to place snapshots in:
	 *   __snapshots__/GenerateStubsTest/<scenarioKey>/
	 * rather than putting them all in one folder.
	 */
	protected function getSnapshotDirectory(): string {
		$baseDir = dirname( ( new \ReflectionClass( $this ) )->getFileName() )
		           . DIRECTORY_SEPARATOR
		           . '__snapshots__';

		// 2) If we have a scenario name, add it as a subfolder; otherwise fallback
		$scenarioSubdir = $this->currentScenario ?? 'unknown_scenario';

		return $baseDir . DIRECTORY_SEPARATOR . $scenarioSubdir;
	}

	/**
	 * Recursively find all .php files in the given directory.
	 */
	private function findPhpFiles( string $directory ): array {
		$results = [];
		$it      = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator( $directory, \FilesystemIterator::SKIP_DOTS )
		);
		foreach ( $it as $file ) {
			if ( $file->isFile() && $file->getExtension() === 'php' ) {
				$results[] = $file->getRealPath();
			}
		}

		return $results;
	}
}