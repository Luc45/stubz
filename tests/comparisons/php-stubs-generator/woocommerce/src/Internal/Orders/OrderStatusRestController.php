<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Controller for the REST endpoint to add order statuses to the WooCommerce REST API.
 */
class OrderStatusRestController extends \Automattic\WooCommerce\Internal\RestApiControllerBase
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'orders/statuses';
    /**
     * Get the WooCommerce REST API namespace for the class.
     *
     * @return string
     */
    protected function get_rest_api_namespace() : string
    {
    }
    /**
     * Register the routes for order statuses.
     */
    public function register_routes()
    {
    }
    /**
     * Get all order statuses.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items(\WP_REST_Request $request)
    {
    }
    /**
     * Get the order status schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}