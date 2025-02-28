<?php

/**
 * REST API Reports Customers Totals controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Reports_Controller
 */
class WC_REST_Report_Customers_Totals_Controller extends \WC_REST_Reports_Controller
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
    protected $rest_base = 'reports/customers/totals';

    /**
     * Get reports list.
     *
     * @since 3.5.0
     * @return array
     */
    protected function get_reports()
{
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
}
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
}
