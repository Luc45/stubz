<?php

namespace Automattic\WooCommerce\Internal\Admin\Schedulers;

/**
 * OrdersScheduler Class.
 */
class OrdersScheduler extends \Automattic\WooCommerce\Internal\Admin\Schedulers\ImportScheduler
{
    /**
     * Slug to identify the scheduler.
     *
     * @var string
     */
    public static $name = 'orders';
    /**
     * Attach order lookup update hooks.
     *
     * @internal
     */
    public static function init()
{
}
    /**
     * Add customer dependencies.
     *
     * @internal
     * @return array
     */
    public static function get_dependencies()
{
}
    /**
     * Get the order/refund IDs and total count that need to be synced.
     *
     * @internal
     * @param int      $limit Number of records to retrieve.
     * @param int      $page  Page number.
     * @param int|bool $days Number of days prior to current date to limit search results.
     * @param bool     $skip_existing Skip already imported orders.
     */
    public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
{
}
    /**
     * Get total number of rows imported.
     *
     * @internal
     */
    public static function get_total_imported()
{
}
    /**
     * Schedule this import if the post is an order or refund.
     *
     * @param int $order_id Post ID.
     *
     * @internal
     * @returns int The order id
     */
    public static function possibly_schedule_import($order_id)
{
}
    /**
     * Imports a single order or refund to update lookup tables for.
     * If an error is encountered in one of the updates, a retry action is scheduled.
     *
     * @internal
     * @param int $order_id Order or refund ID.
     * @return void
     */
    public static function import($order_id)
{
}
    /**
     * Delete a batch of orders.
     *
     * @internal
     * @param int $batch_size Number of items to delete.
     * @return void
     */
    public static function delete($batch_size)
{
}
}