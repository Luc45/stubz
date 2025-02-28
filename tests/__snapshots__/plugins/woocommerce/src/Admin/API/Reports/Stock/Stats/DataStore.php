<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Stock\Stats;

/**
 * API\Reports\Stock\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Get stock counts for the whole store.
     *
     * @override ReportsDataStore::get_data()
     *
     * @param array $query Not used for the stock stats data store, but needed for the interface.
     * @return array Array of counts.
     */
    public function get_data($query)
{
}
}