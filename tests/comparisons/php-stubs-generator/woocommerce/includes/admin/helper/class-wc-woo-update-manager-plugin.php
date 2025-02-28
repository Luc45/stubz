<?php

/**
 * WC_Helper_Plugin Class
 *
 * Contains the logic to manage the Woo Update Manager plugin.
 */
class WC_Woo_Update_Manager_Plugin
{
    public const WOO_UPDATE_MANAGER_PLUGIN_MAIN_FILE = 'woo-update-manager/woo-update-manager.php';
    public const WOO_UPDATE_MANAGER_DOWNLOAD_URL = 'https://woocommerce.com/product-download/woo-update-manager';
    public const WOO_UPDATE_MANAGER_SLUG = 'woo-update-manager';
    /**
     * Loads the class, runs on init.
     *
     * @return void
     */
    public static function load(): void
    {
    }
    /**
     * Check if the Woo Update Manager plugin is active.
     *
     * @return bool
     */
    public static function is_plugin_active(): bool
    {
    }
    /**
     * Check if the Woo Update Manager plugin is installed.
     *
     * @return bool
     */
    public static function is_plugin_installed(): bool
    {
    }
    /**
     * Generate the URL to install the Woo Update Manager plugin.
     *
     * @return string
     */
    public static function generate_install_url(): string
    {
    }
    /**
     * Get the id of the Woo Update Manager plugin.
     *
     * @return int
     */
    public static function get_plugin_slug(): string
    {
    }
    /**
     * Show a notice on the WC admin pages to install or activate the Woo Update Manager plugin.
     *
     * @return void
     */
    public static function show_woo_update_manager_install_notice(): void
    {
    }
    /**
     * Check if the installation notice has been dismissed.
     *
     * @return bool
     */
    protected static function install_admin_notice_dismissed(): bool
    {
    }
    /**
     * Check if the activation notice has been dismissed.
     *
     * @return bool
     */
    protected static function activate_admin_notice_dismissed(): bool
    {
    }
}
