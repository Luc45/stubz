<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Variations\Stats;

/**
 * API\Reports\Variations\Stats\Query
 *
 * @deprecated 9.3.0 Variations\Stats\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    /**
     * Valid fields for Products report.
     *
     * @deprecated 9.3.0 Variations\Stats\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    protected function get_default_query_vars()
{
}
    /**
     * Get variations data based on the current query vars.
     *
     * @deprecated 9.3.0 Variations\Stats\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    public function get_data()
{
}
}