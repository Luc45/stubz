<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers\Stats;

/**
 * API\Reports\Customers\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Customers\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override CustomersDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array(
'customers_count' => 'intval',
'avg_orders_count' => 'floatval',
'avg_total_spend' => 'floatval',
'avg_avg_order_value' => 'floatval'
);
    /**
     * Cache identifier.
     *
     * @override CustomersDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'customers_stats';
    /**
     * Data store context used to pass to filters.
     *
     * @override CustomersDataStore::$context
     *
     * @var string
     */
    protected $context = 'customers_stats';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override CustomersDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
{
}
    /**
     * Get the default query arguments to be used by get_data().
     * These defaults are only partially applied when used via REST API, as that has its own defaults.
     *
     * @override CustomersDataStore::get_default_query_vars()
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
     * @override CustomersDataStore::get_noncached_data()
     *
     * @see get_data
     * @param array $query_args Query parameters.
     * @return stdClass|WP_Error Data object `{ totals: *, intervals: array, total: int, pages: int, page_no: int }`, or error.
     */
    public function get_noncached_data($query_args)
{
}
}