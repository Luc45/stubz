<?php

namespace Automattic\WooCommerce\Internal\Admin\Schedulers;

/**
 * ImportScheduler class.
 */
abstract class ImportScheduler
{
    const IMPORT_STATS_OPTION = 'woocommerce_admin_import_stats';

    /**
     * Returns true if an import is in progress.
     *
     * @internal
     * @return bool
     */
    public static function is_importing()
    {
        // stub
    }

    /**
     * Get batch sizes.
     *
     * @internal
     * @return array
     */
    public static function get_batch_sizes()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Queue item deletion in batches.
     *
     * @internal
     */
    public static function delete_batch_init()
    {
        // stub
    }

    /**
     * Delete a batch by passing the count to be deleted to the child delete method.
     *
     * @internal
     * @return void
     */
    public static function delete_batch()
    {
        // stub
    }

}