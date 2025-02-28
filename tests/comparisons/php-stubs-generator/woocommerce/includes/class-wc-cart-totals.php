<?php

/**
 * WC_Cart_Totals class.
 *
 * @since 3.2.0
 */
final class WC_Cart_Totals
{
    use \WC_Item_Totals;
    /**
     * Sets up the items provided, and calculate totals.
     *
     * @since 3.2.0
     * @throws Exception If missing WC_Cart object.
     * @param WC_Cart $cart Cart object to calculate totals for.
     */
    public function __construct(&$cart = \null)
    {
    }
    /**
     * Get a single total with or without precision (in cents).
     *
     * @since  3.2.0
     * @param  string $key Total to get.
     * @param  bool   $in_cents Should the totals be returned in cents, or without precision.
     * @return int|float
     */
    public function get_total($key = 'total', $in_cents = \false)
    {
    }
    /**
     * Get all totals with or without precision (in cents).
     *
     * @since  3.2.0
     * @param  bool $in_cents Should the totals be returned in cents, or without precision.
     * @return array.
     */
    public function get_totals($in_cents = \false)
    {
    }
}