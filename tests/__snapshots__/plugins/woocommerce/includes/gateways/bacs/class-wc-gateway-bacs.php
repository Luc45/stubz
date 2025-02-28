<?php
/**
 * Bank Transfer Payment Gateway.
 *
 * Provides a Bank Transfer Payment Gateway. Based on code by Mike Pepper.
 *
 * @class       WC_Gateway_BACS
 * @extends     WC_Payment_Gateway
 * @version     2.1.0
 * @package     WooCommerce\Classes\Payment
 */
class WC_Gateway_BACS extends \WC_Payment_Gateway
{
    /**
     * Unique ID for this gateway.
     *
     * @var string
     */
    public const ID = 'bacs';
    /**
     * Array of locales
     *
     * @var array
     */
    public $locale;
    /**
     * Gateway instructions that will be added to the thank you page and emails.
     *
     * @var string
     */
    public $instructions;
    /**
     * Account details.
     *
     * @var array
     */
    public $account_details;
    /**
     * Constructor for the gateway.
     */
    public function __construct()
{
}
    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
{
}
    /**
     * Generate account details html.
     *
     * @return string
     */
    public function generate_account_details_html()
{
}
    /**
     * Save account details table.
     */
    public function save_account_details()
{
}
    /**
     * Output for the order received page.
     *
     * @param int $order_id Order ID.
     */
    public function thankyou_page($order_id)
{
}
    /**
     * Add content to the WC emails.
     *
     * @param WC_Order $order Order object.
     * @param bool     $sent_to_admin Sent to admin.
     * @param bool     $plain_text Email format: plain text or HTML.
     */
    public function email_instructions($order, $sent_to_admin, $plain_text = false)
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
     * Get country locale if localized.
     *
     * @return array
     */
    public function get_country_locale()
{
}
}
