<?php

/**
 * WC_Cart_Fees class.
 *
 * @since 3.2.0
 */
final class WC_Cart_Fees
{
    /**
     * Constructor. Reference to the cart.
     *
     * @param null $deprecated Deprecated since WooCommerce 8.2.0.
     *
     * @since 3.2.0
     */
    public function __construct($deprecated = \null)
    {
    }
    /**
     * Register methods for this object on the appropriate WordPress hooks.
     */
    public function init()
    {
    }
    /**
     * Add a fee. Fee IDs must be unique.
     *
     * @since 3.2.0
     * @param array $args Array of fee properties.
     * @return object Either a fee object if added, or a WP_Error if it failed.
     */
    public function add_fee($args = array())
    {
    }
    /**
     * Get fees.
     *
     * @return array
     */
    public function get_fees()
    {
    }
    /**
     * Set fees.
     *
     * @param object[] $raw_fees Array of fees.
     */
    public function set_fees($raw_fees = array())
    {
    }
    /**
     * Remove all fees.
     *
     * @since 3.2.0
     */
    public function remove_all_fees()
    {
    }
}
