<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Plugins controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class OnboardingPlugins extends \WC_REST_Data_Controller
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
    protected $rest_base = 'onboarding/plugins';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Install and activate a plugin.
     *
     * @param WP_REST_Request $request WP Request object.
     *
     * @return WP_REST_Response
     */
    public function install_and_activate(\WP_REST_Request $request)
    {
    }
    /**
     * Queue plugin install request.
     *
     * @param WP_REST_Request $request WP_REST_Request object.
     *
     * @return array
     */
    public function install_and_activate_async(\WP_REST_Request $request)
    {
    }
    /**
     * Returns current status of given job.
     *
     * @param WP_REST_Request $request WP_REST_Request object.
     *
     * @return array|WP_REST_Response
     */
    public function get_scheduled_installs(\WP_REST_Request $request)
    {
    }
    /**
     * Return Jetpack authorization URL.
     *
     * @param WP_REST_Request $request WP_REST_Request object.
     *
     * @return array
     * @throws \Exception If there is an error registering the site.
     */
    public function get_jetpack_authorization_url(\WP_REST_Request $request)
    {
    }
    /**
     * Check whether the current user has permission to install plugins
     *
     * @return WP_Error|boolean
     */
    public function can_install_plugins()
    {
    }
    /**
     * Check whether the current user has permission to install and activate plugins
     *
     * @return WP_Error|boolean
     */
    public function can_install_and_activate_plugins()
    {
    }
    /**
     * JSON Schema for both install-async and scheduled-installs endpoints.
     *
     * @return array
     */
    public function get_install_async_schema()
    {
    }
    /**
     * JSON Schema for install-and-activate endpoint.
     *
     * @return array
     */
    public function get_install_activate_schema()
    {
    }
    public function log_plugins_install_error($slug, $api, $result, $upgrader)
    {
    }
    public function log_plugins_install_api_error($slug, $api)
    {
    }
}
