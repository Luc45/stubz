<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * MercadoPago payment gateway provider class.
 *
 * This class handles all the custom logic for the MercadoPago payment gateway provider.
 */
class MercadoPago extends \Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders\PaymentGateway
{
    /**
     * Get the provider title of the payment gateway.
     *
     * This is the intended gateway title to use throughout the WC admin. It should be short.
     *
     * Note: We don't allow HTML tags in the title. All HTML tags will be stripped, including their contents.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The provider title of the payment gateway.
     */
    public function get_title(WC_Payment_Gateway $payment_gateway): string
{
}
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
     * Check if the payment gateway has a payments processor account connected.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway account is connected, false otherwise.
     *              If the payment gateway does not provide the information, it will return true.
     */
    public function is_account_connected(WC_Payment_Gateway $payment_gateway): bool
{
}
    /**
     * Check if the payment gateway has completed the onboarding process.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway has completed the onboarding process, false otherwise.
     *              If the payment gateway does not provide the information,
     *              it will infer it from having a connected account.
     */
    public function is_onboarding_completed(WC_Payment_Gateway $payment_gateway): bool
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
}