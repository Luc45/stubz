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
    protected $namespace = 'blueprint';
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
}