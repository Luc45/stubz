<?php

namespace ;

/**
 * REST API Product Reviews Controller Class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Product_Reviews_V1_Controller
 */
class WC_REST_Product_Reviews_V2_Controller extends \WC_REST_Product_Reviews_V1_Controller
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
    protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';

    /**
     * Register the routes for product reviews.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check if a given request has access to batch manage product reviews.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function batch_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Prepare a single product review output for response.
     *
     * @param WP_Comment      $review Product review object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($review, $request)
    {
        // stub
    }

    /**
     * Bulk create, update and delete items.
     *
     * @since  3.0.0
     * @param WP_REST_Request $request Full details about the request.
     * @return array Of WP_Error or WP_REST_Response.
     */
    public function batch_items($request)
    {
        // stub
    }

    /**
     * Get the Product Review's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

