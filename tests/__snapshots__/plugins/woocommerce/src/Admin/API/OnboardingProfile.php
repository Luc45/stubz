<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Profile controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class OnboardingProfile
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'onboarding/profile';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read onboarding profile data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check whether a given request has permission to edit onboarding profile data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Return all onboarding profile data.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Filter the industries.
     *
     * @param  array $industries List of industries.
     * @return array
     */
    protected function filter_industries($industries)
    {
        // stub
    }

    /**
     * Update onboarding profile data.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function update_items($request)
    {
        // stub
    }

    /**
     * Returns a default email to be pre-filled in OBW. Prioritizes Jetpack if connected,
     * otherwise will default to WordPress general settings.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_email_prefill($request)
    {
        // stub
    }

    /**
     * Mark a core profiler step as complete.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function core_profiler_step_complete($request)
    {
        // stub
    }

    /**
     * Get the onboarding profile progress.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_profile_progress($request)
    {
        // stub
    }

    /**
     * Prepare objects query.
     *
     * @param  array $params The params sent in the request.
     * @return array
     */
    protected function prepare_objects_query($params)
    {
        // stub
    }

    /**
     * Prepare the data object for response.
     *
     * @param object          $item Data object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Get onboarding profile properties.
     *
     * @return array
     */
    public static function get_profile_properties()
    {
        // stub
    }

    /**
     * Optionally validates email if user agreed to marketing or if email is not empty.
     *
     * @param mixed           $value Email value.
     * @param WP_REST_Request $request Request object.
     * @param string          $param Parameter name.
     * @return true|WP_Error
     */
    public static function rest_validate_marketing_email($value, $request, $param)
    {
        // stub
    }

    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

}