<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers;

/**
 * API\Reports\Customers\Query
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Specific query name.
     * Will be used to load the `report-{name}` data store,
     * and to call `woocommerce_analytics_{snake_case(name)}_*` filters.
     *
     * @var string
     */
    protected $name = 'customers';

    /**
     * Valid fields for Customers report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
        // stub
    }

}

