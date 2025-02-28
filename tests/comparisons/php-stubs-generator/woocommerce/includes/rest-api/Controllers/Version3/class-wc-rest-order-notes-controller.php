<?php

/**
 * REST API Order Notes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Order_Notes_V2_Controller
 */
class WC_REST_Order_Notes_Controller extends \WC_REST_Order_Notes_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Prepare a single order note output for response.
     *
     * @param WP_Comment      $note    Order note object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($note, $request)
    {
    }
    /**
     * Create a single order note.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
    }
    /**
     * Get the Order Notes schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}
