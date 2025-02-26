<?php

namespace ;

/**
 * Class ActionScheduler_Compatibility
 */
class ActionScheduler_Compatibility
{
    /**
     * Converts a shorthand byte value to an integer byte value.
     *
     * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
     *
     * @link https://secure.php.net/manual/en/function.ini-get.php
     * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
     *
     * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
     * @return int An integer byte value.
     */
    public static function convert_hr_to_bytes($value)
    {
        // stub
    }

    /**
     * Attempts to raise the PHP memory limit for memory intensive processes.
     *
     * Only allows raising the existing limit and prevents lowering it.
     *
     * Wrapper for wp_raise_memory_limit(), added in WordPress v4.6.0
     *
     * @return bool|int|string The limit that was set or false on failure.
     */
    public static function raise_memory_limit()
    {
        // stub
    }

    /**
     * Attempts to raise the PHP timeout for time intensive processes.
     *
     * Only allows raising the existing limit and prevents lowering it. Wrapper for wc_set_time_limit(), when available.
     *
     * @param int $limit The time limit in seconds.
     */
    public static function raise_time_limit($limit = 0)
    {
        // stub
    }

}

