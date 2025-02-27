<?php

/**
 * REST API Customers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Customer_Downloads_V1_Controller
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
    protected $rest_base = 'customers/(?P<customer_id>[\\d]+)/downloads';

    /**
     * Register the routes for customers.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read customers.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Get all customer downloads.
     *
     * @param WP_REST_Request $request
     * @return array
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepare a single download output for response.
     *
     * @param stdObject $download Download object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($download, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param stdClass $download Download object.
     * @param WP_REST_Request $request Request object.
     * @return array Links for the given customer download.
     */
    protected function prepare_links($download, $request)
    {
        // stub
    }

    /**
     * Get the Customer Download's schema, conforming to JSON Schema.
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
