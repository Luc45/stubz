<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Date & time interval and numeric range handling class for Reporting API.
 */
class Segmenter
{
    /**
     * Array of all segment ids.
     *
     * @var array|bool
     */
    protected $all_segment_ids = false;

    /**
     * Array of all segment labels.
     *
     * @var array
     */
    protected $segment_labels = array();

    /**
     * Query arguments supplied by the user for data store.
     *
     * @var array
     */
    protected $query_args = '';

    /**
     * SQL definition for each column.
     *
     * @var array
     */
    protected $report_columns = array();

    /**
     * Constructor.
     *
     * @param array $query_args Query arguments supplied by the user for data store.
     * @param array $report_columns Report columns lookup from data store.
     */
    public function __construct($query_args, $report_columns)
{
}
    /**
     * Filters definitions for SELECT clauses based on query_args and joins them into one string usable in SELECT clause.
     *
     * @param array $columns_mapping Column name -> SQL statememt mapping.
     *
     * @return string to be used in SELECT clause statements.
     */
    protected function prepare_selections($columns_mapping)
{
}
    /**
     * Update row-level db result for segments in 'totals' section to the format used for output.
     *
     * @param array  $segments_db_result Results from the SQL db query for segmenting.
     * @param string $segment_dimension Name of column used for grouping the result.
     *
     * @return array Reformatted array.
     */
    protected function reformat_totals_segments($segments_db_result, $segment_dimension)
{
}
    /**
     * Merges segmented results for totals response part.
     *
     * E.g. $r1 = array(
     *     0 => array(
     *          'product_id' => 3,
     *          'net_amount' => 15,
     *     ),
     * );
     * $r2 = array(
     *     0 => array(
     *          'product_id'      => 3,
     *          'avg_order_value' => 25,
     *     ),
     * );
     *
     * $merged = array(
     *     3 => array(
     *          'segment_id' => 3,
     *          'subtotals'  => array(
     *              'net_amount'      => 15,
     *              'avg_order_value' => 25,
     *          )
     *     ),
     * );
     *
     * @param string $segment_dimension Name of the segment dimension=key in the result arrays used to match records from result sets.
     * @param array  $result1 Array 1 of segmented figures.
     * @param array  $result2 Array 2 of segmented figures.
     *
     * @return array
     */
    protected function merge_segment_totals_results($segment_dimension, $result1, $result2)
{
}
    /**
     * Merges segmented results for intervals response part.
     *
     * E.g. $r1 = array(
     *     0 => array(
     *          'product_id'    => 3,
     *          'time_interval' => '2018-12'
     *          'net_amount'    => 15,
     *     ),
     * );
     * $r2 = array(
     *     0 => array(
     *          'product_id'      => 3,
     *          'time_interval' => '2018-12'
     *          'avg_order_value' => 25,
     *     ),
     * );
     *
     * $merged = array(
     *     '2018-12' => array(
     *          'segments' => array(
     *              3 => array(
     *                  'segment_id' => 3,
     *                  'subtotals'  => array(
     *                      'net_amount'      => 15,
     *                      'avg_order_value' => 25,
     *                  ),
     *              ),
     *          ),
     *     ),
     * );
     *
     * @param string $segment_dimension Name of the segment dimension=key in the result arrays used to match records from result sets.
     * @param array  $result1 Array 1 of segmented figures.
     * @param array  $result2 Array 2 of segmented figures.
     *
     * @return array
     */
    protected function merge_segment_intervals_results($segment_dimension, $result1, $result2)
{
}
    /**
     * Update row-level db result for segments in 'intervals' section to the format used for output.
     *
     * @param array  $segments_db_result Results from the SQL db query for segmenting.
     * @param string $segment_dimension Name of column used for grouping the result.
     *
     * @return array Reformatted array.
     */
    protected function reformat_intervals_segments($segments_db_result, $segment_dimension)
{
}
    /**
     * Fetches all segment ids from db and stores it for later use.
     *
     * @return void
     */
    protected function set_all_segments()
{
}
    /**
     * Return all segment ids for given segmentby query parameter.
     *
     * @return array
     */
    protected function get_all_segments()
{
}
    /**
     * Return all segment labels for given segmentby query parameter.
     *
     * @return array
     */
    protected function get_segment_labels()
{
}
    /**
     * Compares two report data objects by pre-defined object property and ASC/DESC ordering.
     *
     * @param stdClass $a Object a.
     * @param stdClass $b Object b.
     * @return string
     */
    private function segment_cmp($a, $b)
{
}
    /**
     * Adds zeroes for segments not present in the data selection.
     *
     * @param array $segments Array of segments from the database for given data points.
     *
     * @return array
     */
    protected function fill_in_missing_segments($segments)
{
}
    /**
     * Adds missing segments to intervals, modifies $data.
     *
     * @param stdClass $data Response data.
     */
    protected function fill_in_missing_interval_segments(&$data)
{
}
    /**
     * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
     *
     * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
     * @param string $segmenting_from FROM part of segmenting SQL query.
     * @param string $segmenting_where WHERE part of segmenting SQL query.
     * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
     * @param string $segmenting_dimension_name Name of the segmenting dimension.
     * @param string $table_name Name of SQL table which is the stats table for orders.
     * @param array  $totals_query Array of SQL clauses for totals query.
     * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
     *
     * @return array
     */
    protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
{
}
    /**
     * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
     *
     * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
     * @param string $segmenting_from FROM part of segmenting SQL query.
     * @param string $segmenting_where WHERE part of segmenting SQL query.
     * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
     * @param string $segmenting_dimension_name Name of the segmenting dimension.
     * @param string $table_name Name of SQL table which is the stats table for orders.
     * @param array  $intervals_query Array of SQL clauses for intervals query.
     * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
     *
     * @return array
     */
    protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
{
}
    /**
     * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
     *
     * @param string $segmenting_select SELECT part of segmenting SQL query.
     * @param string $segmenting_from FROM part of segmenting SQL query.
     * @param string $segmenting_where WHERE part of segmenting SQL query.
     * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
     * @param string $table_name Name of SQL table which is the stats table for orders.
     * @param array  $totals_query Array of SQL clauses for intervals query.
     *
     * @return array
     */
    protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
{
}
    /**
     * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
     *
     * @param string $segmenting_select SELECT part of segmenting SQL query.
     * @param string $segmenting_from FROM part of segmenting SQL query.
     * @param string $segmenting_where WHERE part of segmenting SQL query.
     * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
     * @param string $table_name Name of SQL table which is the stats table for orders.
     * @param array  $intervals_query Array of SQL clauses for intervals query.
     *
     * @return array
     */
    protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
{
}
    /**
     * Return array of segments formatted for REST response.
     *
     * @param string $type Type of segments to return--'totals' or 'intervals'.
     * @param array  $query_params SQL query parameter array.
     * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
     *
     * @return array
     */
    protected function get_segments($type, $query_params, $table_name)
{
}
    /**
     * Calculate segments for segmenting property bound to product (e.g. category, product_id, variation_id).
     *
     * @param string $type Type of segments to return--'totals' or 'intervals'.
     * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
     * @param string $segmenting_from FROM part of segmenting SQL query.
     * @param string $segmenting_where WHERE part of segmenting SQL query.
     * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
     * @param string $segmenting_dimension_name Name of the segmenting dimension.
     * @param string $table_name Name of SQL table which is the stats table for orders.
     * @param array  $query_params Array of SQL clauses for intervals/totals query.
     * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
     *
     * @return array
     */
    protected function get_product_related_segments($type, $segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $query_params, $unique_orders_table)
{
}
    /**
     * Calculate segments for segmenting property bound to order (e.g. coupon or customer type).
     *
     * @param string $type Type of segments to return--'totals' or 'intervals'.
     * @param string $segmenting_select SELECT part of segmenting SQL query.
     * @param string $segmenting_from FROM part of segmenting SQL query.
     * @param string $segmenting_where WHERE part of segmenting SQL query.
     * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
     * @param string $table_name Name of SQL table which is the stats table for orders.
     * @param array  $query_params Array of SQL clauses for intervals/totals query.
     *
     * @return array
     */
    protected function get_order_related_segments($type, $segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $query_params)
{
}
    /**
     * Assign segments to time intervals by updating original $intervals array.
     *
     * @param array $intervals Result array from intervals SQL query.
     * @param array $intervals_segments Result array from interval segments SQL query.
     */
    protected function assign_segments_to_intervals(&$intervals, $intervals_segments)
{
}
    /**
     * Returns an array of segments for totals part of REST response.
     *
     * @param array  $query_params Totals SQL query parameters.
     * @param string $table_name Name of the SQL table that is the main order stats table.
     *
     * @return array
     */
    public function get_totals_segments($query_params, $table_name)
{
}
    /**
     * Adds an array of segments to data->intervals object.
     *
     * @param stdClass $data Data object representing the REST response.
     * @param array    $intervals_query Intervals SQL query parameters.
     * @param string   $table_name Name of the SQL table that is the main order stats table.
     */
    public function add_intervals_segments(&$data, $intervals_query, $table_name)
{
}
}