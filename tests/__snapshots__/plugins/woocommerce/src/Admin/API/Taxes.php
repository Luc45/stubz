<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Taxes controller.
 *
 * @internal
 * @extends WC_REST_Taxes_Controller
 */
class Taxes extends \WC_REST_Taxes_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Get all taxes and allow filtering by tax code.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

}

