<?php

/**
 * REST API Coupons controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_CRUD_Controller
 */
class WC_REST_Coupons_V2_Controller extends \WC_REST_CRUD_Controller
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
    protected $rest_base = 'coupons';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_coupon';
    /**
     * Register the routes for coupons.
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
     * Prepare a single coupon output for response.
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
     * Only return writable props from schema.
     *
     * @param  array $schema Schema.
     * @return bool
     */
    protected function filter_writable_props($schema)
    {
    }
    /**
     * Prepare a single coupon for create or update.
     *
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = \false)
    {
    }
    /**
     * Get the Coupon's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
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
