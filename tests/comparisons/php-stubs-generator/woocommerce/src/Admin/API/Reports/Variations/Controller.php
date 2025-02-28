<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Variations;

/**
 * REST API Reports products controller class.
 *
 * @internal
 * @extends GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
{
    // The controller does not use this trait. It's here for API backward compatibility.
    use \Automattic\WooCommerce\Admin\API\Reports\OrderAwareControllerTrait;
    /**
     * Exportable traits.
     */
    use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/variations';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array('variations' => 'variation_includes', 'products' => 'product_includes');
    /**
     * Get data from `'variations'` GenericQuery.
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
     * @param array           $report  Report data item as returned from Data Store.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
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
     * Prepare links for the request.
     *
     * @param array $object Object data.
     * @return array        Links for the given post.
     */
    protected function prepare_links($object)
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
     * Get stock status column export value.
     *
     * @param array $status Stock status from report row.
     * @return string
     */
    protected function get_stock_status($status)
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