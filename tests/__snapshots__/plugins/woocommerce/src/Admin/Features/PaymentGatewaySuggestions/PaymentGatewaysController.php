<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * PaymentGateway class
 */
class PaymentGatewaysController extends \
{
    /**
     * Initialize payment gateway changes.
     */
    public static function init()
    {
        // stub
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
        // stub
    }

    /**
     * Get payment gateway scripts for post-install.
     *
     * @param  WC_Payment_Gateway $gateway Payment gateway object.
     * @return array Install scripts.
     */
    public static function get_post_install_scripts($gateway)
    {
        // stub
    }

    /**
     * Call an action after a gating has been successfully returned.
     */
    public static function possibly_do_connection_return_action()
    {
        // stub
    }

    /**
     * Handle a successful gateway connection.
     *
     * @param string $gateway_id Gateway ID.
     */
    public static function handle_successfull_connection($gateway_id)
    {
        // stub
    }

}

