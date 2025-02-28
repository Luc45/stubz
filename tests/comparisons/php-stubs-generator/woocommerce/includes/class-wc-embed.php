<?php

/**
 * Embed Class which handles any WooCommerce Products that are embedded on this site or another site.
 */
class WC_Embed
{
    /**
     * Init embed class.
     *
     * @since 2.4.11
     */
    public static function init()
    {
    }
    /**
     * Remove comments button on product embeds.
     *
     * @since 2.6.0
     */
    public static function remove_comments_button()
    {
    }
    /**
     * Check if this is an embedded product - to make sure we don't mess up regular posts.
     *
     * @since 2.4.11
     * @return bool
     */
    public static function is_embedded_product()
    {
    }
    /**
     * Create the excerpt for embedded products - we want to add the buy button to it.
     *
     * @since 2.4.11
     * @param string $excerpt Embed short description.
     * @return string
     */
    public static function the_excerpt($excerpt)
    {
    }
    /**
     * Create the button to go to the product page for embedded products.
     *
     * @since 2.4.11
     * @return string
     */
    public static function product_buttons()
    {
    }
    /**
     * Prints the markup for the rating stars.
     *
     * @since 2.4.11
     */
    public static function get_ratings()
    {
    }
    /**
     * Basic styling.
     */
    public static function print_embed_styles()
    {
    }
}