<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartUpdateCustomer class.
 *
 * Updates the customer billing and shipping addresses, recalculates the cart totals, and returns an updated cart.
 */
class CartUpdateCustomer
{
    const IDENTIFIER = 'cart-update-customer';

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
     * Validate address params now they are populated.
     *
     * @param \WP_REST_Request $request Request object.
     * @param array            $billing Billing address.
     * @param array            $shipping Shipping address.
     * @return \WP_Error|true
     */
    protected function validate_address_params($request, $billing, $shipping)
    {
        // stub
    }

    /**
     * Handle the request and return a valid response for this endpoint.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Get full customer billing address.
     *
     * @param \WC_Customer $customer Customer object.
     * @return array
     */
    protected function get_customer_billing_address(WC_Customer $customer)
    {
        // stub
    }

    /**
     * Get full customer shipping address.
     *
     * @param \WC_Customer $customer Customer object.
     * @return array
     */
    protected function get_customer_shipping_address(WC_Customer $customer)
    {
        // stub
    }

}

