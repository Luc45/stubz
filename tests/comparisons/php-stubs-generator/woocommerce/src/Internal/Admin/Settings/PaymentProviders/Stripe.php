<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * Stripe payment gateway provider class.
 *
 * This class handles all the custom logic for the Stripe payment gateway provider.
 */
class Stripe extends \Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders\PaymentGateway
{
    /**
     * Check if the payment gateway has a payments processor account connected.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway account is connected, false otherwise.
     *              If the payment gateway does not provide the information, it will return true.
     */
    public function is_account_connected(\WC_Payment_Gateway $payment_gateway) : bool
    {
    }
}