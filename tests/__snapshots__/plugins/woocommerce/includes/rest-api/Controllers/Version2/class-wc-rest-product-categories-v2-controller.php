<?php

namespace ;

/**
 * REST API Product Categories controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Product_Categories_V1_Controller
 */
class WC_REST_Product_Categories_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Prepare a single product category output for response.
     *
     * @param WP_Term         $item    Term object.
     * @param WP_REST_Request $request Request instance.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Get the Category schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

