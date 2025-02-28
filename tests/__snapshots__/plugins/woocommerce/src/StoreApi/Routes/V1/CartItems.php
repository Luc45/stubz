<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartItems class.
 */
class CartItems extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    public const IDENTIFIER = 'cart-items';
    public const SCHEMA_TYPE = 'cart-item';
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
     * Get a collection of cart items.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
{
}
    /**
     * Creates one item from the collection.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(WP_REST_Request $request)
{
}
    /**
     * Deletes all items in the cart.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_delete_response(WP_REST_Request $request)
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