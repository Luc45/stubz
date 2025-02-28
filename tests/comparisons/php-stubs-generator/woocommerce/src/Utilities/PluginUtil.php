<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * A class of utilities for dealing with plugins.
 */
class PluginUtil
{
    /**
     * Creates a new instance of the class.
     */
    public function __construct()
    {
    }
    /**
     * Initialize the class instance.
     *
     * @internal
     *
     * @param LegacyProxy $proxy The instance of LegacyProxy to use.
     */
    public final function init(\Automattic\WooCommerce\Proxies\LegacyProxy $proxy)
    {
    }
    /**
     * Wrapper for WP's private `wp_get_active_and_valid_plugins` and `wp_get_active_network_plugins` functions.
     *
     * This combines the results of the two functions to get a list of all plugins that are active within a site.
     * It's more useful than just retrieving the option values because it also validates that the plugin files exist.
     * This wrapper is also a hedge against backward-incompatible changes since both of the WP methods are marked as
     * being "@access private", so if need be we can update our methods here to preserve functionality.
     *
     * Note that the doc block for `wp_get_active_and_valid_plugins` says it returns "Array of paths to plugin files
     * relative to the plugins directory", but it actually returns absolute paths.
     *
     * @return string[] Array of plugin basenames (paths relative to the plugin directory).
     */
    public function get_all_active_valid_plugins()
    {
    }
    /**
     * Get a list with the names of the WordPress plugins that are WooCommerce aware
     * (they have a "WC tested up to" header).
     *
     * @param bool $active_only True to return only active plugins, false to return all the active plugins.
     * @return string[] A list of plugin ids (path/file.php).
     */
    public function get_woocommerce_aware_plugins(bool $active_only = false) : array
    {
    }
    /**
     * Get the printable name of a plugin.
     *
     * @param string $plugin_id Plugin id (path/file.php).
     * @return string Printable plugin name, or the plugin id itself if printable name is not available.
     */
    public function get_plugin_name(string $plugin_id) : string
    {
    }
    /**
     * Check if a plugin is WooCommerce aware.
     *
     * @param string|array $plugin_file_or_data Plugin id (path/file.php) or plugin data (as returned by get_plugins).
     * @return bool True if the plugin exists and is WooCommerce aware.
     * @throws \Exception The input is neither a string nor an array.
     */
    public function is_woocommerce_aware_plugin($plugin_file_or_data) : bool
    {
    }
    /**
     * Match plugin identifier passed as a parameter with the output from `get_plugins()`.
     *
     * @param string $plugin_file Plugin identifier, either 'my-plugin/my-plugin.php', or output from __FILE__.
     *
     * @return string|false Key from the array returned by `get_plugins` if matched. False if no match.
     */
    public function get_wp_plugin_id($plugin_file)
    {
    }
    /**
     * Handle plugin activation and deactivation by clearing the WooCommerce aware plugin ids cache.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_plugin_de_activation() : void
    {
    }
    /**
     * Utility method to generate warning string for incompatible features based on active plugins.
     *
     * Additionally, this method will manually print a warning message on the HPOS feature if both
     * the Legacy REST API and HPOS are active.
     *
     * @param string $feature_id Feature id.
     * @param array  $plugin_feature_info Array of plugin feature info, as provided by FeaturesController->get_compatible_plugins_for_feature().
     *
     * @return string Warning string.
     */
    public function generate_incompatible_plugin_feature_warning(string $feature_id, array $plugin_feature_info) : string
    {
    }
    /**
     * Filter plugin/feature compatibility info, returning the names of the plugins/features that are considered incompatible.
     * "Uncertain" information will be included or not depending on the value of the value of the 'plugins_are_incompatible_by_default'
     * flag in the feature definition (default is true).
     *
     * @param string $feature_id Feature id.
     * @param array  $compatibility_info Array containing "compatible', 'incompatible' and 'uncertain' keys.
     * @return array Items in 'incompatible' and 'uncertain' if plugins are incompatible by default with the feature; only items in 'incompatible' otherwise.
     */
    public function get_items_considered_incompatible(string $feature_id, array $compatibility_info) : array
    {
    }
    /**
     * Get the names of the plugins that are excluded from the feature compatibility UI.
     * These plugins won't be considered as incompatible with any existing feature for the purposes
     * of displaying compatibility warning in UI, even if they declare incompatibilities explicitly.
     *
     * @return string[] Plugin names relative to the root plugins directory.
     */
    public function get_plugins_excluded_from_compatibility_ui()
    {
    }
}