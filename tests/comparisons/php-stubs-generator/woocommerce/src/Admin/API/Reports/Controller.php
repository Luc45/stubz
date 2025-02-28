<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Reports controller class.
 *
 * Controller that handles the endpoint that returns all available analytics endpoints.
 *
 * @internal
 * @extends GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
{
    use \Automattic\WooCommerce\Admin\API\Reports\OrderAwareControllerTrait;

    /**
     * Get all reports.
     *
     * @param WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param stdClass        $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @override WP_REST_Controller::get_item_schema()
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
