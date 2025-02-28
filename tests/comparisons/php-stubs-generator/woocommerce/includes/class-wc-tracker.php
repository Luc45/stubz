<?php

// phpcs:disable Squiz.Classes.ClassFileName.NoMatch, Squiz.Classes.ValidClassName.NotCamelCaps -- Backwards compatibility.
/**
 * WooCommerce Tracker Class
 */
class WC_Tracker
{
    /**
     * Hook into cron event.
     */
    public static function init()
    {
    }
    /**
     * Decide whether to send tracking data or not.
     *
     * @param boolean $override Should override?.
     */
    public static function send_tracking_data($override = \false)
    {
    }
    /**
     * Get all the tracking data.
     *
     * @return array
     */
    public static function get_tracking_data()
    {
    }
    /**
     * Get the current theme info, theme name and version.
     *
     * @return array
     */
    public static function get_theme_info()
    {
    }
    /**
     * Get product totals based on product type.
     *
     * @return array
     */
    public static function get_product_counts()
    {
    }
    /**
     * Search a specific post for text content.
     *
     * @param integer $post_id The id of the post to search.
     * @param string  $text    The text to search for.
     * @return string 'Yes' if post contains $text (otherwise 'No').
     */
    public static function post_contains_text($post_id, $text)
    {
    }
    /**
     * Get tracker data for a specific block type on a woocommerce page.
     *
     * @param string $block_name The name (id) of a block, e.g. `woocommerce/cart`.
     * @param string $woo_page_name The woo page to search, e.g. `cart`.
     * @return array Associative array of tracker data with keys:
     * - page_contains_block
     * - block_attributes
     */
    public static function get_block_tracker_data($block_name, $woo_page_name)
    {
    }
    /**
     * Get tracker data for a pickup location method.
     *
     * @return array Associative array of tracker data with keys:
     * - pickup_location_enabled
     * - pickup_locations_count
     */
    public static function get_pickup_location_data()
    {
    }
    /**
     * Get tracker data for additional fields on the checkout page.
     *
     * @return array Array of fields count and names.
     */
    public static function get_checkout_additional_fields_data()
    {
    }
    /**
     * Get info about the cart & checkout pages.
     *
     * @return array
     */
    public static function get_cart_checkout_info()
    {
    }
    /**
     * Get info about WooCommerce Mobile App usage
     *
     * @return array
     */
    public static function get_woocommerce_mobile_usage()
    {
    }
}