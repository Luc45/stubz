<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CheckoutOrder class.
 */
class CheckoutOrder extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    public const IDENTIFIER = 'checkout-order';
    /**
     * The routes schema.
     *
     * @var string
     */
    public const SCHEMA_TYPE = 'checkout-order';
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
     * Process an order.
     *
     * 1. Process Request
     * 2. Process Customer
     * 3. Validate Order
     * 4. Process Payment
     *
     * @throws RouteException On error.
     * @throws InvalidStockLevelsInCartException On error.
     *
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(WP_REST_Request $request)
{
}
}