<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats;

/**
 * API\Reports\Taxes\Stats\DataStore.
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
    protected static $table_name = 'wc_order_tax_lookup';
    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'taxes_stats';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'tax_codes' => 'intval',
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
    protected $context = 'taxes_stats';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override ReportsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
{
}
    /**
     * Updates the database query with parameters used for Taxes Stats report
     *
     * @see Automattic\WooCommerce\Admin\API\Reports\Taxes\DataStore::add_sql_query_params()
     * @param array $query_args       Query arguments supplied by the user.
     */
    protected function update_sql_query_params($query_args)
{
}
    /**
     * Get taxes associated with a store.
     *
     * @param array $args Array of args to filter the query by. Supports `include`.
     * @return array An array of all taxes.
     */
    public static function get_taxes($args)
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
}