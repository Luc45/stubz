<?php

namespace ;

/**
 * REST API Webhooks controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Webhooks_V1_Controller
 */
class WC_REST_Webhooks_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';

    /**
     * Prepare a single webhook output for response.
     *
     * @param int             $id       Webhook ID.
     * @param WP_REST_Request $request  Request object.
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($id, $request)
    {
        // stub
    }

    /**
     * Get the default REST API version.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_default_api_version()
    {
        // stub
    }

    /**
     * Get the Webhook's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

