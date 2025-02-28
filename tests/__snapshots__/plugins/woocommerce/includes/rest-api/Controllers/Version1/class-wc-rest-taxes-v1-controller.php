<?php
/**
 * REST API Taxes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Taxes_V1_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'taxes';
    /**
     * Register the routes for taxes.
     */
    public function register_routes()
{
}
    /**
     * Check whether a given request has permission to read taxes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
{
}
    /**
     * Check if a given request has access create taxes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function create_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access to read a tax.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access update a tax.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function update_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access delete a tax.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
{
}
    /**
     * Check if a given request has access batch create, update and delete items.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function batch_items_permissions_check($request)
{
}
    /**
     * Get all taxes.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
{
}
    /**
     * Take tax data from the request and return the updated or newly created rate.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @param stdClass|null   $current Existing tax object.
     * @return object
     */
    protected function create_or_update_tax($request, $current = null)
{
}
    /**
     * Create a single tax.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
{
}
    /**
     * Get a single tax.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
{
}
    /**
     * Update a single tax.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
{
}
    /**
     * Delete a single tax.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function delete_item($request)
{
}
    /**
     * Prepare a single tax output for response.
     *
     * @param stdClass        $tax     Tax object.
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($tax, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param stdClass $tax Tax object.
     * @return array Links for the given tax.
     */
    protected function prepare_links($tax)
{
}
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
     * Get the Taxes schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}
