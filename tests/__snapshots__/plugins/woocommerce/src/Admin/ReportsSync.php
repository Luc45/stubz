<?php

namespace Automattic\WooCommerce\Admin;

/**
 * ReportsSync Class.
 */
class ReportsSync
{
    /**
     * Hook in sync methods.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Get classes for syncing data.
     *
     * @return array
     * @throws \Exception Throws exception when invalid data is found.
     */
    public static function get_schedulers()
    {
        // stub
    }

    /**
     * Returns true if an import is in progress.
     *
     * @return bool
     */
    public static function is_importing()
    {
        // stub
    }

    /**
     * Regenerate data for reports.
     *
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip existing records.
     * @return string
     */
    public static function regenerate_report_data($days, $skip_existing)
    {
        // stub
    }

    /**
     * Update the import stat totals and counts.
     *
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip existing records.
     */
    public static function reset_import_stats($days, $skip_existing)
    {
        // stub
    }

    /**
     * Get stats for current import.
     *
     * @return array
     */
    public static function get_import_stats()
    {
        // stub
    }

    /**
     * Get the import totals for all syncs.
     *
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip existing records.
     * @return array
     */
    public static function get_import_totals($days, $skip_existing)
    {
        // stub
    }

    /**
     * Clears all queued actions.
     */
    public static function clear_queued_actions()
    {
        // stub
    }

    /**
     * Delete all data for reports.
     *
     * @return string
     */
    public static function delete_report_data()
    {
        // stub
    }

    /**
     * Clear the count cache when products are added or updated, or when
     * the no/low stock options are changed.
     *
     * @param int $id Post/product ID.
     */
    public static function clear_stock_count_cache($id)
    {
        // stub
    }

}