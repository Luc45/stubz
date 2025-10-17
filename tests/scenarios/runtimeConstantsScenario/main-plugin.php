<?php
/**
 * Plugin Name: Test Plugin with Runtime Constants
 * Description: Test scenario for runtime constant extraction
 */

// Simple define() calls - these should be extracted
if ( ! defined( 'MY_PLUGIN_FILE' ) ) {
	define( 'MY_PLUGIN_FILE', __FILE__ );
}

define( 'MY_PLUGIN_VERSION', '1.2.3' );
define( 'MY_PLUGIN_DEBUG', true );
define( 'MY_PLUGIN_TIMEOUT', 30 );

// Load main class
require_once __DIR__ . '/class-main.php';

// Initialize plugin
function init_my_plugin() {
	$plugin = new MyPlugin();
	$plugin->init();
}

init_my_plugin();