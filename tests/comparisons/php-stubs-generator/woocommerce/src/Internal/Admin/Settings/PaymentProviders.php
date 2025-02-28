<?php

namespace Automattic\WooCommerce\Internal\Admin\Settings;

/**
 * Payment Providers class.
 */
class PaymentProviders
{
    public const TYPE_GATEWAY = 'gateway';
    public const TYPE_OFFLINE_PM = 'offline_pm';
    public const TYPE_OFFLINE_PMS_GROUP = 'offline_pms_group';
    public const TYPE_SUGGESTION = 'suggestion';
    public const OFFLINE_METHODS = array('bacs', 'cheque', 'cod');
    public const EXTENSION_NOT_INSTALLED = 'not_installed';
    public const EXTENSION_INSTALLED = 'installed';
    public const EXTENSION_ACTIVE = 'active';
    public const EXTENSION_TYPE_WPORG = 'wporg';
    public const PROVIDERS_ORDER_OPTION = 'woocommerce_gateway_order';
    public const SUGGESTION_ORDERING_PREFIX = '_wc_pes_';
    public const OFFLINE_METHODS_ORDERING_GROUP = '_wc_offline_payment_methods_group';
    public const CATEGORY_EXPRESS_CHECKOUT = 'express_checkout';
    public const CATEGORY_BNPL = 'bnpl';
    public const CATEGORY_PSP = 'psp';
    /**
     * Initialize the class instance.
     *
     * @param ExtensionSuggestions $payment_extension_suggestions The payment extension suggestions service.
     *
     * @internal
     */
    final public function init(\Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestions $payment_extension_suggestions): void
    {
    }
    /**
     * Get the payment gateways for the settings page.
     *
     * We apply the same actions and logic that the non-React Payments settings page uses to get the gateways.
     * This way we maintain backwards compatibility.
     *
     * @param bool $exclude_shells Whether to exclude "shell" gateways that are not intended for display.
     *                             Default is true.
     *
     * @return array The payment gateway objects list.
     */
    public function get_payment_gateways(bool $exclude_shells = true): array
    {
    }
    /**
     * Get the payment gateways details.
     *
     * @param WC_Payment_Gateway $payment_gateway       The payment gateway object.
     * @param int                $payment_gateway_order The order of the payment gateway.
     * @param string             $country_code          Optional. The country code for which the details are being gathered.
     *                                                  This should be a ISO 3166-1 alpha-2 country code.
     *
     * @return array The payment gateway details.
     */
    public function get_payment_gateway_details(\WC_Payment_Gateway $payment_gateway, int $payment_gateway_order, string $country_code = ''): array
    {
    }
    /**
     * Get the payment gateways details from the object.
     *
     * @param WC_Payment_Gateway $payment_gateway       The payment gateway object.
     * @param int                $payment_gateway_order The order of the payment gateway.
     * @param string             $country_code          Optional. The country code for which the details are being gathered.
     *                                                  This should be a ISO 3166-1 alpha-2 country code.
     *
     * @return array The payment gateway base details.
     */
    public function get_payment_gateway_base_details(\WC_Payment_Gateway $payment_gateway, int $payment_gateway_order, string $country_code = ''): array
    {
    }
    /**
     * Get the source plugin slug of a payment gateway instance.
     *
     * @param WC_Payment_Gateway $payment_gateway The payment gateway object.
     *
     * @return string The plugin slug of the payment gateway.
     */
    public function get_payment_gateway_plugin_slug(\WC_Payment_Gateway $payment_gateway): string
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
    public function get_payment_gateway_plugin_file(\WC_Payment_Gateway $payment_gateway, string $plugin_slug = ''): string
    {
    }
    /**
     * Get the offline payment methods gateways.
     *
     * @return array The registered offline payment methods gateways keyed by their global gateways list order/index.
     */
    public function get_offline_payment_methods_gateways(): array
    {
    }
    /**
     * Check if a payment gateway is an offline payment method.
     *
     * @param string $id The ID of the payment gateway.
     *
     * @return bool True if the payment gateway is an offline payment method, false otherwise.
     */
    public function is_offline_payment_method(string $id): bool
    {
    }
    /**
     * Get the payment extension suggestions for the given location.
     *
     * @param string $location The location for which the suggestions are being fetched.
     * @param string $context  Optional. The context ID of where these extensions are being used.
     *
     * @return array[] The payment extension suggestions for the given location, split into preferred and other.
     * @throws Exception If there are malformed or invalid suggestions.
     */
    public function get_extension_suggestions(string $location, string $context = ''): array
    {
    }
    /**
     * Get a payment extension suggestion by ID.
     *
     * @param string $id The ID of the payment extension suggestion.
     *
     * @return ?array The payment extension suggestion details, or null if not found.
     */
    public function get_extension_suggestion_by_id(string $id): ?array
    {
    }
    /**
     * Get a payment extension suggestion by plugin slug.
     *
     * @param string $slug         The plugin slug of the payment extension suggestion.
     * @param string $country_code Optional. The business location country code to get the suggestions for.
     *
     * @return ?array The payment extension suggestion details, or null if not found.
     */
    public function get_extension_suggestion_by_plugin_slug(string $slug, string $country_code = ''): ?array
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
    public function hide_extension_suggestion(string $id): bool
    {
    }
    /**
     * Get the payment extension suggestions categories details.
     *
     * @return array The payment extension suggestions categories.
     */
    public function get_extension_suggestion_categories(): array
    {
    }
    /**
     * Get the payment providers order map.
     *
     * @return array The payment providers order map.
     */
    public function get_order_map(): array
    {
    }
    /**
     * Save the payment providers order map.
     *
     * @param array $order_map The order map to save.
     *
     * @return bool True if the payment providers order map was successfully saved, false otherwise.
     */
    public function save_order_map(array $order_map): bool
    {
    }
    /**
     * Update the payment providers order map.
     *
     * This has effects both on the Payments settings page and the checkout page
     * since registered payment gateways (enabled or not) are among the providers.
     *
     * @param array $order_map The new order for payment providers.
     *                         The order map should be an associative array where the keys are the payment provider IDs
     *                         and the values are the new integer order for the payment provider.
     *                         This can be a partial list of payment providers and their orders.
     *                         It can also contain new IDs and their orders.
     *
     * @return bool True if the payment providers ordering was successfully updated, false otherwise.
     */
    public function update_payment_providers_order_map(array $order_map): bool
    {
    }
    /**
     * Enhance a payment providers order map.
     *
     * If the payments providers order map is empty, it will be initialized with the current WC payment gateway ordering.
     * If there are missing entries (registered payment gateways, suggestions, offline PMs, etc.), they will be added.
     * Various rules will be enforced (e.g., offline PMs and their relation with the offline PMs group).
     *
     * @param array $order_map The payment providers order map.
     *
     * @return array The updated payment providers order map.
     */
    public function enhance_order_map(array $order_map): array
    {
    }
    /**
     * Get the ID of the suggestion order map entry.
     *
     * @param string $suggestion_id The ID of the suggestion.
     *
     * @return string The ID of the suggestion order map entry.
     */
    public function get_suggestion_order_map_id(string $suggestion_id): string
    {
    }
    /**
     * Check if the ID is a suggestion order map entry ID.
     *
     * @param string $id The ID to check.
     *
     * @return bool True if the ID is a suggestion order map entry ID, false otherwise.
     */
    public function is_suggestion_order_map_id(string $id): bool
    {
    }
    /**
     * Get the ID of the suggestion from the suggestion order map entry ID.
     *
     * @param string $order_map_id The ID of the suggestion order map entry.
     *
     * @return string The ID of the suggestion.
     */
    public function get_suggestion_id_from_order_map_id(string $order_map_id): string
    {
    }
    /**
     * Reset the memoized data. Useful for testing purposes.
     *
     * @internal
     * @return void
     */
    public function reset_memo(): void
    {
    }
}
