<?php

namespace ;

/**
 * REST API Customers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Customers_V2_Controller
 */
class WC_REST_Customers_Controller extends \WC_REST_Customers_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Get formatted item data.
     *
     * @param WC_Data $object WC_Data instance.
     *
     * @since  3.0.0
     * @return array
     */
    protected function get_formatted_item_data($object)
    {
        // stub
    }

    /**
     * Get the Customer's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

