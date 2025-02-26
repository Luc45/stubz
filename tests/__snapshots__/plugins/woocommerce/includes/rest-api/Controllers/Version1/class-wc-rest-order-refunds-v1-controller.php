<?php

namespace ;

/**
 * REST API Order Refunds controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Orders_V1_Controller
 */
class WC_REST_Order_Refunds_V1_Controller
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
    protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';

    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order_refund';

    /**
     * Order refunds actions.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Register the routes for order refunds.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Prepare a single order refund output for response.
     *
     * @param WP_Post $post Post object.
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_Error|WP_REST_Response
     */
    public function prepare_item_for_response($post, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param WC_Order_Refund $refund Comment object.
     * @param WP_REST_Request $request Request object.
     * @return array Links for the given order refund.
     */
    protected function prepare_links($refund, $request)
    {
        // stub
    }

    /**
     * Query args.
     *
     * @param array           $args    Request args.
     * @param WP_REST_Request $request Request object.
     * @return array
     */
    public function query_args($args, $request)
    {
        // stub
    }

    /**
     * Create a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
        // stub
    }

    /**
     * Get the Order's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

}

