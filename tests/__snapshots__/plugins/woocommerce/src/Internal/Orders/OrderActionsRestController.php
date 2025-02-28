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
}
    /**
     * Register the REST API endpoints handled by this controller.
     */
    public function register_routes()
{
}
    /**
     * Handle the POST /orders/{id}/actions/send_order_details.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function send_order_details(WP_REST_Request $request)
{
}
}