<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * Legacy class.
 */
class Legacy
{
    /**
     * Hook into WP lifecycle events.
     */
    public function init()
    {
    }
    /**
     * Attempt to process a payment for the checkout API if no payment methods support the
     * woocommerce_rest_checkout_process_payment_with_context action.
     *
     * @param PaymentContext $context Holds context for the payment.
     * @param PaymentResult  $result  Result of the payment.
     */
    public function process_legacy_payment(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
    {
    }
}