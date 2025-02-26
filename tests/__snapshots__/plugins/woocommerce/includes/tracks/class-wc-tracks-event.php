<?php

namespace ;

/**
 * WC_Tracks_Event class.
 */
#[AllowDynamicProperties]
class WC_Tracks_Event extends \
{
    const EVENT_NAME_REGEX = '/^(([a-z0-9]+)_){1}([a-z0-9_]+)$/';

    const PROP_NAME_REGEX = '/^[a-z_][a-z0-9_]*$/';

    /**
     * Error message as WP_Error.
     *
     * @var WP_Error
     */
    public $error = null;

    /**
     * WC_Tracks_Event constructor.
     *
     * @param array $event Event properties.
     */
    public function __construct($event)
    {
        // stub
    }

    /**
     * Record Tracks event
     *
     * @return bool Always returns true.
     */
    public function record()
    {
        // stub
    }

    /**
     * Annotate the event with all relevant info.
     *
     * @param  array $event Event arguments.
     * @return bool|WP_Error True on success, WP_Error on failure.
     */
    public static function validate_and_sanitize($event)
    {
        // stub
    }

    /**
     * Build a pixel URL that will send a Tracks event when fired.
     * On error, returns an empty string ('').
     *
     * @return string A pixel URL or empty string ('') if there were invalid args.
     */
    public function build_pixel_url()
    {
        // stub
    }

    /**
     * Check if event name is valid.
     *
     * @param string $name Event name.
     * @return false|int
     */
    public static function event_name_is_valid($name)
    {
        // stub
    }

    /**
     * Check if a property name is valid.
     *
     * @param string $name Event property.
     * @return false|int
     */
    public static function prop_name_is_valid($name)
    {
        // stub
    }

    /**
     * Check event names
     *
     * @param object $event An event object.
     */
    public static function scrutinize_event_names($event)
    {
        // stub
    }

}

