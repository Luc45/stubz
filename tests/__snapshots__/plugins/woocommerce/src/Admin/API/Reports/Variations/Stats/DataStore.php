<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Variations\Stats;

/**
 * API\Reports\Variations\Stats\DataStore.
 */
class DataStore
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override VariationsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'items_sold' => 'intval',
  'net_revenue' => 'floatval',
  'orders_count' => 'intval',
  'variations_count' => 'intval',
);

    /**
     * Cache identifier.
     *
     * @override VariationsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'variations_stats';

    /**
     * Data store context used to pass to filters.
     *
     * @override VariationsDataStore::$context
     *
     * @var string
     */
    protected $context = 'variations_stats';

    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override VariationsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
    {
        // stub
    }

    /**
     * Updates the database query with parameters used for Products Stats report: categories and order status.
     *
     * @param array $query_args       Query arguments supplied by the user.
     */
    protected function update_sql_query_params($query_args)
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
     * Get the default query arguments to be used by get_data().
     * These defaults are only partially applied when used via REST API, as that has its own defaults.
     *
     * @override VariationsDataStore::get_default_query_vars()
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
     * @override VariationsDataStore::get_noncached_stats_data()
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
        // stub
    }

    /**
     * Normalizes order_by clause to match to SQL query.
     *
     * @override VariationsDataStore::normalize_order_by()
     *
     * @param string $order_by Order by option requeste by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
        // stub
    }

}

