<?php

/**
 * REST API Customers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Customer_Downloads_V1_Controller
 */
class WC_REST_Customer_Downloads_V2_Controller extends \WC_REST_Customer_Downloads_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
    /**
     * Prepare a single download output for response.
     *
     * @param stdClass        $download Download object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($download, $request)
    {
    }
    /**
     * Get the Customer Download's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}
