<?php
/**
 * REST API Order Notes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Order_Notes_V1_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'orders/(?P<order_id>[\\d]+)/notes';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order';
    /**
     * Register the routes for order notes.
     */
    public function register_routes()
{
}
    /**
     * Check whether a given request has permission to read order notes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
{
}
    /**
     * Check if a given request has access create order notes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function create_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to read a order note.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access delete a order note.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
{
}
    /**
     * Get order notes from an order.
     *
     * @param WP_REST_Request $request
     *
     * @return array|WP_Error
     */
    public function get_items($request)
{
}
    /**
     * Create a single order note.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
{
}
    /**
     * Get a single order note.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
{
}
    /**
     * Delete a single order note.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
{
}
    /**
     * Prepare a single order note output for response.
     *
     * @param WP_Comment $note Order note object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($note, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param WP_Comment $note Delivery order_note object.
     * @return array Links for the given order note.
     */
    protected function prepare_links($note)
{
}
    /**
     * Get the Order Notes schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
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
