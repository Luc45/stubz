<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint;

/**
 * Class RestApi
 *
 * This class handles the REST API endpoints for importing and exporting WooCommerce Blueprints.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint
 */
class RestApi
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Register routes.
     *
     * @since 9.3.0
     */
    public function register_routes()
{
}
    /**
     * Check if the current user has permission to perform the request.
     *
     * @return bool|\WP_Error
     */
    public function check_permission()
{
}
    /**
     * Handle the export request.
     *
     * @param \WP_REST_Request $request The request object.
     * @return \WP_HTTP_Response The response object.
     */
    public function export($request)
{
}
    /**
     * Handle the import request.
     *
     * @return \WP_HTTP_Response The response object.
     * @throws \InvalidArgumentException If the import fails.
     */
    public function import()
{
}
    /**
     * Handle the upload request.
     *
     * We're not calling to run the import process in this function.
     * We'll upload the file to a temporary dir, validate the file, and return a reference to the file.
     * The uploaded file will be processed once user hits the import button and calls the process endpoint with a nonce.
     *
     * @return array
     */
    public function queue()
{
}
    /**
     * Process the uploaded file.
     *
     * @param \WP_REST_Request $request request object.
     *
     * @return array
     */
    public function process(WP_REST_Request $request)
{
}
    /**
     * Get the schema for the queue endpoint.
     *
     * @return array
     */
    public function get_queue_response_schema()
{
}
    /**
     * Get the schema for the process endpoint.
     *
     * @return array
     */
    public function get_process_response_schema()
{
}
}