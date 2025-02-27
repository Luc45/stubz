<?php

namespace Automattic\WooCommerce\StoreApi\Payments;

/**
 * PaymentResult class.
 */
class PaymentResult
{
    /**
     * List of valid payment statuses.
     *
     * @var array
     */
    protected $valid_statuses = array (
  0 => 'success',
  1 => 'failure',
  2 => 'pending',
  3 => 'error',
);

    /**
     * Current payment status.
     *
     * @var string
     */
    protected $status = '';

    /**
     * Array of details about the payment.
     *
     * @var string
     */
    protected $payment_details = array (
);

    /**
     * Redirect URL for checkout.
     *
     * @var string
     */
    protected $redirect_url = '';

    /**
     * Constructor.
     *
     * @param string $status Sets the payment status for the result.
     */
    public function __construct($status = '')
    {
        // stub
    }

    /**
     * Magic getter for protected properties.
     *
     * @param string $name Property name.
     */
    public function __get($name)
    {
        // stub
    }

    /**
     * Set payment status.
     *
     * @throws \Exception When an invalid status is provided.
     *
     * @param string $payment_status Status to set.
     */
    public function set_status($payment_status)
    {
        // stub
    }

    /**
     * Set payment details.
     *
     * @param array $payment_details Array of key value pairs of data.
     */
    public function set_payment_details($payment_details = array (
))
    {
        // stub
    }

    /**
     * Set redirect URL.
     *
     * @param array $redirect_url URL to redirect the customer to after checkout.
     */
    public function set_redirect_url($redirect_url = array (
))
    {
        // stub
    }

}