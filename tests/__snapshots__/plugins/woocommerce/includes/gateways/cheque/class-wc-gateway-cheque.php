<?php

namespace ;

/**
 * Cheque Payment Gateway.
 *
 * Provides a Cheque Payment Gateway, mainly for testing purposes.
 *
 * @class       WC_Gateway_Cheque
 * @extends     WC_Payment_Gateway
 * @version     2.1.0
 * @package     WooCommerce\Classes\Payment
 */
class WC_Gateway_Cheque
{
    const ID = 'cheque';

    /**
     * Gateway instructions that will be added to the thank you page and emails.
     *
     * @var string
     */
    public $instructions = null;

    /**
     * Constructor for the gateway.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
    {
        // stub
    }

    /**
     * Output for the order received page.
     */
    public function thankyou_page()
    {
        // stub
    }

    /**
     * Add content to the WC emails.
     *
     * @access public
     * @param WC_Order $order Order object.
     * @param bool     $sent_to_admin Sent to admin.
     * @param bool     $plain_text Email format: plain text or HTML.
     */
    public function email_instructions($order, $sent_to_admin, $plain_text = false)
    {
        // stub
    }

    /**
     * Process the payment and return the result.
     *
     * @param int $order_id Order ID.
     * @return array
     */
    public function process_payment($order_id)
    {
        // stub
    }

}

