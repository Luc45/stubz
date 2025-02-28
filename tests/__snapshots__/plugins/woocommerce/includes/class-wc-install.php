<?php
/**
 * WC_Install Class.
 */
class WC_Install
{
    /**
     * Option name used to track new installations of WooCommerce.
     *
     * @var string
     */
    public const NEWLY_INSTALLED_OPTION = 'woocommerce_newly_installed';
    /**
     * Option name used to track new installation versions of WooCommerce.
     *
     * @var string
     */
    public const INITIAL_INSTALLED_VERSION = 'woocommerce_initial_installed_version';
    /**
     * Option name used to uniquely identify installations of WooCommerce.
     *
     * @var string
     */
    public const STORE_ID_OPTION = 'woocommerce_store_id';
    /**
     * Hook in tabs.
     */
    public static function init()
{
}
    /**
     * Trigger `woocommerce_newly_installed` action for new installations.
     *
     * @since 8.0.0
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function newly_installed()
{
}
    /**
     * Check WooCommerce version and run the updater is required.
     *
     * This check is done on all requests and runs if the versions do not match.
     */
    public static function check_version()
{
}
    /**
     * Performan manual database update when triggered by WooCommerce System Tools.
     *
     * @since 3.6.5
     */
    public static function manual_database_update()
{
}
    /**
     * Add WC Admin based db update notice.
     *
     * @since 4.0.0
     */
    public static function wc_admin_db_update_notice()
{
}
    /**
     * Run manual database update.
     */
    public static function run_manual_database_update()
{
}
    /**
     * Run an update callback when triggered by ActionScheduler.
     *
     * @param string $update_callback Callback name.
     *
     * @since 3.6.0
     */
    public static function run_update_callback($update_callback)
{
}
    /**
     * Triggered when a callback will run.
     *
     * @since 3.6.0
     * @param string $callback Callback name.
     */
    protected static function run_update_callback_start($callback)
{
}
    /**
     * Triggered when a callback has ran.
     *
     * @since 3.6.0
     * @param string $callback Callback name.
     * @param bool   $result Return value from callback. Non-false need to run again.
     */
    protected static function run_update_callback_end($callback, $result)
{
}
    /**
     * Install actions when a update button is clicked within the admin area.
     *
     * This function is hooked into admin_init to affect admin only.
     */
    public static function install_actions()
{
}
    /**
     * Install WC.
     */
    public static function install()
{
}
    /**
     * Check if all the base tables are present.
     *
     * @param bool $modify_notice Whether to modify notice based on if all tables are present.
     * @param bool $execute       Whether to execute get_schema queries as well.
     *
     * @return array List of queries.
     */
    public static function verify_base_tables($modify_notice = true, $execute = false)
{
}
    /**
     * Is this a brand new WC install?
     *
     * A brand new install has no version yet. Also treat empty installs as 'new'.
     *
     * @since  3.2.0
     * @return boolean
     */
    public static function is_new_install()
{
}
    /**
     * Is a DB update needed?
     *
     * @since  3.2.0
     * @return boolean
     */
    public static function needs_db_update()
{
}
    /**
     * Set the Store ID if not already present.
     *
     * @since 8.4.0
     */
    public static function maybe_set_store_id()
{
}
    /**
     * Get list of DB update callbacks.
     *
     * @since  3.0.0
     * @return array
     */
    public static function get_db_update_callbacks()
{
}
    /**
     * Update DB version to current.
     *
     * @param string|null $version New WooCommerce DB version or null.
     */
    public static function update_db_version($version = null)
{
}
    /**
     * Add more cron schedules.
     *
     * @param array $schedules List of WP scheduled cron jobs.
     *
     * @return array
     */
    public static function cron_schedules($schedules)
{
}
    /**
     * Create pages on installation.
     */
    public static function maybe_create_pages()
{
}
    /**
     * Create pages that the plugin relies on, storing page IDs in variables.
     */
    public static function create_pages()
{
}
    /**
     * Enable HPOS by default for new shops.
     *
     * @since 8.2.0
     */
    public static function maybe_enable_hpos()
{
}
    /**
     * Add the coming soon options for new shops.
     *
     * Ensure that the options are set for all shops for performance even if core profiler is disabled on the host.
     *
     * @since 9.3.0
     */
    public static function add_coming_soon_option()
{
}
    /**
     * Delete obsolete notes.
     */
    public static function delete_obsolete_notes()
{
}
    /**
     * Migrate option values to their new keys/names.
     */
    public static function migrate_options()
{
}
    /**
     * Add the default terms for WC taxonomies - product types and order statuses. Modify this at your own risk.
     */
    public static function create_terms()
{
}
    /**
     * Install and activate the WooCommerce Legacy REST API plugin from the WordPress.org directory if all the following is true:
     *
     * 1. We are in a WooCommerce upgrade process (not a new install).
     * 2. The 'woocommerce_skip_legacy_rest_api_plugin_auto_install' filter returns false (which is the default).
     * 3. The plugin is not installed and active already (but see note about multisite below).
     * 4. The Legacy REST API is enabled in the site OR the site has at least one webhook defined that uses the Legacy REST API payload format (disabled webhooks also count).
     *
     * In multisite setups it could happen that the plugin was installed by an installation process performed in another site.
     * In this case we check if the plugin was autoinstalled in such a way, and if so we activate it if the conditions are fulfilled.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public static function maybe_install_legacy_api_plugin()
{
}
    /**
     * Set up the database tables which the plugin needs to function.
     * WARNING: If you are modifying this method, make sure that its safe to call regardless of the state of database.
     *
     * This is called from `install` method and is executed in-sync when WC is installed or updated. This can also be called optionally from `verify_base_tables`.
     *
     * TODO: Add all crucial tables that we have created from workers in the past.
     *
     * Tables:
     *      woocommerce_attribute_taxonomies - Table for storing attribute taxonomies - these are user defined
     *      woocommerce_downloadable_product_permissions - Table for storing user and guest download permissions.
     *          KEY(order_id, product_id, download_id) used for organizing downloads on the My Account page
     *      woocommerce_order_items - Order line items are stored in a table to make them easily queryable for reports
     *      woocommerce_order_itemmeta - Order line item meta is stored in a table for storing extra data.
     *      woocommerce_tax_rates - Tax Rates are stored inside 2 tables making tax queries simple and efficient.
     *      woocommerce_tax_rate_locations - Each rate can be applied to more than one postcode/city hence the second table.
     *
     * @return array Strings containing the results of the various update queries as returned by dbDelta.
     */
    public static function create_tables()
{
}
    /**
     * Return a list of WooCommerce tables. Used to make sure all WC tables are dropped when uninstalling the plugin
     * in a single site or multi site environment.
     *
     * @return array WC tables.
     */
    public static function get_tables()
{
}
    /**
     * Drop WooCommerce tables.
     *
     * @return void
     */
    public static function drop_tables()
{
}
    /**
     * Uninstall tables when MU blog is deleted.
     *
     * @param array $tables List of tables that will be deleted by WP.
     *
     * @return string[]
     */
    public static function wpmu_drop_tables($tables)
{
}
    /**
     * Create roles and capabilities.
     */
    public static function create_roles()
{
}
    /**
     * Get capabilities for WooCommerce - these are assigned to admin/shop manager during installation or reset.
     *
     * @return array
     */
    public static function get_core_capabilities()
{
}
    /**
     * Remove WooCommerce roles.
     */
    public static function remove_roles()
{
}
    /**
     * Show action links on the plugin screen.
     *
     * @param mixed $links Plugin Action links.
     *
     * @return array
     */
    public static function plugin_action_links($links)
{
}
    /**
     * Show row meta on the plugin screen.
     *
     * @param mixed $links Plugin Row Meta.
     * @param mixed $file  Plugin Base file.
     *
     * @return array
     */
    public static function plugin_row_meta($links, $file)
{
}
    /**
     * Install a plugin from .org in the background via a cron job (used by
     * installer - opt in).
     *
     * @param string $plugin_to_install_id Plugin ID.
     * @param array  $plugin_to_install Plugin information.
     *
     * @throws Exception If unable to proceed with plugin installation.
     * @since  2.6.0
     */
    public static function background_installer($plugin_to_install_id, $plugin_to_install)
{
}
    /**
     * Removes redirect added during MailChimp plugin's activation.
     *
     * @param string $option Option name.
     * @param string $value  Option value.
     */
    public static function remove_mailchimps_redirect($option, $value)
{
}
    /**
     * Install a theme from .org in the background via a cron job (used by installer - opt in).
     *
     * @param string $theme_slug Theme slug.
     *
     * @throws Exception If unable to proceed with theme installation.
     * @since  3.1.0
     */
    public static function theme_background_installer($theme_slug)
{
}
    /**
     * Adds an admin inbox note after a page has been created to notify
     * user. For example to take action to edit the page such as the
     * Refund and returns page.
     *
     * @since 5.6.0
     * @return void
     */
    public static function add_admin_note_after_page_created()
{
}
    /**
     * When pages are created, we might want to take some action.
     * In this case we want to set an option when refund and returns
     * page is created.
     *
     * @since 5.6.0
     * @param int   $page_id ID of the page.
     * @param array $page_data The data of the page created.
     * @return void
     */
    public static function page_created($page_id, $page_data)
{
}
    /**
     * Get the Cart block content.
     *
     * @since 8.3.0
     * @return string
     */
    protected static function get_cart_block_content()
{
}
    /**
     * Get the Checkout block content.
     *
     * @since 8.3.0
     * @return string
     */
    protected static function get_checkout_block_content()
{
}
}
