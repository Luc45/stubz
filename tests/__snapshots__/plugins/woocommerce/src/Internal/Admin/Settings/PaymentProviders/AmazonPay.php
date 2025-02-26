<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * AmazonPay payment gateway provider class.
 *
 * This class handles all the custom logic for the AmazonPay payment gateway provider.
 */
class AmazonPay
{
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Check if the AmazonPay payment gateway is in sandbox mode.
     *
     * For AmazonPay, there are two different environments: sandbox and production.
     *
     * @return ?bool True if the payment gateway is in sandbox mode, false otherwise.
     *               Null if the environment could not be determined.
     */
    private function is_amazon_pay_in_sandbox_mode(): bool|null
    {
        // stub
    }

    /**
     * Check if the AmazonPay payment gateway is onboarded.
     *
     * For AmazonPay, there are two different environments: sandbox and production.
     *
     * @return ?bool True if the payment gateway is onboarded, false otherwise.
     *               Null if we failed to determine the onboarding status.
     */
    private function is_amazon_pay_onboarded(): bool|null
    {
        // stub
    }

}

