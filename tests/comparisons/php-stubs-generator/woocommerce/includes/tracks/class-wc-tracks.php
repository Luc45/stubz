<?php

/**
 * PHP Tracks Client
 *
 * @package WooCommerce\Tracks
 */
/**
 * WC_Tracks class.
 */
class WC_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'wcadmin_';
    /**
     * Get total product counts.
     *
     * @return int Number of products.
     */
    public static function get_products_count()
    {
    }
    /**
     * Gather blog related properties.
     *
     * @param int $user_id User id.
     * @return array Blog details.
     */
    public static function get_blog_details($user_id)
    {
    }
    /**
     * Gather details from the request to the server.
     *
     * @return array Server details.
     */
    public static function get_server_details()
    {
    }
    /**
     * Get role-related details.
     *
     * @param WP_User $user The user object.
     * @return array The role details.
     */
    public static function get_role_details($user)
    {
    }
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     * Note: the event request won't be made if $properties has a member called `error`.
     *
     * @param string $event_name The name of the event.
     * @param array  $event_properties Custom properties to send with the event.
     * @return bool|WP_Error True for success or WP_Error if the event pixel could not be fired.
     */
    public static function record_event($event_name, $event_properties = array())
    {
    }
    /**
     * Get all properties for the event including filtered and identity properties.
     *
     * @param string $event_name Event name.
     * @param array  $event_properties Event specific properties.
     * @return array
     */
    public static function get_properties($event_name, $event_properties)
    {
    }
}