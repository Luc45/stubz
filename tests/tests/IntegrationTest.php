<?php

use PHPUnit\Framework\TestCase;

/**
 * Integration test to verify runtime constants are included in full stub generation
 */
class IntegrationTest extends TestCase {
	use TestHelpers;

	/**
	 * Test that runtime constants are included when generating stubs through file-stubber.php
	 */
	public function testFileStubberIncludesRuntimeConstants() {
		// Skip if dependencies aren't loaded
		if ( ! file_exists( __DIR__ . '/../../vendor/autoload.php' ) ) {
			$this->markTestSkipped( 'Stubz dependencies not installed' );
		}

		// Create a test file with runtime constants
		$testFile = sys_get_temp_dir() . '/test_plugin_' . uniqid() . '.php';
		file_put_contents( $testFile, '<?php
class TestPlugin {
	public $version = "2.0.0";

	public function init() {
		$this->define_constants();
	}

	private function define_constants() {
		$this->define("TEST_VERSION", $this->version);
		$this->define("TEST_PATH", dirname(__FILE__) . "/");
		$this->define("TEST_ENABLED", true);
		$this->define("TEST_TIMEOUT", 30);
	}

	private function define($name, $value) {
		if (!defined($name)) {
			define($name, $value);
		}
	}
}

define("GLOBAL_TEST_CONSTANT", "test_value");
define("GLOBAL_TEST_NUMBER", 42);
' );

		// Load the file-stubber
		require_once __DIR__ . '/../../vendor/autoload.php';
		$stubber = require __DIR__ . '/../../src/file-stubber.php';

		// Generate stub
		$stub = $stubber( $testFile );

		// Verify the stub contains the class
		$this->assertStringContainsString( 'class TestPlugin', $stub );

		// Verify runtime constants from $this->define() are extracted
		$this->assertStringContainsString( "define('TEST_VERSION'", $stub );
		$this->assertStringContainsString( "define('TEST_PATH'", $stub );
		$this->assertStringContainsString( "define('TEST_ENABLED', true)", $stub );
		$this->assertStringContainsString( "define('TEST_TIMEOUT', 30)", $stub );

		// Verify global define() constants are extracted
		$this->assertStringContainsString( "define('GLOBAL_TEST_CONSTANT', 'test_value')", $stub );
		$this->assertStringContainsString( "define('GLOBAL_TEST_NUMBER', 42)", $stub );

		// Clean up
		unlink( $testFile );
	}

	/**
	 * Test that known WooCommerce constants get proper fallback values
	 */
	public function testWooCommerceConstantsFallback() {
		// Skip if dependencies aren't loaded
		if ( ! file_exists( __DIR__ . '/../../vendor/autoload.php' ) ) {
			$this->markTestSkipped( 'Stubz dependencies not installed' );
		}

		// Create a test file that mimics WooCommerce constant definitions
		$testFile = sys_get_temp_dir() . '/test_woo_' . uniqid() . '.php';
		file_put_contents( $testFile, '<?php
class WooCommerceTest {
	public $version = "8.5.0";

	private function define_constants() {
		$this->define("WC_VERSION", $this->version);
		$this->define("WC_ROUNDING_PRECISION", get_option("wc_precision"));
		$this->define("WC_TAX_ROUNDING_MODE", PHP_ROUND_HALF_UP);
		$this->define("WC_ABSPATH", dirname(WC_PLUGIN_FILE) . "/");
	}

	private function define($name, $value) {
		define($name, $value);
	}
}
' );

		// Load the file-stubber
		require_once __DIR__ . '/../../vendor/autoload.php';
		$stubber = require __DIR__ . '/../../src/file-stubber.php';

		// Generate stub
		$stub = $stubber( $testFile );

		// Verify known constants get proper fallback values
		$this->assertStringContainsString( "define('WC_VERSION', '0.0.0')", $stub ); // Known fallback
		$this->assertStringContainsString( "define('WC_ROUNDING_PRECISION', 6)", $stub ); // Known fallback
		$this->assertStringContainsString( "define('WC_TAX_ROUNDING_MODE', 1)", $stub ); // Known fallback
		$this->assertStringContainsString( "define('WC_ABSPATH', '')", $stub ); // Complex expression fallback

		// Clean up
		unlink( $testFile );
	}
}