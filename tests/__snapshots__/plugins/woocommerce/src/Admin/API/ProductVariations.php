<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Product variations controller.
 *
 * @internal
 * @extends WC_REST_Product_Variations_Controller
 */
class ProductVariations
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Register the routes for products.
     */
    public function register_routes()
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
     * Add in conditional search filters for variations.
     *
     * @internal
     * @param string $where Where clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_filter($where, $wp_query)
    {
        // stub
    }

    /**
     * Join posts meta tables when variation search query is present.
     *
     * @internal
     * @param string $join Join clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_join($join, $wp_query)
    {
        // stub
    }

    /**
     * Add product name and sku filtering to the WC API.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
        // stub
    }

    /**
     * Get a collection of posts and add the post title filter option to WP_Query.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Get the Product's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Prepare a single variation output for response.
     *
     * @param  WC_Data         $object  Object data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
    {
        // stub
    }

}

