<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers\Stats;

/**
 * API\Reports\Customers\Stats\Query
 *
 * @deprecated 9.3.0 Customers\Stats\Query class is deprecated, please use `Reports\Customers\Query` with a custom name, `GenericQuery`, `\WC_Object_Query`, or use `DataStore` directly.
 */
class Query
{
    /**
     * Valid fields for Customers report.
     *
     * @deprecated 9.3.0 Customers\Stats\Query class is deprecated, please use `Reports\Customers\Query` with a custom name, `GenericQuery`, `\WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    protected function get_default_query_vars()
{
}
    /**
     * Get product data based on the current query vars.
     *
     * @deprecated 9.3.0 Customers\Stats\Query class is deprecated, please use `Reports\Customers\Query` with a custom name, `GenericQuery`, `\WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    public function get_data()
{
}
}