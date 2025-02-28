<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * PaymentGateway class
 */
class PaymentGatewaysController
{
    /**
     * Initialize payment gateway changes.
     */
    public static function init()
    {
    }
    /**
     * Add necessary fields to REST API response.
     *
     * @param  WP_REST_Response   $response   Response data.
     * @param  WC_Payment_Gateway $gateway    Payment gateway object.
     * @param  WP_REST_Request    $request    Request object.
     * @return WP_REST_Response
     */
    public static function extend_response($response, $gateway, $request)
    {
    }
    /**
     * Get payment gateway scripts for post-install.
     *
     * @param  WC_Payment_Gateway $gateway Payment gateway object.
     * @return array Install scripts.
     */
    public static function get_post_install_scripts($gateway)
    {
    }
    /**
     * Call an action after a gating has been successfully returned.
     */
    public static function possibly_do_connection_return_action()
    {
    }
    /**
     * Handle a successful gateway connection.
     *
     * @param string $gateway_id Gateway ID.
     */
    public static function handle_successfull_connection($gateway_id)
    {
    }
}