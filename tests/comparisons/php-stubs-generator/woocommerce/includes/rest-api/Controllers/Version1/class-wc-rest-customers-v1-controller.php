<?php

/**
 * REST API Customers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Customers_V1_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'customers';
    /**
     * Register the routes for customers.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read customers.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access create customers.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to read a customer.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access update a customer.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access delete a customer.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access batch create, update and delete items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function batch_items_permissions_check($request)
    {
    }
    /**
     * Get all customers.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Create a single customer.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
    }
    /**
     * Get a single customer.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
    }
    /**
     * Update a single user.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
    }
    /**
     * Delete a single customer.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepare a single customer output for response.
     *
     * @param  WP_User          $user_data User object.
     * @param  WP_REST_Request  $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($user_data, $request)
    {
    }
    /**
     * Update customer meta fields.
     *
     * @param WC_Customer $customer
     * @param WP_REST_Request $request
     */
    protected function update_customer_meta_fields($customer, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param WP_User $customer Customer object.
     * @return array Links for the given customer.
     */
    protected function prepare_links($customer)
    {
    }
    /**
     * Get the Customer's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get role names.
     *
     * @return array
     */
    protected function get_role_names()
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
