<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Stats;

/**
 * API\Reports\Downloads\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Downloads\DataStore
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override DownloadsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'download_count' => 'intval',
);

    /**
     * Cache identifier.
     *
     * @override DownloadsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'downloads_stats';

    /**
     * Data store context used to pass to filters.
     *
     * @override DownloadsDataStore::$context
     *
     * @var string
     */
    protected $context = 'downloads_stats';

    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override DownloadsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
{
}
    /**
     * Get the default query arguments to be used by get_data().
     * These defaults are only partially applied when used via REST API, as that has its own defaults.
     *
     * @override DownloadsDataStore::default_query_args()
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
     * @override DownloadsDataStore::get_noncached_data()
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
     * @override DownloadsDataStore::normalize_order_by()
     *
     * @param string $order_by Order by option requeste by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
{
}
}