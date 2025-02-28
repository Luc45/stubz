<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions;

/**
 * Partner payment extensions provider class.
 */
class PaymentExtensionSuggestions
{
    public const AIRWALLEX = 'airwallex';
    public const ANTOM = 'antom';
    public const MERCADO_PAGO = 'mercado_pago';
    public const MOLLIE = 'mollie';
    public const PAYFAST = 'payfast';
    public const PAYMOB = 'paymob';
    public const PAYPAL_FULL_STACK = 'paypal_full_stack';
    public const PAYPAL_WALLET = 'paypal_wallet';
    public const PAYONEER = 'payoneer';
    public const PAYSTACK = 'paystack';
    public const PAYU_INDIA = 'payu_india';
    public const RAZORPAY = 'razorpay';
    public const SQUARE_IN_PERSON = 'square_in_person';
    public const STRIPE = 'stripe';
    public const TILOPAY = 'tilopay';
    public const VIVA_WALLET = 'viva_wallet';
    public const WOOPAYMENTS = 'woopayments';
    public const AMAZON_PAY = 'amazon_pay';
    public const AFFIRM = 'affirm';
    public const AFTERPAY = 'afterpay';
    public const CLEARPAY = 'clearpay';
    public const KLARNA = 'klarna';
    public const HELIOPAY = 'heliopay';
    public const TYPE_PSP = 'psp';
    public const TYPE_APM = 'apm';
    public const TYPE_EXPRESS_CHECKOUT = 'express_checkout';
    public const TYPE_BNPL = 'bnpl';
    public const TYPE_CRYPTO = 'crypto';
    public const PLUGIN_TYPE_WPORG = 'wporg';
    public const LINK_TYPE_PRICING = 'pricing';
    public const LINK_TYPE_ABOUT = 'about';
    public const LINK_TYPE_TERMS = 'terms';
    public const LINK_TYPE_DOCS = 'documentation';
    public const LINK_TYPE_SUPPORT = 'support';
    public const TAG_PREFERRED = 'preferred';
    public const TAG_MADE_IN_WOO = 'made_in_woo';
    public const TAG_RECOMMENDED = 'recommended';
    /**
     * Initialize the class instance.
     *
     * @param PaymentExtensionSuggestionIncentives $suggestion_incentives The suggestion incentives provider.
     *
     * @internal
     */
    final public function init(Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestionIncentives $suggestion_incentives)
{
}
    /**
     * Get the list of payment extensions details for a specific country.
     *
     * @param string $country_code The two-letter country code.
     * @param string $context      Optional. The context ID of where these extensions are being used.
     *
     * @return array The list of payment extensions (their full details) for the given country.
     *               Empty array if no extensions are available for the country or the country is not supported.
     * @throws \Exception If there were malformed or invalid extension details.
     */
    public function get_country_extensions(string $country_code, string $context = ''): array
{
}
    /**
     * Get the base details of a payment extension by its ID.
     *
     * @param string $extension_id The extension id.
     *
     * @return array|null The extension details for the given ID. Null if not found.
     */
    public function get_by_id(string $extension_id): array|null
{
}
    /**
     * Get the base details of a payment extension by its plugin slug.
     *
     * If there are multiple extensions with the same plugin slug, the first one found will be returned.
     *
     * @param string $plugin_slug  The plugin slug.
     * @param string $country_code Optional. The two-letter country code for which the extension suggestion should be retrieved.
     * @param string $context      Optional. The context ID of where this extension suggestion is being used.
     *
     * @return array|null The extension details for the given plugin slug. Null if not found.
     */
    public function get_by_plugin_slug(string $plugin_slug, string $country_code = '', string $context = ''): array|null
{
}
    /**
     * Dismiss an incentive for a specific payment extension suggestion.
     *
     * @param string $incentive_id  The incentive ID.
     * @param string $suggestion_id The suggestion ID.
     * @param string $context       Optional. The context ID for which the incentive should be dismissed.
     *                              If not provided, the incentive will be dismissed for all contexts.
     *
     * @return bool True if the incentive was not previously dismissed and now it is.
     *              False if the incentive was already dismissed or could not be dismissed.
     * @throws \Exception If the incentive could not be dismissed due to an error.
     */
    public function dismiss_incentive(string $incentive_id, string $suggestion_id, string $context = 'all'): bool
{
}
}