<?php

/**
 * REST API Taxes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Taxes_V2_Controller
 */
class WC_REST_Taxes_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Add tax rate locales to the response array.
     *
     * @param array    $data Response data.
     * @param stdClass $tax  Tax object.
     *
     * @return array
     */
    protected function add_tax_rate_locales($data, $tax)
{
}
    /**
     * Get the taxes schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Create a single tax.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response The response, or an error.
     */
    public function create_item($request)
{
}
    /**
     * Update a single tax.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response The response, or an error.
     */
    public function update_item($request)
{
}
    /**
     * Convert array "cities" and "postcodes" parameters
     * into semicolon-separated strings "city" and "postcode".
     *
     * @param WP_REST_Request $request The request to adjust.
     */
    private function adjust_cities_and_postcodes(&$request)
{
}
}
