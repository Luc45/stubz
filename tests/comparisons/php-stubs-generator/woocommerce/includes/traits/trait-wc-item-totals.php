<?php

/**
 * Trait WC_Item_Totals.
 *
 * Right now this do not have much, but plan is to eventually move all shared calculation logic between Orders and Cart in this file.
 *
 * @since 3.9.0
 */
trait WC_Item_Totals
{
    /**
     * Line items to calculate. Define in child class.
     *
     * @since 3.9.0
     * @param string $field Field name to calculate upon.
     *
     * @return array having `total`|`subtotal` property.
     */
    protected abstract function get_values_for_total($field);
    /**
     * Return rounded total based on settings. Will be used by Cart and Orders.
     *
     * @since 3.9.0
     *
     * @param array $values Values to round. Should be with precision.
     *
     * @return float|int Appropriately rounded value.
     */
    public static function get_rounded_items_total($values)
    {
    }
    /**
     * Apply rounding to item subtotal before summing.
     *
     * @since 3.9.0
     * @param float $value Item subtotal value.
     * @return float
     */
    public static function round_item_subtotal($value)
    {
    }
    /**
     * Should always round at subtotal?
     *
     * @since 3.9.0
     * @return bool
     */
    protected static function round_at_subtotal()
    {
    }
    /**
     * Apply rounding to an array of taxes before summing. Rounds to store DP setting, ignoring precision.
     *
     * @since  3.2.6
     * @param  float $value    Tax value.
     * @param  bool  $in_cents Whether precision of value is in cents.
     * @return float
     */
    protected static function round_line_tax($value, $in_cents = \true)
    {
    }
}