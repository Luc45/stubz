<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Features Class.
 */
class Features
{
    /**
     * Class instance.
     *
     * @var Loader instance
     */
    protected static $instance = null;

    /**
     * Optional features
     *
     * @var array
     */
    protected static $optional_features = array (
  'analytics' => 
  array (
    'default' => 'yes',
  ),
  'remote-inbox-notifications' => 
  array (
    'default' => 'yes',
  ),
);

    /**
     * Beta features
     *
     * @var array
     */
    protected static $beta_features = array (
  0 => 'settings',
);

    /**
     * Get class instance.
     */
    public static function get_instance()
    {
        // stub
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Gets a build configured array of enabled WooCommerce Admin features/sections, but does not respect optionally disabled features.
     *
     * @return array Enabled Woocommerce Admin features/sections.
     */
    public static function get_features()
    {
        // stub
    }

    /**
     * Gets the optional feature options as an associative array that can be toggled on or off.
     *
     * @return array
     */
    public static function get_optional_feature_options()
    {
        // stub
    }

    /**
     * Returns if a specific wc-admin feature exists in the current environment.
     *
     * @param  string $feature Feature slug.
     * @return bool Returns true if the feature exists.
     */
    public static function exists($feature)
    {
        // stub
    }

    /**
     * Get the feature class as a string.
     *
     * @param string $feature Feature name.
     * @return string|null
     */
    public static function get_feature_class($feature)
    {
        // stub
    }

    /**
     * Class loader for enabled WooCommerce Admin features/sections.
     */
    public static function load_features()
    {
        // stub
    }

    /**
     * Gets a build configured array of enabled WooCommerce Admin respecting optionally disabled features.
     *
     * @return array Enabled Woocommerce Admin features/sections.
     */
    public static function get_available_features()
    {
        // stub
    }

    /**
     * Check if a feature is enabled.
     *
     * @param string $feature Feature slug.
     * @return bool
     */
    public static function is_enabled($feature)
    {
        // stub
    }

    /**
     * Enable a toggleable optional feature.
     *
     * @param string $feature Feature name.
     * @return bool
     */
    public static function enable($feature)
    {
        // stub
    }

    /**
     * Disable a toggleable optional feature.
     *
     * @param string $feature Feature name.
     * @return bool
     */
    public static function disable($feature)
    {
        // stub
    }

    /**
     * Disable features when opting out of tracking.
     *
     * @param string $old_value Old value.
     * @param string $value New value.
     */
    public static function maybe_disable_features($old_value, $value)
    {
        // stub
    }

    /**
     * Adds the Features section to the advanced tab of WooCommerce Settings
     *
     * @deprecated 7.0 The WooCommerce Admin features are now handled by the WooCommerce features engine (see the FeaturesController class).
     *
     * @param array $sections Sections.
     * @return array
     */
    public static function add_features_section($sections)
    {
        // stub
    }

    /**
     * Adds the Features settings.
     *
     * @deprecated 7.0 The WooCommerce Admin features are now handled by the WooCommerce features engine (see the FeaturesController class).
     *
     * @param array  $settings Settings.
     * @param string $current_section Current section slug.
     * @return array
     */
    public static function add_features_settings($settings, $current_section)
    {
        // stub
    }

    /**
     * Conditionally loads the beta features tracking modal.
     *
     * @param string $hook Page hook.
     */
    public static function maybe_load_beta_features_modal($hook)
    {
        // stub
    }

    /**
     * Loads the required scripts on the correct pages.
     */
    public static function load_scripts()
    {
        // stub
    }

    /**
     * Adds body classes to the main wp-admin wrapper, allowing us to better target elements in specific scenarios.
     *
     * @param string $admin_body_class Body class to add.
     */
    public static function add_admin_body_classes($admin_body_class = '')
    {
        // stub
    }

    /**
     * Alias internal features classes to make them backward compatible.
     * We've moved our feature classes to src-internal as part of merging this
     * repository with WooCommerce Core to form a monorepo.
     * See https://wp.me/p90Yrv-2HY for details.
     */
    private function register_internal_class_aliases()
    {
        // stub
    }

    /**
     * Check if we're in an admin context where features should be loaded.
     *
     * @return boolean
     */
    private static function should_load_features()
    {
        // stub
    }

}