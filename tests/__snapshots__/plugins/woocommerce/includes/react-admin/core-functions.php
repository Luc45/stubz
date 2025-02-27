<?php

/**
 * Format a number using the decimal and thousands separator settings in WooCommerce.
 *
 * @param mixed $number Number to be formatted.
 * @return string
 */
function wc_admin_number_format($number)
{
    // stub
}

/**
 * Retrieves a URL to relative path inside WooCommerce admin with
 * the provided query parameters.
 *
 * @param  string $path Relative path of the desired page.
 * @param  array  $query Query parameters to append to the path.
 *
 * @return string       Fully qualified URL pointing to the desired path.
 */
function wc_admin_url($path = null, $query = array (
))
{
    // stub
}

/**
 * Record an event using Tracks.
 *
 * @internal WooCommerce core only includes Tracks in admin, not the REST API, so we need to include it.
 * @param string $event_name Event name for tracks.
 * @param array  $properties Properties to pass along with event.
 */
function wc_admin_record_tracks_event($event_name, $properties = array (
))
{
    // stub
}
