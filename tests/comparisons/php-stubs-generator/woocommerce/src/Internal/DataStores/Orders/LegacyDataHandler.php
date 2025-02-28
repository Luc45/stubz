<?php

namespace Automattic\WooCommerce\Internal\DataStores\Orders;

/**
 * This class provides functionality to clean up post data from the posts table when HPOS is authoritative.
 */
class LegacyDataHandler
{
    /**
     * Class initialization, invoked by the DI container.
     *
     * @param OrdersTableDataStore             $data_store            HPOS datastore instance to use.
     * @param DataSynchronizer                 $data_synchronizer     DataSynchronizer instance to use.
     * @param PostsToOrdersMigrationController $posts_to_cot_migrator Posts to HPOS migration controller instance to use.
     *
     * @internal
     */
    final public function init(\Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStore $data_store, \Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $data_synchronizer, \Automattic\WooCommerce\Database\Migrations\CustomOrderTable\PostsToOrdersMigrationController $posts_to_cot_migrator)
    {
    }
    /**
     * Returns the total number of orders for which legacy post data can be removed.
     *
     * @param array $order_ids If provided, total is computed only among IDs in this array, which can be either individual IDs or ranges like "100-200".
     * @return int Number of orders.
     */
    public function count_orders_for_cleanup($order_ids = array()): int
    {
    }
    /**
     * Returns a set of orders for which legacy post data can be removed.
     *
     * @param array $order_ids If provided, result is a subset of the order IDs in this array, which can contain either individual order IDs or ranges like "100-200".
     * @param int   $limit     Limit the number of results.
     * @return array[int] Order IDs.
     */
    public function get_orders_for_cleanup($order_ids = array(), int $limit = 0): array
    {
    }
    /**
     * Performs a cleanup of post data for a given order and also converts the post to the placeholder type in the backup table.
     *
     * @param int  $order_id    Order ID.
     * @param bool $skip_checks Whether to skip the checks that happen before the order is cleaned up.
     * @return void
     * @throws \Exception When an error occurs.
     */
    public function cleanup_post_data(int $order_id, bool $skip_checks = false): void
    {
    }
    /**
     * Builds an array with properties and metadata for which HPOS and post record have different values.
     * Given it's mostly informative nature, it doesn't perform any deep or recursive searches and operates only on top-level properties/metadata.
     *
     * @since 8.6.0
     *
     * @param int $order_id Order ID.
     * @return array Array of [HPOS value, post value] keyed by property, for all properties where HPOS and post value differ.
     */
    public function get_diff_for_order(int $order_id): array
    {
    }
    /**
     * Returns an order object as seen by either the HPOS or CPT datastores.
     *
     * @since 8.6.0
     *
     * @param int    $order_id      Order ID.
     * @param string $data_store_id Datastore to use. Should be either 'hpos' or 'posts'. Defaults to 'hpos'.
     * @return \WC_Order Order instance.
     * @throws \Exception When an error occurs.
     */
    public function get_order_from_datastore(int $order_id, string $data_store_id = 'hpos')
    {
    }
    /**
     * Backfills an order from/to the CPT or HPOS datastore.
     *
     * @since 8.7.0
     *
     * @param int    $order_id               Order ID.
     * @param string $source_data_store      Datastore to use as source. Should be either 'hpos' or 'posts'.
     * @param string $destination_data_store Datastore to use as destination. Should be either 'hpos' or 'posts'.
     * @param array  $fields                 List of metakeys or order properties to limit the backfill to.
     * @return void
     * @throws \Exception When an error occurs.
     */
    public function backfill_order_to_datastore(int $order_id, string $source_data_store, string $destination_data_store, array $fields = array())
    {
    }
}
