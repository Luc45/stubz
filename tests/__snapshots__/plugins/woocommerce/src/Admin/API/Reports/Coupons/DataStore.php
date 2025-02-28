<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Coupons;

/**
 * API\Reports\Coupons\DataStore.
 */
class DataStore
{
    /**
     * Table used to get the data.
     *
     * @override ReportsDataStore::$table_name
     *
     * @var string
     */
    protected static $table_name = 'wc_order_coupon_lookup';

    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'coupons';

    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'coupon_id' => 'intval',
  'amount' => 'floatval',
  'orders_count' => 'intval',
);

    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'coupons';

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
     *
     * @internal
     */
    public static function init()
{
}
    /**
     * Returns an array of ids of included coupons, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_included_coupons_array($query_args)
{
}
    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
{
}
    /**
     * Fills ORDER BY clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $from_arg   Target of the JOIN sql param.
     * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
     */
    protected function add_order_by_params($query_args, $from_arg, $id_cell)
{
}
    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @override ReportsDataStore::normalize_order_by()
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
{
}
    /**
     * Enriches the coupon data with extra attributes.
     *
     * @param array $coupon_data Coupon data.
     * @param array $query_args Query parameters.
     */
    protected function include_extended_info(&$coupon_data, $query_args)
{
}
    /**
     * Get coupon ID for an order.
     *
     * Tries to get the ID from order item meta, then falls back to a query of published coupons.
     *
     * @param \WC_Order_Item_Coupon $coupon_item The coupon order item object.
     * @return int Coupon ID on success, 0 on failure.
     */
    public static function get_coupon_id(WC_Order_Item_Coupon $coupon_item)
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
     * Create or update an an entry in the wc_order_coupon_lookup table for an order.
     *
     * @since 3.5.0
     * @param int $order_id Order ID.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function sync_order_coupons($order_id)
{
}
    /**
     * Clean coupons data when an order is deleted.
     *
     * @param int $order_id Order ID.
     */
    public static function sync_on_order_delete($order_id)
{
}
    /**
     * Gets coupons based on the provided arguments.
     *
     * @todo Upon core merge, including this in core's `class-wc-coupon-data-store-cpt.php` might make more sense.
     * @param array $args Array of args to filter the query by. Supports `include`.
     * @return array Array of results.
     */
    public function get_coupons($args)
{
}
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
{
}
}