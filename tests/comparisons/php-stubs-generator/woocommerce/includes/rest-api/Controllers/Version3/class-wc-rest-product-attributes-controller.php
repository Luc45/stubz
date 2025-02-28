<?php

/**
 * REST API Product Attributes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Product_Attributes_V2_Controller
 */
class WC_REST_Product_Attributes_Controller extends \WC_REST_Product_Attributes_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Create a single attribute.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function create_item($request)
    {
    }
}