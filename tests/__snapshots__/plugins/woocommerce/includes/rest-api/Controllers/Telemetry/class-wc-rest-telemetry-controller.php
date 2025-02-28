<?php

/**
 * Telemetry controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Telemetry_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-telemetry';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'tracker';

    /**
     * Register the route for /tracker
     */
    public function register_routes()
{
}
    /**
     * Check whether a given request has permission to post telemetry data
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function telemetry_permissions_check($request)
{
}
    /**
     * Record WCTracker Data
     *
     * @param  WP_REST_Request $request Full details about the request.
     */
    public function record_usage_data($request)
{
}
    /**
     * Get usage data from current request
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return Array
     */
    public function get_usage_data($request)
{
}
    /**
     * Get any query params needed.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}
