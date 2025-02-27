<?php

/**
 * WC_Tracks_Client class.
 */
class WC_Tracks_Client
{
    const PIXEL = 'https://pixel.wp.com/t.gif';

    const BROWSER_TYPE = 'php-agent';

    const USER_AGENT_SLUG = 'tracks-client';

    /**
     * Initialize tracks client class
     *
     * @return void
     */
    public static function init()
    {
        // stub
    }

    /**
     * Check if identity cookie is set, if not set it.
     *
     * @return void
     */
    public static function maybe_set_identity_cookie()
    {
        // stub
    }

    /**
     * Record a Tracks event
     *
     * @param  array $event Array of event properties.
     * @return bool|WP_Error         True on success, WP_Error on failure.
     */
    public static function record_event($event)
    {
        // stub
    }

    /**
     * Synchronously request the pixel.
     *
     * @param string $pixel pixel url and query string.
     * @return bool Always returns true.
     */
    public static function record_pixel($pixel)
    {
        // stub
    }

    /**
     * Create a timestamp representing milliseconds since 1970-01-01
     *
     * @return string A string representing a timestamp.
     */
    public static function build_timestamp()
    {
        // stub
    }

    /**
     * Add request timestamp and no cache parameter to pixel.
     * Use this the latest possible before the HTTP request.
     *
     * @param string $pixel Pixel URL.
     * @return string Pixel URL with request timestamp and URL terminator.
     */
    public static function add_request_timestamp_and_nocache($pixel)
    {
        // stub
    }

    /**
     * Get a user's identity to send to Tracks. If Jetpack exists, default to its implementation.
     *
     * @param int $user_id User id.
     * @return array Identity properties.
     */
    public static function get_identity($user_id)
    {
        // stub
    }

    /**
     * Grabs the user's anon id from cookies, or generates and sets a new one
     *
     * @return string An anon id for the user
     */
    public static function get_anon_id()
    {
        // stub
    }

}
