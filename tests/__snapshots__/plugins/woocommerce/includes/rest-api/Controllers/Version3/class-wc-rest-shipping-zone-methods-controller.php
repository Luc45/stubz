<?php
/**
 * REST API Shipping Zone Methods class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Shipping_Zone_Methods_V2_Controller
 */
class WC_REST_Shipping_Zone_Methods_Controller extends \WC_REST_Shipping_Zone_Methods_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Get the settings schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
