<?php
/**
 * WC_Helper_Compat Class
 *
 * Some level of compatibility with the legacy WooCommerce Helper plugin.
 */
class WC_Helper_Compat
{
    /**
     * Loads the class, runs on init.
     */
    public static function load()
{
}
    /**
     * Runs during woocommerce_helper_loaded
     */
    public static function helper_loaded()
{
}
    /**
     * Remove legacy helper actions (notices, menus, etc.)
     */
    public static function remove_actions()
{
}
    /**
     * Attempt to migrate a legacy connection to a new one.
     */
    public static function migrate_connection()
{
}
    /**
     * Attempt to deactivate the legacy helper plugin.
     */
    public static function deactivate_plugin()
{
}
    /**
     * Display admin notice directing the user where to go.
     */
    public static function plugin_deactivation_notice()
{
}
    /**
     * Register menu item.
     */
    public static function admin_menu()
{
}
    /**
     * Render the legacy helper compat view.
     */
    public static function render_compat_menu()
{
}
}
