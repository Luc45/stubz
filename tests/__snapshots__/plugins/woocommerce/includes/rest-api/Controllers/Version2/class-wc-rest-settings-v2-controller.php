<?php

namespace ;

/**
 * REST API Settings controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Settings_V2_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'settings';

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
     * Get all settings groups items.
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
     * Prepare links for the request.
     *
     * @param string $group_id Group ID.
     * @return array Links for the given group.
     */
    protected function prepare_links($group_id)
    {
        // stub
    }

    /**
     * Prepare a report sales object for serialization.
     *
     * @since  3.0.0
     * @param array           $item Group object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Filters out bad values from the groups array/filter so we
     * only return known values via the API.
     *
     * @since 3.0.0
     * @param  array $group Group.
     * @return array
     */
    public function filter_group($group)
    {
        // stub
    }

    /**
     * Callback for allowed keys for each group response.
     *
     * @since  3.0.0
     * @param  string $key Key to check.
     * @return boolean
     */
    public function allowed_group_keys($key)
    {
        // stub
    }

    /**
     * Returns default settings for groups. null means the field is required.
     *
     * @since  3.0.0
     * @return array
     */
    protected function group_defaults()
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
     * Get the groups schema, conforming to JSON Schema.
     *
     * @since  3.0.0
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

