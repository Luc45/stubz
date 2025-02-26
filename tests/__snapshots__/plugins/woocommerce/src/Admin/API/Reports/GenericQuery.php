<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * A generic class for a report-specific query to be used in Analytics.
 *
 * Example usage:
 * <pre><code class="language-php">$args = array(
 *          'before'    => '2018-07-19 00:00:00',
 *          'after'     => '2018-07-05 00:00:00',
 *          'page'      => 2,
 *         );
 * $report = new GenericQuery( $args, 'coupons' );
 * $mydata = $report->get_data();
 * </code></pre>
 *
 * It uses the name provided in the class property or in the constructor call to load the `report-{name}` data store.
 *
 * It's used by the {@see GenericController GenericController}.
 *
 * @since 9.3.0
 */
class GenericQuery extends \WC_Object_Query
{
    /**
     * Specific query name.
     * Will be used to load the `report-{name}` data store,
     * and to call `woocommerce_analytics_{snake_case(name)}_*` filters.
     *
     * @var string
     */
    protected $name = null;

    /**
     * Create a new query.
     *
     * @param array  $args Criteria to query on in a format similar to WP_Query.
     * @param string $name Query name.
     * @extends WC_Object_Query::_construct
     */
    public function __construct($args, $name = null)
    {
        // stub
    }

    /**
     * Valid fields for Products report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
        // stub
    }

    /**
     * Get data from `report-{$name}` store, based on the current query vars.
     * Filters query vars through `woocommerce_analytics_{snake_case(name)}_query_args` filter.
     * Filters results through `woocommerce_analytics_{snake_case(name)}_select_query` filter.
     *
     * @return mixed filtered results from the data store.
     */
    public function get_data()
    {
        // stub
    }

}

