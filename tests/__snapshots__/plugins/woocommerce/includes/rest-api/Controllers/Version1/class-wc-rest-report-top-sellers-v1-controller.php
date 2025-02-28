<?php

/**
 * REST API Report Top Sellers controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Report_Sales_V1_Controller
 */
class WC_REST_Report_Top_Sellers_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/top_sellers';

    /**
     * Get sales reports.
     *
     * @param WP_REST_Request $request
     * @return array|WP_Error
     */
    public function get_items($request)
{
}
    /**
     * Prepare a report sales object for serialization.
     *
     * @param stdClass $top_seller
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($top_seller, $request)
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
