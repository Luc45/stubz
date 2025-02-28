<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Coupons\Stats;

/**
 * API\Reports\Coupons\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Coupons\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override CouponsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array(
'date_start' => 'strval',
'date_end' => 'strval',
'date_start_gmt' => 'strval',
'date_end_gmt' => 'strval',
'amount' => 'floatval',
'coupons_count' => 'intval',
'orders_count' => 'intval'
);
    /**
     * SQL columns to select in the db query.
     *
     * @override CouponsDataStore::$report_columns
     *
     * @var array
     */
    protected $report_columns;
    /**
     * Data store context used to pass to filters.
     *
     * @override CouponsDataStore::$context
     *
     * @var string
     */
    protected $context = 'coupons_stats';
    /**
     * Cache identifier.
     *
     * @override CouponsDataStore::get_default_query_vars()
     *
     * @var string
     */
    protected $cache_key = 'coupons_stats';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override CouponsDataStore::assign_report_columns()
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
     * @override CouponsDataStore::get_default_query_vars()
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
     * @override CouponsDataStore::get_noncached_stats_data()
     *
     * @see get_data
     * @see get_noncached_stats_data
     * @param array    $query_args Query parameters.
     * @param array    $params            Query limit parameters.
     * @param stdClass $data                    Reference to the data object to fill.
     * @param int      $expected_interval_count Number of expected intervals.
     * @return stdClass|WP_Error Data object `{ totals: *, intervals: array, total: int, pages: int, page_no: int }`, or error.
     */
    public function get_noncached_stats_data($query_args, $params, &$data, $expected_interval_count)
{
}
}