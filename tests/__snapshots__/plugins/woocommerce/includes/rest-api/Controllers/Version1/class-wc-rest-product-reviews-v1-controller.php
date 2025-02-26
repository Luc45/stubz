<?php

namespace ;

/**
 * REST API Product Reviews Controller Class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Product_Reviews_V1_Controller
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
    protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';

    /**
     * Register the routes for product reviews.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Check whether a given request has permission to read webhook deliveries.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to read a product review.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to create a new product review.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to update a product review.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Check if a given request has access to delete a product review.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_item_permissions_check($request)
    {
        // stub
    }

    /**
     * Get all reviews from a product.
     *
     * @param WP_REST_Request $request
     *
     * @return array|WP_Error
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Fetch a single product review from the database.
     *
     * @param int $id         Review ID.
     * @param int $product_id Product ID.
     *
     * @since  9.2.0
     * @return \WP_Comment
     */
    protected function get_review(int $id, int $product_id)
    {
        // stub
    }

    /**
     * Get a single product review.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Create a product review.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
        // stub
    }

    /**
     * Update a single product review.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
        // stub
    }

    /**
     * Delete a product review.
     *
     * @param WP_REST_Request $request Full details about the request
     *
     * @return bool|WP_Error|WP_REST_Response
     */
    public function delete_item($request)
    {
        // stub
    }

    /**
     * Prepare a single product review output for response.
     *
     * @param WP_Comment $review Product review object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($review, $request)
    {
        // stub
    }

    /**
     * Prepare a single product review to be inserted into the database.
     *
     * @param  WP_REST_Request $request Request object.
     * @return array|WP_Error  $prepared_review
     */
    protected function prepare_item_for_database($request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param WP_Comment $review Product review object.
     * @param WP_REST_Request $request Request object.
     * @return array Links for the given product review.
     */
    protected function prepare_links($review, $request)
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

