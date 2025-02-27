<?php

/**
 * REST API Product Reviews Controller Class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Product_Reviews_Controller
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
    protected $rest_base = 'products/reviews';

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
     * Check if a given request has access batch create, update and delete items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return boolean|WP_Error
     */
    public function batch_items_permissions_check($request)
    {
        // stub
    }

    /**
     * Get all reviews.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Create a single review.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
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
     * Updates a review.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function update_item($request)
    {
        // stub
    }

    /**
     * Deletes a review.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function delete_item($request)
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
     * @return array Links for the given product review.
     */
    protected function prepare_links($review)
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

    /**
     * Get the review, if the ID is valid.
     *
     * @since 3.5.0
     * @param int $id Supplied ID.
     * @return WP_Comment|WP_Error Comment object if ID is valid, WP_Error otherwise.
     */
    protected function get_review($id)
    {
        // stub
    }

    /**
     * Prepends internal property prefix to query parameters to match our response fields.
     *
     * @since 3.5.0
     * @param string $query_param Query parameter.
     * @return string
     */
    protected function normalize_query_param($query_param)
    {
        // stub
    }

    /**
     * Checks comment_approved to set comment status for single comment output.
     *
     * @since 3.5.0
     * @param string|int $comment_approved comment status.
     * @return string Comment status.
     */
    protected function prepare_status_response($comment_approved)
    {
        // stub
    }

    /**
     * Sets the comment_status of a given review object when creating or updating a review.
     *
     * @since 3.5.0
     * @param string|int $new_status New review status.
     * @param int        $id         Review ID.
     * @return bool Whether the status was changed.
     */
    protected function handle_status_param($new_status, $id)
    {
        // stub
    }

}
