<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Process the query data for filtering purposes.
 */
final class QueryFilters extends \
{
    /**
     * Initialization method.
     *
     * @internal
     */
    public function init()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Get price data for current products.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return object
     */
    public function get_filtered_price($query_vars)
    {
        // stub
    }

    /**
     * Get stock status counts for the current products.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return array status=>count pairs.
     */
    public function get_stock_status_counts($query_vars)
    {
        // stub
    }

    /**
     * Get rating counts for the current products.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return array rating=>count pairs.
     */
    public function get_rating_counts($query_vars)
    {
        // stub
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
        // stub
    }

    /**
     * Add query clauses for stock filter.
     *
     * @param array     $args     Query args.
     * @param \WP_Query $wp_query WP_Query object.
     * @return array
     */
    private function stock_filter_clauses($args, $wp_query)
    {
        // stub
    }

    /**
     * Add query clauses for price filter.
     *
     * @param array     $args     Query args.
     * @param \WP_Query $wp_query WP_Query object.
     * @return array
     */
    private function price_filter_clauses($args, $wp_query)
    {
        // stub
    }

    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @param string $sql SQL join.
     * @return string
     */
    private function append_product_sorting_table_join($sql)
    {
        // stub
    }

    /**
     * Generate calculate query by stock status.
     *
     * @param string $status status to calculate.
     * @param string $product_query_sql product query for current filter state.
     * @param array  $stock_status_options available stock status options.
     *
     * @return false|string
     */
    private function generate_stock_status_count_query($status, $product_query_sql, $stock_status_options)
    {
        // stub
    }

    /**
     * Get query for price filters when dealing with displayed taxes.
     *
     * @param float  $price_filter Price filter to apply.
     * @param string $column Price being filtered (min or max).
     * @param string $operator Comparison operator for column.
     * @return string Constructed query.
     */
    private function get_price_filter_query_for_displayed_taxes($price_filter, $column = 'min_price', $operator = '>=')
    {
        // stub
    }

    /**
     * If price filters need adjustment to work with displayed taxes, this returns true.
     *
     * This logic is used when prices are stored in the database differently to how they are being displayed, with regards
     * to taxes.
     *
     * @return boolean
     */
    private function adjust_price_filters_for_displayed_taxes()
    {
        // stub
    }

    /**
     * Adjusts a price filter based on a tax class and whether or not the amount includes or excludes taxes.
     *
     * This calculation logic is based on `wc_get_price_excluding_tax` and `wc_get_price_including_tax` in core.
     *
     * @param float  $price_filter Price filter amount as entered.
     * @param string $tax_class Tax class for adjustment.
     * @return float
     */
    private function adjust_price_filter_for_tax_class($price_filter, $tax_class)
    {
        // stub
    }

    /**
     * Get attribute lookup table name.
     *
     * @return string
     */
    private function get_lookup_table_name()
    {
        // stub
    }

    /**
     * Add query clauses for attribute filter.
     *
     * @param array     $args     Query args.
     * @param \WP_Query $wp_query WP_Query object.
     * @return array
     */
    private function attribute_filter_clauses($args, $wp_query)
    {
        // stub
    }

    /**
     * Get an array of attributes and terms selected from query arguments.
     *
     * @param array $query_vars The WP_Query arguments.
     * @return array
     */
    private function get_chosen_attributes($query_vars)
    {
        // stub
    }

}

