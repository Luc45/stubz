<?php

namespace ;

/**
 * Handle PDT Responses from PayPal.
 */
class WC_Gateway_Paypal_PDT_Handler
{
    /**
     * Identity token for PDT support
     *
     * @var string
     */
    protected $identity_token = null;

    /**
     * Receiver email address to validate.
     *
     * @var string Receiver email address.
     */
    protected $receiver_email = null;

    /**
     * Constructor.
     *
     * @param bool   $sandbox Whether to use sandbox mode or not.
     * @param string $identity_token Identity token for PDT support.
     */
    public function __construct($sandbox = false, $identity_token = '')
    {
        // stub
    }

    /**
     * Set receiver email to enable more strict validation.
     *
     * @param string $receiver_email Email to receive PDT notification from.
     */
    public function set_receiver_email($receiver_email = '')
    {
        // stub
    }

    /**
     * Validate a PDT transaction to ensure its authentic.
     *
     * @param  string $transaction TX ID.
     * @return bool|array False or result array if successful and valid.
     */
    protected function validate_transaction($transaction)
    {
        // stub
    }

    /**
     * Check Response for PDT, taking the order id from the request.
     *
     * @deprecated 6.4 Use check_response_for_order instead.
     */
    public function check_response()
    {
        // stub
    }

    /**
     * Check Response for PDT.
     *
     * @since 6.4
     *
     * @param mixed $wc_order_id The order id to check the response against.
     */
    public function check_response_for_order($wc_order_id)
    {
        // stub
    }

}

