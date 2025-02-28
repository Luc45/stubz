<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Features Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Features extends \WC_REST_Data_Controller
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
    protected $rest_base = 'features';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read onboarding profile data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Return available payment methods.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_features($request)
    {
    }
}