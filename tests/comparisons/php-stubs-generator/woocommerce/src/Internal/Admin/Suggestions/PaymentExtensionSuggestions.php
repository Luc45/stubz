<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions;

/**
 * Partner payment extensions provider class.
 */
class PaymentExtensionSuggestions
{
    /*
     * The unique IDs for the payment extension suggestions.
     *
     * The ID is the primary extension identifier throughout the system.
     */
    const AIRWALLEX = 'airwallex';
    const ANTOM = 'antom';
    const MERCADO_PAGO = 'mercado_pago';
    const MOLLIE = 'mollie';
    const PAYFAST = 'payfast';
    const PAYMOB = 'paymob';
    const PAYPAL_FULL_STACK = 'paypal_full_stack';
    const PAYPAL_WALLET = 'paypal_wallet';
    const PAYONEER = 'payoneer';
    const PAYSTACK = 'paystack';
    const PAYU_INDIA = 'payu_india';
    const RAZORPAY = 'razorpay';
    const SQUARE_IN_PERSON = 'square_in_person';
    const STRIPE = 'stripe';
    const TILOPAY = 'tilopay';
    const VIVA_WALLET = 'viva_wallet';
    const WOOPAYMENTS = 'woopayments';
    const AMAZON_PAY = 'amazon_pay';
    const AFFIRM = 'affirm';
    const AFTERPAY = 'afterpay';
    const CLEARPAY = 'clearpay';
    const KLARNA = 'klarna';
    /*
     * The extension types.
     *
     * The type is related to the extension's underlying payments methods scope and type.
     */
    const TYPE_PSP = 'psp';
    // Payment Service Provider.
    const TYPE_APM = 'apm';
    // Alternative Payment Methods.
    const TYPE_EXPRESS_CHECKOUT = 'express_checkout';
    const TYPE_BNPL = 'bnpl';
    // Buy now, pay later.
    /*
     * The extension plugin types.
     *
     * This will inform how we handle the extension installation and activation.
     */
    const PLUGIN_TYPE_WPORG = 'wporg';
    /*
     * The extension link types.
     *
     * These are hints for the UI to determine if and how to display the link.
     */
    const LINK_TYPE_PRICING = 'pricing';
    const LINK_TYPE_ABOUT = 'about';
    const LINK_TYPE_TERMS = 'terms';
    const LINK_TYPE_DOCS = 'documentation';
    const LINK_TYPE_SUPPORT = 'support';
    /*
     * Extension tags.
     *
     * These are used to categorize the extensions and provide additional information to the system.
     * Some tags may carry special meaning and will be used to influence the suggestions' behavior.
     */
    const TAG_PREFERRED = 'preferred';
    const TAG_MADE_IN_WOO = 'made_in_woo';
    // For extensions developed by Woo.
    const TAG_RECOMMENDED = 'recommended';
    /**
     * Initialize the class instance.
     *
     * @param PaymentExtensionSuggestionIncentives $suggestion_incentives The suggestion incentives provider.
     *
     * @internal
     */
    public final function init(\Automattic\WooCommerce\Internal\Admin\Suggestions\PaymentExtensionSuggestionIncentives $suggestion_incentives)
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
    public function get_country_extensions(string $country_code, string $context = '') : array
    {
    }
    /**
     * Get the base details of a payment extension by its ID.
     *
     * @param string $extension_id The extension id.
     *
     * @return array|null The extension details for the given ID. Null if not found.
     */
    public function get_by_id(string $extension_id) : ?array
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
    public function get_by_plugin_slug(string $plugin_slug, string $country_code = '', string $context = '') : ?array
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
    public function dismiss_incentive(string $incentive_id, string $suggestion_id, string $context = 'all') : bool
    {
    }
}