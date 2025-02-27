<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Data controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Data
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Return the list of data resources.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

}