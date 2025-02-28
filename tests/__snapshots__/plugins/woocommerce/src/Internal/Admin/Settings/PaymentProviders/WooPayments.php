<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * WooPayments payment gateway provider class.
 *
 * This class handles all the custom logic for the WooPayments payment gateway provider.
 */
class WooPayments extends \Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders\PaymentGateway
{
    const PREFIX = 'woocommerce_admin_settings_payments__woopayments__';

    /**
     * Check if the payment gateway needs setup.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway needs setup, false otherwise.
     */
    public function needs_setup(WC_Payment_Gateway $payment_gateway): bool
{
}
    /**
     * Try to determine if the payment gateway is in test mode.
     *
     * This is a best-effort attempt, as there is no standard way to determine this.
     * Trust the true value, but don't consider a false value as definitive.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway is in test mode, false otherwise.
     */
    public function is_in_test_mode(WC_Payment_Gateway $payment_gateway): bool
{
}
    /**
     * Try to determine if the payment gateway is in dev mode.
     *
     * This is a best-effort attempt, as there is no standard way to determine this.
     * Trust the true value, but don't consider a false value as definitive.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway is in dev mode, false otherwise.
     */
    public function is_in_dev_mode(WC_Payment_Gateway $payment_gateway): bool
{
}
    /**
     * Try to determine if the payment gateway is in test mode onboarding (aka sandbox or test-drive).
     *
     * This is a best-effort attempt, as there is no standard way to determine this.
     * Trust the true value, but don't consider a false value as definitive.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway is in test mode onboarding, false otherwise.
     */
    public function is_in_test_mode_onboarding(WC_Payment_Gateway $payment_gateway): bool
{
}
    /**
     * Get the onboarding URL for the payment gateway.
     *
     * This URL should start or continue the onboarding process.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     * @param string             $return_url      Optional. The URL to return to after onboarding.
     *                                            This will likely get attached to the onboarding URL.
     *
     * @return string The onboarding URL for the payment gateway.
     */
    public function get_onboarding_url(WC_Payment_Gateway $payment_gateway, string $return_url = ''): string
{
}
    /**
     * Check if the store has any paid orders.
     *
     * Currently, we look at the past 90 days and only consider orders
     * with status `wc-completed`, `wc-processing`, or `wc-refunded`.
     *
     * @return boolean Whether the store has any paid orders.
     */
    private function has_orders(): bool
{
}
    /**
     * Check if the store has any other enabled ecommerce gateways.
     *
     * We exclude offline payment methods from this check.
     *
     * @return bool True if the store has any enabled ecommerce gateways, false otherwise.
     */
    private function has_enabled_other_ecommerce_gateways(): bool
{
}
}