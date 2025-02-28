<?php
/**
 * REST API Product Attribute Terms controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Terms_Controller
 */
class WC_REST_Product_Attribute_Terms_V1_Controller extends \WC_REST_Terms_Controller
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
    protected $rest_base = 'products/attributes/(?P<attribute_id>[\\d]+)/terms';
    /**
     * Register the routes for terms.
     */
    public function register_routes()
{
}
    /**
     * Prepare a single product attribute term output for response.
     *
     * @param WP_Term $item Term object.
     * @param WP_REST_Request $request
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Update term meta fields.
     *
     * @param WP_Term $term
     * @param WP_REST_Request $request
     * @return bool|WP_Error
     */
    protected function update_term_meta_fields($term, $request)
{
}
    /**
     * Get the Attribute Term's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
