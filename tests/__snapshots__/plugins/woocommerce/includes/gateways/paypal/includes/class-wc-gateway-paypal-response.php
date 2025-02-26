<?php

namespace ;

/**
 * Handles Responses.
 */
abstract class WC_Gateway_Paypal_Response
{
    /**
     * Sandbox mode
     *
     * @var bool
     */
    protected $sandbox = false;

    /**
     * Get the order from the PayPal 'Custom' variable.
     *
     * @param  string $raw_custom JSON Data passed back by PayPal.
     * @return bool|WC_Order object
     */
    protected function get_paypal_order($raw_custom)
    {
        // stub
    }

    /**
     * Complete order, add transaction ID and note.
     *
     * @param  WC_Order $order Order object.
     * @param  string   $txn_id Transaction ID.
     * @param  string   $note Payment note.
     */
    protected function payment_complete($order, $txn_id = '', $note = '')
    {
        // stub
    }

    /**
     * Hold order and add note.
     *
     * @param  WC_Order $order Order object.
     * @param  string   $reason Reason why the payment is on hold.
     */
    protected function payment_on_hold($order, $reason = '')
    {
        // stub
    }

}

