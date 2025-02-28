<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Default Payment Gateways
 */
class DefaultPaymentGateways
{
    /**
     * Get default specs.
     *
     * @return array Default specs.
     */
    public static function get_all()
{
}
    /**
     * Get array of countries supported by WCPay depending on feature flag.
     *
     * @return array Array of countries.
     */
    public static function get_wcpay_countries()
{
}
    /**
     * Get rules that match the store base location to one of the provided countries.
     *
     * @param array $countries Array of countries to match.
     * @return object Rules to match.
     */
    public static function get_rules_for_countries($countries)
{
}
    /**
     * Get rules that match the store's selling venues.
     *
     * @param array $selling_venues Array of venues to match.
     * @return object Rules to match.
     */
    public static function get_rules_for_selling_venues($selling_venues)
{
}
    /**
     * Get rules for when selling offline for core profiler.
     *
     * @return object Rules to match.
     */
    public static function get_rules_selling_offline()
{
}
    /**
     * Get default rules for CBD based on given argument.
     *
     * @param bool $should_have Whether or not the store should have CBD as an industry (true) or not (false).
     * @return object Rules to match.
     */
    public static function get_rules_for_cbd($should_have)
{
}
    /**
     * Get default rules for the WooPayments plugin being installed and activated.
     *
     * @param bool $should_be Whether WooPayments should be activated.
     *
     * @return object Rules to match.
     */
    public static function get_rules_for_wcpay_activated($should_be)
{
}
    /**
     * Get default rules for WooPayments being connected or not.
     *
     * This does not include the check for the WooPayments plugin to be active.
     *
     * @param bool $should_be Whether WooPayments should be connected.
     *
     * @return object Rules to match.
     */
    public static function get_rules_for_wcpay_connected($should_be)
{
}
}