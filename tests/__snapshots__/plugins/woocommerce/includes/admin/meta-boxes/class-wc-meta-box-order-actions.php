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
}
