<?php
/**
 * Main Plugin Class with WooCommerce-style runtime constants
 */
class MyPlugin {

	/**
	 * Plugin version
	 *
	 * @var string
	 */
	public $version = '1.2.3';

	/**
	 * Plugin settings
	 *
	 * @var array
	 */
	private $settings = array();

	/**
	 * Initialize the plugin
	 */
	public function init() {
		$this->define_constants();
		$this->load_settings();
	}

	/**
	 * Define plugin constants using WooCommerce pattern
	 */
	private function define_constants() {
		// Simple scalar values - should be extracted with values
		$this->define( 'MY_PLUGIN_NAME', 'Test Plugin' );
		$this->define( 'MY_PLUGIN_SLUG', 'test-plugin' );
		$this->define( 'MY_PLUGIN_PREFIX', 'tp_' );

		// Numeric values
		$this->define( 'MY_PLUGIN_CACHE_TIME', 3600 );
		$this->define( 'MY_PLUGIN_MAX_RETRIES', 3 );
		$this->define( 'MY_PLUGIN_DECIMAL_PLACES', 2 );

		// Boolean values
		$this->define( 'MY_PLUGIN_ENABLE_CACHE', true );
		$this->define( 'MY_PLUGIN_ENABLE_DEBUG', false );

		// Complex expressions - should fall back to empty string or known defaults
		$this->define( 'MY_PLUGIN_DIR', dirname( MY_PLUGIN_FILE ) . '/' );
		$this->define( 'MY_PLUGIN_URL', plugin_dir_url( MY_PLUGIN_FILE ) );
		$this->define( 'MY_PLUGIN_BASENAME', plugin_basename( MY_PLUGIN_FILE ) );
		$this->define( 'MY_PLUGIN_CURRENT_VERSION', $this->version );

		// Using other constants
		$this->define( 'MY_PLUGIN_ASSETS_DIR', MY_PLUGIN_DIR . 'assets/' );

		// Function calls that can't be evaluated
		$this->define( 'MY_PLUGIN_UPLOAD_DIR', wp_upload_dir()['basedir'] . '/my-plugin/' );
		$this->define( 'MY_PLUGIN_TEMP_DIR', sys_get_temp_dir() . '/my-plugin/' );
	}

	/**
	 * Define a constant if not already defined
	 * This mimics WooCommerce's pattern
	 *
	 * @param string $name  Constant name
	 * @param mixed  $value Constant value
	 */
	private function define( $name, $value ) {
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}

	/**
	 * Load plugin settings
	 */
	private function load_settings() {
		$this->settings = array(
			'cache_enabled' => MY_PLUGIN_ENABLE_CACHE,
			'debug_mode'    => MY_PLUGIN_ENABLE_DEBUG,
			'version'       => MY_PLUGIN_CURRENT_VERSION,
		);
	}

	/**
	 * Get a setting value
	 *
	 * @param string $key Setting key
	 * @return mixed|null Setting value or null
	 */
	public function get_setting( $key ) {
		return isset( $this->settings[ $key ] ) ? $this->settings[ $key ] : null;
	}
}