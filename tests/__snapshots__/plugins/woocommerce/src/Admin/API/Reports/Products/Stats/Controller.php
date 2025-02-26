<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats;

/**
 * REST API Reports products stats controller class.
 *
 * @internal
 * @extends GenericStatsController
 */
class Controller
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/products/stats';

    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array (
  'categories' => 'category_includes',
  'products' => 'product_includes',
  'variations' => 'variation_includes',
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get data from `'products-stats'` GenericQuery.
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
     * Maps query arguments from the REST request to be used to query the datastore.
     *
     * @param \WP_REST_Request $request Full request object.
     * @return array Simplified array of params.
     */
    protected function prepare_reports_query($request)
    {
        // stub
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
        // stub
    }

    /**
     * Get the Report's item properties schema.
     * Will be used by `get_item_schema` as `totals` and `subtotals`.
     *
     * @return array
     */
    protected function get_item_properties_schema()
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
     * Set the default results to 0 if API returns an empty array
     *
     * @internal
     * @param Mixed $results Report data.
     * @return object
     */
    public function set_default_report_data($results)
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

}

