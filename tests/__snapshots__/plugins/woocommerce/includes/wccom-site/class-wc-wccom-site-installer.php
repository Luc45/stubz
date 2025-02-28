<?php

/**
 * WC_WCCOM_Site_Installer Class
 *
 * Contains functionalities to install products via WooCommerce.com helper connection.
 */
class WC_WCCOM_Site_Installer
{
    /**
     * An instance of the WP_Upgrader class to be used for installation.
     *
     * @var \WP_Upgrader $wp_upgrader
     */
    private static $wp_upgrader = null;

    /**
     * Get WP.org plugin's main file.
     *
     * @since 3.7.0
     * @param string $dir Directory name of the plugin.
     * @return bool|string
     */
    public static function get_wporg_plugin_main_file($dir)
{
}
    /**
     * Get plugin info
     *
     * @since 3.9.0
     * @param string $dir Directory name of the plugin.
     * @return bool|array
     */
    public static function get_plugin_info($dir)
{
}
    /**
     * Get an instance of WP_Upgrader to use for installing plugins.
     *
     * @return WP_Upgrader
     */
    public static function get_wp_upgrader()
{
}
}
