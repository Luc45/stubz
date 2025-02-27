<?php

/**
 * REST API Product Tags controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Terms_Controller
 */
class WC_REST_Product_Tags_V1_Controller
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
    protected $rest_base = 'products/tags';

    /**
     * Taxonomy.
     *
     * @var string
     */
    protected $taxonomy = 'product_tag';

    /**
     * Prepare a single product tag output for response.
     *
     * @param obj $item Term object.
     * @param WP_REST_Request $request
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Get the Tag's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}
