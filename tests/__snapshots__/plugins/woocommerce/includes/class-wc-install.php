<?php
/**
 * WC_Install Class.
 */
class WC_Install
{
    const NEWLY_INSTALLED_OPTION = 'woocommerce_newly_installed';
    const INITIAL_INSTALLED_VERSION = 'woocommerce_initial_installed_version';
    const STORE_ID_OPTION = 'woocommerce_store_id';
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * Please note that these functions are invoked when WooCommerce is updated from a previous version,
     * but NOT when WooCommerce is newly installed.
     *
     * Database schema changes must be incorporated to the SQL returned by get_schema, which is applied
     * via dbDelta at both install and update time. If any other kind of database change is required
     * at install time (e.g. populating tables), use the 'woocommerce_installed' hook.
     *
     * @var array
     */
    private static $db_updates = array (
  '2.0.0' => 
  array (
    0 => 'wc_update_200_file_paths',
    1 => 'wc_update_200_permalinks',
    2 => 'wc_update_200_subcat_display',
    3 => 'wc_update_200_taxrates',
    4 => 'wc_update_200_line_items',
    5 => 'wc_update_200_images',
    6 => 'wc_update_200_db_version',
  ),
  '2.0.9' => 
  array (
    0 => 'wc_update_209_brazillian_state',
    1 => 'wc_update_209_db_version',
  ),
  '2.1.0' => 
  array (
    0 => 'wc_update_210_remove_pages',
    1 => 'wc_update_210_file_paths',
    2 => 'wc_update_210_db_version',
  ),
  '2.2.0' => 
  array (
    0 => 'wc_update_220_shipping',
    1 => 'wc_update_220_order_status',
    2 => 'wc_update_220_variations',
    3 => 'wc_update_220_attributes',
    4 => 'wc_update_220_db_version',
  ),
  '2.3.0' => 
  array (
    0 => 'wc_update_230_options',
    1 => 'wc_update_230_db_version',
  ),
  '2.4.0' => 
  array (
    0 => 'wc_update_240_options',
    1 => 'wc_update_240_shipping_methods',
    2 => 'wc_update_240_api_keys',
    3 => 'wc_update_240_refunds',
    4 => 'wc_update_240_db_version',
  ),
  '2.4.1' => 
  array (
    0 => 'wc_update_241_variations',
    1 => 'wc_update_241_db_version',
  ),
  '2.5.0' => 
  array (
    0 => 'wc_update_250_currency',
    1 => 'wc_update_250_db_version',
  ),
  '2.6.0' => 
  array (
    0 => 'wc_update_260_options',
    1 => 'wc_update_260_termmeta',
    2 => 'wc_update_260_zones',
    3 => 'wc_update_260_zone_methods',
    4 => 'wc_update_260_refunds',
    5 => 'wc_update_260_db_version',
  ),
  '3.0.0' => 
  array (
    0 => 'wc_update_300_grouped_products',
    1 => 'wc_update_300_settings',
    2 => 'wc_update_300_product_visibility',
    3 => 'wc_update_300_db_version',
  ),
  '3.1.0' => 
  array (
    0 => 'wc_update_310_downloadable_products',
    1 => 'wc_update_310_old_comments',
    2 => 'wc_update_310_db_version',
  ),
  '3.1.2' => 
  array (
    0 => 'wc_update_312_shop_manager_capabilities',
    1 => 'wc_update_312_db_version',
  ),
  '3.2.0' => 
  array (
    0 => 'wc_update_320_mexican_states',
    1 => 'wc_update_320_db_version',
  ),
  '3.3.0' => 
  array (
    0 => 'wc_update_330_image_options',
    1 => 'wc_update_330_webhooks',
    2 => 'wc_update_330_product_stock_status',
    3 => 'wc_update_330_set_default_product_cat',
    4 => 'wc_update_330_clear_transients',
    5 => 'wc_update_330_set_paypal_sandbox_credentials',
    6 => 'wc_update_330_db_version',
  ),
  '3.4.0' => 
  array (
    0 => 'wc_update_340_states',
    1 => 'wc_update_340_state',
    2 => 'wc_update_340_last_active',
    3 => 'wc_update_340_db_version',
  ),
  '3.4.3' => 
  array (
    0 => 'wc_update_343_cleanup_foreign_keys',
    1 => 'wc_update_343_db_version',
  ),
  '3.4.4' => 
  array (
    0 => 'wc_update_344_recreate_roles',
    1 => 'wc_update_344_db_version',
  ),
  '3.5.0' => 
  array (
    0 => 'wc_update_350_reviews_comment_type',
    1 => 'wc_update_350_db_version',
  ),
  '3.5.2' => 
  array (
    0 => 'wc_update_352_drop_download_log_fk',
  ),
  '3.5.4' => 
  array (
    0 => 'wc_update_354_modify_shop_manager_caps',
    1 => 'wc_update_354_db_version',
  ),
  '3.6.0' => 
  array (
    0 => 'wc_update_360_product_lookup_tables',
    1 => 'wc_update_360_term_meta',
    2 => 'wc_update_360_downloadable_product_permissions_index',
    3 => 'wc_update_360_db_version',
  ),
  '3.7.0' => 
  array (
    0 => 'wc_update_370_tax_rate_classes',
    1 => 'wc_update_370_mro_std_currency',
    2 => 'wc_update_370_db_version',
  ),
  '3.9.0' => 
  array (
    0 => 'wc_update_390_move_maxmind_database',
    1 => 'wc_update_390_change_geolocation_database_update_cron',
    2 => 'wc_update_390_db_version',
  ),
  '4.0.0' => 
  array (
    0 => 'wc_update_product_lookup_tables',
    1 => 'wc_update_400_increase_size_of_column',
    2 => 'wc_update_400_reset_action_scheduler_migration_status',
    3 => 'wc_admin_update_0201_order_status_index',
    4 => 'wc_admin_update_0230_rename_gross_total',
    5 => 'wc_admin_update_0251_remove_unsnooze_action',
    6 => 'wc_update_400_db_version',
  ),
  '4.4.0' => 
  array (
    0 => 'wc_update_440_insert_attribute_terms_for_variable_products',
    1 => 'wc_admin_update_110_remove_facebook_note',
    2 => 'wc_admin_update_130_remove_dismiss_action_from_tracking_opt_in_note',
    3 => 'wc_update_440_db_version',
  ),
  '4.5.0' => 
  array (
    0 => 'wc_update_450_sanitize_coupons_code',
    1 => 'wc_update_450_db_version',
  ),
  '5.0.0' => 
  array (
    0 => 'wc_update_500_fix_product_review_count',
    1 => 'wc_admin_update_160_remove_facebook_note',
    2 => 'wc_admin_update_170_homescreen_layout',
    3 => 'wc_update_500_db_version',
  ),
  '5.6.0' => 
  array (
    0 => 'wc_update_560_create_refund_returns_page',
    1 => 'wc_update_560_db_version',
  ),
  '6.0.0' => 
  array (
    0 => 'wc_update_600_migrate_rate_limit_options',
    1 => 'wc_admin_update_270_delete_report_downloads',
    2 => 'wc_admin_update_271_update_task_list_options',
    3 => 'wc_admin_update_280_order_status',
    4 => 'wc_admin_update_290_update_apperance_task_option',
    5 => 'wc_admin_update_290_delete_default_homepage_layout_option',
    6 => 'wc_update_600_db_version',
  ),
  '6.3.0' => 
  array (
    0 => 'wc_update_630_create_product_attributes_lookup_table',
    1 => 'wc_admin_update_300_update_is_read_from_last_read',
    2 => 'wc_update_630_db_version',
  ),
  '6.4.0' => 
  array (
    0 => 'wc_update_640_add_primary_key_to_product_attributes_lookup_table',
    1 => 'wc_admin_update_340_remove_is_primary_from_note_action',
    2 => 'wc_update_640_db_version',
  ),
  '6.5.0' => 
  array (
    0 => 'wc_update_650_approved_download_directories',
  ),
  '6.5.1' => 
  array (
    0 => 'wc_update_651_approved_download_directories',
  ),
  '6.7.0' => 
  array (
    0 => 'wc_update_670_purge_comments_count_cache',
    1 => 'wc_update_670_delete_deprecated_remote_inbox_notifications_option',
  ),
  '7.0.0' => 
  array (
    0 => 'wc_update_700_remove_download_log_fk',
    1 => 'wc_update_700_remove_recommended_marketing_plugins_transient',
  ),
  '7.2.1' => 
  array (
    0 => 'wc_update_721_adjust_new_zealand_states',
    1 => 'wc_update_721_adjust_ukraine_states',
  ),
  '7.2.2' => 
  array (
    0 => 'wc_update_722_adjust_new_zealand_states',
    1 => 'wc_update_722_adjust_ukraine_states',
  ),
  '7.5.0' => 
  array (
    0 => 'wc_update_750_add_columns_to_order_stats_table',
    1 => 'wc_update_750_disable_new_product_management_experience',
  ),
  '7.7.0' => 
  array (
    0 => 'wc_update_770_remove_multichannel_marketing_feature_options',
  ),
  '8.1.0' => 
  array (
    0 => 'wc_update_810_migrate_transactional_metadata_for_hpos',
  ),
  '8.6.0' => 
  array (
    0 => 'wc_update_860_remove_recommended_marketing_plugins_transient',
  ),
  '8.7.0' => 
  array (
    0 => 'wc_update_870_prevent_listing_of_transient_files_directory',
  ),
  '8.9.0' => 
  array (
    0 => 'wc_update_890_update_connect_to_woocommerce_note',
    1 => 'wc_update_890_update_paypal_standard_load_eligibility',
  ),
  '8.9.1' => 
  array (
    0 => 'wc_update_891_create_plugin_autoinstall_history_option',
  ),
  '9.1.0' => 
  array (
    0 => 'wc_update_910_add_launch_your_store_tour_option',
    1 => 'wc_update_910_remove_obsolete_user_meta',
  ),
  '9.2.0' => 
  array (
    0 => 'wc_update_920_add_wc_hooked_blocks_version_option',
  ),
  '9.3.0' => 
  array (
    0 => 'wc_update_930_add_woocommerce_coming_soon_option',
    1 => 'wc_update_930_migrate_user_meta_for_launch_your_store_tour',
  ),
  '9.4.0' => 
  array (
    0 => 'wc_update_940_add_phone_to_order_address_fts_index',
    1 => 'wc_update_940_remove_help_panel_highlight_shown',
  ),
  '9.5.0' => 
  array (
    0 => 'wc_update_950_tracking_option_autoload',
  ),
  '9.6.1' => 
  array (
    0 => 'wc_update_961_migrate_default_email_base_color',
  ),
);
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
     * Core function that performs the WooCommerce install.
     */
    private static function install_core()
{
}
    /**
     * Returns true if we're installing.
     *
     * @return bool
     */
    private static function is_installing()
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
     * Reset any notices added to admin.
     *
     * @since 3.2.0
     */
    private static function remove_admin_notices()
{
}
    /**
     * Setup WC environment - post types, taxonomies, endpoints.
     *
     * @since 3.2.0
     */
    private static function setup_environment()
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
     * See if we need to set redirect transients for activation or not.
     *
     * @since 4.6.0
     */
    private static function maybe_set_activation_transients()
{
}
    /**
     * See if we need to show or run database updates during install.
     *
     * @since 3.2.0
     */
    private static function maybe_update_db_version()
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
     * Update WC version to current.
     */
    private static function update_wc_version()
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
     * Push all needed DB updates to the queue for processing.
     */
    private static function update()
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
     * Create cron jobs (clear them first).
     */
    private static function create_cron_jobs()
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
     * Default options.
     *
     * Sets up the default options used on the settings page.
     */
    private static function create_options()
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
     * Checks whether HPOS should be enabled for new shops.
     *
     * @return bool
     */
    private static function should_enable_hpos_for_new_shop()
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
     * If in a previous version of WooCommerce the Legacy REST API plugin was installed manually but the core Legacy REST API was kept disabled,
     * now the Legacy API is still disabled and can't be manually enabled from settings UI (the plugin, which is now in control, won't allow that),
     * which is weird and confusing. So we detect this case and explicitly enable it.
     */
    private static function maybe_activate_legacy_api_enabled_option()
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
     * Get Table schema.
     *
     * See https://github.com/woocommerce/woocommerce/wiki/Database-Description/
     *
     * A note on indexes; Indexes have a maximum size of 767 bytes. Historically, we haven't need to be concerned about that.
     * As of WordPress 4.2, however, we moved to utf8mb4, which uses 4 bytes per character. This means that an index which
     * used to have room for floor(767/3) = 255 characters, now only has room for floor(767/4) = 191 characters.
     *
     * Changing indexes may cause duplicate index notices in logs due to https://core.trac.wordpress.org/ticket/34870 but dropping
     * indexes first causes too much load on some servers/larger DB.
     *
     * When adding or removing a table, make sure to update the list of tables in WC_Install::get_tables().
     *
     * @return string
     */
    private static function get_schema()
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
     * Create files/directories.
     */
    private static function create_files()
{
}
    /**
     * Create a placeholder image in the media library.
     *
     * @since 3.5.0
     */
    private static function create_placeholder_image()
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
     * Get slug from path and associate it with the path.
     *
     * @param array  $plugins Associative array of plugin files to paths.
     * @param string $key Plugin relative path. Example: woocommerce/woocommerce.php.
     */
    private static function associate_plugin_file($plugins, $key)
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
     * Sets whether PayPal Standard will be loaded on install.
     *
     * @since 5.5.0
     */
    private static function set_paypal_standard_load_eligibility()
{
}
    /**
     * Gets the content of the sample refunds and return policy page.
     *
     * @since 5.6.0
     * @return string The content for the page
     */
    private static function get_refunds_return_policy_page_content()
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
