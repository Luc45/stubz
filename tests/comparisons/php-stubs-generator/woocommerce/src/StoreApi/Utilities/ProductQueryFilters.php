<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Product Query filters class.
 */
class ProductQueryFilters
{
    /**
     * Get filtered min price for current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return object
     */
    public function get_filtered_price($request)
    {
    }
    /**
     * Get stock status counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array status=>count pairs.
     */
    public function get_stock_status_counts($request)
    {
    }
    /**
     * Get attribute counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @param array            $attributes Attributes to count, either names or ids.
     * @return array termId=>count pairs.
     */
    public function get_attribute_counts($request, $attributes = [])
    {
    }
    /**
     * Get rating counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array rating=>count pairs.
     */
    public function get_rating_counts($request)
    {
    }
}