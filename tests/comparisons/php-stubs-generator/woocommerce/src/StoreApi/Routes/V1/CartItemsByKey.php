<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartItemsByKey class.
 */
class CartItemsByKey extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-items-by-key';
    /**
     * The routes schema.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'cart-item';
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get the path of this rest route.
     *
     * @return string
     */
    public static function get_path_regex()
    {
    }
    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Get a single cart items.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Update a single cart item.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_update_response(\WP_REST_Request $request)
    {
    }
    /**
     * Delete a single cart item.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_delete_response(\WP_REST_Request $request)
    {
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
    }
}