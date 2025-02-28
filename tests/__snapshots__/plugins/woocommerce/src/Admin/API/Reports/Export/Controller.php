<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Export;

/**
 * Reports Export controller.
 *
 * @internal
 * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/(?P<type>[a-z]+)/export';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    protected function get_export_collection_params()
{
}
    /**
     * Get the Report Export's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_export_public_schema()
{
}
    /**
     * Get the Export status schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_export_status_public_schema()
{
}
    /**
     * Export data based on user request params.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function export_items($request)
{
}
    /**
     * Export status based on user request params.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function export_status($request)
{
}
}