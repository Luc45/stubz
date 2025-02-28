<?php

/**
 * The service class responsible for interacting with MaxMind databases.
 *
 * @since 3.9.0
 */
class WC_Integration_MaxMind_Database_Service
{
    /**
     * The name of the MaxMind database to utilize.
     */
    const DATABASE = 'GeoLite2-Country';
    /**
     * The extension for the MaxMind database.
     */
    const DATABASE_EXTENSION = '.mmdb';
    /**
     * WC_Integration_MaxMind_Database_Service constructor.
     *
     * @param string|null $database_prefix A prefix for the MaxMind database filename.
     */
    public function __construct($database_prefix)
    {
    }
    /**
     * Fetches the path that the database should be stored.
     *
     * @return string The local database path.
     */
    public function get_database_path()
    {
    }
    /**
     * Fetches the database from the MaxMind service.
     *
     * @param string $license_key The license key to be used when downloading the database.
     * @return string|WP_Error The path to the database file or an error if invalid.
     */
    public function download_database($license_key)
    {
    }
    /**
     * Fetches the ISO country code associated with an IP address.
     *
     * @param string $ip_address The IP address to find the country code for.
     * @return string The country code for the IP address, or empty if not found.
     */
    public function get_iso_country_code_for_ip($ip_address)
    {
    }
}