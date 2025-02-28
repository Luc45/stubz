<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Admin\API\Reports\Query
 *
 * @deprecated 9.3.0 Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
 */
abstract class Query extends \WC_Object_Query
{
    /**
     * Create a new query.
     *
     * @deprecated 9.3.0 Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @param array $args Criteria to query on in a format similar to WP_Query.
     */
    public function __construct($args = array())
    {
    }
    /**
     * Get report data matching the current query vars.
     *
     * @deprecated 9.3.0 Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array|object of WC_Product objects
     */
    public function get_data()
    {
    }
}
