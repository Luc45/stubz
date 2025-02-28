<?php

/**
 * Geolite integration class.
 *
 * @deprecated 3.9.0
 */
class WC_Geolite_Integration
{
    /**
     * Constructor.
     *
     * @param string $database MaxMind GeoLite2 database path.
     */
    public function __construct($database)
    {
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
    }
}