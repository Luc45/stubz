<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Products;

/**
 * API\Reports\Products\DataStore.
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
    protected static $table_name = 'wc_order_product_lookup';
    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'products';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array(
        'date_start' => 'strval',
        'date_end' => 'strval',
        'product_id' => 'intval',
        'items_sold' => 'intval',
        'net_revenue' => 'floatval',
        'orders_count' => 'intval',
        // Extended attributes.
        'name' => 'strval',
        'price' => 'floatval',
        'image' => 'strval',
        'permalink' => 'strval',
        'stock_status' => 'strval',
        'stock_quantity' => 'intval',
        'low_stock_amount' => 'intval',
        'category_ids' => 'array_values',
        'variations' => 'array_values',
        'sku' => 'strval',
    );
    /**
     * Extended product attributes to include in the data.
     *
     * @var array
     */
    protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'stock_quantity', 'manage_stock', 'low_stock_amount', 'category_ids', 'variations', 'sku');
    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'products';
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
     * Fills FROM clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $arg_name   Target of the JOIN sql param.
     * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
     */
    protected function add_from_sql_params($query_args, $arg_name, $id_cell)
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
     * Enriches the product data with attributes specified by the extended_attributes.
     *
     * @param array $products_data Product data.
     * @param array $query_args  Query parameters.
     */
    protected function include_extended_info(&$products_data, $query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @override ReportsDataStore::get_data()
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
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
     * Create or update an entry in the wc_admin_order_product_lookup table for an order.
     *
     * @since 3.5.0
     * @param int $order_id Order ID.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function sync_order_products($order_id)
    {
    }
    /**
     * Clean products data when an order is deleted.
     *
     * @param int $order_id Order ID.
     */
    public static function sync_on_order_delete($order_id)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}
