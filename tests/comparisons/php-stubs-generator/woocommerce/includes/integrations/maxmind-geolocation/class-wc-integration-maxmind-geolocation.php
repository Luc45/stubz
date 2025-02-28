<?php

/**
 * WC Integration MaxMind Geolocation
 *
 * @since 3.9.0
 */
class WC_Integration_MaxMind_Geolocation extends \WC_Integration
{
    /**
     * Initialize the integration.
     */
    public function __construct()
    {
    }
    /**
     * Override the normal options so we can print the database file path to the admin,
     */
    public function admin_options()
    {
    }
    /**
     * Initializes the settings fields.
     */
    public function init_form_fields()
    {
    }
    /**
     * Get database service.
     *
     * @return WC_Integration_MaxMind_Database_Service|null
     */
    public function get_database_service()
    {
    }
    /**
     * Checks to make sure that the license key is valid.
     *
     * @param string $key The key of the field.
     * @param mixed  $value The value of the field.
     * @return mixed
     * @throws Exception When the license key is invalid.
     */
    public function validate_license_key_field($key, $value)
    {
    }
    /**
     * Updates the database used for geolocation queries.
     *
     * @param string|null $new_database_path The path to the new database file. Null will fetch a new archive.
     */
    public function update_database($new_database_path = \null)
    {
    }
    /**
     * Performs a geolocation lookup against the MaxMind database for the given IP address.
     *
     * @param array  $data       Geolocation data.
     * @param string $ip_address The IP address to geolocate.
     * @return array Geolocation including country code, state, city and postcode based on an IP address.
     */
    public function get_geolocation($data, $ip_address)
    {
    }
    /**
     * Display notice if license key is missing.
     *
     * @param mixed $old_value Option old value.
     * @param mixed $new_value Current value.
     */
    public function display_missing_license_key_notice($old_value, $new_value)
    {
    }
}
