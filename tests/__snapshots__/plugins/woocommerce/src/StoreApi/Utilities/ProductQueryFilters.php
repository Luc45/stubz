<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Product Query filters class.
 */
class ProductQueryFilters extends \
{
    /**
     * Get filtered min price for current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return object
     */
    public function get_filtered_price($request)
    {
        // stub
    }

    /**
     * Get stock status counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array status=>count pairs.
     */
    public function get_stock_status_counts($request)
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
     * Get attribute counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @param array            $attributes Attributes to count, either names or ids.
     * @return array termId=>count pairs.
     */
    public function get_attribute_counts($request, $attributes = array(
))
    {
        // stub
    }

    /**
     * Get rating counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array rating=>count pairs.
     */
    public function get_rating_counts($request)
    {
        // stub
    }

}

