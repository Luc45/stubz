<?php

/**
 * WC_Tracks_Footer_Pixel class.
 */
class WC_Tracks_Footer_Pixel
{
    /**
     * Singleton instance.
     *
     * @var WC_Tracks_Footer_Pixel
     */
    protected static $instance = \null;
    /**
     * Events to send to Tracks.
     *
     * @var array
     */
    protected $events = array();
    /**
     * Instantiate the singleton.
     *
     * @return WC_Tracks_Footer_Pixel
     */
    public static function instance()
    {
    }
    /**
     * Constructor - attach hooks to the singleton instance.
     */
    public function __construct()
    {
    }
    /**
     * Record a Tracks event
     *
     * @param  array $event Array of event properties.
     * @return bool|WP_Error True on success, WP_Error on failure.
     */
    public static function record_event($event)
    {
    }
    /**
     * Add a Tracks event to the queue.
     *
     * @param WC_Tracks_Event $event Event to track.
     */
    public function add_event($event)
    {
    }
    /**
     * Add events as tracking pixels to page footer.
     */
    public function render_tracking_pixels()
    {
    }
    /**
     * Fire off API calls for events that weren't converted to pixels.
     *
     * This handles wp_redirect().
     */
    public function send_tracks_requests()
    {
    }
    /**
     * Get all events.
     */
    public static function get_events()
    {
    }
    /**
     * Clear all queued events.
     */
    public static function clear_events()
    {
    }
}
