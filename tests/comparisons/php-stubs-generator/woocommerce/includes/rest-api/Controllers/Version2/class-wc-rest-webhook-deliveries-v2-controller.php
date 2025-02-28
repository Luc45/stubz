<?php

/**
 * REST API Webhook Deliveries controller class.
 *
 * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
 * @package WooCommerce\RestApi
 * @extends WC_REST_Webhook_Deliveries_V1_Controller
 */
class WC_REST_Webhook_Deliveries_V2_Controller extends \WC_REST_Webhook_Deliveries_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
    /**
     * Prepare a single webhook delivery output for response.
     *
     * @param  stdClass        $log Delivery log object.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($log, $request)
    {
    }
    /**
     * Get the Webhook's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}