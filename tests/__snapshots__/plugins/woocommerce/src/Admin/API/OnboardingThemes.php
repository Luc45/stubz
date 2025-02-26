<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Themes Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class OnboardingThemes extends \WC_REST_Data_Controller
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
    protected $rest_base = 'onboarding/themes';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check if a given request has access to manage themes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Installs the requested theme.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|array Theme installation status.
     */
    public function install_theme($request)
    {
        // stub
    }

    /**
     * Activate the requested theme.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|array Theme activation status.
     */
    public function activate_theme($request)
    {
        // stub
    }

    /**
     * Get recommended themes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|array Theme activation status.
     */
    public function get_recommended_themes($request)
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
     * Get the recommended themes schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_recommended_item_schema()
    {
        // stub
    }

}

