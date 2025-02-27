<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Remote Payment Methods engine.
 * This goes through the specs and gets eligible payment gateways.
 */
class Init
{
    const RECOMMENDED_PAYMENT_PLUGINS_DISMISS_OPTION = 'woocommerce_setting_payments_recommendations_hidden';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Go through the specs and run them.
     *
     * @param array|null $specs payment suggestion spec array.
     * @return array
     */
    public static function get_suggestions(array|null $specs = null)
    {
        // stub
    }

    /**
     * Gets either cached or default suggestions.
     *
     * @return array
     */
    public static function get_cached_or_default_suggestions()
    {
        // stub
    }

    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
        // stub
    }

    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
        // stub
    }

    /**
     * Check if suggestions should be shown in the settings screen.
     *
     * @return bool
     */
    public static function should_display()
    {
        // stub
    }

    /**
     * Dismiss the suggestions.
     */
    public static function dismiss()
    {
        // stub
    }

}