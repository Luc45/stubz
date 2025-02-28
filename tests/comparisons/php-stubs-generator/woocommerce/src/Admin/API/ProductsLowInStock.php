<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * ProductsLowInStock controller.
 *
 * @internal
 * @extends WC_REST_Products_Controller
 */
final class ProductsLowInStock extends \WC_REST_Products_Controller
{
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Return # of low in stock count.
     *
     * @param WP_REST_Request $request request object.
     *
     * @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function get_low_in_stock_count($request)
    {
    }
    /**
     * Get low in stock products.
     *
     * @param WP_REST_Request $request request object.
     *
     * @return WP_REST_Response|WP_ERROR
     */
    public function get_items($request)
    {
    }
    /**
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the query params for collections for /count-low-in-stock endpoint.
     *
     * @return array
     */
    public function get_low_in_stock_count_params()
    {
    }
    /**
     * Get the schema for /count-low-in-stock response.
     *
     * @return array
     */
    public function get_low_in_stock_count_schema()
    {
    }
}
