<?php

namespace ;

/**
 * WC_Gateway_Paypal_IPN_Handler class.
 */
class WC_Gateway_Paypal_IPN_Handler extends \WC_Gateway_Paypal_Response
{
    /**
     * Receiver email address to validate.
     *
     * @var string Receiver email address.
     */
    protected $receiver_email = null;

    /**
     * Constructor.
     *
     * @param bool   $sandbox Use sandbox or not.
     * @param string $receiver_email Email to receive IPN from.
     */
    public function __construct($sandbox = false, $receiver_email = '')
    {
        // stub
    }

    /**
     * Check for PayPal IPN Response.
     */
    public function check_response()
    {
        // stub
    }

    /**
     * There was a valid response.
     *
     * @param  array $posted Post data after wp_unslash.
     */
    public function valid_response($posted)
    {
        // stub
    }

    /**
     * Check PayPal IPN validity.
     */
    public function validate_ipn()
    {
        // stub
    }

    /**
     * Check for a valid transaction type.
     *
     * @param string $txn_type Transaction type.
     */
    protected function validate_transaction_type($txn_type)
    {
        // stub
    }

    /**
     * Check currency from IPN matches the order.
     *
     * @param WC_Order $order    Order object.
     * @param string   $currency Currency code.
     */
    protected function validate_currency($order, $currency)
    {
        // stub
    }

    /**
     * Check payment amount from IPN matches the order.
     *
     * @param WC_Order $order  Order object.
     * @param int      $amount Amount to validate.
     */
    protected function validate_amount($order, $amount)
    {
        // stub
    }

    /**
     * Check receiver email from PayPal. If the receiver email in the IPN is different than what is stored in.
     * WooCommerce -> Settings -> Checkout -> PayPal, it will log an error about it.
     *
     * @param WC_Order $order          Order object.
     * @param string   $receiver_email Email to validate.
     */
    protected function validate_receiver_email($order, $receiver_email)
    {
        // stub
    }

    /**
     * Handle a completed payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_completed($order, $posted)
    {
        // stub
    }

    /**
     * Handle a pending payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_pending($order, $posted)
    {
        // stub
    }

    /**
     * Handle a failed payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_failed($order, $posted)
    {
        // stub
    }

    /**
     * Handle a denied payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_denied($order, $posted)
    {
        // stub
    }

    /**
     * Handle an expired payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_expired($order, $posted)
    {
        // stub
    }

    /**
     * Handle a voided payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_voided($order, $posted)
    {
        // stub
    }

    /**
     * When a user cancelled order is marked paid.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_paid_cancelled_order($order, $posted)
    {
        // stub
    }

    /**
     * Handle a refunded order.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_refunded($order, $posted)
    {
        // stub
    }

    /**
     * Handle a reversal.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_reversed($order, $posted)
    {
        // stub
    }

    /**
     * Handle a cancelled reversal.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_canceled_reversal($order, $posted)
    {
        // stub
    }

    /**
     * Save important data from the IPN to the order.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function save_paypal_meta_data($order, $posted)
    {
        // stub
    }

    /**
     * Send a notification to the user handling orders.
     *
     * @param string $subject Email subject.
     * @param string $message Email message.
     */
    protected function send_ipn_email_notification($subject, $message)
    {
        // stub
    }

}

