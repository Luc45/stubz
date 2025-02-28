<?php
/**
 * REST API Data Currencies controller class.
 *
 * @package WooCommerce\RestApi
 */
class WC_REST_Data_Currencies_Controller extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'data/currencies';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Get currency information.
     *
     * @param  string          $code    Currency code.
     * @param  WP_REST_Request $request Request data.
     * @return array|mixed Response data, ready for insertion into collection data.
     */
    public function get_currency($code, $request)
{
}
    /**
     * Return the list of currencies.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
{
}
    /**
     * Return information for a specific currency.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
{
}
    /**
     * Return information for the current site currency.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_current_item($request)
{
}
    /**
     * Prepare the data object for response.
     *
     * @param object          $item Data object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
{
}
    /**
     * Prepare links for the request.
     *
     * @param object $item Data object.
     * @return array Links for the given currency.
     */
    protected function prepare_links($item)
{
}
    /**
     * Get the currency schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
