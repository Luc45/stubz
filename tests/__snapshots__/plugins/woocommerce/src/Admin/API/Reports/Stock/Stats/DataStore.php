<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Stock\Stats;

/**
 * API\Reports\Stock\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore
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
    /**
     * Get low stock count (products with stock < low stock amount, but greater than no stock amount).
     *
     * @return int Low stock count.
     */
    private function get_low_stock_count()
{
}
    /**
     * Get count for the passed in stock status.
     *
     * @param  string $status Status slug.
     * @return int Count.
     */
    private function get_count($status)
{
}
    /**
     * Get product count for the store.
     *
     * @return int Product count.
     */
    private function get_product_count()
{
}
}