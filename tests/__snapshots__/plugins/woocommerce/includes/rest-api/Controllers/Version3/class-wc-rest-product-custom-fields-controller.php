<?php

/**
 * REST API Product Custom Fields controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Product_Custom_Fields_Controller
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
    protected $rest_base = 'products/custom-fields';

    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'product';

    /**
     * Register the routes for products.
     */
    public function register_routes()
{
}
    /**
     * Get a collection of custom field names.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item_names($request)
{
}
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
     * Add new options for 'order' to the collection params.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}
