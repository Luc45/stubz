<?php

/**
 * REST API Report Sales controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Report_Sales_V1_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'reports/sales';
    /**
     * Report instance.
     *
     * @var WC_Admin_Report
     */
    protected $report;
    /**
     * Register the routes for sales reports.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read report.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Get sales reports.
     *
     * @param WP_REST_Request $request
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report sales object for serialization.
     *
     * @param null $_
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($_, $request)
    {
    }
    /**
     * Setup the report object and parse any date filtering.
     *
     * @param array $filter date filtering
     */
    protected function setup_report($filter)
    {
    }
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}