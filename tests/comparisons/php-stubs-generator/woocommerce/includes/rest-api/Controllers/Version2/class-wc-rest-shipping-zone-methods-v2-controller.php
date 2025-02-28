<?php

/**
 * REST API Shipping Zone Methods class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Shipping_Zones_Controller_Base
 */
class WC_REST_Shipping_Zone_Methods_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
{
    /**
     * Register the routes for Shipping Zone Methods.
     */
    public function register_routes()
    {
    }
    /**
     * Get a single Shipping Zone Method.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Get all Shipping Zone Methods.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Create a new shipping zone method instance.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function create_item($request)
    {
    }
    /**
     * Delete a shipping method instance.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_item($request)
    {
    }
    /**
     * Update A Single Shipping Zone Method.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Updates settings, order, and enabled status on create.
     *
     * @param int                $instance_id Instance ID.
     * @param WC_Shipping_Method $method      Shipping method data.
     * @param WP_REST_Request    $request     Request data.
     *
     * @return WC_Shipping_Method
     */
    public function update_fields($instance_id, $method, $request)
    {
    }
    /**
     * Prepare the Shipping Zone Method for the REST response.
     *
     * @param array           $item Shipping Zone Method.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Return settings associated with this shipping zone method instance.
     *
     * @param WC_Shipping_Method $item Shipping method data.
     *
     * @return array
     */
    public function get_settings($item)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param int $zone_id Given Shipping Zone ID.
     * @param int $instance_id Given Shipping Zone Method Instance ID.
     * @return array Links for the given Shipping Zone Method.
     */
    protected function prepare_links($zone_id, $instance_id)
    {
    }
    /**
     * Get the Shipping Zone Methods schema, conforming to JSON Schema
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}