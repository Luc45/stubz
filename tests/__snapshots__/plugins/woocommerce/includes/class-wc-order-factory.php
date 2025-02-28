<?php

/**
 * Order factory class
 */
class WC_Order_Factory
{
    /**
     * Get order.
     *
     * @param  mixed $order_id (default: false) Order ID to get.
     * @return \WC_Order|bool
     */
    public static function get_order($order_id = false)
{
}
    /**
     * Get multiple orders (by ID).
     *
     * @param array[mixed] $order_ids                     Array of order IDs to get.
     * @param boolean      $skip_invalid (default: false) TRUE if invalid IDs or orders should be ignored.
     * @return array[\WC_Order]
     *
     * @throws \Exception When an invalid order is found.
     */
    public static function get_orders($order_ids = array(), $skip_invalid = false)
{
}
    /**
     * Get order item.
     *
     * @param int $item_id Order item ID to get.
     * @return WC_Order_Item|false if not found
     */
    public static function get_order_item($item_id = 0)
{
}
    /**
     * Get the order ID depending on what was passed.
     *
     * @since 3.0.0
     * @param  mixed $order Order data to convert to an ID.
     * @return int|bool false on failure
     */
    public static function get_order_id($order)
{
}
    /**
     * Try to determine the current order ID based on available global state.
     *
     * @return false|int
     */
    private static function get_global_order_id()
{
}
    /**
     * Gets the class name bunch of order instances should have based on their IDs.
     *
     * @param array $order_ids Order IDs to get the class name for.
     *
     * @return array Array of order_id => class_name.
     */
    public static function get_class_names_for_order_ids($order_ids)
{
}
    /**
     * Gets the class name an order instance should have based on its ID.
     *
     * @since 6.9.0
     * @param int $order_id The order ID.
     * @return string The class name or FALSE if the class does not exist.
     */
    private static function get_class_name_for_order_id($order_id)
{
}
}
