<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartItemsByKey class.
 */
class CartItemsByKey extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    const IDENTIFIER = 'cart-items-by-key';

    const SCHEMA_TYPE = 'cart-item';

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
     * Get a single cart items.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Update a single cart item.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_update_response(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Delete a single cart item.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_delete_response(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param array            $cart_item Object to prepare.
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    protected function prepare_links($cart_item, $request)
    {
        // stub
    }

}

