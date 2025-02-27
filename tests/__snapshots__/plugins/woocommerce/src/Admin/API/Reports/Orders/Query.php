<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Orders;

/**
 * API\Reports\Orders\Query
 */
class Query
{
    /**
     * Specific query name.
     * Will be used to load the `report-{name}` data store,
     * and to call `woocommerce_analytics_{snake_case(name)}_*` filters.
     *
     * @var string
     */
    protected $name = 'orders';

    /**
     * Get the default allowed query vars.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
        // stub
    }

}