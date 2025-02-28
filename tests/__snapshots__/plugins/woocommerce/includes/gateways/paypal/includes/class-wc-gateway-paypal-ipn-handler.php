<?php

/**
 * WC_Gateway_Paypal_IPN_Handler class.
 */
class WC_Gateway_Paypal_IPN_Handler
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
}
    /**
     * Check for PayPal IPN Response.
     */
    public function check_response()
{
}
    /**
     * There was a valid response.
     *
     * @param  array $posted Post data after wp_unslash.
     */
    public function valid_response($posted)
{
}
    /**
     * Check PayPal IPN validity.
     */
    public function validate_ipn()
{
}
    /**
     * Check for a valid transaction type.
     *
     * @param string $txn_type Transaction type.
     */
    protected function validate_transaction_type($txn_type)
{
}
    /**
     * Check currency from IPN matches the order.
     *
     * @param WC_Order $order    Order object.
     * @param string   $currency Currency code.
     */
    protected function validate_currency($order, $currency)
{
}
    /**
     * Check payment amount from IPN matches the order.
     *
     * @param WC_Order $order  Order object.
     * @param int      $amount Amount to validate.
     */
    protected function validate_amount($order, $amount)
{
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
}
    /**
     * Handle a completed payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_completed($order, $posted)
{
}
    /**
     * Handle a pending payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_pending($order, $posted)
{
}
    /**
     * Handle a failed payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_failed($order, $posted)
{
}
    /**
     * Handle a denied payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_denied($order, $posted)
{
}
    /**
     * Handle an expired payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_expired($order, $posted)
{
}
    /**
     * Handle a voided payment.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_voided($order, $posted)
{
}
    /**
     * When a user cancelled order is marked paid.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_paid_cancelled_order($order, $posted)
{
}
    /**
     * Handle a refunded order.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_refunded($order, $posted)
{
}
    /**
     * Handle a reversal.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_reversed($order, $posted)
{
}
    /**
     * Handle a cancelled reversal.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function payment_status_canceled_reversal($order, $posted)
{
}
    /**
     * Save important data from the IPN to the order.
     *
     * @param WC_Order $order  Order object.
     * @param array    $posted Posted data.
     */
    protected function save_paypal_meta_data($order, $posted)
{
}
    /**
     * Send a notification to the user handling orders.
     *
     * @param string $subject Email subject.
     * @param string $message Email message.
     */
    protected function send_ipn_email_notification($subject, $message)
{
}
}
