<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Revenue\Stats;

/**
 * REST API Reports revenue stats controller class.
 *
 * @internal
 * @extends GenericStatsController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericStatsController implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/revenue/stats';
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
     * Get data from RevenueQuery.
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
     * Get report items for export.
     *
     * Returns only the interval data.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function get_export_items($request)
{
}
    /**
     * Prepare a report data item for serialization.
     *
     * @param array           $report  Report data item as returned from Data Store.
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
    /**
     * Get the column names for export.
     *
     * @return array Key value pair of Column ID => Label.
     */
    public function get_export_columns()
{
}
    /**
     * Get the column values for export.
     *
     * @param array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
{
}
}