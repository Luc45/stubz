<?php

namespace Automattic\WooCommerce\Internal\Admin\Schedulers;

/**
 * ImportScheduler class.
 */
abstract class ImportScheduler implements \Automattic\WooCommerce\Internal\Admin\Schedulers\ImportInterface
{
    /**
     * Import stats option name.
     */
    const IMPORT_STATS_OPTION = 'woocommerce_admin_import_stats';
    /**
     * Scheduler traits.
     */
    use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
        get_batch_sizes as get_scheduler_batch_sizes;
    }
    /**
     * Returns true if an import is in progress.
     *
     * @internal
     * @return bool
     */
    public static function is_importing()
    {
    }
    /**
     * Get batch sizes.
     *
     * @internal
     * @return array
     */
    public static function get_batch_sizes()
    {
    }
    /**
     * Get all available scheduling actions.
     * Used to determine action hook names and clear events.
     *
     * @internal
     * @return array
     */
    public static function get_scheduler_actions()
    {
    }
    /**
     * Queue the imports into multiple batches.
     *
     * @internal
     * @param integer|boolean $days Number of days to import.
     * @param boolean         $skip_existing Skip existing records.
     */
    public static function import_batch_init($days, $skip_existing)
    {
    }
    /**
     * Imports a batch of items to update.
     *
     * @internal
     * @param int      $batch_number Batch number to import (essentially a query page number).
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip existing records.
     * @return void
     */
    public static function import_batch($batch_number, $days, $skip_existing)
    {
    }
    /**
     * Queue item deletion in batches.
     *
     * @internal
     */
    public static function delete_batch_init()
    {
    }
    /**
     * Delete a batch by passing the count to be deleted to the child delete method.
     *
     * @internal
     * @return void
     */
    public static function delete_batch()
    {
    }
}