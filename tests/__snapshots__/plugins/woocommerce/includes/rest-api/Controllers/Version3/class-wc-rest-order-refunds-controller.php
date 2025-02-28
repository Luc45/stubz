<?php

/**
 * REST API Order Refunds controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Order_Refunds_V2_Controller
 */
class WC_REST_Order_Refunds_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Prepares one object for create or update operation.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
     */
    protected function prepare_object_for_database($request, $creating = false)
{
}
    /**
     * Get the refund schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
