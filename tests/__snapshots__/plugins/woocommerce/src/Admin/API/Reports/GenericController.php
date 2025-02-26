<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * {@see WC_REST_Reports_Controller WC REST API Reports Controller} extended to be shared as a generic base for all Analytics reports controllers.
 *
 * Handles pagination HTTP headers and links, basic, conventional params.
 * Does all the REST API plumbing as `WC_REST_Controller`.
 *
 *
 * Minimalistic example:
 * <pre><code class="language-php">class MyController extends GenericController {
 *     /** Route of your new REST endpoint. &ast;/
 *     protected $rest_base = 'reports/my-thing';
 *     /**
 *      * Provide JSON schema for the response item.
 *      * @override WC_REST_Reports_Controller::get_item_schema()
 *      &ast;/
 *     public function get_item_schema() {
 *         $schema = array(
 *             '$schema'    => 'http://json-schema.org/draft-04/schema#',
 *             'title'      => 'report_my_thing',
 *             'type'       => 'object',
 *             'properties' => array(
 *                 'product_id' => array(
 *                     'type'        => 'integer',
 *                     'readonly'    => true,
 *                     'context'     => array( 'view', 'edit' ),
 *                 'description' => __( 'Product ID.', 'my_extension' ),
 *                 ),
 *             ),
 *         );
 *         // Add additional fields from `get_additional_fields` method and apply `woocommerce_rest_' . $schema['title'] . '_schema` filter.
 *         return $this->add_additional_fields_schema( $schema );
 *     }
 * }
 * </code></pre>
 *
 * The above Controller will get the data from a {@see DataStore data store} registered as `$rest_base` (`reports/my-thing`).
 * (To change this behavior, override the `get_datastore_data()` method).
 *
 * To use the controller, please register it with the filter `woocommerce_admin_rest_controllers` filter.
 *
 * @extends WC_REST_Reports_Controller
 */
abstract class GenericController
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';

    /**
     * Add pagination headers and links.
     *
     * @param \WP_REST_Request        $request   Request data.
     * @param \WP_REST_Response|array $response  Response data.
     * @param int                     $total     Total results.
     * @param int                     $page      Current page.
     * @param int                     $max_pages Total amount of pages.
     * @return \WP_REST_Response
     */
    public function add_pagination_headers($request, $response, int $total, int $page, int $max_pages)
    {
        // stub
    }

    /**
     * Get data from `{$this->rest_base}` store, based on the given query vars.
     *
     * @throws Exception When the data store is not found {@see WC_Data_Store WC_Data_Store}.
     * @param array $query_args Query arguments.
     * @return mixed Results from the data store.
     */
    protected function get_datastore_data($query_args = array (
))
    {
        // stub
    }

    /**
     * Get the query params definition for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Get the report data.
     *
     * Prepares query params, fetches the report data from the data store,
     * prepares it for the response, and packs it into the convention-conforming response object.
     *
     * @throws \WP_Error When the queried data is invalid.
     * @param \WP_REST_Request $request Request data.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_items($request)
    {
        // stub
    }

    /**
     * Prepare a report data item for serialization.
     *
     * This method is called by `get_items` to prepare a single report data item for serialization.
     * Calls `add_additional_fields_to_object` and `filter_response_by_context`,
     * then wpraps the data with `rest_ensure_response`.
     *
     * You can extend it to add or filter some fields.
     *
     * @override WP_REST_Posts_Controller::prepare_item_for_response()
     *
     * @param mixed           $report_item Report data item as returned from Data Store.
     * @param WP_REST_Request $request     Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report_item, $request)
    {
        // stub
    }

    /**
     * Maps query arguments from the REST request, to be used to query the datastore.
     *
     * `WP_REST_Request` does not expose a method to return all params covering defaults,
     * as it does for `$request['param']` accessor.
     * Therefore, we re-implement defaults resolution.
     *
     * @param \WP_REST_Request $request Full request object.
     * @return array Simplified array of params.
     */
    protected function prepare_reports_query($request)
    {
        // stub
    }

    /**
     * Apply a filter for custom orderby enum.
     *
     * @param array $orderby_enum An array of orderby enum options.
     *
     * @return array An array of filtered orderby enum options.
     *
     * @since 9.4.0
     */
    protected function apply_custom_orderby_filters($orderby_enum)
    {
        // stub
    }

}

