<?php

/**
 * REST API Shipping Zone Locations class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Shipping_Zones_Controller_Base
 */
class WC_REST_Shipping_Zone_Locations_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
{
    /**
     * Register the routes for Shipping Zone Locations.
     */
    public function register_routes()
{
}
    /**
     * Get all Shipping Zone Locations.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_items($request)
{
}
    /**
     * Update all Shipping Zone Locations.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function update_items($request)
{
}
    /**
     * Prepare the Shipping Zone Location for the REST response.
     *
     * @param array           $item Shipping Zone Location.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param int $zone_id Given Shipping Zone ID.
     * @return array Links for the given Shipping Zone Location.
     */
    protected function prepare_links($zone_id)
{
}
    /**
     * Get the Shipping Zone Locations schema, conforming to JSON Schema
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
