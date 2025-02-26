<?php

namespace ;

/**
 * REST API Reports controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Reports_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports';

    /**
     * Register the routes for reports.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read reports.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Get reports list.
     *
     * @since 3.5.0
     * @return array
     */
    protected function get_reports()
    {
        // stub
    }

    /**
     * Get all reports.
     *
     * @param WP_REST_Request $request
     * @return array|WP_Error
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepare a report object for serialization.
     *
     * @param stdClass $report Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($report, $request)
    {
        // stub
    }

    /**
     * Get the Report's schema, conforming to JSON Schema.
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

