<?php

/**
 * WC_Meta_Box_Order_Actions Class.
 */
class WC_Meta_Box_Order_Actions
{
    /**
     * Output the metabox.
     *
     * @param WP_Post|WC_Order $post Post or order object.
     */
    public static function output($post)
{
}
    /**
     * Forms a trash/delete order URL.
     *
     * @param int $order_id The order ID for which we want a trash/delete URL.
     *
     * @return string
     */
    private static function get_trash_or_delete_order_link(int $order_id): string
{
}
    /**
     * Save meta box data.
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post Post Object.
     */
    public static function save($post_id, $post)
{
}
    /**
     * Set the correct message ID.
     *
     * @param string $location Location.
     * @since  2.3.0
     * @static
     * @return string
     */
    public static function set_email_sent_message($location)
{
}
    /**
     * Get the available order actions for a given order.
     *
     * @since 5.8.0
     *
     * @param WC_Order|null $order The order object or null if no order is available.
     *
     * @return array
     */
    private static function get_available_order_actions_for_order($order)
{
}
}
