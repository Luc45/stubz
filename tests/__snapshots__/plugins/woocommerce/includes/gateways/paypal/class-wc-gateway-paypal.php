<?php

/**
 * WC_Gateway_Paypal Class.
 */
class WC_Gateway_Paypal
{
    const ID = 'paypal';

    /**
     * Whether or not logging is enabled
     *
     * @var bool
     */
    public static $log_enabled = false;

    /**
     * Logger instance
     *
     * @var WC_Logger
     */
    public static $log = false;

    /**
     * Whether the test mode is enabled.
     *
     * @var bool
     */
    public $testmode = null;

    /**
     * Whether the debug mode is enabled.
     *
     * @var bool
     */
    public $debug = null;

    /**
     * Email address to send payments to.
     *
     * @var string
     */
    public $email = null;

    /**
     * Receiver email.
     *
     * @var string
     */
    public $receiver_email = null;

    /**
     * Identity token.
     *
     * @var string
     */
    public $identity_token = null;

    /**
     * Constructor for the gateway.
     */
    public function __construct()
{
}
    /**
     * Return whether or not this gateway still requires setup to function.
     *
     * When this gateway is toggled on via AJAX, if this returns true a
     * redirect will occur to the settings page instead.
     *
     * @since 3.4.0
     * @return bool
     */
    public function needs_setup()
{
}
    /**
     * Logging method.
     *
     * @param string $message Log message.
     * @param string $level Optional. Default 'info'. Possible values:
     *                      emergency|alert|critical|error|warning|notice|info|debug.
     */
    public static function log($message, $level = 'info')
{
}
    /**
     * Processes and saves options.
     * If there is an error thrown, will continue to save and validate fields, but will leave the erroring field out.
     *
     * @return bool was anything saved?
     */
    public function process_admin_options()
{
}
    /**
     * Get gateway icon.
     *
     * @return string
     */
    public function get_icon()
{
}
    /**
     * Get the link for an icon based on country.
     *
     * @param  string $country Country two letter code.
     * @return string
     */
    protected function get_icon_url($country)
{
}
    /**
     * Get PayPal images for a country.
     *
     * @param string $country Country code.
     * @return array of image URLs
     */
    protected function get_icon_image($country)
{
}
    /**
     * Check if this gateway is available in the user's country based on currency.
     *
     * @return bool
     */
    public function is_valid_for_use()
{
}
    /**
     * Admin Panel Options.
     * - Options for bits like 'title' and availability on a country-by-country basis.
     *
     * @since 1.0.0
     */
    public function admin_options()
{
}
    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
{
}
    /**
     * Get the transaction URL.
     *
     * @param  WC_Order $order Order object.
     * @return string
     */
    public function get_transaction_url($order)
{
}
    /**
     * Process the payment and return the result.
     *
     * @param  int $order_id Order ID.
     * @return array
     */
    public function process_payment($order_id)
{
}
    /**
     * Can the order be refunded via PayPal?
     *
     * @param  WC_Order $order Order object.
     * @return bool
     */
    public function can_refund_order($order)
{
}
    /**
     * Init the API class and set the username/password etc.
     */
    protected function init_api()
{
}
    /**
     * Process a refund if supported.
     *
     * @param  int    $order_id Order ID.
     * @param  float  $amount Refund amount.
     * @param  string $reason Refund reason.
     * @return bool|WP_Error
     */
    public function process_refund($order_id, $amount = null, $reason = '')
{
}
    /**
     * Capture payment when the order is changed from on-hold to complete or processing
     *
     * @param  int $order_id Order ID.
     */
    public function capture_payment($order_id)
{
}
    /**
     * Load admin scripts.
     *
     * @since 3.3.0
     */
    public function admin_scripts()
{
}
    /**
     * Custom PayPal order received text.
     *
     * @since 3.9.0
     * @param string   $text Default text.
     * @param WC_Order $order Order data.
     * @return string
     */
    public function order_received_text($text, $order)
{
}
    /**
     * Determines whether PayPal Standard should be loaded or not.
     *
     * By default PayPal Standard isn't loaded on new installs or on existing sites which haven't set up the gateway.
     *
     * @since 5.5.0
     *
     * @return bool Whether PayPal Standard should be loaded.
     */
    public function should_load()
{
}
    /**
     * Checks if the store has at least one PayPal Standand order.
     *
     * @return bool
     */
    public function has_paypal_orders()
{
}
}
