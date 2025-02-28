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
    const LOGS_SOURCE_NAME = 'posts-to-orders-migration';
    /**
     * Error logger for migration errors.
     *
     * @var \WC_Logger
     */
    private $error_logger = null;
    /**
     * Array of objects used to perform the migration.
     *
     * @var \Automattic\WooCommerce\Database\Migrations\TableMigrator[]
     */
    private $all_migrators = null;
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
     * Log migration errors if any.
     *
     * @param array           $order_post_ids List of post IDs of the orders to migrate.
     * @param array           $errors List of errors to log.
     * @param \Exception|null $exception Exception to log.
     * @param bool|null       $using_transactions Whether transactions were used.
     * @param string          $name Name of the migrator.
     */
    private function handle_migration_error(array $order_post_ids, array $errors, Exception|null $exception, bool|null $using_transactions, string $name)
{
}
    /**
     * Clear the cache of order data for modified orders during migration if cache is enabled.
     *
     * @param array $order_post_ids List of order IDs of the orders to clear from cache.
     *
     * @return void
     */
    private function maybe_clear_order_datastore_cache_for_ids(array $order_post_ids)
{
}
    /**
     * Start a database transaction if the configuration mandates so.
     *
     * @return bool|null True if transaction started, false if transactions won't be used, null if transaction failed to start.
     *
     * @throws \Exception If the transaction isolation level is invalid.
     */
    private function maybe_start_transaction(): bool|null
{
}
    /**
     * Commit the current database transaction.
     *
     * @return bool True on success, false on error.
     */
    private function commit_transaction(): bool
{
}
    /**
     * Rollback the current database transaction.
     *
     * @return bool True on success, false on error.
     */
    private function rollback_transaction(): bool
{
}
    /**
     * Execute a database query and log any errors.
     *
     * @param string $query          The SQL query to execute.
     * @param bool   $supress_errors Whether to suppress errors.
     *
     * @return bool True if the query succeeded, false if there were errors.
     */
    private function db_query(string $query, bool $supress_errors = false): bool
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