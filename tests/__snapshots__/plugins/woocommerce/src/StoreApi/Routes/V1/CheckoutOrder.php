<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CheckoutOrder class.
 */
class CheckoutOrder extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    const IDENTIFIER = 'checkout-order';

    const SCHEMA_TYPE = 'checkout-order';

    /**
     * Holds the current order being processed.
     *
     * @var \WC_Order
     */
    private $order = null;

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
    /**
     * Updates the current customer session using data from the request (e.g. address data).
     *
     * Address session data is synced to the order itself later on by OrderController::update_order_from_cart()
     *
     * @param \WP_REST_Request $request Full details about the request.
     */
    private function update_billing_address(WP_REST_Request $request)
{
}
    /**
     * Gets the chosen payment method from the request.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WC_Payment_Gateway|null
     */
    private function get_request_payment_method(WP_REST_Request $request)
{
}
    /**
     * Updates the order with user details (e.g. address).
     *
     * @throws RouteException API error object with error details.
     * @param \WP_REST_Request $request Request object.
     */
    private function process_customer(WP_REST_Request $request)
{
}
}