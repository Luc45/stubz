<?php
/**
 * WC_Geolocation Class.
 */
class WC_Geolocation
{
    public const GEOLITE_DB = 'http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz';
    public const GEOLITE_IPV6_DB = 'http://geolite.maxmind.com/download/geoip/database/GeoIPv6.dat.gz';
    public const GEOLITE2_DB = 'http://geolite.maxmind.com/download/geoip/database/GeoLite2-Country.tar.gz';
    /**
     * Get current user IP Address.
     *
     * @return string
     */
    public static function get_ip_address()
{
}
    /**
     * Get user IP Address using an external service.
     * This can be used as a fallback for users on localhost where
     * get_ip_address() will be a local IP and non-geolocatable.
     *
     * @return string
     */
    public static function get_external_ip_address()
{
}
    /**
     * Geolocate an IP address.
     *
     * @param  string $ip_address   IP Address.
     * @param  bool   $fallback     If true, fallbacks to alternative IP detection (can be slower).
     * @param  bool   $api_fallback If true, uses geolocation APIs if the database file doesn't exist (can be slower).
     * @return array
     */
    public static function geolocate_ip($ip_address = '', $fallback = false, $api_fallback = true)
{
}
    /**
     * Path to our local db.
     *
     * @deprecated 3.9.0
     * @param  string $deprecated Deprecated since 3.4.0.
     * @return string
     */
    public static function get_local_database_path($deprecated = '2')
{
}
    /**
     * Update geoip database.
     *
     * @deprecated 3.9.0
     * Extract files with PharData. Tool built into PHP since 5.3.
     */
    public static function update_database()
{
}
    /**
     * Hook in geolocation functionality.
     *
     * @deprecated 3.9.0
     * @return null
     */
    public static function init()
{
}
    /**
     * Prevent geolocation via MaxMind when using legacy versions of php.
     *
     * @deprecated 3.9.0
     * @since 3.4.0
     * @param string $default_customer_address current value.
     * @return string
     */
    public static function disable_geolocation_on_legacy_php($default_customer_address)
{
}
    /**
     * Maybe trigger a DB update for the first time.
     *
     * @deprecated 3.9.0
     * @param  string $new_value New value.
     * @param  string $old_value Old value.
     * @return string
     */
    public static function maybe_update_database($new_value, $old_value)
{
}
}
