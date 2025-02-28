<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * WooCommerce Reports data store interface.
 *
 * @since 3.5.0
 */
interface DataStoreInterface
{
    /**
     * Get the data based on args.
     *
     * @param array $args Query parameters.
     * @return stdClass|WP_Error
     */
    public function get_data($args);
}