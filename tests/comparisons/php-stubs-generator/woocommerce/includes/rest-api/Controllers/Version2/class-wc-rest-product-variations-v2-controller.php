<?php

/**
 * REST API variations controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Products_V2_Controller
 */
class WC_REST_Product_Variations_V2_Controller extends \WC_REST_Products_V2_Controller
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
    protected $rest_base = 'products/(?P<product_id>[\\d]+)/variations';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'product_variation';
    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
    }
    /**
     * Get object.
     *
     * @since  3.0.0
     * @param  int $id Object ID.
     * @return WC_Data|null
     */
    protected function get_object($id)
    {
    }
    /**
     * Checks that a variation belongs to the specified parent product.
     *
     * @param int $variation_id Variation ID.
     * @param int $parent_id    Parent product ID to check against.
     * @return bool TRUE if variation and parent product exist. FALSE otherwise.
     *
     * @since 9.2.0
     */
    protected function check_variation_parent(int $variation_id, int $parent_id) : bool
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
     * Prepare a single variation output for response.
     *
     * @since  3.0.0
     * @param  WC_Data         $object  Object data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
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
     * Prepare a single variation for create or update.
     *
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = \false)
    {
    }
    /**
     * Clear caches here so in sync with any new variations.
     *
     * @param WC_Data $object Object data.
     */
    public function clear_transients($object)
    {
    }
    /**
     * Delete a variation.
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error|WP_REST_Response
     */
    public function delete_item($request)
    {
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
     * Get the Variation's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}