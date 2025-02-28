<?php

/**
 * Paymenga gateways controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Payment_Gateways_V2_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'payment_gateways';

    /**
     * Register the route for /payment_gateways and /payment_gateways/<id>
     */
    public function register_routes()
{
}
    /**
     * Check whether a given request has permission to view payment gateways.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
{
}
    /**
     * Check if a given request has access to read a payment gateway.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
{
}
    /**
     * Check whether a given request has permission to edit payment gateways.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_items_permissions_check($request)
{
}
    /**
     * Get payment gateways.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
{
}
    /**
     * Get a single payment gateway.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
{
}
    /**
     * Update A Single Payment Method.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function update_item($request)
{
}
    /**
     * Get a gateway based on the current request object.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|null
     */
    public function get_gateway($request)
{
}
    /**
     * Prepare a payment gateway for response.
     *
     * @param  WC_Payment_Gateway $gateway    Payment gateway object.
     * @param  WP_REST_Request    $request    Request object.
     * @return WP_REST_Response   $response   Response data.
     */
    public function prepare_item_for_response($gateway, $request)
{
}
    /**
     * Return settings associated with this payment gateway.
     *
     * @param WC_Payment_Gateway $gateway Gateway data.
     *
     * @return array
     */
    public function get_settings($gateway)
{
}
    /**
     * Prepare links for the request.
     *
     * @param  WC_Payment_Gateway $gateway    Payment gateway object.
     * @param  WP_REST_Request    $request    Request object.
     * @return array
     */
    protected function prepare_links($gateway, $request)
{
}
    /**
     * Get the payment gateway schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get any query params needed.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}
