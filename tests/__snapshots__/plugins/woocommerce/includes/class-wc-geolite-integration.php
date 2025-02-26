<?php

namespace ;

/**
 * Geolite integration class.
 *
 * @deprecated 3.9.0
 */
class WC_Geolite_Integration extends \
{
    /**
     * MaxMind GeoLite2 database path.
     *
     * @var string
     */
    private $database = '';

    /**
     * Logger instance.
     *
     * @var WC_Logger
     */
    private $log = null;

    /**
     * Constructor.
     *
     * @param string $database MaxMind GeoLite2 database path.
     */
    public function __construct($database)
    {
        // stub
    }

    /**
     * Get country 2-letters ISO by IP address.
     * Returns empty string when not able to find any ISO code.
     *
     * @param string $ip_address User IP address.
     * @return string
     * @deprecated 3.9.0
     */
    public function get_country_iso($ip_address)
    {
        // stub
    }

    /**
     * Logging method.
     *
     * @param string $message Log message.
     * @param string $level   Log level.
     *                        Available options: 'emergency', 'alert',
     *                        'critical', 'error', 'warning', 'notice',
     *                        'info' and 'debug'.
     *                        Defaults to 'info'.
     */
    private function log($message, $level = 'info')
    {
        // stub
    }

}

