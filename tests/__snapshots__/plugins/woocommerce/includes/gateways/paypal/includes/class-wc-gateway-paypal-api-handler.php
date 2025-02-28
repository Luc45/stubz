<?php

/**
 * Handles Refunds and other API requests such as capture.
 *
 * @since 3.0.0
 */
class WC_Gateway_Paypal_API_Handler
{
    /**
     * API Username
     *
     * @var string
     */
    public static $api_username = null;

    /**
     * API Password
     *
     * @var string
     */
    public static $api_password = null;

    /**
     * API Signature
     *
     * @var string
     */
    public static $api_signature = null;

    /**
     * Sandbox
     *
     * @var bool
     */
    public static $sandbox = false;

    /**
     * Get capture request args.
     * See https://developer.paypal.com/docs/classic/api/merchant/DoCapture_API_Operation_NVP/.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Amount.
     * @return array
     */
    public static function get_capture_request($order, $amount = null)
{
}
    /**
     * Get refund request args.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Refund amount.
     * @param  string   $reason Refund reason.
     * @return array
     */
    public static function get_refund_request($order, $amount = null, $reason = '')
{
}
    /**
     * Capture an authorization.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Amount.
     * @return object Either an object of name value pairs for a success, or a WP_ERROR object.
     */
    public static function do_capture($order, $amount = null)
{
}
    /**
     * Refund an order via PayPal.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Refund amount.
     * @param  string   $reason Refund reason.
     * @return object Either an object of name value pairs for a success, or a WP_ERROR object.
     */
    public static function refund_transaction($order, $amount = null, $reason = '')
{
}
}
/**
 * Here for backwards compatibility.
 *
 * @since 3.0.0
 */
class WC_Gateway_Paypal_Refund
{
    /**
     * Get refund request args. Proxy to WC_Gateway_Paypal_API_Handler::get_refund_request().
     *
     * @param WC_Order $order Order object.
     * @param float    $amount Refund amount.
     * @param string   $reason Refund reason.
     *
     * @return array
     */
    public static function get_request($order, $amount = null, $reason = '')
{
}
    /**
     * Process an order refund.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Refund amount.
     * @param  string   $reason Refund reason.
     * @param  bool     $sandbox Whether to use sandbox mode or not.
     * @return object Either an object of name value pairs for a success, or a WP_ERROR object.
     */
    public static function refund_order($order, $amount = null, $reason = '', $sandbox = false)
{
}
}
