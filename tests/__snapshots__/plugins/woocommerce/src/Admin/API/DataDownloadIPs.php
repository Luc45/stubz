<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Data Download IP controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class DataDownloadIPs extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'data/download-ips';
    /**
     * Register routes.
     *
     * @since 3.5.0
     */
    public function register_routes()
{
}
    /**
     * Return the download IPs matching the passed parameters.
     *
     * @since  3.5.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
{
}
    /**
     * Prepare the data object for response.
     *
     * @since  3.5.0
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
     * @return array Links for the given object.
     */
    protected function prepare_links($item)
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
    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}