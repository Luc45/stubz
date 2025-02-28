<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Product Query class.
 *
 * Helper class to handle product queries for the API.
 */
class ProductQuery
{
    /**
     * Prepare query args to pass to WP_Query for a REST API request.
     *
     * @param \WP_REST_Request $request Request data.
     * @return array
     */
    public function prepare_objects_query($request)
    {
    }
    /**
     * Convert the tax_query to a meta_query which is needed to support filtering by attributes for variations.
     *
     * @param array $tax_query The tax_query to convert.
     * @return array
     */
    public function convert_tax_query_to_meta_query($tax_query)
    {
    }
    /**
     * Get results of query.
     *
     * @param \WP_REST_Request $request Request data.
     * @return array
     */
    public function get_results($request)
    {
    }
    /**
     * Get objects.
     *
     * @param \WP_REST_Request $request Request data.
     * @return array
     */
    public function get_objects($request)
    {
    }
    /**
     * Get last modified date for all products.
     *
     * @return int timestamp.
     */
    public function get_last_modified()
    {
    }
    /**
     * Add in conditional search filters for products.
     *
     * @param array     $args Query args.
     * @param \WC_Query $wp_query WC_Query object.
     * @return array
     */
    public function add_query_clauses($args, $wp_query)
    {
    }
    /**
     * Add in conditional price filters.
     *
     * @param array     $args Query args.
     * @param \WC_Query $wp_query WC_Query object.
     * @return array
     */
    protected function add_price_filter_clauses($args, $wp_query)
    {
    }
    /**
     * Get query for price filters when dealing with displayed taxes.
     *
     * @param float  $price_filter Price filter to apply.
     * @param string $column Price being filtered (min or max).
     * @param string $operator Comparison operator for column.
     * @return string Constructed query.
     */
    protected function get_price_filter_query_for_displayed_taxes($price_filter, $column = 'min_price', $operator = '>=')
    {
    }
    /**
     * If price filters need adjustment to work with displayed taxes, this returns true.
     *
     * This logic is used when prices are stored in the database differently to how they are being displayed, with regards
     * to taxes.
     *
     * @return boolean
     */
    protected function adjust_price_filters_for_displayed_taxes()
    {
    }
    /**
     * Converts price filter from subunits to decimal.
     *
     * @param string|int $price_filter Raw price filter in subunit format.
     * @return float Price filter in decimal format.
     */
    protected function prepare_price_filter($price_filter)
    {
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
    protected function adjust_price_filter_for_tax_class($price_filter, $tax_class)
    {
    }
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @param string $sql SQL join.
     * @return string
     */
    protected function append_product_sorting_table_join($sql)
    {
    }
}
