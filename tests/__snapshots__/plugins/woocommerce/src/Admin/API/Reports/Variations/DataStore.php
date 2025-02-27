<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Variations;

/**
 * API\Reports\Variations\DataStore.
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
    protected static $table_name = 'wc_order_product_lookup';

    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'variations';

    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'date_start' => 'strval',
  'date_end' => 'strval',
  'product_id' => 'intval',
  'variation_id' => 'intval',
  'items_sold' => 'intval',
  'net_revenue' => 'floatval',
  'orders_count' => 'intval',
  'name' => 'strval',
  'price' => 'floatval',
  'image' => 'strval',
  'permalink' => 'strval',
  'sku' => 'strval',
);

    /**
     * Extended product attributes to include in the data.
     *
     * @var array
     */
    protected $extended_attributes = array (
  0 => 'name',
  1 => 'price',
  2 => 'image',
  3 => 'permalink',
  4 => 'stock_status',
  5 => 'stock_quantity',
  6 => 'low_stock_amount',
  7 => 'sku',
);

    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'variations';

    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override ReportsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
    {
        // stub
    }

    /**
     * Fills FROM clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $arg_name   Target of the JOIN sql param.
     */
    protected function add_from_sql_params($query_args, $arg_name)
    {
        // stub
    }

    /**
     * Generate a subquery for order_item_id based on the attribute filters.
     *
     * @param array $query_args Query arguments supplied by the user.
     * @return string
     */
    protected function get_order_item_by_attribute_subquery($query_args)
    {
        // stub
    }

    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
    {
        // stub
    }

    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @override ReportsDataStore::normalize_order_by()
     *
     * @param string $order_by Sorting criterion.
     *
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
        // stub
    }

    /**
     * Enriches the product data with attributes specified by the extended_attributes.
     *
     * @param array $products_data Product data.
     * @param array $query_args Query parameters.
     */
    protected function include_extended_info(&$products_data, $query_args)
    {
        // stub
    }

    /**
     * Returns if simple products should be excluded from the report.
     *
     * @internal
     *
     * @param array $query_args Query parameters.
     *
     * @return boolean
     */
    protected function should_exclude_simple_products(array $query_args)
    {
        // stub
    }

    /**
     * Fill missing extended_info.name for the deleted products.
     *
     * @param array $products Product data.
     */
    protected function fill_deleted_product_name(array &$products)
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
        // stub
    }

}