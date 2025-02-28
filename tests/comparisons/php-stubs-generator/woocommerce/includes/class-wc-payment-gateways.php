<?php

/**
 * Payment gateways class.
 */
class WC_Payment_Gateways
{
    /**
     * Payment gateway classes.
     *
     * @var array
     */
    public $payment_gateways = array();
    /**
     * The single instance of the class.
     *
     * @var WC_Payment_Gateways
     * @since 2.1.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_Payment_Gateways Instance.
     *
     * Ensures only one instance of WC_Payment_Gateways is loaded or can be loaded.
     *
     * @since 2.1
     * @return WC_Payment_Gateways Main instance
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 2.1
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 2.1
     */
    public function __wakeup()
    {
    }
    /**
     * Initialize payment gateways.
     */
    public function __construct()
    {
    }
    /**
     * Load gateways and hook in functions.
     */
    public function init()
    {
    }
    // phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.Found
    /**
     * Hook into payment gateway settings changes.
     *
     * @param WC_Payment_Gateways $wc_payment_gateways The WC_Payment_Gateways instance.
     * @since 8.5.0
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function on_payment_gateways_initialized(\WC_Payment_Gateways $wc_payment_gateways)
    {
    }
    /**
     * Get gateways.
     *
     * @return array
     */
    public function payment_gateways()
    {
    }
    /**
     * Get array of registered gateway ids
     *
     * @since 2.6.0
     * @return array of strings
     */
    public function get_payment_gateway_ids()
    {
    }
    /**
     * Get available gateways.
     *
     * @return array
     */
    public function get_available_payment_gateways()
    {
    }
    /**
     * Callback for array filter. Returns true if gateway is of correct type.
     *
     * @since 3.6.0
     * @param object $gateway Gateway to check.
     * @return bool
     */
    protected function filter_valid_gateway_class($gateway)
    {
    }
    /**
     * Set the current, active gateway.
     *
     * @param array $gateways Available payment gateways.
     */
    public function set_current_gateway($gateways)
    {
    }
    /**
     * Save options in admin.
     */
    public function process_admin_options()
    {
    }
    /**
     * Determines if PayPal Standard should be loaded.
     *
     * @since 5.5.0
     * @return bool Whether PayPal Standard should be loaded or not.
     */
    protected function should_load_paypal_standard()
    {
    }
}
