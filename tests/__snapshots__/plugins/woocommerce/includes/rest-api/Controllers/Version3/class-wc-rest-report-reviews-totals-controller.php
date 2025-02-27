<?php

/**
 * REST API Reports Reviews Totals controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Reports_Controller
 */
class WC_REST_Report_Reviews_Totals_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/reviews/totals';

    /**
     * Get reports list.
     *
     * @since 3.5.0
     * @return array
     */
    protected function get_reports()
    {
        // stub
    }

    /**
     * Prepare a report object for serialization.
     *
     * @param  stdClass        $report Report data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
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

}
