<?php

namespace ;

/**
 * REST API Shipping Zones class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Shipping_Zones_Controller_Base
 */
class WC_REST_Shipping_Zones_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
{
    /**
     * Register the routes for Shipping Zones.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Get a single Shipping Zone.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
        // stub
    }

    /**
     * Get all Shipping Zones.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Create a single Shipping Zone.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function create_item($request)
    {
        // stub
    }

    /**
     * Update a single Shipping Zone.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function update_item($request)
    {
        // stub
    }

    /**
     * Delete a single Shipping Zone.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function delete_item($request)
    {
        // stub
    }

    /**
     * Prepare the Shipping Zone for the REST response.
     *
     * @param array           $item Shipping Zone.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($item, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param int $zone_id Given Shipping Zone ID.
     * @return array Links for the given Shipping Zone.
     */
    protected function prepare_links($zone_id)
    {
        // stub
    }

    /**
     * Get the Shipping Zones schema, conforming to JSON Schema
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

}

