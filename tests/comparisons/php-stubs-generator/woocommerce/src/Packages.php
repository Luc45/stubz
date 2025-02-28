<?php

namespace Automattic\WooCommerce;

/**
 * Packages class.
 *
 * @since 3.7.0
 */
class Packages
{
    /**
     * Array of package names and their main package classes. Once a package has been merged into WooCommerce
     * directly it should be removed from here and added to the merged packages array.
     *
     * @var array Key is the package name/directory, value is the main package class which handles init.
     */
    protected static $packages = array();
    /**
     * Array of package names and their main package classes.
     *
     * One a package has been merged into WooCommerce Core it should be moved from the package list and placed in
     * this list. This will ensure that the feature plugin is disabled as well as provide the class to handle
     * initialization for the now-merged feature plugin.
     *
     * Once a package has been merged into WooCommerce Core it should have its slug added here. This will ensure
     * that we deactivate the feature plugin automatically to prevent any problems caused by conflicts between
     * the two versions caused by them both being active.
     *
     * The packages included in this array cannot be deactivated and will always load with WooCommerce core.
     *
     * @var array Key is the package name/directory, value is the main package class which handles init.
     */
    protected static $base_packages = array('woocommerce-admin' => '\\Automattic\\WooCommerce\\Admin\\Composer\\Package', 'woocommerce-gutenberg-products-block' => '\\Automattic\\WooCommerce\\Blocks\\Package');
    /**
     * Similar to $base_packages, but
     * the packages included in this array can be deactivated via the 'woocommerce_merged_packages' filter.
     *
     * @var array Key is the package name/directory, value is the main package class which handles init.
     */
    protected static $merged_packages = array('woocommerce-brands' => '\\Automattic\\WooCommerce\\Internal\\Brands');
    /**
     * Init the package loader.
     *
     * @since 3.7.0
     */
    public static function init()
    {
    }
    /**
     * Callback for WordPress init hook.
     */
    public static function on_init()
    {
    }
    /**
     * Checks a package exists by looking for it's directory.
     *
     * @param string $package Package name.
     * @return boolean
     */
    public static function package_exists($package)
    {
    }
    /**
     * Checks a package exists by looking for it's directory.
     *
     * @param string $class_name Class name.
     * @return boolean
     */
    public static function should_load_class($class_name)
    {
    }
    /**
     * Gets all merged, enabled packages.
     *
     * @return array
     */
    protected static function get_enabled_packages()
    {
    }
    /**
     * Checks if a package is enabled.
     *
     * @param string $package Package name.
     * @return boolean
     */
    public static function is_package_enabled($package)
    {
    }
    /**
     * Prepare merged packages for initialization.
     * Especially useful when running actions early in the 'plugins_loaded' timeline.
     */
    public static function prepare_packages()
    {
    }
    /**
     * Deactivates merged feature plugins.
     *
     * Once a feature plugin is merged into WooCommerce Core it should be deactivated. This method will
     * ensure that a plugin gets deactivated. Note that for the first request it will still be active,
     * and as such, there may be some odd behavior. This is unlikely to cause any issues though
     * because it will be deactivated on the request that updates or activates WooCommerce.
     */
    protected static function deactivate_merged_packages()
    {
    }
    /**
     * Prevent plugins already merged into WooCommerce core from getting activated as standalone plugins.
     *
     * @param string $plugin Plugin name.
     */
    public static function deactivate_merged_plugins($plugin)
    {
    }
    /**
     * Mark merged plugins as pending update.
     * This is required for correctly displaying maintenance notices.
     *
     * @param array $plugins Plugins list.
     */
    public static function mark_merged_plugins_as_pending_update($plugins)
    {
    }
    /**
     * Displays a maintenance notice next to merged plugins, to inform users
     * that the plugin functionality is now offered by WooCommerce core.
     *
     * Requires 'mark_merged_plugins_as_pending_update' to properly display this notice.
     *
     * @param string $plugin_file Plugin file.
     */
    public static function display_notice_for_merged_plugins($plugin_file)
    {
    }
    /**
     * Loads packages after plugins_loaded hook.
     *
     * Each package should include an init file which loads the package so it can be used by core.
     */
    protected static function initialize_packages()
    {
    }
    /**
     * If a package is missing, add an admin notice.
     *
     * @param string $package Package name.
     */
    protected static function missing_package($package)
    {
    }
}