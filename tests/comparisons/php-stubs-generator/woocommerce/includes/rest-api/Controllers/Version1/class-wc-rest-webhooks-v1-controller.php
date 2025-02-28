<?php

/**
 * REST API Webhooks controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Webhooks_V1_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'webhooks';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_webhook';
    /**
     * Register the routes for webhooks.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read webhooks.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access create webhooks.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to read a webhook.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access update a webhook.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access delete a webhook.
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
     * Get the default REST API version.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_default_api_version()
    {
    }
    /**
     * Get all webhooks.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Get a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
    }
    /**
     * Create a single webhook.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
    }
    /**
     * Update a single webhook.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
    }
    /**
     * Delete a single webhook.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepare a single webhook for create or update.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_Error|stdClass $data Post object.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepare a single webhook output for response.
     *
     * @param int             $id       Webhook ID or object.
     * @param WP_REST_Request $request  Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($id, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param int $id Webhook ID.
     * @return array
     */
    protected function prepare_links($id)
    {
    }
    /**
     * Get the Webhook's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}