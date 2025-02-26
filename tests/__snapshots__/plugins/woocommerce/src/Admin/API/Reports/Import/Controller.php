<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Import;

/**
 * Reports Imports controller.
 *
 * @internal
 * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
 */
class Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/import';

    /**
     * Register routes.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Makes sure the current user has access to WRITE the settings APIs.
     *
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_Error|bool
     */
    public function import_permissions_check($request)
    {
        // stub
    }

    /**
     * Import data based on user request params.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function import_items($request)
    {
        // stub
    }

    /**
     * Prepare request object as query args.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
        // stub
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
        // stub
    }

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_import_collection_params()
    {
        // stub
    }

    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_import_public_schema()
    {
        // stub
    }

    /**
     * Cancel all queued import actions.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function cancel_import($request)
    {
        // stub
    }

    /**
     * Delete all imported items.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function delete_imported_items($request)
    {
        // stub
    }

    /**
     * Get the status of the current import.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_import_status($request)
    {
        // stub
    }

    /**
     * Get the total orders and customers based on user supplied params.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_import_totals($request)
    {
        // stub
    }

}

