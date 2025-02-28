<?php

/**
 * Product usagee
 */
class WC_Product_Usage
{
    /**
     * Load Product Usage class.
     *
     * @since 9.3.0
     */
    public static function load()
    {
    }
    /**
     * Include support files.
     *
     * @since 9.3.0
     */
    protected static function includes()
    {
    }
    /**
     * Get product usage rule if it needs to be applied to the given product id.
     *
     * @param int $product_id product id to get feature restriction rules.
     * @since 9.3.0
     */
    public static function get_rules_for_product(int $product_id) : ?\WC_Product_Usage_Rule_Set
    {
    }
}