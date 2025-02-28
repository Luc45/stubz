<?php

/**
 * Cash on Delivery Gateway.
 *
 * Provides a Cash on Delivery Payment Gateway.
 *
 * @class       WC_Gateway_COD
 * @extends     WC_Payment_Gateway
 * @version     2.1.0
 * @package     WooCommerce\Classes\Payment
 */
class WC_Gateway_COD
{
    const ID = 'cod';

    /**
     * Gateway instructions that will be added to the thank you page and emails.
     *
     * @var string
     */
    public $instructions = null;

    /**
     * Enable for shipping methods.
     *
     * @var array
     */
    public $enable_for_methods = null;

    /**
     * Enable for virtual products.
     *
     * @var bool
     */
    public $enable_for_virtual = null;

    /**
     * Constructor for the gateway.
     */
    public function __construct()
{
}
    /**
     * Setup general properties for the gateway.
     */
    protected function setup_properties()
{
}
    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
{
}
    /**
     * Check If The Gateway Is Available For Use.
     *
     * @return bool
     */
    public function is_available()
{
}
    /**
     * Checks to see whether or not the admin settings are being accessed by the current request.
     *
     * @return bool
     */
    private function is_accessing_settings()
{
}
    /**
     * Loads all of the shipping method options for the enable_for_methods field.
     *
     * @return array
     */
    private function load_shipping_method_options()
{
}
    /**
     * Indicates whether a rate exists in an array of canonically-formatted rate IDs that activates this gateway.
     *
     * @since  3.4.0
     *
     * @param array $rate_ids Rate ids to check.
     * @return array
     */
    private function get_matching_rates($rate_ids)
{
}
    /**
     * Process the payment and return the result.
     *
     * @param int $order_id Order ID.
     * @return array
     */
    public function process_payment($order_id)
{
}
    /**
     * Output for the order received page.
     */
    public function thankyou_page()
{
}
    /**
     * Change payment complete order status to completed for COD orders.
     *
     * @since  3.1.0
     * @param  string         $status Current order status.
     * @param  int            $order_id Order ID.
     * @param  WC_Order|false $order Order object.
     * @return string
     */
    public function change_payment_complete_order_status($status, $order_id = 0, $order = false)
{
}
    /**
     * Add content to the WC emails.
     *
     * @param WC_Order $order Order object.
     * @param bool     $sent_to_admin  Sent to admin.
     * @param bool     $plain_text Email format: plain text or HTML.
     */
    public function email_instructions($order, $sent_to_admin, $plain_text = false)
{
}
}
