<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Orders\Stats;

/**
 * REST API Reports orders stats controller class.
 *
 * @internal
 * @extends \Automattic\WooCommerce\Admin\API\Reports\GenericStatsController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericStatsController
{
    use \Automattic\WooCommerce\Admin\API\Reports\OrderAwareControllerTrait;
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/orders/stats';
    /**
     * Get data from Orders\Stats\Query.
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
     * Maps query arguments from the REST request.
     *
     * @param array $request Request array.
     * @return array
     */
    protected function prepare_reports_query($request)
    {
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