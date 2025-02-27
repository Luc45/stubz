<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * A class of utilities for dealing with orders.
 */
final class OrderUtil
{
    /**
     * Helper function to get screen name of orders page in wp-admin.
     *
     * @return string
     */
    public static function get_order_admin_screen(): string
    {
        // stub
    }

    /**
     * Helper function to get whether custom order tables are enabled or not.
     *
     * @return bool
     */
    public static function custom_orders_table_usage_is_enabled(): bool
    {
        // stub
    }

    /**
     * Helper function to get whether custom order tables are enabled or not.
     *
     * @return bool
     */
    public static function custom_orders_table_datastore_cache_enabled(): bool
    {
        // stub
    }

    /**
     * Helper function to get whether the orders cache should be used or not.
     *
     * @return bool True if the orders cache should be used, false otherwise.
     */
    public static function orders_cache_usage_is_enabled(): bool
    {
        // stub
    }

    /**
     * Checks if posts and order custom table sync is enabled and there are no pending orders.
     *
     * @return bool
     */
    public static function is_custom_order_tables_in_sync(): bool
    {
        // stub
    }

    /**
     * Gets value of a meta key from WC_Data object if passed, otherwise from the post object.
     * This helper function support backward compatibility for meta box functions, when moving from posts based store to custom tables.
     *
     * @param WP_Post|null  $post Post object, meta will be fetched from this only when `$data` is not passed.
     * @param \WC_Data|null $data WC_Data object, will be preferred over post object when passed.
     * @param string        $key Key to fetch metadata for.
     * @param bool          $single Whether metadata is single.
     *
     * @return array|mixed|string Value of the meta key.
     */
    public static function get_post_or_object_meta(WP_Post|null $post, WC_Data|null $data, string $key, bool $single)
    {
        // stub
    }

    /**
     * Helper function to initialize the global $theorder object, mostly used during order meta boxes rendering.
     *
     * @param WC_Order|WP_Post $post_or_order_object Post or order object.
     *
     * @return bool|WC_Order|WC_Order_Refund WC_Order object.
     */
    public static function init_theorder_object($post_or_order_object)
    {
        // stub
    }

    /**
     * Helper function to id from an post or order object.
     *
     * @param WP_Post/WC_Order $post_or_order_object WP_Post/WC_Order object to get ID for.
     *
     * @return int Order or post ID.
     */
    public static function get_post_or_order_id($post_or_order_object): int
    {
        // stub
    }

    /**
     * Checks if passed id, post or order object is a WC_Order object.
     *
     * @param int|WP_Post|WC_Order $order_id Order ID, post object or order object.
     * @param string[]             $types    Types to match against.
     *
     * @return bool Whether the passed param is an order.
     */
    public static function is_order($order_id, $types = array (
  0 => 'shop_order',
))
    {
        // stub
    }

    /**
     * Returns type pf passed id, post or order object.
     *
     * @param int|WP_Post|WC_Order $order_id Order ID, post object or order object.
     *
     * @return string|null Type of the order.
     */
    public static function get_order_type($order_id)
    {
        // stub
    }

    /**
     * Helper method to generate admin url for an order.
     *
     * @param int $order_id Order ID.
     *
     * @return string Admin url for an order.
     */
    public static function get_order_admin_edit_url(int $order_id): string
    {
        // stub
    }

    /**
     * Helper method to generate admin URL for new order.
     *
     * @return string Link for new order.
     */
    public static function get_order_admin_new_url(): string
    {
        // stub
    }

    /**
     * Check if the current admin screen is an order list table.
     *
     * @param string $order_type Optional. The order type to check for. Default shop_order.
     *
     * @return bool
     */
    public static function is_order_list_table_screen($order_type = 'shop_order'): bool
    {
        // stub
    }

    /**
     * Check if the current admin screen is for editing an order.
     *
     * @param string $order_type Optional. The order type to check for. Default shop_order.
     *
     * @return bool
     */
    public static function is_order_edit_screen($order_type = 'shop_order'): bool
    {
        // stub
    }

    /**
     * Check if the current admin screen is adding a new order.
     *
     * @param string $order_type Optional. The order type to check for. Default shop_order.
     *
     * @return bool
     */
    public static function is_new_order_screen($order_type = 'shop_order'): bool
    {
        // stub
    }

    /**
     * Get the name of the database table that's currently in use for orders.
     *
     * @return string
     */
    public static function get_table_for_orders()
    {
        // stub
    }

    /**
     * Get the name of the database table that's currently in use for orders.
     *
     * @return string
     */
    public static function get_table_for_order_meta()
    {
        // stub
    }

    /**
     * Counts number of orders of a given type.
     *
     * @since 8.7.0
     *
     * @param string $order_type Order type.
     * @return array<string,int> Array of order counts indexed by order type.
     */
    public static function get_count_for_type($order_type)
    {
        // stub
    }

    /**
     * Removes the 'wc-' prefix from status.
     *
     * @param string $status The status to remove the prefix from.
     *
     * @return string The status without the prefix.
     * @since 9.2.0
     */
    public static function remove_status_prefix(string $status): string
    {
        // stub
    }

}