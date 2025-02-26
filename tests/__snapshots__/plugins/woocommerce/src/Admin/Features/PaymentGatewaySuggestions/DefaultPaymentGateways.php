<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Default Payment Gateways
 */
class DefaultPaymentGateways extends \
{
    /**
     * This is the default priority for countries that are not in the $recommendation_priority_map.
     * Priority is used to determine which payment gateway to recommend first.
     * The lower the number, the higher the priority.
     *
     * @var array
     */
    private static $recommendation_priority = array(
  'woocommerce_payments' => 1,
  'woocommerce_payments:with-in-person-payments' => 1,
  'woocommerce_payments:without-in-person-payments' => 1,
  'stripe' => 2,
  'woo-mercado-pago-custom' => 3,
  'ppcp-gateway' => 4,
  'mollie_wc_gateway_banktransfer' => 5,
  'razorpay' => 5,
  'payfast' => 5,
  'payubiz' => 6,
  'square_credit_card' => 6,
  'klarna_payments' => 6,
  'kco' => 6,
  'paystack' => 6,
  'eway' => 7,
  'amazon_payments_advanced' => 7,
  'affirm' => 8,
  'afterpay' => 9,
  'zipmoney' => 10,
  'payoneer-checkout' => 11,
);

    /**
     * Get default specs.
     *
     * @return array Default specs.
     */
    public static function get_all()
    {
        // stub
    }

    /**
     * Get array of countries supported by WCPay depending on feature flag.
     *
     * @return array Array of countries.
     */
    public static function get_wcpay_countries()
    {
        // stub
    }

    /**
     * Get rules that match the store base location to one of the provided countries.
     *
     * @param array $countries Array of countries to match.
     * @return object Rules to match.
     */
    public static function get_rules_for_countries($countries)
    {
        // stub
    }

    /**
     * Get rules that match the store's selling venues.
     *
     * @param array $selling_venues Array of venues to match.
     * @return object Rules to match.
     */
    public static function get_rules_for_selling_venues($selling_venues)
    {
        // stub
    }

    /**
     * Get rules for when selling offline for core profiler.
     *
     * @return object Rules to match.
     */
    public static function get_rules_selling_offline()
    {
        // stub
    }

    /**
     * Get default rules for CBD based on given argument.
     *
     * @param bool $should_have Whether or not the store should have CBD as an industry (true) or not (false).
     * @return object Rules to match.
     */
    public static function get_rules_for_cbd($should_have)
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Get recommendation priority for a given payment gateway by id and country.
     * If country is not supported, return null.
     *
     * @param string $gateway_id Payment gateway id.
     * @param string $country_code Store country code.
     * @return int|null Priority. Priority is 0-indexed, so 0 is the highest priority.
     */
    private static function get_recommendation_priority($gateway_id, $country_code)
    {
        // stub
    }

    /**
     * Get the default recommendation priority for a payment gateway.
     * This is used when a country is not in the $recommendation_priority_map array.
     *
     * @param string $id Payment gateway id.
     * @return int Priority.
     */
    private static function get_default_recommendation_priority($id)
    {
        // stub
    }

}

