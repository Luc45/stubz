<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Process the query data for filtering purposes.
 */
final class QueryFilters
{
    /**
     * Initialization method.
     *
     * @internal
     */
    public function init()
    {
    }
    /**
     * Filter the posts clauses of the main query to support global filters.
     *
     * @param array     $args     Query args.
     * @param \WP_Query $wp_query WP_Query object.
     * @return array
     */
    public function main_query_filter($args, $wp_query)
    {
    }
    /**
     * Add conditional query clauses based on the filter params in query vars.
     *
     * @param array     $args     Query args.
     * @param \WP_Query $wp_query WP_Query object.
     * @return array
     */
    public function add_query_clauses($args, $wp_query)
    {
    }
    /**
     * Get price data for current products.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return object
     */
    public function get_filtered_price($query_vars)
    {
    }
    /**
     * Get stock status counts for the current products.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return array status=>count pairs.
     */
    public function get_stock_status_counts($query_vars)
    {
    }
    /**
     * Get rating counts for the current products.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return array rating=>count pairs.
     */
    public function get_rating_counts($query_vars)
    {
    }
    /**
     * Get attribute counts for the current products.
     *
     * @param array  $query_vars         The WP_Query arguments.
     * @param string $attribute_to_count Attribute taxonomy name.
     * @return array termId=>count pairs.
     */
    public function get_attribute_counts($query_vars, $attribute_to_count)
    {
    }
}