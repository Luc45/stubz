<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats;

/**
 * API\Reports\Taxes\Stats\Query
 *
 * @deprecated 9.3.0 Taxes\Stats\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    /**
     * Valid fields for Taxes report.
     *
     * @deprecated 9.3.0 Taxes\Stats\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get tax stats data based on the current query vars.
     *
     * @deprecated 9.3.0 Taxes\Stats\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    public function get_data()
    {
    }
}