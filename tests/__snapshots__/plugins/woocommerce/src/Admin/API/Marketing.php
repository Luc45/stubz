<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Marketing Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Marketing extends \WC_REST_Data_Controller
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
    protected $rest_base = 'marketing';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to install plugins.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_recommended_plugins_permissions_check($request)
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
    public function get_recommended_plugins($request)
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
    public function get_knowledge_base_posts($request)
    {
        // stub
    }

    /**
     * Return misc recommendations.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @since 9.5.0
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_misc_recommendations($request)
    {
        // stub
    }

}

