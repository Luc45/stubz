<?php

namespace Automattic\WooCommerce\Admin\API\Reports\PerformanceIndicators;

/**
 * REST API Reports Performance indicators controller class.
 *
 * @internal
 * @extends GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/performance-indicators';
    /**
     * Contains a list of endpoints by report slug.
     *
     * @var array
     */
    protected $endpoints = array();
    /**
     * Contains a list of active Jetpack module slugs.
     *
     * @var array
     */
    protected $active_jetpack_modules = null;
    /**
     * Contains a list of allowed stats.
     *
     * @var array
     */
    protected $allowed_stats = array();
    /**
     * Contains a list of stat labels.
     *
     * @var array
     */
    protected $labels = array();
    /**
     * Contains a list of endpoints by url.
     *
     * @var array
     */
    protected $urls = array();
    /**
     * Contains a cache of retrieved stats data, grouped by report slug.
     *
     * @var array
     */
    protected $stats_data = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Register the routes for reports.
     */
    public function register_routes()
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
     * Set active Jetpack modules.
     *
     * @internal
     * @param array $modules List of active Jetpack module slugs.
     */
    public function set_active_jetpack_modules($modules)
    {
    }
    /**
     * Returns a list of allowed performance indicators.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_allowed_items($request)
    {
    }
    /**
     * Sorts the list of stats. Sorted by custom arrangement.
     *
     * @internal
     * @see https://github.com/woocommerce/woocommerce-admin/issues/1282
     * @param object $a First item.
     * @param object $b Second item.
     * @return order
     */
    public function sort($a, $b)
    {
    }
    /**
     * Get all reports.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report data item for serialization.
     *
     * @param array           $stat_data Report data item as returned from Data Store.
     * @param WP_REST_Request $request   Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($stat_data, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param object $object data.
     * @return array
     */
    protected function prepare_links($object)
    {
    }
    /**
     * Format the data returned from the API for given stats.
     *
     * @param array  $data Data from external endpoint.
     * @param string $stat Name of the stat.
     * @param string $report Name of the report.
     * @param string $chart Name of the chart.
     * @param array  $query_args Query args.
     * @return mixed
     */
    public function format_data_value($data, $stat, $report, $chart, $query_args)
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
     * Get schema for the list of allowed performance indicators.
     *
     * @return array $schema
     */
    public function get_public_allowed_item_schema()
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