<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Stock\Stats;

/**
 * API\Reports\Stock\Stats\Query
 * This query takes no arguments, so we do not inherit from GenericQuery.
 */
class Query extends \WC_Object_Query
{
    /**
     * Get product data based on the current query vars.
     *
     * @return array
     */
    public function get_data()
{
}
}