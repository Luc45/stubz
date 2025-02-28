<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats;

/**
 * API\Reports\Products\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Products\DataStore
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ProductsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'date_start' => 'strval',
  'date_end' => 'strval',
  'product_id' => 'intval',
  'items_sold' => 'intval',
  'net_revenue' => 'floatval',
  'orders_count' => 'intval',
  'products_count' => 'intval',
  'variations_count' => 'intval',
);

    /**
     * Cache identifier.
     *
     * @override ProductsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'products_stats';

    /**
     * Data store context used to pass to filters.
     *
     * @override ProductsDataStore::$context
     *
     * @var string
     */
    protected $context = 'products_stats';

    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override ProductsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
{
}
    /**
     * Updates the database query with parameters used for Products Stats report: categories and order status.
     *
     * @param array $query_args       Query arguments supplied by the user.
     */
    protected function update_sql_query_params($query_args)
{
}
    /**
     * Get the default query arguments to be used by get_data().
     * These defaults are only partially applied when used via REST API, as that has its own defaults.
     *
     * @override ProductsDataStore::get_default_query_vars()
     *
     * @return array Query parameters.
     */
    public function get_default_query_vars()
{
}
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @override ProductsDataStore::get_data()
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
{
}
    /**
     * Returns the report data based on normalized parameters.
     * Will be called by `get_data` if there is no data in cache.
     *
     * @override ProductsDataStore::get_noncached_data()
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
     * Normalizes order_by clause to match to SQL query.
     *
     * @override ProductsDataStore::normalize_order_by()
     *
     * @param string $order_by Order by option requeste by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
{
}
}