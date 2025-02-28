<?php

namespace Automattic\WooCommerce\Internal\Admin\WCPayPromotion;

/**
 * WooPayments Promotion engine.
 */
class Init extends \Automattic\WooCommerce\Admin\RemoteSpecs\RemoteSpecsEngine
{
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Possibly registers the pre-install WooPayments promoted gateway.
     *
     * @param array $gateways List of gateway classes.
     *
     * @return array List of gateway classes.
     */
    public static function possibly_register_pre_install_wc_pay_promotion_gateway($gateways)
{
}
    /**
     * Checks if promoted gateway can be registered.
     *
     * @return boolean If promoted gateway should be registered.
     */
    public static function can_show_promotion()
{
}
    /**
     * By default, new payment gateways are put at the bottom of the list on the admin "Payments" settings screen.
     * For visibility, we want WooPayments to be at the top of the list.
     *
     * @param array $ordering Existing ordering of the payment gateways.
     *
     * @return array Modified ordering.
     */
    public static function set_gateway_top_of_list($ordering)
{
}
    /**
     * Get WooPayments promotion spec.
     *
     * @param boolean $fetch_from_remote Whether to fetch the spec from remote or not.
     *
     * @return object|false WooPayments promotion spec or false if there isn't one.
     */
    public static function get_wc_pay_promotion_spec($fetch_from_remote = true)
{
}
    /**
     * Go through the specs and run them.
     *
     * @return array List of promotions.
     */
    public static function get_promotions()
{
}
    /**
     * Gets either cached or default promotions.
     *
     * @return array
     */
    public static function get_cached_or_default_promotions()
{
}
    /**
     * Get merchant WooPay eligibility.
     *
     * @return boolean If merchant is eligible for WooPay.
     */
    public static function is_woopay_eligible()
{
}
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
{
}
    /**
     * Get specs or fetch remotely if they don't exist.
     *
     * @return array List of specs.
     */
    public static function get_specs()
{
}
    /**
     * Add component settings.
     *
     * @param array $settings Component settings.
     *
     * @return array
     */
    public function add_component_settings($settings)
{
}
    /**
     * Loads the payment method promotions scripts and styles.
     */
    public static function load_payment_method_promotions()
{
}
}