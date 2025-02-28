<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * This is the main class used to perform the complete migration of orders
 * from the posts table to the custom orders table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class PostsToOrdersMigrationController
{
    public const LOGS_SOURCE_NAME = 'posts-to-orders-migration';
    /**
     * PostsToOrdersMigrationController constructor.
     */
    public function __construct()
{
}
    /**
     * Helper method to get migrated keys for all the tables in this controller.
     *
     * @return string[] Array of meta keys.
     */
    public function get_migrated_meta_keys()
{
}
    /**
     * Migrates a set of orders from the posts table to the custom orders tables.
     *
     * @param array $order_post_ids List of post IDs of the orders to migrate.
     */
    public function migrate_orders(array $order_post_ids): void
{
}
    /**
     * Verify whether the given order IDs were migrated properly or not.
     *
     * @param array $order_post_ids Order IDs.
     *
     * @return array Array of failed IDs along with columns.
     */
    public function verify_migrated_orders(array $order_post_ids): array
{
}
    /**
     * Migrates an order from the posts table to the custom orders tables.
     *
     * @param int $order_post_id Post ID of the order to migrate.
     */
    public function migrate_order(int $order_post_id): void
{
}
}