<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Controller for the REST endpoint to run actions on orders.
 *
 * This first version only supports sending the order details to the customer (`send_order_details`).
 */
class OrderActionsRestController extends \Automattic\WooCommerce\Internal\RestApiControllerBase
{
    /**
     * Get the WooCommerce REST API namespace for the class.
     *
     * @return string
     */
    protected function get_rest_api_namespace(): string
    {
        // stub
    }

    /**
     * Register the REST API endpoints handled by this controller.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Permission check for REST API endpoint.
     *
     * @param WP_REST_Request $request The request for which the permission is checked.
     * @return bool|WP_Error True if the current user has the capability, otherwise a WP_Error object.
     */
    private function check_permissions(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Get the accepted arguments for the POST request.
     *
     * @return array[]
     */
    private function get_args_for_order_actions(): array
    {
        // stub
    }

    /**
     * Get the schema for both the GET and the POST requests.
     *
     * @return array[]
     */
    private function get_schema_for_order_actions(): array
    {
        // stub
    }

    /**
     * Handle the POST /orders/{id}/actions/send_order_details.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function send_order_details(WP_REST_Request $request)
    {
        // stub
    }

}

