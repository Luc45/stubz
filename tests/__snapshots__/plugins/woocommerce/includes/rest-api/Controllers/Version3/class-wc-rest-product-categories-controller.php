<?php

/**
 * REST API Product Categories controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Product_Categories_V2_Controller
 */
class WC_REST_Product_Categories_Controller extends \WC_REST_Product_Categories_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Prepare a single product category output for response.
     *
     * @param WP_Term         $item    Term object.
     * @param WP_REST_Request $request Request instance.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Get the Category schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Update term meta fields.
     *
     * @param WP_Term         $term    Term object.
     * @param WP_REST_Request $request Request instance.
     * @return bool|WP_Error
     *
     * @since 3.5.5
     */
    protected function update_term_meta_fields($term, $request)
{
}
}
