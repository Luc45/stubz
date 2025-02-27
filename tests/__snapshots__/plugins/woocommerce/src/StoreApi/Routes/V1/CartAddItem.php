<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartAddItem class.
 */
class CartAddItem
{
    const IDENTIFIER = 'cart-add-item';

    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
        // stub
    }

    /**
     * Get the path of this rest route.
     *
     * @return string
     */
    public static function get_path_regex()
    {
        // stub
    }

    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
        // stub
    }

    /**
     * Handle the request and return a valid response for this endpoint.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(WP_REST_Request $request)
    {
        // stub
    }

}