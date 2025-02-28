<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats;

/**
 * REST API Reports taxes stats controller class.
 *
 * @internal
 * @extends GenericStatsController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericStatsController
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/taxes/stats';
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Set the default results to 0 if API returns an empty array
     *
     * @internal
     * @param Mixed $results Report data.
     * @return object
     */
    public function set_default_report_data($results)
{
}
    /**
     * Maps query arguments from the REST request.
     *
     * @param array $request Request array.
     * @return array
     */
    protected function prepare_reports_query($request)
{
}
    /**
     * Get data from `'taxes-stats'` GenericQuery.
     *
     * @override GenericController::get_datastore_data()
     *
     * @param array $query_args Query arguments.
     * @return mixed Results from the data store.
     */
    protected function get_datastore_data($query_args = array())
{
}
    /**
     * Prepare a report data item for serialization.
     *
     * @param mixed           $report  Report data item as returned from Data Store.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
{
}
    /**
     * Get the Report's item properties schema.
     * Will be used by `get_item_schema` as `totals` and `subtotals`.
     *
     * @return array
     */
    protected function get_item_properties_schema()
{
}
    /**
     * Get the Report's schema, conforming to JSON Schema.
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