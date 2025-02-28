<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * WooCommerce core payment gateways provider class.
 *
 * This class handles all the custom logic for the payment gateways built into the WC core.
 */
class WCCore extends \Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders\PaymentGateway
{
    /**
     * Get the provider icon URL of the payment gateway.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The provider icon URL of the payment gateway.
     */
    public function get_icon(\WC_Payment_Gateway $payment_gateway) : string
    {
    }
}