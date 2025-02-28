<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class handles the database structure creation and the data synchronization for the custom orders tables. Its responsibilities are:
 *
 * - Providing entry points for creating and deleting the required database tables.
 * - Synchronizing changes between the custom orders tables and the posts table whenever changes in orders happen.
 */
class DataSynchronizer implements \Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface
{
    const ORDERS_DATA_SYNC_ENABLED_OPTION = 'woocommerce_custom_orders_table_data_sync_enabled';
    const PLACEHOLDER_ORDER_POST_TYPE = 'shop_order_placehold';
    const DELETED_RECORD_META_KEY = '_deleted_from';
    const DELETED_FROM_POSTS_META_VALUE = 'posts_table';
    const DELETED_FROM_ORDERS_META_VALUE = 'orders_table';
    const ORDERS_TABLE_CREATED = 'woocommerce_custom_orders_table_created';
    const ORDERS_SYNC_BATCH_SIZE = 250;
    const ID_TYPE_MISSING_IN_ORDERS_TABLE = 0;
    const ID_TYPE_MISSING_IN_POSTS_TABLE = 1;
    const ID_TYPE_DIFFERENT_UPDATE_DATE = 2;
    const ID_TYPE_DELETED_FROM_ORDERS_TABLE = 3;
    const ID_TYPE_DELETED_FROM_POSTS_TABLE = 4;
    const BACKGROUND_SYNC_MODE_OPTION = 'woocommerce_custom_orders_table_background_sync_mode';
    const BACKGROUND_SYNC_INTERVAL_OPTION = 'woocommerce_custom_orders_table_background_sync_interval';
    const BACKGROUND_SYNC_MODE_INTERVAL = 'interval';
    const BACKGROUND_SYNC_MODE_CONTINUOUS = 'continuous';
    const BACKGROUND_SYNC_MODE_OFF = 'off';
    const BACKGROUND_SYNC_EVENT_HOOK = 'woocommerce_custom_orders_table_background_sync';
    /**
     * The data store object to use.
     *
     * @var OrdersTableDataStore
     */
    private $data_store = null;
    /**
     * The database util object to use.
     *
     * @var DatabaseUtil
     */
    private $database_util = null;
    /**
     * The posts to COT migrator to use.
     *
     * @var PostsToOrdersMigrationController
     */
    private $posts_to_cot_migrator = null;
    /**
     * Logger object to be used to log events.
     *
     * @var \WC_Logger
     */
    private $error_logger = null;
    /**
     * The instance of the LegacyProxy object to use.
     *
     * @var LegacyProxy
     */
    private $legacy_proxy = null;
    /**
     * The order cache controller.
     *
     * @var OrderCacheController
     */
    private $order_cache_controller = null;
    /**
     * The batch processing controller.
     *
     * @var BatchProcessingController
     */
    private $batch_processing_controller = null;
    /**
     * Class constructor.
     */
    public function __construct()
{
}
    /**
     * Class initialization, invoked by the DI container.
     *
     * @param OrdersTableDataStore             $data_store The data store to use.
     * @param DatabaseUtil                     $database_util The database util class to use.
     * @param PostsToOrdersMigrationController $posts_to_cot_migrator The posts to COT migration class to use.
     * @param LegacyProxy                      $legacy_proxy The legacy proxy instance to use.
     * @param OrderCacheController             $order_cache_controller The order cache controller instance to use.
     * @param BatchProcessingController        $batch_processing_controller The batch processing controller to use.
     * @internal
     */
    final public function init(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStore $data_store, Automattic\WooCommerce\Internal\Utilities\DatabaseUtil $database_util, Automattic\WooCommerce\Database\Migrations\CustomOrderTable\PostsToOrdersMigrationController $posts_to_cot_migrator, Automattic\WooCommerce\Proxies\LegacyProxy $legacy_proxy, Automattic\WooCommerce\Caches\OrderCacheController $order_cache_controller, Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessingController $batch_processing_controller)
{
}
    /**
     * Does the custom orders tables exist in the database?
     *
     * @return bool True if the custom orders tables exist in the database.
     */
    public function check_orders_table_exists(): bool
{
}
    /**
     * Returns the value of the orders table created option. If it's not set, then it checks the orders table and set it accordingly.
     *
     * @return bool Whether orders table exists.
     */
    public function get_table_exists(): bool
{
}
    /**
     * Create the custom orders database tables and log an error if that's not possible.
     *
     * @return bool True if all the tables were successfully created, false otherwise.
     */
    public function create_database_tables()
{
}
    /**
     * Delete the custom orders database tables.
     */
    public function delete_database_tables()
{
}
    /**
     * Is the real-time data sync between old and new tables currently enabled?
     *
     * @return bool
     */
    public function data_sync_is_enabled(): bool
{
}
    /**
     * Get the current background data sync mode.
     *
     * @return string
     */
    public function get_background_sync_mode(): string
{
}
    /**
     * Is the background data sync between old and new tables currently enabled?
     *
     * @return bool
     */
    public function background_sync_is_enabled(): bool
{
}
    /**
     * Process an option change for specific keys.
     *
     * @param string $option_key The option key.
     * @param string $old_value  The previous value.
     * @param string $new_value  The new value.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_updated_option($option_key, $old_value, $new_value)
{
}
    /**
     * Process an option change when the key didn't exist before.
     *
     * @param string $option_key The option key.
     * @param string $value      The new value.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_added_option($option_key, $value)
{
}
    /**
     * Process an option deletion for specific keys.
     *
     * @param string $option_key The option key.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function process_deleted_option($option_key)
{
}
    /**
     * Get the time interval, in seconds, between background syncs.
     *
     * @return int
     */
    public function get_background_sync_interval(): int
{
}
    /**
     * Keys that can be ignored during synchronization or verification.
     *
     * @since 8.6.0
     *
     * @return string[]
     */
    public function get_ignored_order_props()
{
}
    /**
     * Schedule an event to run background sync when the mode is set to interval.
     *
     * @return void
     */
    private function schedule_background_sync()
{
}
    /**
     * Remove any pending background sync events.
     *
     * @return void
     */
    private function unschedule_background_sync()
{
}
    /**
     * Callback to check for pending syncs and enqueue the background data sync processor when in interval mode.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_interval_background_sync()
{
}
    /**
     * Callback to keep the background data sync processor enqueued when in continuous mode.
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_continuous_background_sync()
{
}
    /**
     * Get the current sync process status.
     * The information is meaningful only if pending_data_sync_is_in_progress return true.
     *
     * @return array
     *
     * @deprecated 9.0.0
     */
    public function get_sync_status()
{
}
    /**
     * Get the total number of orders pending synchronization.
     *
     * @return int
     */
    public function get_current_orders_pending_sync_count_cached(): int
{
}
    /**
     * Calculate how many orders need to be synchronized currently.
     * A database query is performed to get how many orders match one of the following:
     *
     * - Existing in the authoritative table but not in the backup table.
     * - Existing in both tables, but they have a different update date.
     *
     * @param bool $use_cache Whether to use the cached value instead of fetching from database.
     */
    public function get_current_orders_pending_sync_count($use_cache = false): int
{
}
    /**
     * Get the meta value for order deletion records based on which table is currently authoritative.
     *
     * @return string self::DELETED_FROM_ORDERS_META_VALUE if the orders table is authoritative, self::DELETED_FROM_POSTS_META_VALUE otherwise.
     */
    private function get_current_deletion_record_meta_value()
{
}
    /**
     * Is the custom orders table the authoritative data source for orders currently?
     *
     * @return bool Whether the custom orders table the authoritative data source for orders currently.
     */
    public function custom_orders_table_is_authoritative(): bool
{
}
    /**
     * Get a list of ids of orders than are out of sync.
     *
     * Valid values for $type are:
     *
     * ID_TYPE_MISSING_IN_ORDERS_TABLE: orders that exist in posts table but not in orders table.
     * ID_TYPE_MISSING_IN_POSTS_TABLE: orders that exist in orders table but not in posts table (the corresponding post entries are placeholders).
     * ID_TYPE_DIFFERENT_UPDATE_DATE: orders that exist in both tables but have different last update dates.
     * ID_TYPE_DELETED_FROM_ORDERS_TABLE: orders deleted from the orders table but not yet from the posts table.
     * ID_TYPE_DELETED_FROM_POSTS_TABLE: orders deleted from the posts table but not yet from the orders table.
     *
     * @param int $type One of ID_TYPE_MISSING_IN_ORDERS_TABLE, ID_TYPE_MISSING_IN_POSTS_TABLE, ID_TYPE_DIFFERENT_UPDATE_DATE.
     * @param int $limit Maximum number of ids to return.
     * @return array An array of order ids.
     * @throws \Exception Invalid parameter.
     */
    public function get_ids_of_orders_pending_sync(int $type, int $limit)
{
}
    /**
     * Get the ids of the orders that are marked as deleted in the orders meta table.
     *
     * @param bool $deleted_from_orders_table True to get the ids of the orders deleted from the orders table, false o get the ids of the orders deleted from the posts table.
     * @param int  $limit The maximum count of orders to return.
     * @return array An array of order ids.
     */
    private function get_deleted_order_ids(bool $deleted_from_orders_table, int $limit)
{
}
    /**
     * Cleanup all the synchronization status information,
     * because the process has been disabled by the user via settings,
     * or because there's nothing left to synchronize.
     */
    public function cleanup_synchronization_state()
{
}
    /**
     * Process data for current batch.
     *
     * @param array $batch Batch details.
     */
    public function process_batch(array $batch): void
{
}
    /**
     * Take a batch of order ids pending synchronization and process those that were deleted, ignoring the others
     * (which will be orders that were created or modified) and returning the ids of the orders actually processed.
     *
     * @param array $batch Array of ids of order pending synchronization.
     * @param bool  $custom_orders_table_is_authoritative True if the custom orders table is currently authoritative.
     * @return array Order ids that have been actually processed.
     */
    private function process_deleted_orders(array $batch, bool $custom_orders_table_is_authoritative): array
{
}
    /**
     * Get total number of pending records that require update.
     *
     * @return int Number of pending records.
     */
    public function get_total_pending_count(): int
{
}
    /**
     * Returns the batch with records that needs to be processed for a given size.
     *
     * @param int $size Size of the batch.
     *
     * @return array Batch of records.
     */
    public function get_next_batch_to_process(int $size): array
{
}
    /**
     * Default batch size to use.
     *
     * @return int Default batch size.
     */
    public function get_default_batch_size(): int
{
}
    /**
     * A user friendly name for this process.
     *
     * @return string Name of the process.
     */
    public function get_name(): string
{
}
    /**
     * A user friendly description for this process.
     *
     * @return string Description.
     */
    public function get_description(): string
{
}
    /**
     * Prevents deletion of order backup posts (regardless of sync setting) when HPOS is authoritative and the order
     * still exists in HPOS.
     * This should help with edge cases where wp_delete_post() would delete the HPOS record too or backfill would sync
     * incorrect data from an order with no metadata from the posts table.
     *
     * @since 8.8.0
     *
     * @param WP_Post|false|null $delete Whether to go forward with deletion.
     * @param WP_Post            $post   Post object.
     * @return WP_Post|false|null
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function maybe_prevent_deletion_of_post($delete, $post)
{
}
    /**
     * Handle the 'deleted_post' action.
     *
     * When posts is authoritative and sync is enabled, deleting a post also deletes COT data.
     *
     * @param int     $postid The post id.
     * @param WP_Post $post The deleted post.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_deleted_post($postid, $post): void
{
}
    /**
     * Handle the 'woocommerce_update_order' action.
     *
     * When posts is authoritative and sync is enabled, updating a post triggers a corresponding change in the COT table.
     *
     * @param int $order_id The order id.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_updated_order($order_id): void
{
}
    /**
     * Handles deletion of auto-draft orders in sync with WP's own auto-draft deletion.
     *
     * @since 7.7.0
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function delete_auto_draft_orders()
{
}
    /**
     * Handles deletion of trashed orders after `EMPTY_TRASH_DAYS` as defined by WordPress.
     *
     * @since 8.5.0
     *
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function delete_trashed_orders()
{
}
}