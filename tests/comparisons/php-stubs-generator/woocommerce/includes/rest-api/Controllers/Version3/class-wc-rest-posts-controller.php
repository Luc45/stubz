<?php

/**
 * WC_REST_Posts_Controller
 *
 * @package WooCommerce\RestApi
 * @version  2.6.0
 */
abstract class WC_REST_Posts_Controller extends \WC_REST_Controller
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
    protected $rest_base = '';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = '';
    /**
     * Controls visibility on frontend.
     *
     * @var string
     */
    protected $public = \false;
    /**
     * Check if a given request has access to read items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to create an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to read an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to update an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to delete an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access batch create, update and delete items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return boolean|WP_Error
     */
    public function batch_items_permissions_check($request)
    {
    }
    /**
     * Get a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
    }
    /**
     * Create a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
    }
    /**
     * Add post meta fields.
     *
     * @param WP_Post         $post Post Object.
     * @param WP_REST_Request $request WP_REST_Request Object.
     * @return bool|WP_Error
     */
    protected function add_post_meta_fields($post, $request)
    {
    }
    /**
     * Delete post.
     *
     * @param WP_Post $post Post object.
     */
    protected function delete_post($post)
    {
    }
    /**
     * Update a single post.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
    }
    /**
     * Get a collection of posts.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Delete a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param WP_Post         $post Post object.
     * @param WP_REST_Request $request Request object.
     * @return array Links for the given post.
     */
    protected function prepare_links($post, $request)
    {
    }
    /**
     * Determine the allowed query_vars for a get_items() response and
     * prepare for WP_Query.
     *
     * @param array           $prepared_args Prepared arguments.
     * @param WP_REST_Request $request Request object.
     * @return array          $query_args
     */
    protected function prepare_items_query($prepared_args = array(), $request = \null)
    {
    }
    /**
     * Get all the WP Query vars that are allowed for the API request.
     *
     * @return array
     */
    protected function get_allowed_query_vars()
    {
    }
    /**
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Update post meta fields.
     *
     * @param WP_Post         $post Post object.
     * @param WP_REST_Request $request Request object.
     * @return bool|WP_Error
     */
    protected function update_post_meta_fields($post, $request)
    {
    }
}