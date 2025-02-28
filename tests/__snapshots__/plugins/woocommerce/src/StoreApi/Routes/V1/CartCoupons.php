<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartCoupons class.
 */
class CartCoupons extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    const IDENTIFIER = 'cart-coupons';
    const SCHEMA_TYPE = 'cart-coupon';
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
     * Get a collection of cart coupons.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
{
}
    /**
     * Add a coupon to the cart and return the result.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(WP_REST_Request $request)
{
}
    /**
     * Deletes all coupons in the cart.
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
     * @param string           $coupon_code Coupon code.
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    protected function prepare_links($coupon_code, $request)
{
}
}