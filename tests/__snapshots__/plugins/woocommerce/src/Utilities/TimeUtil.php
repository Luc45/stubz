<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * Class with date and time utilities.
 */
class TimeUtil
{
    /**
     * Instance of a DateTimeZone object representing UTC.
     *
     * @var DateTimeZone
     */
    private static DateTimeZone $utc_date_time_zone;
    /**
     * Class constructor.
     */
    public function __construct()
{
}
    /**
     * Get the instance of the DateTimeZone object representing UTC.
     *
     * @return DateTimeZone DateTimeZone object representing UTC.
     */
    public static function get_utc_date_time_zone(): DateTimeZone
{
}
    /**
     * Check if a string represents a valid date in a given format.
     *
     * @param string $date The date string to check.
     * @param string $format The format to verify the date string against.
     * @return bool True if $date represents a valid date/time according to $format, false otherwise.
     */
    public static function is_valid_date(string $date, string $format = 'Y-m-d H:i:s'): bool
{
}
}