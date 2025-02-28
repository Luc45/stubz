<?php
/**
 * REST API Product Shipping Classes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Terms_Controller
 */
class WC_REST_Product_Shipping_Classes_V1_Controller extends \WC_REST_Terms_Controller
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
    protected $rest_base = 'products/shipping_classes';
    /**
     * Taxonomy.
     *
     * @var string
     */
    protected $taxonomy = 'product_shipping_class';
    /**
     * Prepare a single product shipping class output for response.
     *
     * @param obj $item Term object.
     * @param WP_REST_Request $request
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Get the Shipping Class schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
