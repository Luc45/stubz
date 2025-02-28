<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class is the standard data store to be used when the custom orders table is in use.
 */
class OrdersTableDataStore
{
    /**
     * Order IDs for which we are checking sync on read in the current request. In WooCommerce, using wc_get_order is a very common pattern, to avoid performance issues, we only sync on read once per request per order. This works because we consider out of sync orders to be an anomaly, so we don't recommend running HPOS with incompatible plugins.
     *
     * @var array
     */
    private static $reading_order_ids = array();

    /**
     * Keep track of order IDs that are actively being backfilled. We use this to prevent further read on sync from add_|update_|delete_postmeta etc hooks. If we allow this, then we would end up syncing the same order multiple times as it is being backfilled.
     *
     * @var array
     */
    private static $backfilling_order_ids = array();

    /**
     * Data stored in meta keys, but not considered "meta" for an order.
     *
     * @since 7.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => '_customer_user',
  1 => '_order_key',
  2 => '_order_currency',
  3 => '_billing_first_name',
  4 => '_billing_last_name',
  5 => '_billing_company',
  6 => '_billing_address_1',
  7 => '_billing_address_2',
  8 => '_billing_city',
  9 => '_billing_state',
  10 => '_billing_postcode',
  11 => '_billing_country',
  12 => '_billing_email',
  13 => '_billing_phone',
  14 => '_shipping_first_name',
  15 => '_shipping_last_name',
  16 => '_shipping_company',
  17 => '_shipping_address_1',
  18 => '_shipping_address_2',
  19 => '_shipping_city',
  20 => '_shipping_state',
  21 => '_shipping_postcode',
  22 => '_shipping_country',
  23 => '_shipping_phone',
  24 => '_completed_date',
  25 => '_paid_date',
  26 => '_edit_last',
  27 => '_cart_discount',
  28 => '_cart_discount_tax',
  29 => '_order_shipping',
  30 => '_order_shipping_tax',
  31 => '_order_tax',
  32 => '_order_total',
  33 => '_payment_method',
  34 => '_payment_method_title',
  35 => '_transaction_id',
  36 => '_customer_ip_address',
  37 => '_customer_user_agent',
  38 => '_created_via',
  39 => '_order_version',
  40 => '_prices_include_tax',
  41 => '_date_completed',
  42 => '_date_paid',
  43 => '_payment_tokens',
  44 => '_billing_address_index',
  45 => '_shipping_address_index',
  46 => '_recorded_sales',
  47 => '_recorded_coupon_usage_counts',
  48 => '_download_permissions_granted',
  49 => '_order_stock_reduced',
  50 => '_new_order_email_sent',
);

    /**
     * Meta keys that are considered ephemeral and do not trigger a full save (updating modified date) when changed.
     *
     * @var string[]
     */
    protected $ephemeral_meta_keys;

    /**
     * Handles custom metadata in the wc_orders_meta table.
     *
     * @var OrdersTableDataStoreMeta
     */
    protected $data_store_meta = null;

    /**
     * The database util object to use.
     *
     * @var DatabaseUtil
     */
    protected $database_util = null;

    /**
     * The posts data store object to use.
     *
     * @var \WC_Order_Data_Store_CPT
     */
    private $cpt_data_store = null;

    /**
     * Logger object to be used to log events.
     *
     * @var \WC_Logger
     */
    private $error_logger = null;

    /**
     * The name of the main orders table.
     *
     * @var string
     */
    private $orders_table_name = null;

    /**
     * The instance of the LegacyProxy object to use.
     *
     * @var LegacyProxy
     */
    private $legacy_proxy = null;

    /**
     * Table column to WC_Order mapping for wc_orders table.
     *
     * @var \string[][]
     */
    protected $order_column_mapping = array (
  'id' => 
  array (
    'type' => 'int',
    'name' => 'id',
  ),
  'status' => 
  array (
    'type' => 'string',
    'name' => 'status',
  ),
  'type' => 
  array (
    'type' => 'string',
    'name' => 'type',
  ),
  'currency' => 
  array (
    'type' => 'string',
    'name' => 'currency',
  ),
  'tax_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'cart_tax',
  ),
  'total_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'total',
  ),
  'customer_id' => 
  array (
    'type' => 'int',
    'name' => 'customer_id',
  ),
  'billing_email' => 
  array (
    'type' => 'string',
    'name' => 'billing_email',
  ),
  'date_created_gmt' => 
  array (
    'type' => 'date',
    'name' => 'date_created',
  ),
  'date_updated_gmt' => 
  array (
    'type' => 'date',
    'name' => 'date_modified',
  ),
  'parent_order_id' => 
  array (
    'type' => 'int',
    'name' => 'parent_id',
  ),
  'payment_method' => 
  array (
    'type' => 'string',
    'name' => 'payment_method',
  ),
  'payment_method_title' => 
  array (
    'type' => 'string',
    'name' => 'payment_method_title',
  ),
  'ip_address' => 
  array (
    'type' => 'string',
    'name' => 'customer_ip_address',
  ),
  'transaction_id' => 
  array (
    'type' => 'string',
    'name' => 'transaction_id',
  ),
  'user_agent' => 
  array (
    'type' => 'string',
    'name' => 'customer_user_agent',
  ),
  'customer_note' => 
  array (
    'type' => 'string',
    'name' => 'customer_note',
  ),
);

    /**
     * Table column to WC_Order mapping for billing addresses in wc_address table.
     *
     * @var \string[][]
     */
    protected $billing_address_column_mapping = array (
  'id' => 
  array (
    'type' => 'int',
  ),
  'order_id' => 
  array (
    'type' => 'int',
  ),
  'address_type' => 
  array (
    'type' => 'string',
  ),
  'first_name' => 
  array (
    'type' => 'string',
    'name' => 'billing_first_name',
  ),
  'last_name' => 
  array (
    'type' => 'string',
    'name' => 'billing_last_name',
  ),
  'company' => 
  array (
    'type' => 'string',
    'name' => 'billing_company',
  ),
  'address_1' => 
  array (
    'type' => 'string',
    'name' => 'billing_address_1',
  ),
  'address_2' => 
  array (
    'type' => 'string',
    'name' => 'billing_address_2',
  ),
  'city' => 
  array (
    'type' => 'string',
    'name' => 'billing_city',
  ),
  'state' => 
  array (
    'type' => 'string',
    'name' => 'billing_state',
  ),
  'postcode' => 
  array (
    'type' => 'string',
    'name' => 'billing_postcode',
  ),
  'country' => 
  array (
    'type' => 'string',
    'name' => 'billing_country',
  ),
  'email' => 
  array (
    'type' => 'string',
    'name' => 'billing_email',
  ),
  'phone' => 
  array (
    'type' => 'string',
    'name' => 'billing_phone',
  ),
);

    /**
     * Table column to WC_Order mapping for shipping addresses in wc_address table.
     *
     * @var \string[][]
     */
    protected $shipping_address_column_mapping = array (
  'id' => 
  array (
    'type' => 'int',
  ),
  'order_id' => 
  array (
    'type' => 'int',
  ),
  'address_type' => 
  array (
    'type' => 'string',
  ),
  'first_name' => 
  array (
    'type' => 'string',
    'name' => 'shipping_first_name',
  ),
  'last_name' => 
  array (
    'type' => 'string',
    'name' => 'shipping_last_name',
  ),
  'company' => 
  array (
    'type' => 'string',
    'name' => 'shipping_company',
  ),
  'address_1' => 
  array (
    'type' => 'string',
    'name' => 'shipping_address_1',
  ),
  'address_2' => 
  array (
    'type' => 'string',
    'name' => 'shipping_address_2',
  ),
  'city' => 
  array (
    'type' => 'string',
    'name' => 'shipping_city',
  ),
  'state' => 
  array (
    'type' => 'string',
    'name' => 'shipping_state',
  ),
  'postcode' => 
  array (
    'type' => 'string',
    'name' => 'shipping_postcode',
  ),
  'country' => 
  array (
    'type' => 'string',
    'name' => 'shipping_country',
  ),
  'email' => 
  array (
    'type' => 'string',
  ),
  'phone' => 
  array (
    'type' => 'string',
    'name' => 'shipping_phone',
  ),
);

    /**
     * Table column to WC_Order mapping for wc_operational_data table.
     *
     * @var \string[][]
     */
    protected $operational_data_column_mapping = array (
  'id' => 
  array (
    'type' => 'int',
  ),
  'order_id' => 
  array (
    'type' => 'int',
  ),
  'created_via' => 
  array (
    'type' => 'string',
    'name' => 'created_via',
  ),
  'woocommerce_version' => 
  array (
    'type' => 'string',
    'name' => 'version',
  ),
  'prices_include_tax' => 
  array (
    'type' => 'bool',
    'name' => 'prices_include_tax',
  ),
  'coupon_usages_are_counted' => 
  array (
    'type' => 'bool',
    'name' => 'recorded_coupon_usage_counts',
  ),
  'download_permission_granted' => 
  array (
    'type' => 'bool',
    'name' => 'download_permissions_granted',
  ),
  'cart_hash' => 
  array (
    'type' => 'string',
    'name' => 'cart_hash',
  ),
  'new_order_email_sent' => 
  array (
    'type' => 'bool',
    'name' => 'new_order_email_sent',
  ),
  'order_key' => 
  array (
    'type' => 'string',
    'name' => 'order_key',
  ),
  'order_stock_reduced' => 
  array (
    'type' => 'bool',
    'name' => 'order_stock_reduced',
  ),
  'date_paid_gmt' => 
  array (
    'type' => 'date',
    'name' => 'date_paid',
  ),
  'date_completed_gmt' => 
  array (
    'type' => 'date',
    'name' => 'date_completed',
  ),
  'shipping_tax_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'shipping_tax',
  ),
  'shipping_total_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'shipping_total',
  ),
  'discount_tax_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'discount_tax',
  ),
  'discount_total_amount' => 
  array (
    'type' => 'decimal',
    'name' => 'discount_total',
  ),
  'recorded_sales' => 
  array (
    'type' => 'bool',
    'name' => 'recorded_sales',
  ),
);

    /**
     * Cache variable to store combined mapping.
     *
     * @var array[][][]
     */
    private $all_order_column_mapping = null;

    /**
     * Initialize the object.
     *
     * @internal
     * @param OrdersTableDataStoreMeta $data_store_meta Metadata instance.
     * @param DatabaseUtil             $database_util   The database util instance to use.
     * @param LegacyProxy              $legacy_proxy    The legacy proxy instance to use.
     *
     * @return void
     */
    final public function init(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStoreMeta $data_store_meta, Automattic\WooCommerce\Internal\Utilities\DatabaseUtil $database_util, Automattic\WooCommerce\Proxies\LegacyProxy $legacy_proxy)
{
}
    /**
     * Get the custom orders table name.
     *
     * @return string The custom orders table name.
     */
    public static function get_orders_table_name()
{
}
    /**
     * Get the order addresses table name.
     *
     * @return string The order addresses table name.
     */
    public static function get_addresses_table_name()
{
}
    /**
     * Get the orders operational data table name.
     *
     * @return string The orders operational data table name.
     */
    public static function get_operational_data_table_name()
{
}
    /**
     * Get the orders meta data table name.
     *
     * @return string Name of order meta data table.
     */
    public static function get_meta_table_name()
{
}
    /**
     * Get the names of all the tables involved in the custom orders table feature.
     *
     * See also : get_all_table_names_with_id.
     *
     * @return string[]
     */
    public function get_all_table_names()
{
}
    /**
     * Similar to get_all_table_names, but also returns the table name along with the items table.
     *
     * @return array Names of the tables.
     */
    public static function get_all_table_names_with_id()
{
}
    /**
     * Return combined mappings for all order tables.
     *
     * @return array|\array[][][] Return combined mapping.
     */
    public function get_all_order_column_mappings()
{
}
    /**
     * The group name to use when caching order object data.
     *
     * @return string
     */
    private function get_cache_group(): string
{
}
    /**
     * Delete cached order data for the given object_ids.
     *
     * @param array $order_ids The IDs of the orders to remove cache.
     *
     * @return bool[] Array of return values, grouped by the object_id. Each value is either true on success, or false
     *                if the contents were not deleted.
     *
     * @internal This method should only be used by internally and in cases where the CRUD operations of this datastore
     *           are bypassed for performance purposes. This interface is not guaranteed.
     */
    public function clear_cached_data(array $order_ids): array
{
}
    /**
     * Invalidate all the cache used by this data store.
     *
     * @internal This method should only be used by internally and in cases where the CRUD operations of this datastore
     *           are bypassed for performance purposes. This interface is not guaranteed.
     *
     * @return bool Whether the cache as fully invalidated.
     */
    public function clear_all_cached_data(): bool
{
}
    /**
     * Helper function to get alias for order table, this is used in select query.
     *
     * @return string Alias.
     */
    private function get_order_table_alias(): string
{
}
    /**
     * Helper function to get alias for op table, this is used in select query.
     *
     * @return string Alias.
     */
    private function get_op_table_alias(): string
{
}
    /**
     * Helper function to get alias for address table, this is used in select query.
     *
     * @param string $type Type of address; 'billing' or 'shipping'.
     *
     * @return string Alias.
     */
    private function get_address_table_alias(string $type): string
{
}
    /**
     * Helper method to get a CPT data store instance to use.
     *
     * @return \WC_Order_Data_Store_CPT Data store instance.
     */
    public function get_cpt_data_store_instance()
{
}
    /**
     * Returns data store object to use backfilling.
     *
     * @return \Abstract_WC_Order_Data_Store_CPT
     */
    protected function get_post_data_store_for_backfill()
{
}
    /**
     * Backfills order details in to WP_Post DB. Uses WC_Order_Data_store_CPT.
     *
     * @param \WC_Abstract_Order $order Order object to backfill.
     */
    public function backfill_post_record($order)
{
}
    /**
     * Updates an order (in this datastore) from another order object.
     *
     * @param \WC_Abstract_Order $order Source order.
     * @return bool Whether the order was updated.
     */
    public function update_order_from_object($order)
{
}
    /**
     * Helper method to persist a DB row to database. Uses insert_or_update when possible.
     *
     * @param array $update Data containing atleast `table`, `data` and `format` keys, but also preferably `where` and `where_format` to use `insert_or_update`.
     *
     * @return bool|int Number of rows affected, boolean false on error.
     */
    private function persist_db_row($update)
{
}
    /**
     * Get information about whether permissions are granted yet.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether permissions are granted.
     */
    public function get_download_permissions_granted($order)
{
}
    /**
     * Stores information about whether permissions were generated yet.
     *
     * @param \WC_Order $order Order ID or order object.
     * @param bool      $set True or false.
     */
    public function set_download_permissions_granted($order, $set)
{
}
    /**
     * Gets information about whether sales were recorded.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether sales are recorded.
     */
    public function get_recorded_sales($order)
{
}
    /**
     * Stores information about whether sales were recorded.
     *
     * @param \WC_Order $order Order object.
     * @param bool      $set True or false.
     */
    public function set_recorded_sales($order, $set)
{
}
    /**
     * Gets information about whether coupon counts were updated.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether coupon counts were updated.
     */
    public function get_recorded_coupon_usage_counts($order)
{
}
    /**
     * Stores information about whether coupon counts were updated.
     *
     * @param \WC_Order $order Order object.
     * @param bool      $set True or false.
     */
    public function set_recorded_coupon_usage_counts($order, $set)
{
}
    /**
     * Whether email have been sent for this order.
     *
     * @param \WC_Order|int $order Order object.
     *
     * @return bool Whether email is sent.
     */
    public function get_email_sent($order)
{
}
    /**
     * Stores information about whether email was sent.
     *
     * @param \WC_Order $order Order object.
     * @param bool      $set True or false.
     */
    public function set_email_sent($order, $set)
{
}
    /**
     * Helper setter for email_sent.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether email was sent.
     */
    public function get_new_order_email_sent($order)
{
}
    /**
     * Helper setter for new order email sent.
     *
     * @param \WC_Order $order Order object.
     * @param bool      $set True or false.
     */
    public function set_new_order_email_sent($order, $set)
{
}
    /**
     * Gets information about whether stock was reduced.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether stock was reduced.
     */
    public function get_stock_reduced($order)
{
}
    /**
     * Stores information about whether stock was reduced.
     *
     * @param \WC_Order $order Order ID or order object.
     * @param bool      $set True or false.
     */
    public function set_stock_reduced($order, $set)
{
}
    /**
     * Helper getter for `order_stock_reduced`.
     *
     * @param \WC_Order $order Order object.
     * @return bool Whether stock was reduced.
     */
    public function get_order_stock_reduced($order)
{
}
    /**
     * Helper setter for `order_stock_reduced`.
     *
     * @param \WC_Order $order Order ID or order object.
     * @param bool      $set Whether stock was reduced.
     */
    public function set_order_stock_reduced($order, $set)
{
}
    /**
     * Get token ids for an order.
     *
     * @param WC_Order $order Order object.
     * @return array
     */
    public function get_payment_token_ids($order)
{
}
    /**
     * Update token ids for an order.
     *
     * @param WC_Order $order Order object.
     * @param array    $token_ids Payment token ids.
     */
    public function update_payment_token_ids($order, $token_ids)
{
}
    /**
     * Get amount already refunded.
     *
     * @param \WC_Order $order Order object.
     *
     * @return float Refunded amount.
     */
    public function get_total_refunded($order)
{
}
    /**
     * Get the total tax refunded.
     *
     * @param  WC_Order $order Order object.
     * @return float
     */
    public function get_total_tax_refunded($order)
{
}
    /**
     * Get the total shipping refunded.
     *
     * @param  WC_Order $order Order object.
     * @return float
     */
    public function get_total_shipping_refunded($order)
{
}
    /**
     * Finds an Order ID based on an order key.
     *
     * @param string $order_key An order key has generated by.
     * @return int The ID of an order, or 0 if the order could not be found
     */
    public function get_order_id_by_order_key($order_key)
{
}
    /**
     * Return count of orders with a specific status.
     *
     * @param  string $status Order status. Function wc_get_order_statuses() returns a list of valid statuses.
     * @return int
     */
    public function get_order_count($status)
{
}
    /**
     * Get all orders matching the passed in args.
     *
     * @deprecated 3.1.0 - Use {@see wc_get_orders} instead.
     * @param  array $args List of args passed to wc_get_orders().
     * @return array|object
     */
    public function get_orders($args = array())
{
}
    /**
     * Get unpaid orders last updated before the specified date.
     *
     * @param  int $date This timestamp is expected in the timezone in WordPress settings for legacy reason, even though it's not a good practice.
     *
     * @return array Array of order IDs.
     */
    public function get_unpaid_orders($date)
{
}
    /**
     * Get unpaid orders last updated before the specified GMT date.
     *
     * @param int $gmt_timestamp GMT timestamp.
     *
     * @return array Array of order IDs.
     */
    public function get_unpaid_orders_gmt($gmt_timestamp)
{
}
    /**
     * Search order data for a term and return matching order IDs.
     *
     * @param string $term Search term.
     *
     * @return int[] Array of order IDs.
     */
    public function search_orders($term)
{
}
    /**
     * Fetch order type for orders in bulk.
     *
     * @param array $order_ids Order IDs.
     *
     * @return array array( $order_id1 => $type1, ... ) Array for all orders.
     */
    public function get_orders_type($order_ids)
{
}
    /**
     * Get order type from DB.
     *
     * @param int $order_id Order ID.
     *
     * @return string Order type.
     */
    public function get_order_type($order_id)
{
}
    /**
     * Check if an order exists by id.
     *
     * @since 8.0.0
     *
     * @param int $order_id The order id to check.
     * @return bool True if an order exists with the given name.
     */
    public function order_exists($order_id): bool
{
}
    /**
     * Method to read an order from custom tables.
     *
     * @param \WC_Order $order Order object.
     *
     * @throws \Exception If passed order is invalid.
     */
    public function read(&$order)
{
}
    /**
     * Reads multiple orders from custom tables in one pass.
     *
     * @since 6.9.0
     * @param array[\WC_Order] $orders Order objects.
     * @throws \Exception If passed an invalid order.
     */
    public function read_multiple(&$orders)
{
}
    /**
     * Read the Cost of Goods Sold value for a given order from the database, if available, and apply it to the order.
     *
     * @param \WC_Abstract_Order $order The order to get the COGS value for.
     */
    private function read_cogs_data(WC_Abstract_Order $order)
{
}
    /**
     * Helper method to check whether to sync the order.
     *
     * @param \WC_Abstract_Order $order Order object.
     *
     * @return bool Whether the order should be synced.
     */
    private function should_sync_order(WC_Abstract_Order $order): bool
{
}
    /**
     * Helper method to initialize order object from DB data.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param int                $order_id Order ID.
     * @param \stdClass          $order_data Order data fetched from DB.
     *
     * @return void
     */
    protected function init_order_record(WC_Abstract_Order &$order, int $order_id, stdClass $order_data)
{
}
    /**
     * For post based data stores, this was used to filter internal meta data. For custom tables, technically there is no internal meta data,
     * (i.e. we store all core data as properties for the order, and not in meta data). So this method is a no-op.
     *
     * Except that some meta such as billing_address_index and shipping_address_index are infact stored in meta data, so we need to filter those out.
     *
     * However, declaring $internal_meta_keys is still required so that our backfill and other comparison checks works as expected.
     *
     * @param \WC_Data $object Object to filter meta data for.
     * @param array    $raw_meta_data Raw meta data.
     *
     * @return array Filtered meta data.
     */
    public function filter_raw_meta_data(&$object, $raw_meta_data)
{
}
    /**
     * Sync order to/from posts tables if we are able to detect difference between order and posts but the sync is enabled.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param \WC_Abstract_Order $post_order Order object initialized from post.
     *
     * @return void
     * @throws \Exception If passed an invalid order.
     */
    private function maybe_sync_order(WC_Abstract_Order &$order, WC_Abstract_Order $post_order)
{
}
    /**
     * Get the post type order representation.
     *
     * @param \WP_Post $post Post object.
     *
     * @return \WC_Order Order object.
     */
    private function get_cpt_order($post)
{
}
    /**
     * Helper function to get posts data for an order in bullk. We use to this to compute posts object in bulk so that we can compare it with COT data.
     *
     * @param array $orders    List of orders mapped by $order_id.
     *
     * @return array List of posts.
     */
    private function get_post_orders_for_ids(array $orders): array
{
}
    /**
     * Computes whether post has been updated after last order. Tries to do it as efficiently as possible.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param \WC_Abstract_Order $post_order Order object read from posts table.
     *
     * @return bool True if post is different than order.
     */
    private function is_post_different_from_order($order, $post_order): bool
{
}
    /**
     * Migrate meta data from post to order.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param \WC_Abstract_Order $post_order Order object read from posts table.
     *
     * @return array List of meta data that was migrated.
     */
    private function migrate_meta_data_from_post_order(WC_Abstract_Order &$order, WC_Abstract_Order $post_order)
{
}
    /**
     * Helper function to compute diff between metadata of post and cot data for an order.
     *
     * Also provides an option to sync the metadata as well, since we are already computing the diff.
     *
     * @param \WC_Abstract_Order $order1 Order object read from posts.
     * @param \WC_Abstract_Order $order2 Order object read from COT.
     * @param bool               $sync   Whether to also sync the meta data.
     *
     * @return array Difference between post and COT meta data.
     */
    private function get_diff_meta_data_between_orders(WC_Abstract_Order &$order1, WC_Abstract_Order $order2, $sync = false): array
{
}
    /**
     * Migrate post record from a given order object.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param \WC_Abstract_Order $post_order Order object read from posts.
     *
     * @return void
     */
    private function migrate_post_record(WC_Abstract_Order &$order, WC_Abstract_Order $post_order): void
{
}
    /**
     * Sets order properties based on a row from the database.
     *
     * @param \WC_Abstract_Order $order      The order object.
     * @param object             $order_data A row of order data from the database.
     */
    protected function set_order_props_from_data(&$order, $order_data)
{
}
    /**
     * Set order prop if a setter exists in either the order object or in the data store.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param string             $prop_name Property name.
     * @param mixed              $prop_value Property value.
     *
     * @return bool True if the property was set, false otherwise.
     */
    private function set_order_prop(WC_Abstract_Order $order, string $prop_name, $prop_value)
{
}
    /**
     * Retrieve raw order data for multiple IDs.
     *
     * @param int[] $ids List of order IDs.
     *
     * @return \stdClass[] DB Order objects or error.
     */
    protected function get_order_data_for_ids(array $ids): array
{
}
    /**
     * Retrieve raw order data from the database for the given a set of IDs.
     *
     * @param int[] $ids List of order IDs.
     *
     * @return \stdClass[] Keyed array of objects containing raw order data keyed by the order IDs.
     */
    private function get_order_data_for_ids_from_db(array $ids): array
{
}
    /**
     * Retrieve raw order data from cache for the given a set of IDs.
     *
     * @param int[] $ids List of order IDs.
     *
     * @return \stdClass[] Keyed array of objects containing raw order data keyed by the order IDs.
     */
    private function get_order_data_for_ids_from_cache(array $ids): array
{
}
    /**
     * Store the raw data for a set of orders in cache.
     *
     * @param \stdClass[][] $order_data An array of raw order records to set in cache keyed by the order IDs.
     *
     * @return void
     */
    private function set_order_data_in_cache(array $order_data)
{
}
    /**
     * Helper method to generate combined select statement.
     *
     * @return string Select SQL statement to fetch order.
     */
    private function get_order_table_select_statement()
{
}
    /**
     * Helper function to generate select statement for fetching metadata in bulk.
     *
     * @return string Select SQL statement to fetch order metadata.
     */
    private function get_order_meta_select_statement()
{
}
    /**
     * Helper method to generate join query for billing addresses in wc_address table.
     *
     * @param string $order_table_alias Alias for order table to use in join.
     * @param string $address_table_alias Alias for address table to use in join.
     *
     * @return array Select and join statements for billing address table.
     */
    private function join_billing_address_table_to_order_query($order_table_alias, $address_table_alias)
{
}
    /**
     * Helper method to generate join query for shipping addresses in wc_address table.
     *
     * @param string $order_table_alias Alias for order table to use in join.
     * @param string $address_table_alias Alias for address table to use in join.
     *
     * @return array Select and join statements for shipping address table.
     */
    private function join_shipping_address_table_to_order_query($order_table_alias, $address_table_alias)
{
}
    /**
     * Helper method to generate join and select query for address table.
     *
     * @param string $address_type Type of address; 'billing' or 'shipping'.
     * @param string $order_table_alias Alias of order table to use.
     * @param string $address_table_alias Alias for address table to use.
     *
     * @return array Select and join statements for address table.
     */
    private function join_address_table_order_query($address_type, $order_table_alias, $address_table_alias)
{
}
    /**
     * Helper method to join order operational data table.
     *
     * @param string $order_table_alias Alias to use for order table.
     * @param string $operational_table_alias Alias to use for operational data table.
     *
     * @return array Select and join queries for operational data table.
     */
    private function join_operational_data_table_to_order_query($order_table_alias, $operational_table_alias)
{
}
    /**
     * Helper method to generate join and select clauses.
     *
     * @param string  $order_table_alias Alias for order table.
     * @param string  $table Table to join.
     * @param string  $table_alias Alias for table to join.
     * @param array[] $column_props_map Column to prop map for table to join.
     *
     * @return array Select and join queries.
     */
    private function generate_select_and_join_clauses($order_table_alias, $table, $table_alias, $column_props_map)
{
}
    /**
     * Helper method to generate select clause for props.
     *
     * @param string  $table_alias Alias for table.
     * @param array[] $props Props to column mapping for table.
     *
     * @return string Select clause.
     */
    private function generate_select_clause_for_props($table_alias, $props)
{
}
    /**
     * Persists order changes to the database.
     *
     * @param \WC_Abstract_Order $order            The order.
     * @param bool               $force_all_fields Force saving all fields to DB and just changed.
     *
     * @throws \Exception If order data is not valid.
     *
     * @since 6.8.0
     */
    protected function persist_order_to_db(&$order, bool $force_all_fields = false)
{
}
    /**
     * Save the Cost of Goods Sold value of a given order to the database.
     *
     * @param WC_Abstract_Order $order The order to save the COGS value for.
     */
    private function save_cogs_data(WC_Abstract_Order $order)
{
}
    /**
     * Takes care of creating the backup post in the posts table (placeholder or actual order post, depending on sync settings).
     *
     * @since 8.8.0
     *
     * @param \WC_Abstract_Order $order   The order.
     * @param string             $context The context: either 'create' or 'backfill'.
     * @return int The new post ID.
     */
    protected function maybe_create_backup_post(&$order, string $context): int
{
}
    /**
     * Set default taxonomies for the order.
     *
     * Note: This is re-implementation of part of WP core's `wp_insert_post` function. Since the code block that set default taxonomies is not filterable, we have to re-implement it.
     *
     * @param \WC_Abstract_Order $order               Order object.
     * @param array              $sanitized_tax_input Sanitized taxonomy input.
     *
     * @return array Sanitized tax input with default taxonomies.
     */
    public function init_default_taxonomies(WC_Abstract_Order $order, array $sanitized_tax_input)
{
}
    /**
     * Set custom taxonomies for the order.
     *
     * Note: This is re-implementation of part of WP core's `wp_insert_post` function. Since the code block that set custom taxonomies is not filterable, we have to re-implement it.
     *
     * @param \WC_Abstract_Order $order               Order object.
     * @param array              $sanitized_tax_input Sanitized taxonomy input.
     *
     * @return void
     */
    public function set_custom_taxonomies(WC_Abstract_Order $order, array $sanitized_tax_input)
{
}
    /**
     * Generates an array of rows with all the details required to insert or update an order in the database.
     *
     * @param \WC_Abstract_Order $order The order.
     * @param string             $context The context: 'create' or 'update'.
     * @param boolean            $only_changes Whether to consider only changes in the order for generating the rows.
     *
     * @return array
     * @throws \Exception When invalid data is found for the given context.
     *
     * @since 6.8.0
     */
    protected function get_db_rows_for_order(WC_Abstract_Order $order, string $context = 'create', bool $only_changes = false): array
{
}
    /**
     * Produces an array with keys 'row' and 'format' that can be passed to `$wpdb->update()` as the `$data` and
     * `$format` parameters. Values are taken from the order changes array and properly formatted for inclusion in the
     * database.
     *
     * @param \WC_Abstract_Order $order          Order.
     * @param array              $column_mapping Table column mapping.
     * @param bool               $only_changes   Whether to consider only changes in the order object or all fields.
     * @return array
     *
     * @since 6.8.0
     */
    protected function get_db_row_from_order($order, $column_mapping, $only_changes = false)
{
}
    /**
     * Method to delete an order from the database.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param array              $args Array of args to pass to the delete method.
     *
     * @return void
     */
    public function delete(&$order, $args = array())
{
}
    /**
     * Handles the deletion of an order from the orders table when sync is disabled:
     *
     * If the corresponding row in the posts table is of placeholder type,
     * it's just deleted; otherwise a "deleted_from" record is created in the meta table
     * and the sync process will detect these and take care of deleting the appropriate post records.
     *
     * @param int $order_id Th id of the order that has been deleted from the orders table.
     * @return void
     */
    protected function handle_order_deletion_with_sync_disabled($order_id): void
{
}
    /**
     * Set the parent id of child orders to the parent order's parent if the post type
     * for the order is hierarchical, just delete the child orders otherwise.
     *
     * @param \WC_Abstract_Order $order Order object.
     *
     * @return void
     */
    private function upshift_or_delete_child_orders($order): void
{
}
    /**
     * Trashes an order.
     *
     * @param  WC_Order $order The order object.
     *
     * @return void
     */
    public function trash_order($order)
{
}
    /**
     * Attempts to restore the specified order back to its original status (after having been trashed).
     *
     * @param WC_Order $order The order to be untrashed.
     *
     * @return bool If the operation was successful.
     */
    public function untrash_order(WC_Order $order): bool
{
}
    /**
     * Deletes order data from custom order tables.
     *
     * @param int $order_id The order ID.
     * @return void
     */
    public function delete_order_data_from_custom_order_tables($order_id)
{
}
    /**
     * Method to create an order in the database.
     *
     * @param \WC_Order $order Order object.
     */
    public function create(&$order)
{
}
    /**
     * Helper method responsible for persisting new data to order table.
     *
     * This should not contain and specific meta or actions, so that it can be used other order types safely.
     *
     * @param \WC_Order $order Order object.
     * @param bool      $force_all_fields Force update all fields, instead of calculating and updating only changed fields.
     * @param bool      $backfill Whether to backfill data to post datastore.
     *
     * @return void
     *
     * @throws \Exception When unable to save data.
     */
    protected function persist_save(&$order, bool $force_all_fields = false, $backfill = true)
{
}
    /**
     * Method to update an order in the database.
     *
     * @param \WC_Order $order Order object.
     */
    public function update(&$order)
{
}
    /**
     * Proxy to updating order meta. Here for backward compatibility reasons.
     *
     * @param \WC_Order $order Order object.
     *
     * @return void
     */
    protected function update_post_meta(&$order)
{
}
    /**
     * Helper method that is responsible for persisting order updates to the database.
     *
     * This is expected to be reused by other order types, and should not contain any specific metadata updates or actions.
     *
     * @param \WC_Order $order Order object.
     * @param bool      $backfill Whether to backfill data to post tables.
     *
     * @return array $changes Array of changes.
     *
     * @throws \Exception When unable to persist order.
     */
    protected function persist_updates(&$order, $backfill = true)
{
}
    /**
     * Helper method to check whether to backfill post record.
     *
     * @return bool
     */
    private function should_backfill_post_record()
{
}
    /**
     * Helper function to decide whether to backfill post record.
     *
     * @param \WC_Abstract_Order $order Order object.
     *
     * @return void
     */
    private function maybe_backfill_post_record($order)
{
}
    /**
     * Helper method that updates post meta based on an order object.
     * Mostly used for backwards compatibility purposes in this datastore.
     *
     * @param \WC_Order $order Order object.
     *
     * @since 7.0.0
     */
    public function update_order_meta(&$order)
{
}
    /**
     * Helper function to update billing and shipping address metadata.
     *
     * @param \WC_Abstract_Order $order Order Object.
     * @param array              $changes Array of changes.
     *
     * @return void
     */
    private function update_address_index_meta($order, $changes)
{
}
    /**
     * Return array of coupon_code => meta_key for coupon which have usage limit and have tentative keys.
     * Pass $coupon_id if key for only one of the coupon is needed.
     *
     * @param WC_Order $order     Order object.
     * @param int      $coupon_id If passed, will return held key for that coupon.
     *
     * @return array|string Key value pair for coupon code and meta key name. If $coupon_id is passed, returns meta_key for only that coupon.
     */
    public function get_coupon_held_keys($order, $coupon_id = null)
{
}
    /**
     * Return array of coupon_code => meta_key for coupon which have usage limit per customer and have tentative keys.
     *
     * @param WC_Order $order Order object.
     * @param int      $coupon_id If passed, will return held key for that coupon.
     *
     * @return mixed
     */
    public function get_coupon_held_keys_for_users($order, $coupon_id = null)
{
}
    /**
     * Add/Update list of meta keys that are currently being used by this order to hold a coupon.
     * This is used to figure out what all meta entries we should delete when order is cancelled/completed.
     *
     * @param WC_Order $order              Order object.
     * @param array    $held_keys          Array of coupon_code => meta_key.
     * @param array    $held_keys_for_user Array of coupon_code => meta_key for held coupon for user.
     *
     * @return mixed
     */
    public function set_coupon_held_keys($order, $held_keys, $held_keys_for_user)
{
}
    /**
     * Release all coupons held by this order.
     *
     * @param WC_Order $order Current order object.
     * @param bool     $save  Whether to delete keys from DB right away. Could be useful to pass `false` if you are building a bulk request.
     */
    public function release_held_coupons($order, $save = true)
{
}
    /**
     * Performs actual query to get orders. Uses `OrdersTableQuery` to build and generate the query.
     *
     * @param array $query_vars Query variables.
     *
     * @return array|object List of orders and count of orders.
     */
    public function query($query_vars)
{
}
    /**
     * Get the SQL needed to create all the tables needed for the custom orders table feature.
     *
     * @return string
     */
    public function get_database_schema()
{
}
    /**
     * Returns an array of meta for an object.
     *
     * @param  WC_Data $object WC_Data object.
     * @return array
     */
    public function read_meta(&$object)
{
}
    /**
     * Deletes meta based on meta ID.
     *
     * @param WC_Data   $object WC_Data object.
     * @param \stdClass $meta (containing at least ->id).
     *
     * @return bool
     */
    public function delete_meta(&$object, $meta)
{
}
    /**
     * Add new piece of meta.
     *
     * @param WC_Data   $object WC_Data object.
     * @param \stdClass $meta (containing ->key and ->value).
     *
     * @return int|bool  meta ID or false on failure
     */
    public function add_meta(&$object, $meta)
{
}
    /**
     * Update meta.
     *
     * @param WC_Data   $object WC_Data object.
     * @param \stdClass $meta (containing ->id, ->key and ->value).
     *
     * @return bool The number of rows updated, or false on error.
     */
    public function update_meta(&$object, $meta)
{
}
    /**
     * Perform after meta change operations, including updating the date_modified field, clearing caches and applying changes.
     *
     * @param WC_Abstract_Order $order Order object.
     * @param \WC_Meta_Data     $meta  Metadata object.
     *
     * @return bool True if changes were applied, false otherwise.
     */
    protected function after_meta_change(&$order, $meta)
{
}
    /**
     * Helper function to check whether the modified date needs to be updated after a meta save.
     *
     * This method prevents order->save() call multiple times in the same request after any meta update by checking if:
     * 1. Order modified date is already the current date, no updates needed in this case.
     * 2. If there are changes already queued for order object, then we don't need to update the modified date as it will be updated ina subsequent save() call.
     *
     * @param WC_Order           $order Order object.
     * @param \WC_Meta_Data|null $meta  Metadata object.
     *
     * @return bool Whether the modified date needs to be updated.
     */
    private function should_save_after_meta_change($order, $meta = null)
{
}
}