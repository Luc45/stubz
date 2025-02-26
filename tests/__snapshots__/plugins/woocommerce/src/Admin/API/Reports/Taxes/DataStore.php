<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Taxes;

/**
 * API\Reports\Taxes\DataStore.
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
    protected static $table_name = 'wc_order_tax_lookup';

    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'taxes';

    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'tax_rate_id' => 'intval',
  'name' => 'strval',
  'tax_rate' => 'floatval',
  'country' => 'strval',
  'state' => 'strval',
  'priority' => 'intval',
  'total_tax' => 'floatval',
  'order_tax' => 'floatval',
  'shipping_tax' => 'floatval',
  'orders_count' => 'intval',
);

    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'taxes';

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
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Fills FROM clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args          Query arguments supplied by the user.
     * @param string $order_status_filter Order status subquery.
     */
    protected function add_from_sql_params($query_args, $order_status_filter)
    {
        // stub
    }

    /**
     * Updates the database query with parameters used for Taxes report: categories and order status.
     *
     * @see Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats\DataStore::update_sql_query_params()
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
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
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @override ReportsDataStore::normalize_order_by()
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
        // stub
    }

    /**
     * Create or update an entry in the wc_order_tax_lookup table for an order.
     *
     * @param int $order_id Order ID.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function sync_order_taxes($order_id)
    {
        // stub
    }

    /**
     * Clean taxes data when an order is deleted.
     *
     * @param int $order_id Order ID.
     */
    public static function sync_on_order_delete($order_id)
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

