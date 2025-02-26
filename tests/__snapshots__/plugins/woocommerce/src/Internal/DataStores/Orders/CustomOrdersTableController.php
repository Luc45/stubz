<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This is the main class that controls the custom orders tables feature. Its responsibilities are:
 *
 * - Displaying UI components (entries in the tools page and in settings)
 * - Providing the proper data store for orders via 'woocommerce_order_data_store' hook
 *
 * ...and in general, any functionality that doesn't imply database access.
 */
class CustomOrdersTableController
{
    const SYNC_QUERY_ARG = 'wc_hpos_sync_now';

    const STOP_SYNC_QUERY_ARG = 'wc_hpos_stop_sync';

    const CUSTOM_ORDERS_TABLE_USAGE_ENABLED_OPTION = 'woocommerce_custom_orders_table_enabled';

    const USE_DB_TRANSACTIONS_OPTION = 'woocommerce_use_db_transactions_for_custom_orders_table_data_sync';

    const DB_TRANSACTIONS_ISOLATION_LEVEL_OPTION = 'woocommerce_db_transactions_isolation_level_for_custom_orders_table_data_sync';

    const DEFAULT_DB_TRANSACTIONS_ISOLATION_LEVEL = 'READ UNCOMMITTED';

    const HPOS_FTS_INDEX_OPTION = 'woocommerce_hpos_fts_index_enabled';

    const HPOS_FTS_ADDRESS_INDEX_CREATED_OPTION = 'woocommerce_hpos_address_fts_index_created';

    const HPOS_FTS_ORDER_ITEM_INDEX_CREATED_OPTION = 'woocommerce_hpos_order_item_fts_index_created';

    const HPOS_DATASTORE_CACHING_ENABLED_OPTION = 'woocommerce_hpos_datastore_caching_enabled';

    /**
     * The data store object to use.
     *
     * @var OrdersTableDataStore
     */
    private $data_store = null;

    /**
     * Refunds data store object to use.
     *
     * @var OrdersTableRefundDataStore
     */
    private $refund_data_store = null;

    /**
     * The data synchronizer object to use.
     *
     * @var DataSynchronizer
     */
    private $data_synchronizer = null;

    /**
     * The data cleanup instance to use.
     *
     * @var LegacyDataCleanup
     */
    private $data_cleanup = null;

    /**
     * The batch processing controller to use.
     *
     * @var BatchProcessingController
     */
    private $batch_processing_controller = null;

    /**
     * The features controller to use.
     *
     * @var FeaturesController
     */
    private $features_controller = null;

    /**
     * The orders cache object to use.
     *
     * @var OrderCache
     */
    private $order_cache = null;

    /**
     * The orders cache controller object to use.
     *
     * @var OrderCacheController
     */
    private $order_cache_controller = null;

    /**
     * The plugin util object to use.
     *
     * @var PluginUtil
     */
    private $plugin_util = null;

    /**
     * The db util object to use.
     *
     * @var DatabaseUtil;
     */
    private $db_util = null;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Initialize the hooks used by the class.
     */
    private function init_hooks()
    {
        // stub
    }

    /**
     * Class initialization, invoked by the DI container.
     *
     * @internal
     * @param OrdersTableDataStore       $data_store The data store to use.
     * @param DataSynchronizer           $data_synchronizer The data synchronizer to use.
     * @param LegacyDataCleanup          $data_cleanup The legacy data cleanup instance to use.
     * @param OrdersTableRefundDataStore $refund_data_store The refund data store to use.
     * @param BatchProcessingController  $batch_processing_controller The batch processing controller to use.
     * @param FeaturesController         $features_controller The features controller instance to use.
     * @param OrderCache                 $order_cache The order cache engine to use.
     * @param OrderCacheController       $order_cache_controller The order cache controller to use.
     * @param PluginUtil                 $plugin_util The plugin util to use.
     * @param DatabaseUtil               $db_util The database util to use.
     */
    public final function init(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStore $data_store, Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $data_synchronizer, Automattic\WooCommerce\Internal\DataStores\Orders\LegacyDataCleanup $data_cleanup, Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableRefundDataStore $refund_data_store, Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessingController $batch_processing_controller, Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller, Automattic\WooCommerce\Caches\OrderCache $order_cache, Automattic\WooCommerce\Caches\OrderCacheController $order_cache_controller, Automattic\WooCommerce\Utilities\PluginUtil $plugin_util, Automattic\WooCommerce\Internal\Utilities\DatabaseUtil $db_util)
    {
        // stub
    }

    /**
     * Is the custom orders table usage enabled via settings?
     * This can be true only if the feature is enabled and a table regeneration has been completed.
     *
     * @return bool True if the custom orders table usage is enabled
     */
    public function custom_orders_table_usage_is_enabled(): bool
    {
        // stub
    }

    /**
     * Is caching of data within the CustomerOrdersTable datastores enabled?
     *
     * @return bool True if the caching is enabled within the CustomeOrderTable Datastores.
     */
    public function hpos_data_caching_is_enabled(): bool
    {
        // stub
    }

    /**
     * Gets the instance of the orders data store to use.
     *
     * @param \WC_Object_Data_Store_Interface|string $default_data_store The default data store (as received via the woocommerce_order_data_store hook).
     *
     * @return \WC_Object_Data_Store_Interface|string The actual data store to use.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function get_orders_data_store($default_data_store)
    {
        // stub
    }

    /**
     * Gets the instance of the refunds data store to use.
     *
     * @param \WC_Object_Data_Store_Interface|string $default_data_store The default data store (as received via the woocommerce_order-refund_data_store hook).
     *
     * @return \WC_Object_Data_Store_Interface|string The actual data store to use.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function get_refunds_data_store($default_data_store)
    {
        // stub
    }

    /**
     * Gets the instance of a given data store.
     *
     * @param \WC_Object_Data_Store_Interface|string $default_data_store The default data store (as received via the appropriate hooks).
     * @param string                                 $type               The type of the data store to get.
     *
     * @return \WC_Object_Data_Store_Interface|string The actual data store to use.
     */
    private function get_data_store_instance($default_data_store, string $type)
    {
        // stub
    }

    /**
     * Add an entry to Status - Tools to create or regenerate the custom orders table,
     * and also an entry to delete the table as appropriate.
     *
     * @param array $tools_array The array of tools to add the tool to.
     * @return array The updated array of tools.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_hpos_tools(array $tools_array): array
    {
        // stub
    }

    /**
     * Delete the custom orders tables and any related options and data in response to the user pressing the tool button.
     *
     * @throws \Exception Can't delete the tables.
     */
    private function delete_custom_orders_tables()
    {
        // stub
    }

    /**
     * Handler for the individual setting updated hook.
     *
     * @param string $option Setting name.
     * @param mixed  $old_value Old value of the setting.
     * @param mixed  $value New value of the setting.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_updated_option($option, $old_value, $value)
    {
        // stub
    }

    /**
     * Process option that enables FTS index on orders table. Tries to create an FTS index when option is enabled.
     *
     * @param string $option Option name.
     * @param string $old_value Old value of the option.
     * @param string $value New value of the option.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_updated_option_fts_index($option, $old_value, $value)
    {
        // stub
    }

    /**
     * Recreate order addresses FTS index. Useful when updating to 9.4 when phone number was added to index, or when other recreating index is needed.
     *
     * @since 9.4.0.
     *
     * @return array Array with keys status (bool) and message (string).
     */
    public function recreate_order_address_fts_index(): array
    {
        // stub
    }

    /**
     * Handler for the setting pre-update hook.
     * We use it to verify that authoritative orders table switch doesn't happen while sync is pending.
     *
     * @param mixed  $value New value of the setting.
     * @param string $option Setting name.
     * @param mixed  $old_value Old value of the setting.
     *
     * @throws \Exception Attempt to change the authoritative orders table while orders sync is pending.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_pre_update_option($value, $option, $old_value)
    {
        // stub
    }

    /**
     * Callback to trigger a sync immediately by clicking a button on the Features screen.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function sync_now()
    {
        // stub
    }

    /**
     * Tell WP Admin to remove the sync query arg from the URL.
     *
     * @param array $query_args The query args that are removable.
     *
     * @return array
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function register_removable_query_arg($query_args)
    {
        // stub
    }

    /**
     * Handler for the woocommerce_after_register_post_type post,
     * registers the post type for placeholder orders.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function register_post_type_for_order_placeholders(): void
    {
        // stub
    }

    /**
     * Add the definition for the HPOS feature.
     *
     * @param FeaturesController $features_controller The instance of FeaturesController.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_feature_definition($features_controller)
    {
        // stub
    }

    /**
     * Returns the HPOS setting for rendering HPOS vs Post setting block in Features section of the settings page.
     *
     * @return array Feature setting object.
     */
    private function get_hpos_setting_for_feature()
    {
        // stub
    }

    /**
     * Returns the setting for rendering sync enabling setting block in Features section of the settings page.
     *
     * @return array Feature setting object.
     */
    private function get_hpos_setting_for_sync()
    {
        // stub
    }

    /**
     * Returns a value indicating if changing the authoritative data source for orders while there are orders pending synchronization is allowed.
     *
     * @return bool
     */
    private function changing_data_source_with_sync_pending_is_allowed(): bool
    {
        // stub
    }

    /**
     * Rewrites post edit links for HPOS placeholder posts so that they go to the HPOS order itself.
     * Hooked onto `get_edit_post_link`.
     *
     * @since 9.0.0
     *
     * @param string $link    The edit link.
     * @param int    $post_id Post ID.
     * @return string
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function maybe_rewrite_order_edit_link($link, $post_id)
    {
        // stub
    }

    /**
     * Set the `order_objects` cache group as non-persistent if Custom Order data caching is enabled.
     *
     * With order datastore cache enabled, caching of raw data is now handled by the datastore, rather than full object
     * being stored in persistent cache.
     *
     * @return void
     */
    public function maybe_set_order_cache_group_as_non_persistent()
    {
        // stub
    }

}

