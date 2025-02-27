<?php

/**
 * Shipping methods controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Shipping_Methods_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'shipping_methods';

    /**
     * Register the route for /shipping_methods and /shipping_methods/<method>
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to view shipping methods.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to read a shipping method.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Get shipping methods.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Get a single Shipping Method.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Prepare a shipping method for response.
     *
     * @param  WC_Shipping_Method $method   Shipping method object.
     * @param  WP_REST_Request    $request  Request object.
     * @return WP_REST_Response   $response Response data.
     */
    public function prepare_item_for_response($method, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param WC_Shipping_Method $method Shipping method object.
     * @param WP_REST_Request    $request Request object.
     * @return array
     */
    protected function prepare_links($method, $request)
    {
        // stub
    }

    /**
     * Get the shipping method schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Get any query params needed.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

}
