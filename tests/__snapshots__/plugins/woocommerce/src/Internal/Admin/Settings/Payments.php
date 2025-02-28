<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings;

/**
 * Payments settings service class.
 */
class Payments
{
    const USER_PAYMENTS_NOX_PROFILE_KEY = 'woocommerce_payments_nox_profile';
    const SUGGESTIONS_CONTEXT = 'wc_settings_payments';
    /**
     * The payment providers service.
     *
     * @var PaymentProviders
     */
    private Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders $providers;
    /**
     * The payment extension suggestions service.
     *
     * @var ExtensionSuggestions
     */
    private Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestions $extension_suggestions;
    /**
     * Initialize the class instance.
     *
     * @param PaymentProviders     $payment_providers             The payment providers service.
     * @param ExtensionSuggestions $payment_extension_suggestions The payment extension suggestions service.
     *
     * @internal
     */
    final public function init(Automattic\WooCommerce\Internal\Admin\Settings\PaymentProviders $payment_providers, Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestions $payment_extension_suggestions): void
{
}
    /**
     * Get the payment provider details list for the settings page.
     *
     * @param string $location The location for which the providers are being determined.
     *                         This is a ISO 3166-1 alpha-2 country code.
     *
     * @return array The payment providers details list.
     * @throws Exception If there are malformed or invalid suggestions.
     */
    public function get_payment_providers(string $location): array
{
}
    /**
     * Get the payment extension suggestions for the given location.
     *
     * @param string $location The location for which the suggestions are being fetched.
     *
     * @return array[] The payment extension suggestions for the given location, split into preferred and other.
     * @throws Exception If there are malformed or invalid suggestions.
     */
    public function get_payment_extension_suggestions(string $location): array
{
}
    /**
     * Get the payment extension suggestions categories details.
     *
     * @return array The payment extension suggestions categories.
     */
    public function get_payment_extension_suggestion_categories(): array
{
}
    /**
     * Get the business location country code for the Payments settings.
     *
     * @return string The ISO 3166-1 alpha-2 country code to use for the overall business location.
     *                If the user didn't set a location, the WC base location country code is used.
     */
    public function get_country(): string
{
}
    /**
     * Set the business location country for the Payments settings.
     *
     * @param string $location The country code. This should be a ISO 3166-1 alpha-2 country code.
     */
    public function set_country(string $location): bool
{
}
    /**
     * Update the payment providers order map.
     *
     * @param array $order_map The new order for payment providers.
     *
     * @return bool True if the payment providers ordering was successfully updated, false otherwise.
     */
    public function update_payment_providers_order_map(array $order_map): bool
{
}
    /**
     * Hide a payment extension suggestion.
     *
     * @param string $id The ID of the payment extension suggestion to hide.
     *
     * @return bool True if the suggestion was successfully hidden, false otherwise.
     * @throws Exception If the suggestion ID is invalid.
     */
    public function hide_payment_extension_suggestion(string $id): bool
{
}
    /**
     * Dismiss a payment extension suggestion incentive.
     *
     * @param string $suggestion_id The suggestion ID.
     * @param string $incentive_id  The incentive ID.
     * @param string $context       Optional. The context in which the incentive should be dismissed.
     *                              Default is to dismiss the incentive in all contexts.
     *
     * @return bool True if the incentive was not previously dismissed and now it is.
     *              False if the incentive was already dismissed or could not be dismissed.
     * @throws Exception If the incentive could not be dismissed due to an error.
     */
    public function dismiss_extension_suggestion_incentive(string $suggestion_id, string $incentive_id, string $context = 'all'): bool
{
}
}