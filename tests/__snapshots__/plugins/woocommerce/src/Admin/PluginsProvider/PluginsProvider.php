<?php

namespace Automattic\WooCommerce\Admin\PluginsProvider;

/**
 * Plugins Provider.
 *
 * Uses the live PluginsHelper.
 */
class PluginsProvider
{
    /**
     * The deactivated plugin slug.
     *
     * @var string
     */
    private static $deactivated_plugin_slug = '';

    /**
     * Get an array of active plugin slugs.
     *
     * @return array
     */
    public function get_active_plugin_slugs()
    {
        // stub
    }

    /**
     * Set the deactivated plugin. This is needed because the deactivated_plugin
     * hook happens before the option is updated which means that getting the
     * active plugins includes the deactivated plugin.
     *
     * @param string $plugin_path The path to the plugin being deactivated.
     */
    public static function set_deactivated_plugin($plugin_path)
    {
        // stub
    }

    /**
     * Get plugin data.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return array|false
     */
    public function get_plugin_data($plugin)
    {
        // stub
    }

    /**
     * Get the path to the plugin file relative to the plugins directory from the plugin slug.
     *
     * E.g. 'woocommerce' returns 'woocommerce/woocommerce.php'
     *
     * @param string $slug Plugin slug to get path for.
     *
     * @return string|false
     */
    public function get_plugin_path_from_slug($slug)
    {
        // stub
    }

}