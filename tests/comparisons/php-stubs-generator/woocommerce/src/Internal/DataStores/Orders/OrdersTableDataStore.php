<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class is the standard data store to be used when the custom orders table is in use.
 */
class OrdersTableDataStore extends \Abstract_WC_Order_Data_Store_CPT implements \WC_Object_Data_Store_Interface, \WC_Order_Data_Store_Interface
{
    use \Automattic\WooCommerce\Internal\CostOfGoodsSold\CogsAwareTrait;
    /**
     * Data stored in meta keys, but not considered "meta" for an order.
     *
     * @since 7.0.0
     * @var array
     */
    protected $internal_meta_keys = array('_customer_user', '_order_key', '_order_currency', '_billing_first_name', '_billing_last_name', '_billing_company', '_billing_address_1', '_billing_address_2', '_billing_city', '_billing_state', '_billing_postcode', '_billing_country', '_billing_email', '_billing_phone', '_shipping_first_name', '_shipping_last_name', '_shipping_company', '_shipping_address_1', '_shipping_address_2', '_shipping_city', '_shipping_state', '_shipping_postcode', '_shipping_country', '_shipping_phone', '_completed_date', '_paid_date', '_edit_last', '_cart_discount', '_cart_discount_tax', '_order_shipping', '_order_shipping_tax', '_order_tax', '_order_total', '_payment_method', '_payment_method_title', '_transaction_id', '_customer_ip_address', '_customer_user_agent', '_created_via', '_order_version', '_prices_include_tax', '_date_completed', '_date_paid', '_payment_tokens', '_billing_address_index', '_shipping_address_index', '_recorded_sales', '_recorded_coupon_usage_counts', '_download_permissions_granted', '_order_stock_reduced', '_new_order_email_sent');
    /**
     * Meta keys that are considered ephemeral and do not trigger a full save (updating modified date) when changed.
     *
     * @var string[]
     */
    protected $ephemeral_meta_keys = array(\Automattic\WooCommerce\Internal\Admin\Orders\EditLock::META_KEY_NAME);
    /**
     * Handles custom metadata in the wc_orders_meta table.
     *
     * @var OrdersTableDataStoreMeta
     */
    protected $data_store_meta;
    /**
     * The database util object to use.
     *
     * @var DatabaseUtil
     */
    protected $database_util;
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
    public final function init(\Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStoreMeta $data_store_meta, \Automattic\WooCommerce\Internal\Utilities\DatabaseUtil $database_util, \Automattic\WooCommerce\Proxies\LegacyProxy $legacy_proxy)
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
     * Table column to WC_Order mapping for wc_orders table.
     *
     * @var \string[][]
     */
    protected $order_column_mapping = array('id' => array('type' => 'int', 'name' => 'id'), 'status' => array('type' => 'string', 'name' => 'status'), 'type' => array('type' => 'string', 'name' => 'type'), 'currency' => array('type' => 'string', 'name' => 'currency'), 'tax_amount' => array('type' => 'decimal', 'name' => 'cart_tax'), 'total_amount' => array('type' => 'decimal', 'name' => 'total'), 'customer_id' => array('type' => 'int', 'name' => 'customer_id'), 'billing_email' => array('type' => 'string', 'name' => 'billing_email'), 'date_created_gmt' => array('type' => 'date', 'name' => 'date_created'), 'date_updated_gmt' => array('type' => 'date', 'name' => 'date_modified'), 'parent_order_id' => array('type' => 'int', 'name' => 'parent_id'), 'payment_method' => array('type' => 'string', 'name' => 'payment_method'), 'payment_method_title' => array('type' => 'string', 'name' => 'payment_method_title'), 'ip_address' => array('type' => 'string', 'name' => 'customer_ip_address'), 'transaction_id' => array('type' => 'string', 'name' => 'transaction_id'), 'user_agent' => array('type' => 'string', 'name' => 'customer_user_agent'), 'customer_note' => array('type' => 'string', 'name' => 'customer_note'));
    /**
     * Table column to WC_Order mapping for billing addresses in wc_address table.
     *
     * @var \string[][]
     */
    protected $billing_address_column_mapping = array('id' => array('type' => 'int'), 'order_id' => array('type' => 'int'), 'address_type' => array('type' => 'string'), 'first_name' => array('type' => 'string', 'name' => 'billing_first_name'), 'last_name' => array('type' => 'string', 'name' => 'billing_last_name'), 'company' => array('type' => 'string', 'name' => 'billing_company'), 'address_1' => array('type' => 'string', 'name' => 'billing_address_1'), 'address_2' => array('type' => 'string', 'name' => 'billing_address_2'), 'city' => array('type' => 'string', 'name' => 'billing_city'), 'state' => array('type' => 'string', 'name' => 'billing_state'), 'postcode' => array('type' => 'string', 'name' => 'billing_postcode'), 'country' => array('type' => 'string', 'name' => 'billing_country'), 'email' => array('type' => 'string', 'name' => 'billing_email'), 'phone' => array('type' => 'string', 'name' => 'billing_phone'));
    /**
     * Table column to WC_Order mapping for shipping addresses in wc_address table.
     *
     * @var \string[][]
     */
    protected $shipping_address_column_mapping = array('id' => array('type' => 'int'), 'order_id' => array('type' => 'int'), 'address_type' => array('type' => 'string'), 'first_name' => array('type' => 'string', 'name' => 'shipping_first_name'), 'last_name' => array('type' => 'string', 'name' => 'shipping_last_name'), 'company' => array('type' => 'string', 'name' => 'shipping_company'), 'address_1' => array('type' => 'string', 'name' => 'shipping_address_1'), 'address_2' => array('type' => 'string', 'name' => 'shipping_address_2'), 'city' => array('type' => 'string', 'name' => 'shipping_city'), 'state' => array('type' => 'string', 'name' => 'shipping_state'), 'postcode' => array('type' => 'string', 'name' => 'shipping_postcode'), 'country' => array('type' => 'string', 'name' => 'shipping_country'), 'email' => array('type' => 'string'), 'phone' => array('type' => 'string', 'name' => 'shipping_phone'));
    /**
     * Table column to WC_Order mapping for wc_operational_data table.
     *
     * @var \string[][]
     */
    protected $operational_data_column_mapping = array('id' => array('type' => 'int'), 'order_id' => array('type' => 'int'), 'created_via' => array('type' => 'string', 'name' => 'created_via'), 'woocommerce_version' => array('type' => 'string', 'name' => 'version'), 'prices_include_tax' => array('type' => 'bool', 'name' => 'prices_include_tax'), 'coupon_usages_are_counted' => array('type' => 'bool', 'name' => 'recorded_coupon_usage_counts'), 'download_permission_granted' => array('type' => 'bool', 'name' => 'download_permissions_granted'), 'cart_hash' => array('type' => 'string', 'name' => 'cart_hash'), 'new_order_email_sent' => array('type' => 'bool', 'name' => 'new_order_email_sent'), 'order_key' => array('type' => 'string', 'name' => 'order_key'), 'order_stock_reduced' => array('type' => 'bool', 'name' => 'order_stock_reduced'), 'date_paid_gmt' => array('type' => 'date', 'name' => 'date_paid'), 'date_completed_gmt' => array('type' => 'date', 'name' => 'date_completed'), 'shipping_tax_amount' => array('type' => 'decimal', 'name' => 'shipping_tax'), 'shipping_total_amount' => array('type' => 'decimal', 'name' => 'shipping_total'), 'discount_tax_amount' => array('type' => 'decimal', 'name' => 'discount_tax'), 'discount_total_amount' => array('type' => 'decimal', 'name' => 'discount_total'), 'recorded_sales' => array('type' => 'bool', 'name' => 'recorded_sales'));
    /**
     * Return combined mappings for all order tables.
     *
     * @return array|\array[][][] Return combined mapping.
     */
    public function get_all_order_column_mappings()
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
    public function clear_cached_data(array $order_ids) : array
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
    public function clear_all_cached_data() : bool
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
    public function order_exists($order_id) : bool
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
     * Helper method to initialize order object from DB data.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param int                $order_id Order ID.
     * @param \stdClass          $order_data Order data fetched from DB.
     *
     * @return void
     */
    protected function init_order_record(\WC_Abstract_Order &$order, int $order_id, \stdClass $order_data)
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
     * Sets order properties based on a row from the database.
     *
     * @param \WC_Abstract_Order $order      The order object.
     * @param object             $order_data A row of order data from the database.
     */
    protected function set_order_props_from_data(&$order, $order_data)
    {
    }
    /**
     * Retrieve raw order data for multiple IDs.
     *
     * @param int[] $ids List of order IDs.
     *
     * @return \stdClass[] DB Order objects or error.
     */
    protected function get_order_data_for_ids(array $ids) : array
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
     * Takes care of creating the backup post in the posts table (placeholder or actual order post, depending on sync settings).
     *
     * @since 8.8.0
     *
     * @param \WC_Abstract_Order $order   The order.
     * @param string             $context The context: either 'create' or 'backfill'.
     * @return int The new post ID.
     */
    protected function maybe_create_backup_post(&$order, string $context) : int
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
    public function init_default_taxonomies(\WC_Abstract_Order $order, array $sanitized_tax_input)
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
    public function set_custom_taxonomies(\WC_Abstract_Order $order, array $sanitized_tax_input)
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
    protected function get_db_rows_for_order(\WC_Abstract_Order $order, string $context = 'create', bool $only_changes = false) : array
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
    protected function handle_order_deletion_with_sync_disabled($order_id) : void
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
    public function untrash_order(\WC_Order $order) : bool
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
    //phpcs:enable Squiz.Commenting, Generic.Commenting
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
}