<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint;

/**
 * Class RestApi
 *
 * This class handles the REST API endpoints for importing and exporting WooCommerce Blueprints.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint
 */
class RestApi extends \
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
        // stub
    }

    /**
     * Check if the current user has permission to perform the request.
     *
     * @return bool|\WP_Error
     */
    public function check_permission()
    {
        // stub
    }

    /**
     * Handle the export request.
     *
     * @param \WP_REST_Request $request The request object.
     * @return \WP_HTTP_Response The response object.
     */
    public function export($request)
    {
        // stub
    }

    /**
     * Handle the import request.
     *
     * @return \WP_HTTP_Response The response object.
     * @throws \InvalidArgumentException If the import fails.
     */
    public function import()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Convert step list from the frontend to the backend format.
     *
     * From:
     * {
     *  "settings": ["setWCSettings", "setWCShippingZones", "setWCShippingMethods", "setWCShippingRates"],
     *  "plugins": ["akismet/akismet.php],
     *  "themes": ["approach],
     * }
     *
     * To:
     *
     * ["setWCSettings", "setWCShippingZones", "setWCShippingMethods", "setWCShippingRates", "installPlugin", "installTheme"]
     *
     * @param array $steps steps payload from the frontend.
     *
     * @return array
     */
    private function steps_payload_to_blueprint_steps($steps)
    {
        // stub
    }

    /**
     * Get list of settings that will be overridden by the import.
     *
     * @param array $requested_steps List of steps from the import schema.
     * @return array List of settings that will be overridden.
     */
    private function get_settings_to_overwrite(array $requested_steps): array
    {
        // stub
    }

    /**
     * Get the schema for the queue endpoint.
     *
     * @return array
     */
    public function get_queue_response_schema()
    {
        // stub
    }

    /**
     * Get the schema for the process endpoint.
     *
     * @return array
     */
    public function get_process_response_schema()
    {
        // stub
    }

}

