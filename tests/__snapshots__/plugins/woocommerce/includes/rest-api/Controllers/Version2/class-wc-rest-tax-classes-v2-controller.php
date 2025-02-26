<?php

namespace ;

/**
 * REST API Tax Classes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Tax_Classes_V1_Controller
 */
class WC_REST_Tax_Classes_V2_Controller extends \WC_REST_Tax_Classes_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Register the routes for tax classes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Get one tax class.
     *
     * @param WP_REST_Request $request Request object.
     * @return array
     */
    public function get_item($request)
    {
        // stub
    }

}

