<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Stock\Stats;

/**
 * REST API Reports stock stats controller class.
 *
 * @internal
 * @extends WC_REST_Reports_Controller
 */
class Controller extends \WC_REST_Reports_Controller
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
    protected $rest_base = 'reports/stock/stats';

    /**
     * Get Stock Status Totals.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepare a report data item for serialization.
     *
     * @param  WC_Product      $report  Report data item as returned from Data Store.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
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

}

