<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats;

/**
 * Date & time interval and numeric range handling class for Reporting API.
 */
class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
{
    /**
     * Returns column => query mapping to be used for order-related order-level segmenting query (e.g. tax_rate_id).
     *
     * @param string $lookup_table Name of SQL table containing the order-level segmenting info.
     *
     * @return array Column => SELECT query mapping.
     */
    protected function get_segment_selections_order_level($lookup_table)
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
     * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
     */
    protected function get_segments($type, $query_params, $table_name)
    {
    }
}