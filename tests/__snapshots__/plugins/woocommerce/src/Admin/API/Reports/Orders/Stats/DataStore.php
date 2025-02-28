<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Orders\Stats;

/**
 * API\Reports\Orders\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    const CRON_EVENT = 'wc_order_stats_update';
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
    protected $cache_key = 'orders_stats';
    /**
     * Type for each column to cast values correctly later.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'orders_count' => 'intval',
  'num_items_sold' => 'intval',
  'gross_sales' => 'floatval',
  'total_sales' => 'floatval',
  'coupons' => 'floatval',
  'coupons_count' => 'intval',
  'refunds' => 'floatval',
  'taxes' => 'floatval',
  'shipping' => 'floatval',
  'net_revenue' => 'floatval',
  'avg_items_per_order' => 'floatval',
  'avg_order_value' => 'floatval',
  'total_customers' => 'intval',
  'products' => 'intval',
  'segment_id' => 'intval',
);
    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'orders_stats';
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
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
{
}
    /**
     * Updates the totals and intervals database queries with parameters used for Orders report: categories, coupons and order status.
     *
     * @param array $query_args      Query arguments supplied by the user.
     */
    protected function orders_stats_sql_filter($query_args)
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
     * @override ReportsDataStore::get_noncached_stats_data()
     *
     * @see get_data
     * @see get_noncached_stats_data
     * @param array    $query_args Query parameters.
     * @param array    $params                  Query limit parameters.
     * @param stdClass $data                    Reference to the data object to fill.
     * @param int      $expected_interval_count Number of expected intervals.
     * @return stdClass|WP_Error Data object `{ totals: *, intervals: array, total: int, pages: int, page_no: int }`, or error.
     */
    public function get_noncached_stats_data($query_args, $params, &$data, $expected_interval_count)
{
}
    /**
     * Get unique products based on user time query
     *
     * @param string $from_clause       From clause with date query.
     * @param string $where_time_clause Where clause with date query.
     * @param string $where_clause      Where clause with date query.
     * @return integer Unique product count.
     */
    public function get_unique_product_count($from_clause, $where_time_clause, $where_clause)
{
}
    /**
     * Get unique coupons based on user time query
     *
     * @param string $from_clause       From clause with date query.
     * @param string $where_time_clause Where clause with date query.
     * @param string $where_clause      Where clause with date query.
     * @return integer Unique product count.
     */
    public function get_unique_coupon_count($from_clause, $where_time_clause, $where_clause)
{
}
    /**
     * Add order information to the lookup table when orders are created or modified.
     *
     * @param int $post_id Post ID.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function sync_order($post_id)
{
}
    /**
     * Update the database with stats data.
     *
     * @param WC_Order|WC_Order_Refund $order Order or refund to update row for.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function update($order)
{
}
    /**
     * Deletes the order stats when an order is deleted.
     *
     * @param int $post_id Post ID.
     */
    public static function delete_order($post_id)
{
}
    /**
     * Get number of items sold among all orders.
     *
     * @param array $order WC_Order object.
     * @return int
     */
    protected static function get_num_items_sold($order)
{
}
    /**
     * Get the net amount from an order without shipping, tax, or refunds.
     *
     * @param array $order WC_Order object.
     * @return float
     */
    protected static function get_net_total($order)
{
}
    /**
     * Check to see if an order's customer has made previous orders or not
     *
     * @param array     $order WC_Order object.
     * @param int|false $customer_id Customer ID. Optional.
     * @return bool
     */
    public static function is_returning_customer($order, $customer_id = null)
{
}
    /**
     * Set a customer's first order and all others to returning.
     *
     * @param int $customer_id Customer ID.
     * @param int $order_id Order ID.
     */
    protected static function set_customer_first_order($customer_id, $order_id)
{
}
}