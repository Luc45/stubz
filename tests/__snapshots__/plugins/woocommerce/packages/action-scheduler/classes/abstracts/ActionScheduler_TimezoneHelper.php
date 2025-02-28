<?php

/**
 * Class ActionScheduler_TimezoneHelper
 */
abstract class ActionScheduler_TimezoneHelper
{
    /**
     * DateTimeZone object.
     *
     * @var null|DateTimeZone
     */
    private static $local_timezone = null;

    /**
     * Set a DateTime's timezone to the WordPress site's timezone, or a UTC offset
     * if no timezone string is available.
     *
     * @since  2.1.0
     *
     * @param DateTime $date Timestamp.
     * @return ActionScheduler_DateTime
     */
    public static function set_local_timezone(DateTime $date)
{
}
    /**
     * Helper to retrieve the timezone string for a site until a WP core method exists
     * (see https://core.trac.wordpress.org/ticket/24730).
     *
     * Adapted from wc_timezone_string() and https://secure.php.net/manual/en/function.timezone-name-from-abbr.php#89155.
     *
     * If no timezone string is set, and its not possible to match the UTC offset set for the site to a timezone
     * string, then an empty string will be returned, and the UTC offset should be used to set a DateTime's
     * timezone.
     *
     * @since 2.1.0
     * @param bool $reset Unused.
     * @return string PHP timezone string for the site or empty if no timezone string is available.
     */
    protected static function get_local_timezone_string($reset = false)
{
}
    /**
     * Get timezone offset in seconds.
     *
     * @since  2.1.0
     * @return float
     */
    protected static function get_local_timezone_offset()
{
}
    /**
     * Get local timezone.
     *
     * @param bool $reset Toggle to discard stored value.
     * @deprecated 2.1.0
     */
    public static function get_local_timezone($reset = false)
{
}
}
