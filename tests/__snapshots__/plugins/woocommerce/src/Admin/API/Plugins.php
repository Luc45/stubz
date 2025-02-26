<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Plugins Controller.
 *
 * @internal
 * @extends \WC_REST_Data_Controller
 */
class Plugins extends \WC_REST_Data_Controller
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
    protected $rest_base = 'plugins';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check if a given request has access to manage plugins.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Install the requested plugin.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|array Plugin Status
     */
    public function install_plugin($request)
    {
        // stub
    }

    /**
     * Installs the requested plugins.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|array Plugin Status
     */
    public function install_plugins($request)
    {
        // stub
    }

    /**
     * Returns a list of recently scheduled installation jobs.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return array Jobs.
     */
    public function get_installation_status($request)
    {
        // stub
    }

    /**
     * Returns a list of recently scheduled installation jobs.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return array Job.
     */
    public function get_job_installation_status($request)
    {
        // stub
    }

    /**
     * Returns a list of active plugins in API format.
     *
     * @return array Active plugins
     */
    public static function active_plugins()
    {
        // stub
    }

    /**
     * Returns a list of active plugins.
     *
     * @internal
     * @return array Active plugins
     */
    public static function get_active_plugins()
    {
        // stub
    }

    /**
     * Returns a list of installed plugins.
     *
     * @return array Installed plugins
     */
    public function installed_plugins()
    {
        // stub
    }

    /**
     * Activate the requested plugin.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|array Plugin Status
     */
    public function activate_plugins($request)
    {
        // stub
    }

    /**
     * Returns a list of recently scheduled activation jobs.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return array Job.
     */
    public function get_activation_status($request)
    {
        // stub
    }

    /**
     * Returns a list of recently scheduled activation jobs.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return array Jobs.
     */
    public function get_job_activation_status($request)
    {
        // stub
    }

    /**
     * Generates a Jetpack Connect URL.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|array Connection URL for Jetpack
     */
    public function connect_jetpack($request)
    {
        // stub
    }

    /**
     *  Kicks off the WCCOM Connect process.
     *
     * @return \WP_Error|array Connection URL for WooCommerce.com
     */
    public function request_wccom_connect()
    {
        // stub
    }

    /**
     * Finishes connecting to WooCommerce.com.
     *
     * @param  object $rest_request Request details.
     * @return \WP_Error|array Contains success status.
     */
    public function finish_wccom_connect($rest_request)
    {
        // stub
    }

    /**
     * Returns a URL that can be used to connect to Square.
     *
     * @return \WP_Error|array Connect URL.
     */
    public function connect_square()
    {
        // stub
    }

    /**
     * Returns a URL that can be used to point the merchant to the WooPayments onboarding flow.
     *
     * @return \WP_Error|array Connect URL.
     */
    public function connect_wcpay()
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
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_connect_schema()
    {
        // stub
    }

}

