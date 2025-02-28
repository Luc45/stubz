<?php

/**
 * Payment gateways controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Payment_Gateways_V2_Controller
 */
class WC_REST_Payment_Gateways_Controller extends \WC_REST_Payment_Gateways_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Prepare a payment gateway for response.
     *
     * @param  WC_Payment_Gateway $gateway    Payment gateway object.
     * @param  WP_REST_Request    $request    Request object.
     * @return WP_REST_Response   $response   Response data.
     */
    public function prepare_item_for_response($gateway, $request)
    {
    }
    /**
     * Return settings associated with this payment gateway.
     *
     * @param WC_Payment_Gateway $gateway Gateway instance.
     *
     * @return array
     */
    public function get_settings($gateway)
    {
    }
    /**
     * Get the payment gateway schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}