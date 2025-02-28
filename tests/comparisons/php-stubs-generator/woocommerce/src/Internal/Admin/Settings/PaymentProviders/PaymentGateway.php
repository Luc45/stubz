<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders;

/**
 * The payment gateway provider class to handle all payment gateways that don't have a dedicated class.
 *
 * Extend this class for introducing gateway-specific behavior.
 */
class PaymentGateway
{
    /**
     * Extract the payment gateway provider details from the object.
     *
     * @param WC_Payment_Gateway $gateway      The payment gateway object.
     * @param int                $order        Optional. The order to assign.
     *                                         Defaults to 0 if not provided.
     * @param string             $country_code Optional. The country code for which the details are being gathered.
     *                                         This should be a ISO 3166-1 alpha-2 country code.
     *
     * @return array The payment gateway provider details.
     */
    public function get_details(\WC_Payment_Gateway $gateway, int $order = 0, string $country_code = ''): array
    {
    }
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
    public function get_title(\WC_Payment_Gateway $payment_gateway): string
    {
    }
    /**
     * Get the provider description of the payment gateway.
     *
     * This is the intended gateway description to use throughout the WC admin. It should be short and to the point.
     *
     * Note: We don't allow HTML tags in the description. All HTML tags will be stripped, including their contents.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The provider description of the payment gateway.
     */
    public function get_description(\WC_Payment_Gateway $payment_gateway): string
    {
    }
    /**
     * Get the provider icon URL of the payment gateway.
     *
     * We expect to receive a URL to an image file.
     * If the gateway provides an <img> tag or a list of them, we will fall back to the default payments icon.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The provider icon URL of the payment gateway.
     */
    public function get_icon(\WC_Payment_Gateway $payment_gateway): string
    {
    }
    /**
     * Get the provider supports list of the payment gateway.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string[] The provider supports list of the payment gateway.
     */
    public function get_supports_list(\WC_Payment_Gateway $payment_gateway): array
    {
    }
    /**
     * Check if the payment gateway is enabled.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway is enabled, false otherwise.
     */
    public function is_enabled(\WC_Payment_Gateway $payment_gateway): bool
    {
    }
    /**
     * Check if the payment gateway needs setup.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway needs setup, false otherwise.
     */
    public function needs_setup(\WC_Payment_Gateway $payment_gateway): bool
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
    public function is_in_test_mode(\WC_Payment_Gateway $payment_gateway): bool
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
    public function is_in_dev_mode(\WC_Payment_Gateway $payment_gateway): bool
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
    public function is_account_connected(\WC_Payment_Gateway $payment_gateway): bool
    {
    }
    /**
     * Check if the payment gateway has started the onboarding process.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return bool True if the payment gateway has started the onboarding process, false otherwise.
     *              If the payment gateway does not provide the information,
     *              it will infer it from having a connected account.
     */
    public function is_onboarding_started(\WC_Payment_Gateway $payment_gateway): bool
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
    public function is_onboarding_completed(\WC_Payment_Gateway $payment_gateway): bool
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
    public function is_in_test_mode_onboarding(\WC_Payment_Gateway $payment_gateway): bool
    {
    }
    /**
     * Get the settings URL for a payment gateway.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The settings URL for the payment gateway.
     */
    public function get_settings_url(\WC_Payment_Gateway $payment_gateway): string
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
    public function get_onboarding_url(\WC_Payment_Gateway $payment_gateway, string $return_url = ''): string
    {
    }
    /**
     * Get the source plugin slug of a payment gateway instance.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The plugin slug of the payment gateway.
     */
    public function get_plugin_slug(\WC_Payment_Gateway $payment_gateway): string
    {
    }
    /**
     * Get the plugin file of payment gateway, without the .php extension.
     *
     * This is useful for the WP API, which expects the plugin file without the .php extension.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     * @param string             $plugin_slug     Optional. The payment gateway plugin slug to use directly.
     *
     * @return string The plugin file corresponding to the payment gateway plugin. Does not include the .php extension.
     */
    public function get_plugin_file(\WC_Payment_Gateway $payment_gateway, string $plugin_slug = ''): string
    {
    }
    /**
     * Try and determine a list of recommended payment methods for a payment gateway.
     *
     * This data is not always available, and it is up to the payment gateway to provide it.
     * This is not a definitive list of payment methods that the gateway supports.
     * The data is aimed at helping the user understand what payment methods are recommended for the gateway
     * and potentially help them make a decision on which payment methods to enable.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     * @param string             $country_code    Optional. The country code for which to get recommended payment methods.
     *                                            This should be a ISO 3166-1 alpha-2 country code.
     *
     * @return array The recommended payment methods list for the payment gateway.
     *               Empty array if there are none.
     */
    public function get_recommended_payment_methods(\WC_Payment_Gateway $payment_gateway, string $country_code = ''): array
    {
    }
    /**
     * Validate a recommended payment method entry.
     *
     * @param mixed $recommended_pm The recommended payment method entry to validate.
     *
     * @return bool True if the recommended payment method entry is valid, false otherwise.
     */
    protected function validate_recommended_payment_method($recommended_pm): bool
    {
    }
    /**
     * Sort the recommended payment methods.
     *
     * @param array $recommended_pms The recommended payment methods list to sort.
     *
     * @return array The sorted recommended payment methods list.
     *               List keys are not preserved.
     */
    protected function sort_recommended_payment_methods(array $recommended_pms): array
    {
    }
    /**
     * Standardize a recommended payment method entry.
     *
     * @param array $recommended_pm The recommended payment method entry to standardize.
     * @param int   $order          Optional. The order of the recommended payment method.
     *                              Defaults to 0 if not provided.
     *
     * @return array The standardized recommended payment method entry.
     */
    protected function standardize_recommended_payment_method(array $recommended_pm, int $order = 0): array
    {
    }
}
