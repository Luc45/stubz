<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains logic in regards to WooCommerce Admin Settings.
 */
class Settings
{
    /**
     * Class instance.
     *
     * @var Settings instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
{
}
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
{
}
    /**
     * Format order statuses by removing a leading 'wc-' if present.
     *
     * @param array $statuses Order statuses.
     * @return array formatted statuses.
     */
    public static function get_order_statuses($statuses)
{
}
    /**
     * Return an object defining the currency options for the site's current currency
     *
     * @return  array  Settings for the current currency {
     *     Array of settings.
     *
     *     @type string $code       Currency code.
     *     @type string $precision  Number of decimals.
     *     @type string $symbol     Symbol for currency.
     * }
     */
    public static function get_currency_settings()
{
}
    /**
     * Hooks extra necessary data into the component settings array already set in WooCommerce core.
     *
     * @param array $settings Array of component settings.
     * @return array Array of component settings.
     */
    public function add_component_settings($settings)
{
}
    /**
     * Removes non-necessary feature properties for the client side.
     *
     * @return array
     */
    public function get_features()
{
}
    /**
     * Register the admin settings for use in the WC REST API
     *
     * @param array $groups Array of setting groups.
     * @return array
     */
    public function add_settings_group($groups)
{
}
    /**
     * Add WC Admin specific settings
     *
     * @param array $settings Array of settings in wc admin group.
     * @return array
     */
    public function add_settings($settings)
{
}
}