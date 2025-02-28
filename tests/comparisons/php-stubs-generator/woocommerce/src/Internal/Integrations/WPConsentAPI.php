<?php

namespace Automattic\WooCommerce\Internal\Integrations;

/**
 * Class WPConsentAPI
 *
 * @since 8.5.0
 */
class WPConsentAPI
{
    use \Automattic\WooCommerce\Internal\Traits\ScriptDebug;
    /**
     * Identifier of the consent category used for order attribution.
     *
     * @var string
     */
    public static $consent_category = 'marketing';
    /**
     * Register the consent API.
     *
     * @return void
     */
    public function register()
    {
    }
    /**
     * Register our hooks on init.
     *
     * @return void
     */
    protected function on_init()
    {
    }
    /**
     * Check if WP Cookie Consent API is active
     *
     * @return bool
     */
    protected function is_wp_consent_api_active()
    {
    }
}