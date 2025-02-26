<?php

namespace ;

/**
 * Simple product class.
 */
class WC_Product_Simple extends \WC_Product
{
    /**
     * Initialize simple product.
     *
     * @param WC_Product|int $product Product instance or ID.
     */
    public function __construct($product = 0)
    {
        // stub
    }

    /**
     * Get internal type.
     *
     * @return string
     */
    public function get_type()
    {
        // stub
    }

    /**
     * Get the add to url used mainly in loops.
     *
     * @return string
     */
    public function add_to_cart_url()
    {
        // stub
    }

    /**
     * Get the add to cart button text.
     *
     * @return string
     */
    public function add_to_cart_text()
    {
        // stub
    }

    /**
     * Get the add to cart button text description - used in aria tags.
     *
     * @since 3.3.0
     * @return string
     */
    public function add_to_cart_description()
    {
        // stub
    }

    /**
     * Get the add to cart button success message - used to update the mini cart live region.
     *
     * @return string
     */
    public function add_to_cart_success_message()
    {
        // stub
    }

}

