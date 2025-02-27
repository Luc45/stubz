<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Revenue;

/**
 * API\Reports\Revenue\Query
 *
 * This query uses inconsistent names:
 *  - `report-revenue-stats` data store
 *  - `woocommerce_analytics_revenue_*` filters
 * So, for backward compatibility, we cannot use GenericQuery.
 */
class Query
{
    /**
     * Valid fields for Revenue report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
        // stub
    }

    /**
     * Get revenue data based on the current query vars.
     *
     * @return array
     */
    public function get_data()
    {
        // stub
    }

}