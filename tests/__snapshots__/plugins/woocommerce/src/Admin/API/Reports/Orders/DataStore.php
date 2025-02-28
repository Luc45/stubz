<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Orders;

/**
 * API\Reports\Orders\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Table used to get the data.
     *
     * @override ReportsDataStore::$table_name
     *
     * @var string
     */
    protected static $table_name = 'wc_order_stats';
    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'orders';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array(
'order_id' => 'intval',
'parent_id' => 'intval',
'date_created' => 'strval',
'date_created_gmt' => 'strval',
'status' => 'strval',
'customer_id' => 'intval',
'net_total' => 'floatval',
'total_sales' => 'floatval',
'num_items_sold' => 'intval',
'customer_type' => 'strval'
);
    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'orders';
    /**
     * Dynamically sets the date column name based on configuration
     *
     * @override ReportsDataStore::__construct()
     */
    public function __construct()
{
}
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override ReportsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
{
}
    /**
     * Updates the database query with parameters used for orders report: coupons and products filters.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
{
}
    /**
     * Get the default query arguments to be used by get_data().
     * These defaults are only partially applied when used via REST API, as that has its own defaults.
     *
     * @override ReportsDataStore::get_default_query_vars()
     *
     * @return array Query parameters.
     */
    public function get_default_query_vars()
{
}
    /**
     * Returns the report data based on normalized parameters.
     * Will be called by `get_data` if there is no data in cache.
     *
     * @override ReportsDataStore::get_noncached_data()
     *
     * @see get_data
     * @param array $query_args Query parameters.
     * @return stdClass|WP_Error Data object `{ totals: *, intervals: array, total: int, pages: int, page_no: int }`, or error.
     */
    public function get_noncached_data($query_args)
{
}
    /**
     * Normalizes order_by clause to match to SQL query.
     *
     * @override ReportsDataStore::normalize_order_by()
     *
     * @param string $order_by Order by option requeste by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
{
}
    /**
     * Enriches the order data.
     *
     * @param array $orders_data Orders data.
     * @param array $query_args  Query parameters.
     */
    protected function include_extended_info(&$orders_data, $query_args)
{
}
    /**
     * Returns oreders that have a parent id
     *
     * @param array $orders Orders array.
     * @return array
     */
    protected function get_orders_with_parent_id($orders)
{
}
    /**
     * Returns the same array index by a given key
     *
     * @param array  $array Array to be looped over.
     * @param string $key Key of values used for new array.
     * @return array
     */
    protected function map_array_by_key($array, $key)
{
}
    /**
     * Get product IDs, names, and quantity from order IDs.
     *
     * @param array $order_ids Array of order IDs.
     * @return array
     */
    protected function get_products_by_order_ids($order_ids)
{
}
    /**
     * Get customer data from Order data.
     *
     * @param array $orders Array of orders data.
     * @return array
     */
    protected function get_customers_by_orders($orders)
{
}
    /**
     * Get coupon information from order IDs.
     *
     * @param array $order_ids Array of order IDs.
     * @return array
     */
    protected function get_coupons_by_order_ids($order_ids)
{
}
    /**
     * Get order attributions data from order IDs.
     *
     * @param array $order_ids Array of order IDs.
     * @return array
     */
    protected function get_order_attributions_by_order_ids($order_ids)
{
}
    /**
     * Get all statuses that have been synced.
     *
     * @return array Unique order statuses.
     */
    public static function get_all_statuses()
{
}
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
{
}
}