<?php

/**
 * WC_REST_CRUD_Controller class.
 *
 * @extends WC_REST_Posts_Controller
 */
abstract class WC_REST_CRUD_Controller extends \WC_REST_Posts_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
    /**
     * If object is hierarchical.
     *
     * @var bool
     */
    protected $hierarchical = \false;
    /**
     * Get object.
     *
     * @param  int $id Object ID.
     * @return object WC_Data object or WP_Error object.
     */
    protected function get_object($id)
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
     * Get object permalink.
     *
     * @param  object $object Object.
     * @return string
     */
    protected function get_permalink($object)
    {
    }
    /**
     * Prepares the object for the REST response.
     *
     * @since  3.0.0
     * @param  WC_Data         $object  Object data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    protected function prepare_object_for_response($object, $request)
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
    protected function prepare_object_for_database($request, $creating = \false)
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
     * Save an object data.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request  Full details about the request.
     * @param  bool            $creating If is creating a new object.
     * @return WC_Data|WP_Error
     */
    protected function save_object($request, $creating = \false)
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
     * Update a single post.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
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
     * Get objects.
     *
     * @since  3.0.0
     * @param  array $query_args Query args.
     * @return array
     */
    protected function get_objects($query_args)
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
     * Get fields for an object if getter is defined.
     *
     * @param object $object  Object we are fetching response for.
     * @param string $context Context of the request. Can be `view` or `edit`.
     * @param array  $fields  List of fields to fetch.
     * @return array Data fetched from getters.
     */
    public function fetch_fields_using_getters($object, $context, $fields)
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
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}