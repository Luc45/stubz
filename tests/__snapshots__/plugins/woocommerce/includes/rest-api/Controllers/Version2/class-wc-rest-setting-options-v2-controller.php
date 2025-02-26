<?php

namespace ;

/**
 * REST API Setting Options controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Setting_Options_V2_Controller
{
    /**
     * WP REST API namespace/version.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'settings/(?P<group_id>[\\w-]+)';

    /**
     * Register routes.
     *
     * @since 3.0.0
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Return a single setting.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Return all settings in a group.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Get all settings in a group.
     *
     * @since  3.0.0
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
     * Get setting data.
     *
     * @since  3.0.0
     * @param string $group_id Group ID.
     * @param string $setting_id Setting ID.
     * @return stdClass|WP_Error
     */
    public function get_setting($group_id, $setting_id)
    {
        // stub
    }

    /**
     * Bulk create, update and delete items.
     *
     * @since  3.0.0
     * @param WP_REST_Request $request Full details about the request.
     * @return array Of WP_Error or WP_REST_Response.
     */
    public function batch_items($request)
    {
        // stub
    }

    /**
     * Update a single setting in a group.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
        // stub
    }

    /**
     * Prepare a single setting object for response.
     *
     * @since  3.0.0
     * @param object          $item Setting object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @since  3.0.0
     * @param string $setting_id Setting ID.
     * @param string $group_id Group ID.
     * @return array Links for the given setting.
     */
    protected function prepare_links($setting_id, $group_id)
    {
        // stub
    }

    /**
     * Makes sure the current user has access to READ the settings APIs.
     *
     * @since  3.0.0
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Makes sure the current user has access to WRITE the settings APIs.
     *
     * @since  3.0.0
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_Error|boolean
     */
    public function update_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Makes sure the current user has access to WRITE the settings APIs.
     *
     * @since 9.5.2
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_Error|boolean True if the request has permission, otherwise false.
     */
    public function update_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Filters out bad values from the settings array/filter so we
     * only return known values via the API.
     *
     * @since 3.0.0
     * @param  array $setting Settings.
     * @return array
     */
    public function filter_setting($setting)
    {
        // stub
    }

    /**
     * For image_width, Crop can return "0" instead of false -- so we want
     * to make sure we return these consistently the same we accept them.
     *
     * @todo remove in 4.0
     * @since 3.0.0
     * @param  array $setting Settings.
     * @return array
     */
    public function cast_image_width($setting)
    {
        // stub
    }

    /**
     * Callback for allowed keys for each setting response.
     *
     * @since  3.0.0
     * @param  string $key Key to check.
     * @return boolean
     */
    public function allowed_setting_keys($key)
    {
        // stub
    }

    /**
     * Boolean for if a setting type is a valid supported setting type.
     *
     * @since  3.0.0
     * @param  string $type Type.
     * @return bool
     */
    public function is_setting_type_valid($type)
    {
        // stub
    }

    /**
     * Get the settings schema, conforming to JSON Schema.
     *
     * @since 3.0.0
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

