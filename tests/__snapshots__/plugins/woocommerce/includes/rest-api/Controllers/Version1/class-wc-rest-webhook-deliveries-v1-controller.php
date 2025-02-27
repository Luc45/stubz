<?php

/**
 * REST API Webhook Deliveries controller class.
 *
 * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Webhook_Deliveries_V1_Controller
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
    protected $rest_base = 'webhooks/(?P<webhook_id>[\\d]+)/deliveries';

    /**
     * Register the routes for webhook deliveries.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read taxes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to read a tax.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Get all webhook deliveries.
     *
     * @param WP_REST_Request $request
     *
     * @return array|WP_Error
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Get a single webhook delivery.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Prepare a single webhook delivery output for response.
     *
     * @param stdClass $log Delivery log object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($log, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param stdClass $log Delivery log object.
     * @return array Links for the given webhook delivery.
     */
    protected function prepare_links($log)
    {
        // stub
    }

    /**
     * Get the Webhook's schema, conforming to JSON Schema.
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
