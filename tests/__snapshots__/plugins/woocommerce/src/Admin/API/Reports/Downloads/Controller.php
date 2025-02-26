<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Downloads;

/**
 * REST API Reports downloads controller class.
 *
 * @internal
 * @extends Automattic\WooCommerce\Admin\API\Reports\GenericController
 */
class Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/downloads';

    /**
     * Get data from `'downloads'` GenericQuery.
     *
     * @override GenericController::get_datastore_data()
     *
     * @param array $query_args Query arguments.
     * @return mixed Results from the data store.
     */
    protected function get_datastore_data($query_args = array (
))
    {
        // stub
    }

    /**
     * Prepare a report data item for serialization.
     *
     * @param Array           $report  Report data item as returned from Data Store.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param Array $object Object data.
     * @return array        Links for the given post.
     */
    protected function prepare_links($object)
    {
        // stub
    }

    /**
     * Maps query arguments from the REST request.
     *
     * @param array $request Request array.
     * @return array
     */
    protected function prepare_reports_query($request)
    {
        // stub
    }

    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Get the column names for export.
     *
     * @return array Key value pair of Column ID => Label.
     */
    public function get_export_columns()
    {
        // stub
    }

    /**
     * Get the column values for export.
     *
     * @param array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
    {
        // stub
    }

}

