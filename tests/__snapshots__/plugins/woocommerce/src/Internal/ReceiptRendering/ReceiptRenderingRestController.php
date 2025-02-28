<?php

namespace Automattic\WooCommerce\Internal\ReceiptRendering;

/**
 * Controller for the REST endpoints associated to the receipt rendering engine.
 * The endpoints require the read_shop_order capability for the order at hand.
 */
class ReceiptRenderingRestController extends \Automattic\WooCommerce\Internal\RestApiControllerBase
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
     * Handle the GET /orders/id/receipt:
     *
     * Return the data for a receipt if it exists, or a 404 error if it doesn't.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error
     */
    public function get_order_receipt(WP_REST_Request $request)
{
}
    /**
     * Handle the POST /orders/id/receipt:
     *
     * Return the data for a receipt if it exists, or create a new receipt and return its data otherwise.
     *
     * Optional query string arguments:
     *
     * expiration_date: formatted as yyyy-mm-dd.
     * expiration_days: a number, 0 is today, 1 is tomorrow, etc.
     * force_new: defaults to false, if true, create a new receipt even if one already exists for the order.
     *
     * If neither expiration_date nor expiration_days are supplied, the default is expiration_days = 1.
     *
     * @param WP_REST_Request $request The received request.
     * @return array|WP_Error Request response or an error.
     */
    public function create_order_receipt(WP_REST_Request $request)
{
}
}