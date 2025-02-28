<?php

namespace Automattic\WooCommerce\StoreApi\Payments;

/**
 * PaymentContext class.
 */
class PaymentContext
{
    /**
     * Payment method ID.
     *
     * @var string
     */
    protected $payment_method = '';
    /**
     * Order object for the order being paid.
     *
     * @var \WC_Order
     */
    protected $order = null;
    /**
     * Holds data to send to the payment gateway to support payment.
     *
     * @var array Key value pairs.
     */
    protected $payment_data = array();
    /**
     * Magic getter for protected properties.
     *
     * @param string $name Property name.
     */
    public function __get($name)
{
}
    /**
     * Set the chosen payment method ID context.
     *
     * @param string $payment_method Payment method ID.
     */
    public function set_payment_method($payment_method)
{
}
    /**
     * Retrieve the payment method instance for the current set payment method.
     *
     * @return \WC_Payment_Gateway|null An instance of the payment gateway if it exists.
     */
    public function get_payment_method_instance()
{
}
    /**
     * Set the order context.
     *
     * @param \WC_Order $order Order object.
     */
    public function set_order(WC_Order $order)
{
}
    /**
     * Set payment data context.
     *
     * @param array $payment_data Array of key value pairs of data.
     */
    public function set_payment_data($payment_data = array())
{
}
}