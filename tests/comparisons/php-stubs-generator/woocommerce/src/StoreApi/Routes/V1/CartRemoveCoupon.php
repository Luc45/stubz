<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartRemoveCoupon class.
 */
class CartRemoveCoupon extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-remove-coupon';
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
     * Handle the request and return a valid response for this endpoint.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
}