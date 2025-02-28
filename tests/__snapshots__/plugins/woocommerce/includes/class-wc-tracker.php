<?php

/**
 * WooCommerce Tracker Class
 */
class WC_Tracker
{
    /**
     * URL to the WooThemes Tracker API endpoint.
     *
     * @var string
     */
    private static $api_url = 'https://tracking.woocommerce.com/v1/';

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
    public static function send_tracking_data($override = false)
{
}
    /**
     * Get the last time tracking data was sent.
     *
     * @return int|bool
     */
    private static function get_last_send_time()
{
}
    /**
     * Test whether this site is a staging site according to the Jetpack criteria.
     *
     * With Jetpack 8.1+, Jetpack::is_staging_site has been deprecated.
     * \Automattic\Jetpack\Status::is_staging_site is the replacement.
     * However, there are version of JP where \Automattic\Jetpack\Status exists, but does *not* contain is_staging_site method,
     * so with those, code still needs to use the previous check as a fallback.
     *
     * After upgrading Jetpack Status to v3.3.2 is_staging_site is also deprecated and in_safe_mode is the new replacement.
     * So we check this first of all.
     *
     * @return bool
     */
    private static function is_jetpack_staging_site()
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
     * Get WordPress related data.
     *
     * @return array
     */
    private static function get_wordpress_info()
{
}
    /**
     * Get server related info.
     *
     * @return array
     */
    private static function get_server_info()
{
}
    /**
     * Get all plugins grouped into activated or not.
     *
     * @return array
     */
    private static function get_all_plugins()
{
}
    /**
     * Get the settings of WooCommerce Payments plugin
     *
     * @return array
     */
    private static function get_wcpay_settings()
{
}
    /**
     * Check to see if the helper is connected to WooCommerce.com
     *
     * @return string
     */
    private static function get_helper_connected()
{
}
    /**
     * Get user totals based on user role.
     *
     * @return array
     */
    private static function get_user_counts()
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
     * Get order counts.
     *
     * @return array
     */
    private static function get_order_counts()
{
}
    /**
     * Combine all order data.
     *
     * @return array
     */
    private static function get_orders()
{
}
    /**
     * Get order totals.
     *
     * Keeping the internal statuses names as strings to avoid regression issues (not referencing Automattic\WooCommerce\Enums\OrderInternalStatus class).
     *
     * @since 5.4.0
     * @return array
     */
    private static function get_order_totals()
{
}
    /**
     * Get last order date.
     *
     * @return string
     */
    private static function get_order_dates()
{
}
    /**
     * Extract the group key for an associative array of objects which have unique ids in the key.
     * A 'group_key' property is introduced in the object.
     * For example, two objects with keys like 'WooDataPay ** #123' and 'WooDataPay ** #78' would
     * both have a group_key of 'WooDataPay **' after this function call.
     *
     * @param array  $objects     The array of objects that need to be grouped.
     * @param string $default_key The property that will be the default group_key.
     * @return array Contains the objects with a group_key property.
     */
    private static function extract_group_key($objects, $default_key)
{
}
    /**
     * Get order details by gateway.
     *
     * @return array
     */
    private static function get_orders_by_gateway()
{
}
    /**
     * Get orders origin details.
     *
     * @return array
     */
    private static function get_orders_origins()
{
}
    /**
     * Get review counts for different statuses.
     *
     * @return array
     */
    private static function get_review_counts()
{
}
    /**
     * Get the number of product categories.
     *
     * @return int
     */
    private static function get_category_counts()
{
}
    /**
     * Get the number of product brands.
     *
     * @return int
     */
    private static function get_brands_counts()
{
}
    /**
     * Get a list of all active payment gateways.
     *
     * @return array
     */
    private static function get_active_payment_gateways()
{
}
    /**
     * Get a list of all active shipping methods.
     *
     * @return array
     */
    private static function get_active_shipping_methods()
{
}
    /**
     * Get an array of slugs for WC features that are enabled on the site.
     *
     * @return string[]
     */
    private static function get_enabled_features()
{
}
    /**
     * Get all options starting with woocommerce_ prefix.
     *
     * @return array
     */
    private static function get_all_woocommerce_options_values()
{
}
    /**
     * Look for any template override and return filenames.
     *
     * @return array
     */
    private static function get_all_template_overrides()
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
     * Get info about the Mini Cart Block.
     *
     * @return array
     */
    private static function get_mini_cart_info()
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
    /**
     * Map legacy order meta keys to a column name.
     *
     * @param string $meta_key Legacy meta key name.
     * @return string Mapped column name.
     */
    private static function map_legacy_meta_key_name($meta_key)
{
}
    /**
     * Fetch main order data.
     *
     * @param string  $sort_order Date sort order (ASC or DESC).
     * @param integer $limit      Limit the amount of orders to return (default 20).
     * @return array Found orders indexed by ID.
     */
    private static function get_order_data($sort_order = 'ASC', $limit = 20)
{
}
    /**
     * Fetch additional data for a specific set of orders.
     *
     * @param array $order_ids List of order ID's to fetch data for.
     * @return array Additional data, indexed by order ID.
     */
    private static function get_additional_order_data($order_ids)
{
}
    /**
     * Fetch refund data for a specific set of orders.
     *
     * @param array $order_ids List of order ID's to fetch data for.
     * @return array Refund data, indexed by order ID.
     */
    private static function get_refund_order_data($order_ids)
{
}
    /**
     * Get a snapshot of the first 20 orders and the last 20 orders.
     *
     * @return array
     */
    private static function get_order_snapshot()
{
}
}
