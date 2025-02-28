<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * Mollie payment gateway provider class.
 *
 * This class handles all the custom logic for the Mollie payment gateway provider.
 */
class Mollie
{
    /**
     * Get the settings URL for a payment gateway.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The settings URL for the payment gateway.
     */
    public function get_settings_url(WC_Payment_Gateway $payment_gateway): string
{
}
    /**
     * Determine if the payment gateway is in test mode.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway is in test mode, false otherwise.
     */
    public function is_in_test_mode(WC_Payment_Gateway $payment_gateway): bool
{
}
    /**
     * Determine if at least a Mollie gateway is registered.
     *
     * @param array $payment_gateways The payment gateways objects.
     *
     * @return bool True if at least a Mollie gateway is registered, false otherwise.
     */
    public function is_gateway_registered(array $payment_gateways): bool
{
}
    /**
     * Get the pseudo Mollie gateway object.
     *
     * @param array $suggestion The suggestion data.
     *
     * @return PseudoWCPaymentGateway The pseudo gateway object.
     */
    public function get_pseudo_gateway(array $suggestion): Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders\PseudoWCPaymentGateway
{
}
    /**
     * Get the URL to the custom settings page for Mollie.
     *
     * @param string $section Optional. The section to navigate to.
     *
     * @return string The URL to the custom settings page for Mollie.
     */
    private function get_custom_settings_url(string $section = ''): string
{
}
}