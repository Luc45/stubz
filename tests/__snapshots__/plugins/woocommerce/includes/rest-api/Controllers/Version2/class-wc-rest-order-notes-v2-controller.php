<?php

namespace ;

/**
 * REST API Order Notes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Order_Notes_V1_Controller
 */
class WC_REST_Order_Notes_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Get order notes from an order.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return array|WP_Error
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepare a single order note output for response.
     *
     * @param WP_Comment      $note Order note object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($note, $request)
    {
        // stub
    }

    /**
     * Get the Order Notes schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
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

}

