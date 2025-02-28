<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Product categories controller.
 *
 * @internal
 * @extends WC_REST_Product_Attributes_Controller
 */
class ProductAttributes
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Register the routes for custom product attributes.
     */
    public function register_routes()
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
     * Get the Attribute's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get a single attribute by it's slug.
     *
     * @param WP_REST_Request $request The API request.
     * @return WP_REST_Response
     */
    public function get_item_by_slug($request)
{
}
    /**
     * Format custom attribute items for response (mimic the structure of a taxonomy - backed attribute).
     *
     * @param array $custom_attributes - CustomAttributeTraits::get_custom_attributes().
     * @return array
     */
    protected function format_custom_attribute_items_for_response($custom_attributes)
{
}
    /**
     * Get all attributes, with support for searching (which includes custom attributes).
     *
     * @param WP_REST_Request $request The API request.
     * @return WP_REST_Response
     */
    public function get_items($request)
{
}
}