<?php

/**
 * REST API Order Refunds controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Orders_V2_Controller
 */
class WC_REST_Order_Refunds_V2_Controller
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
    protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';

    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order_refund';

    /**
     * Stores the request.
     *
     * @var array
     */
    protected $request = array();

    /**
     * Order refunds actions.
     */
    public function __construct()
{
}
    /**
     * Register the routes for order refunds.
     */
    public function register_routes()
{
}
    /**
     * Get object.
     *
     * @since  3.0.0
     * @param  int $id Object ID.
     * @return WC_Data
     */
    protected function get_object($id)
{
}
    /**
     * Get formatted item data.
     *
     * @since  3.0.0
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data($object)
{
}
    /**
     * Prepare a single order output for response.
     *
     * @since  3.0.0
     *
     * @param  WC_Data         $object  Object data.
     * @param  WP_REST_Request $request Request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param WC_Data         $object  Object data.
     * @param WP_REST_Request $request Request object.
     * @return array                   Links for the given post.
     */
    protected function prepare_links($object, $request)
{
}
    /**
     * Prepare objects query.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
{
}
    /**
     * Prepares one object for create or update operation.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
     */
    protected function prepare_object_for_database($request, $creating = false)
{
}
    /**
     * Save an object data.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request  Full details about the request.
     * @param  bool            $creating If is creating a new object.
     * @return WC_Data|WP_Error
     */
    protected function save_object($request, $creating = false)
{
}
    /**
     * Get the refund schema, conforming to JSON Schema.
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
