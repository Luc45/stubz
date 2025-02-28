<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Product attribute terms controller.
 *
 * @internal
 * @extends WC_REST_Product_Attribute_Terms_Controller
 */
class ProductAttributeTerms
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
     * Check if a given request has access to read a custom attribute.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_custom_attribute_permissions_check($request)
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
     * Query custom attribute values by slug.
     *
     * @param string $slug Attribute slug.
     * @return array Attribute values, formatted for response.
     */
    protected function get_custom_attribute_values($slug)
{
}
    /**
     * Get a single custom attribute.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function get_item_by_slug($request)
{
}
}