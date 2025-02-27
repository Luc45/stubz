<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Marketing Overview Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class MarketingOverview
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
    protected $rest_base = 'marketing/overview';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Return installed marketing extensions data.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function activate_plugin($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to manage plugins.
     *
     * @param \WP_REST_Request $request Full details about the request.
     *
     * @return \WP_Error|boolean
     */
    public function install_plugins_permissions_check($request)
    {
        // stub
    }

    /**
     * Return installed marketing extensions data.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_installed_plugins($request)
    {
        // stub
    }

}