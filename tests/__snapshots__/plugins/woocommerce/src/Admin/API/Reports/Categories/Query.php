<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Categories;

/**
 * API\Reports\Categories\Query
 *
 * @deprecated 9.3.0 Categories\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
 */
class Query
{
    const REPORT_NAME = 'report-categories';

    /**
     * Valid fields for Categories report.
     *
     * @deprecated 9.3.0 Categories\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
        // stub
    }

    /**
     * Get categories data based on the current query vars.
     *
     * @deprecated 9.3.0 Categories\Query class is deprecated. Please use `GenericQuery`, \WC_Object_Query`, or use `DataStore` directly.
     *
     * @return array
     */
    public function get_data()
    {
        // stub
    }

}

