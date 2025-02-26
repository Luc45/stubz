<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Orders\Stats;

/**
 * API\Reports\Orders\Stats\Query
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
    protected $name = 'orders-stats';

    /**
     * Valid fields for Orders report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
        // stub
    }

}

