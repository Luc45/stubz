<?php

/**
 * REST API Order Refunds controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Order_Refunds_Controller
 */
class WC_REST_Refunds_Controller extends \WC_REST_Order_Refunds_Controller
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
    protected $rest_base = 'refunds';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order_refund';
    /**
     * Register the routes for order refunds.
     */
    public function register_routes()
    {
    }
    /**
     * Prepare objects query.
     *
     * @since  9.0.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Prepare a single order output for response.
     *
     * @since  9.0.0
     *
     * @param  WC_Order_Refund $refund  Refund data.
     * @param  WP_REST_Request $request Request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function prepare_object_for_response($refund, $request)
    {
    }
    /**
     * Get formatted item data.
     *
     * @since  9.0.0
     * @param  WC_Order_Refund $refund The refund object.
     * @return array
     */
    protected function get_formatted_item_data($refund)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param WC_Order_Refund $refund  Refund data.
     * @param WP_REST_Request $request Request object.
     * @return array                   Links for the given post.
     */
    protected function prepare_links($refund, $request)
    {
    }
    /**
     * Get the refund schema, conforming to JSON Schema.
     *
     * @since  9.0.0
     * @return array
     */
    public function get_item_schema()
    {
    }
}