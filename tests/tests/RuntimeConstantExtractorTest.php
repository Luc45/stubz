<?php

use PHPUnit\Framework\TestCase;
use Stubz\StubGenerator\RuntimeConstantExtractor;

/**
 * Test the RuntimeConstantExtractor class
 *
 * Tests that runtime constants defined via define() and $this->define()
 * are properly extracted and stubbed.
 */
class RuntimeConstantExtractorTest extends TestCase {

	private RuntimeConstantExtractor $extractor;

	protected function setUp(): void {
		parent::setUp();
		$this->extractor = new RuntimeConstantExtractor();
	}

	/**
	 * Test extraction of simple define() calls
	 */
	public function testExtractSimpleDefineConstants() {
		$testFile = $this->createTempFile( "<?php
define('MY_CONSTANT', 'test_value');
define('MY_NUMBER', 42);
define('MY_BOOL', true);
define('MY_NULL', null);
" );

		$constants = $this->extractor->extractConstants( $testFile );

		$this->assertArrayHasKey( 'MY_CONSTANT', $constants );
		$this->assertEquals( "'test_value'", $constants['MY_CONSTANT'] );

		$this->assertArrayHasKey( 'MY_NUMBER', $constants );
		$this->assertEquals( '42', $constants['MY_NUMBER'] );

		$this->assertArrayHasKey( 'MY_BOOL', $constants );
		$this->assertEquals( 'true', $constants['MY_BOOL'] );

		$this->assertArrayHasKey( 'MY_NULL', $constants );
		$this->assertEquals( 'null', $constants['MY_NULL'] );

		unlink( $testFile );
	}

	/**
	 * Test extraction of $this->define() method calls (WooCommerce pattern)
	 */
	public function testExtractMethodDefineConstants() {
		$testFile = $this->createTempFile( "<?php
class MyClass {
	public function define_constants() {
		\$this->define('WC_VERSION', '1.0.0');
		\$this->define('WC_DELIMITER', '|');
		\$this->define('WC_DEBUG', false);
	}

	private function define(\$name, \$value) {
		if (!defined(\$name)) {
			define(\$name, \$value);
		}
	}
}
" );

		$constants = $this->extractor->extractConstants( $testFile );

		$this->assertArrayHasKey( 'WC_VERSION', $constants );
		$this->assertEquals( "'1.0.0'", $constants['WC_VERSION'] );

		$this->assertArrayHasKey( 'WC_DELIMITER', $constants );
		$this->assertEquals( "'|'", $constants['WC_DELIMITER'] );

		$this->assertArrayHasKey( 'WC_DEBUG', $constants );
		$this->assertEquals( 'false', $constants['WC_DEBUG'] );

		unlink( $testFile );
	}

	/**
	 * Test extraction with complex expressions falls back to empty string
	 */
	public function testExtractComplexExpressions() {
		$testFile = $this->createTempFile( "<?php
class WooCommerce {
	public \$version = '8.0.0';

	public function define_constants() {
		\$this->define('WC_VERSION', \$this->version);
		\$this->define('WC_ABSPATH', dirname(__FILE__) . '/');
		\$this->define('WC_PLUGIN_BASENAME', plugin_basename(__FILE__));
		\$this->define('WC_CUSTOM', some_function());
	}

	private function define(\$name, \$value) {
		define(\$name, \$value);
	}
}
" );

		$constants = $this->extractor->extractConstants( $testFile );

		// Complex expressions should fall back to empty string or known constant default
		$this->assertArrayHasKey( 'WC_VERSION', $constants );
		$this->assertEquals( "'0.0.0'", $constants['WC_VERSION'] ); // Falls back to known constant default

		$this->assertArrayHasKey( 'WC_ABSPATH', $constants );
		$this->assertEquals( "''", $constants['WC_ABSPATH'] ); // Can't evaluate dirname() call

		$this->assertArrayHasKey( 'WC_PLUGIN_BASENAME', $constants );
		$this->assertEquals( "''", $constants['WC_PLUGIN_BASENAME'] ); // Can't evaluate function call

		unlink( $testFile );
	}

	/**
	 * Test that known WooCommerce constants get proper fallback values
	 */
	public function testKnownConstantsFallback() {
		$testFile = $this->createTempFile( "<?php
class WooCommerce {
	public function define_constants() {
		\$this->define('WC_VERSION', \$this->version);
		\$this->define('WC_ROUNDING_PRECISION', get_option('wc_rounding'));
		\$this->define('WC_TAX_ROUNDING_MODE', PHP_ROUND_HALF_UP);
		\$this->define('UNKNOWN_CONSTANT', complex_expression());
	}

	private function define(\$name, \$value) {
		define(\$name, \$value);
	}
}
" );

		$constants = $this->extractor->extractConstants( $testFile );

		// Known constants should have proper fallback values
		$this->assertArrayHasKey( 'WC_VERSION', $constants );
		$this->assertEquals( "'0.0.0'", $constants['WC_VERSION'] ); // Known constant fallback

		$this->assertArrayHasKey( 'WC_ROUNDING_PRECISION', $constants );
		$this->assertEquals( '6', $constants['WC_ROUNDING_PRECISION'] ); // Known constant fallback

		// Unknown constants should fall back to empty string
		$this->assertArrayHasKey( 'UNKNOWN_CONSTANT', $constants );
		$this->assertEquals( "''", $constants['UNKNOWN_CONSTANT'] );

		unlink( $testFile );
	}

	/**
	 * Test stub generation from extracted constants
	 */
	public function testGenerateConstantsStub() {
		$constants = [
			'MY_STRING' => "'test'",
			'MY_NUMBER' => '42',
			'MY_BOOL' => 'true',
			'MY_NULL' => 'null',
		];

		$stub = $this->extractor->generateConstantsStub( $constants );

		$this->assertStringContainsString( "define('MY_STRING', 'test');", $stub );
		$this->assertStringContainsString( "define('MY_NUMBER', 42);", $stub );
		$this->assertStringContainsString( "define('MY_BOOL', true);", $stub );
		$this->assertStringContainsString( "define('MY_NULL', null);", $stub );
	}

	/**
	 * Test that invalid constant names are filtered out
	 */
	public function testFilterInvalidConstantNames() {
		$constants = [
			'VALID_CONSTANT' => "'test'",
			'123_INVALID' => "'bad'",
			'invalid-name' => "'bad'",
			'_VALID_UNDERSCORE' => "'good'",
		];

		$stub = $this->extractor->generateConstantsStub( $constants );

		$this->assertStringContainsString( "define('VALID_CONSTANT', 'test');", $stub );
		$this->assertStringContainsString( "define('_VALID_UNDERSCORE', 'good');", $stub );
		$this->assertStringNotContainsString( '123_INVALID', $stub );
		$this->assertStringNotContainsString( 'invalid-name', $stub );
	}

	/**
	 * Test excluding already-found constants
	 */
	public function testExcludeAlreadyFoundConstants() {
		$testFile = $this->createTempFile( "<?php
define('CONSTANT_A', 'value_a');
define('CONSTANT_B', 'value_b');
define('CONSTANT_C', 'value_c');
" );

		// Extract all constants
		$allConstants = $this->extractor->extractConstants( $testFile );
		$this->assertCount( 3, $allConstants );

		// Extract with exclusions
		$excludeList = ['CONSTANT_A', 'CONSTANT_C'];
		$filteredConstants = $this->extractor->extractConstants( $testFile, $excludeList );

		$this->assertCount( 1, $filteredConstants );
		$this->assertArrayHasKey( 'CONSTANT_B', $filteredConstants );
		$this->assertArrayNotHasKey( 'CONSTANT_A', $filteredConstants );
		$this->assertArrayNotHasKey( 'CONSTANT_C', $filteredConstants );

		unlink( $testFile );
	}

	/**
	 * Test extraction from actual WooCommerce file
	 * @group woocommerce
	 */
	public function testExtractFromWooCommerceFile() {
		$wooCommerceFile = '/tmp/foo/woocommerce/includes/class-woocommerce.php';

		// Skip if WooCommerce file doesn't exist
		if ( ! file_exists( $wooCommerceFile ) ) {
			$this->markTestSkipped( 'WooCommerce file not found at ' . $wooCommerceFile );
		}

		$constants = $this->extractor->extractConstants( $wooCommerceFile );

		// Check for expected WooCommerce constants
		$expectedConstants = [
			'WC_ABSPATH',
			'WC_PLUGIN_BASENAME',
			'WC_VERSION',
			'WOOCOMMERCE_VERSION',
			'WC_ROUNDING_PRECISION',
			'WC_DISCOUNT_ROUNDING_MODE',
			'WC_TAX_ROUNDING_MODE',
			'WC_DELIMITER',
			'WC_SESSION_CACHE_GROUP',
			'WC_TEMPLATE_DEBUG_MODE',
		];

		foreach ( $expectedConstants as $constant ) {
			$this->assertArrayHasKey( $constant, $constants, "Expected constant $constant not found" );
		}

		// Generate stub and verify it's valid PHP
		$stub = $this->extractor->generateConstantsStub( $constants );
		$this->assertNotEmpty( $stub );

		// Check that the stub contains define statements
		$this->assertStringContainsString( "define('WC_VERSION',", $stub );
		$this->assertStringContainsString( "define('WC_ROUNDING_PRECISION',", $stub );
	}

	/**
	 * Test extraction from WooCommerce main plugin file
	 * @group woocommerce
	 */
	public function testExtractFromWooCommerceMainFile() {
		$wooCommerceFile = '/tmp/foo/woocommerce/woocommerce.php';

		// Skip if WooCommerce file doesn't exist
		if ( ! file_exists( $wooCommerceFile ) ) {
			$this->markTestSkipped( 'WooCommerce main file not found at ' . $wooCommerceFile );
		}

		$constants = $this->extractor->extractConstants( $wooCommerceFile );

		// WC_PLUGIN_FILE should be found in the main file
		$this->assertArrayHasKey( 'WC_PLUGIN_FILE', $constants );

		// It uses __FILE__ which we can't evaluate, so should be empty string
		$this->assertEquals( "''", $constants['WC_PLUGIN_FILE'] );
	}

	/**
	 * Helper method to create a temporary PHP file for testing
	 */
	private function createTempFile( string $content ): string {
		$tempFile = tempnam( sys_get_temp_dir(), 'stubz_test_' );
		file_put_contents( $tempFile, $content );
		return $tempFile;
	}
}