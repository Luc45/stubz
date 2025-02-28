<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Data controller.
 *
 * @extends WC_REST_Data_Controller
 */
class Experiments extends \WC_REST_Data_Controller
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
    protected $rest_base = 'experiments';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Forward the experiment request to WP.com and return the WP.com response.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_assignment($request)
    {
    }
}
