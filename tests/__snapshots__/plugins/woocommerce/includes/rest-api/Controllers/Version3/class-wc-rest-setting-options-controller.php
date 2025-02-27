<?php

/**
 * REST API Setting Options controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Setting_Options_V2_Controller
 */
class WC_REST_Setting_Options_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Get setting data.
     *
     * @param string $group_id Group ID.
     * @param string $setting_id Setting ID.
     * @return stdClass|WP_Error
     */
    public function get_setting($group_id, $setting_id)
    {
        // stub
    }

    /**
     * Callback for allowed keys for each setting response.
     *
     * @param  string $key Key to check.
     * @return boolean
     */
    public function allowed_setting_keys($key)
    {
        // stub
    }

    /**
     * Get all settings in a group.
     *
     * @param string $group_id Group ID.
     * @return array|WP_Error
     */
    public function get_group_settings($group_id)
    {
        // stub
    }

    /**
     * Returns a list of countries and states for use in the base location setting.
     *
     * @since  3.0.7
     * @return array Array of states and countries.
     */
    private function get_countries_and_states()
    {
        // stub
    }

    /**
     * Get the settings schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}
