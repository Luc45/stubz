<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Orders;

/**
 * REST API Reports orders controller class.
 *
 * @internal
 * @extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/orders';

    /**
     * Get data from Orders\Query.
     *
     * @override GenericController::get_datastore_data()
     *
     * @param array $query_args Query arguments.
     * @return mixed Results from the data store.
     */
    protected function get_datastore_data($query_args = array(
))
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
     * Prepare a report data item for serialization.
     *
     * @param array            $report  Report data item as returned from Data Store.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
        // stub
    }

    /**
     * Prepare links for the request.
     *
     * @param WC_Reports_Query $object Object data.
     * @return array
     */
    protected function prepare_links($object)
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
     * Get customer name column export value.
     *
     * @param array $customer Customer from report row.
     * @return string
     */
    protected function get_customer_name($customer)
    {
        // stub
    }

    /**
     * Get products column export value.
     *
     * @param array $products Products from report row.
     * @return string
     */
    protected function get_products($products)
    {
        // stub
    }

    /**
     * Get coupons column export value.
     *
     * @param array $coupons Coupons from report row.
     * @return string
     */
    protected function get_coupons($coupons)
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

