<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartCouponsByCode class.
 */
class CartCouponsByCode extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    const IDENTIFIER = 'cart-coupons-by-code';
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
     * Get a single cart coupon.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
{
}
    /**
     * Delete a single cart coupon.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_delete_response(WP_REST_Request $request)
{
}
}