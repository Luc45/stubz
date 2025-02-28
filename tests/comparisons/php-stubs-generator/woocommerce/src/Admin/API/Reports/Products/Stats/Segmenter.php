<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats;

/**
 * Date & time interval and numeric range handling class for Reporting API.
 */
class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
{
    /**
     * Returns column => query mapping to be used for product-related product-level segmenting query
     * (e.g. products sold, revenue from product X when segmenting by category).
     *
     * @param string $products_table Name of SQL table containing the product-level segmenting info.
     *
     * @return array Column => SELECT query mapping.
     */
    protected function get_segment_selections_product_level($products_table)
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