<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class with methods for handling order In-Person Payments.
 */
class IppFunctions
{
    /**
     * Returns if order is eligible to accept In-Person Payments.
     *
     * @param WC_Order $order order that the conditions are checked for.
     *
     * @return bool true if order is eligible, false otherwise
     */
    public static function is_order_in_person_payment_eligible(WC_Order $order): bool
    {
        // stub
    }

    /**
     * Returns if store is eligible to accept In-Person Payments.
     *
     * @return bool true if store is eligible, false otherwise
     */
    public static function is_store_in_person_payment_eligible(): bool
    {
        // stub
    }

    /**
     * Checks if the store has specified country location and currency used.
     *
     * @param string $country country to compare store's country with.
     * @param string $currency currency to compare store's currency with.
     *
     * @return bool true if specified country and currency match the store's ones. false otherwise
     */
    public static function has_store_specified_country_currency(string $country, string $currency): bool
    {
        // stub
    }

}

