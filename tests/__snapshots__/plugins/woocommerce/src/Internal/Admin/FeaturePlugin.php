<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Feature plugin main class.
 *
 * @internal This file will not be bundled with woo core, only the feature plugin.
 * @internal Note this is not called WC_Admin due to a class already existing in core with that name.
 */
class FeaturePlugin
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;

    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
        // stub
    }

    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
        // stub
    }

    /**
     * Init the feature plugin, only if we can detect both Gutenberg and WooCommerce.
     */
    public function init()
    {
        // stub
    }

    /**
     * Setup plugin once all other plugins are loaded.
     *
     * @return void
     */
    public function on_plugins_loaded()
    {
        // stub
    }

    /**
     * Define Constants.
     */
    protected function define_constants()
    {
        // stub
    }

    /**
     * Include WC Admin classes.
     */
    public function includes()
    {
        // stub
    }

    /**
     * Set up our admin hooks and plugin loader.
     */
    protected function hooks()
    {
        // stub
    }

    /**
     * Overwrites the allowed features array using a local `feature-config.php` file.
     *
     * @param array $features Array of feature slugs.
     */
    public function replace_supported_features($features)
    {
        // stub
    }

    /**
     * Define constant if not already set.
     *
     * @param string      $name  Constant name.
     * @param string|bool $value Constant value.
     */
    protected function define($name, $value)
    {
        // stub
    }

    /**
     * Prevent cloning.
     */
    private function __clone()
    {
        // stub
    }

    /**
     * Prevent unserializing.
     */
    public function __wakeup()
    {
        // stub
    }

}

const WC_ADMIN_VERSION_NUMBER = '3.3.0';

