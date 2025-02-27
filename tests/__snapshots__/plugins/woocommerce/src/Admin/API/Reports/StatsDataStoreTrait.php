<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Trait to contain *stats-specific methods for data stores.
 *
 * It does preliminary intervals & page calculations
 * and prepares intervals & totals data structure by implementing the `get_noncached_data()` method.
 * So, this time, you'll need to prepare `get_noncached_stats_data()` which will be called only if
 * the requested page is within the date range.
 *
 * The trait also exposes the `initialize_queries()` method to initialize the interval and total queries.
 *
 * Example:
 * <pre><code class="language-php">class MyStatsDataStore extends DataStore implements DataStoreInterface {
 *     // Use the trait.
 *     use StatsDataStoreTrait;
 *     // Provide all the necessary properties and methods for a regular DataStore.
 *     // ...
 *     /**
 *      * Return your results with the help of the interval & total methods and queries.
 *      * @return stdClass|WP_Error $data filled with your results.
 *      &ast;/
 *     public function get_noncached_stats_data( $query_args, $params, &$data, $expected_interval_count ) {
 *         $this->initialize_queries();
 *         // Do your magic ...
 *         // ... with a help of things like:
 *         $this->update_intervals_sql_params( $query_args, $db_interval_count, $expected_interval_count, $table_name );
 *         $this->total_query->add_sql_clause( 'where_time', $this->get_sql_clause( 'where_time' ) );
 *
 *         $totals = $wpdb->get_results(
 *             $this->total_query->get_query_statement(),
 *             ARRAY_A
 *         );
 *
 *         $intervals = $wpdb->get_results(
 *             $this->interval_query->get_query_statement(),
 *             ARRAY_A
 *         );
 *
 *         $data->totals    = (object) $this->cast_numbers( $totals[0] );
 *         $data->intervals = $intervals;
 *
 *         if ( TimeInterval::intervals_missing( $expected_interval_count, $db_interval_count, $params['per_page'], $query_args['page'], $query_args['order'], $query_args['orderby'], count( $intervals ) ) ) {
 *             $this->fill_in_missing_intervals( $db_intervals, $query_args['adj_after'], $query_args['adj_before'], $query_args['interval'], $data );
 *             $this->sort_intervals( $data, $query_args['orderby'], $query_args['order'] );
 *             $this->remove_extra_records( $data, $query_args['page'], $params['per_page'], $db_interval_count, $expected_interval_count, $query_args['orderby'], $query_args['order'] );
 *         } else {
 *             $this->update_interval_boundary_dates( $query_args['after'], $query_args['before'], $query_args['interval'], $data->intervals );
 *         }
 *
 *         return $data;
 *    }
 * }
 * </code></pre>
 *
 * @see DataStore
 */
trait StatsDataStoreTrait
{
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
        // stub
    }

    /**
     * Returns the stats report data based on normalized parameters.
     * Prepares the basic intervals and object structure
     * Will be called by `get_data` if there is no data in cache.
     * Will call `get_noncached_stats_data` to fetch the actual data.
     *
     * @see get_data
     * @param array $query_args Query parameters.
     * @return stdClass|WP_Error Data object, or error.
     */
    public function get_noncached_data($query_args)
    {
        // stub
    }

}