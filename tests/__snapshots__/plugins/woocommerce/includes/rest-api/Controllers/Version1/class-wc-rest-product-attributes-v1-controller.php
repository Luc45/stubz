<?php
/**
 * REST API Product Attributes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Product_Attributes_V1_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'products/attributes';
    /**
     * Attribute name.
     *
     * @var string
     */
    protected $attribute = '';
    /**
     * Cached taxonomies by attribute id.
     *
     * @var array
     */
    protected $taxonomies_by_id = array();
    /**
     * Register the routes for product attributes.
     */
    public function register_routes()
{
}
    /**
     * Check if a given request has access to read the attributes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
{
}
    /**
     * Check if a given request has access to create a attribute.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to read a attribute.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to update a attribute.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to delete a attribute.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access batch create, update and delete items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function batch_items_permissions_check($request)
{
}
    /**
     * Get all attributes.
     *
     * @param WP_REST_Request $request The request to get the attributes from.
     * @return array
     */
    public function get_items($request)
{
}
    /**
     * Create a single attribute.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function create_item($request)
{
}
    /**
     * Get a single attribute.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function get_item($request)
{
}
    /**
     * Update a single term from a taxonomy.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function update_item($request)
{
}
    /**
     * Delete a single attribute.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
{
}
    /**
     * Prepare a single product attribute output for response.
     *
     * @param obj             $item Term object.
     * @param WP_REST_Request $request The request to process.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param object $attribute Attribute object.
     * @return array Links for the given attribute.
     */
    protected function prepare_links($attribute)
{
}
    /**
     * Get the Attribute's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get the query params for collections
     *
     * @return array
     */
    public function get_collection_params()
{
}
    /**
     * Get attribute name.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return string
     */
    protected function get_taxonomy($request)
{
}
    /**
     * Get attribute data.
     *
     * @param int $id Attribute ID.
     * @return stdClass|WP_Error
     */
    protected function get_attribute($id)
{
}
    /**
     * Validate attribute slug.
     *
     * @deprecated 3.2.0
     * @param string $slug The slug to validate.
     * @param bool   $new_data If we are creating new data.
     * @return bool|WP_Error
     */
    protected function validate_attribute_slug($slug, $new_data = true)
{
}
    /**
     * Schedule to flush rewrite rules.
     *
     * @deprecated 3.2.0
     * @since 3.0.0
     */
    protected function flush_rewrite_rules()
{
}
}
