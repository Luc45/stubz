<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Generic base for all stats controllers.
 *
 * {@see GenericController Generic Controller} extended to be shared as a generic base for all Analytics stats controllers.
 *
 * Besides the `GenericController` functionality, it adds conventional stats-specific collection params and item schema.
 * So, you may want to extend only your report-specific {@see get_item_properties_schema() get_item_properties_schema()}`.
 * It also uses the stats-specific {@see get_items() get_items()} method,
 * which packs report data into `totals` and `intervals`.
 *
 *
 * Minimalistic example:
 * <pre><code class="language-php">class StatsController extends GenericStatsController {
 *     /** Route of your new REST endpoint. &ast;/
 *     protected $rest_base = 'reports/my-thing/stats';
 *     /** Define your proeprties schema. &ast;/
 *     protected function get_item_properties_schema() {
 *         return array(
 *             'my_property' => array(
 *                 'title'       => __( 'My property', 'my-extension' ),
 *                 'type'        => 'integer',
 *                 'readonly'    => true,
 *                 'context'     => array( 'view', 'edit' ),
 *                 'description' => __( 'Amazing thing.', 'my-extension' ),
 *                 'indicator'    => true,
 *              ),
 *         );
 *     }
 *     /** Define overall schema. You can use the defaults,
 *      * just remember to provide your title and call `add_additional_fields_schema`
 *      * to run the filters
 *      &ast;/
 *     public function get_item_schema() {
 *         $schema          = parent::get_item_schema();
 *         $schema['title'] = 'report_my_thing_stats';
 *
 *        return $this->add_additional_fields_schema( $schema );
 *     }
 * }
 * </code></pre>
 *
 * @extends GenericController
 */
abstract class GenericStatsController extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
{
    /**
     * Get the query params definition for collections.
     * Adds `fields` & `intervals` to the generic list.
     *
     * @override GenericController::get_collection_params()
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the report's item properties schema.
     * Will be used by `get_item_schema` as `totals` and `subtotals`.
     *
     * @return array
     */
    abstract protected function get_item_properties_schema();
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * Please note that it does not call add_additional_fields_schema,
     * as you may want to update the `title` first.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the report data.
     *
     * Prepares query params, fetches the report data from the data store,
     * prepares it for the response, and packs it into the convention-conforming response object.
     *
     * @override GenericController::get_items()
     *
     * @throws \WP_Error When the queried data is invalid.
     * @param \WP_REST_Request $request Request data.
     * @return \WP_REST_Response|\WP_Error
     */
    public function get_items($request)
    {
    }
}
