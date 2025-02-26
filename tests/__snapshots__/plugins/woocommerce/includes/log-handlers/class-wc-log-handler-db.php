<?php

namespace ;

/**
 * Handles log entries by writing to database.
 *
 * @class          WC_Log_Handler_DB
 * @version        1.0.0
 * @package        WooCommerce\Classes\Log_Handlers
 */
class WC_Log_Handler_DB
{
    /**
     * Handle a log entry.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message Log message.
     * @param array  $context {
     *      Additional information for log handlers.
     *
     *     @type string $source Optional. Source will be available in log table.
     *                  If no source is provided, attempt to provide sensible default.
     * }
     *
     * @see WC_Log_Handler_DB::get_log_source() for default source.
     *
     * @return bool False if value was not handled and true if value was handled.
     */
    public function handle($timestamp, $level, $message, $context)
    {
        // stub
    }

    /**
     * Add a log entry to chosen file.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message Log message.
     * @param string $source Log source. Useful for filtering and sorting.
     * @param array  $context Context will be serialized and stored in database.
     *
     * @return bool True if write was successful.
     */
    protected static function add($timestamp, $level, $message, $source, $context)
    {
        // stub
    }

    /**
     * Clear all logs from the DB.
     *
     * @return bool True if flush was successful.
     */
    public static function flush()
    {
        // stub
    }

    /**
     * Clear entries for a chosen handle/source.
     *
     * @param string $source Log source.
     * @return bool
     */
    public function clear($source)
    {
        // stub
    }

    /**
     * Delete selected logs from DB.
     *
     * @param int|string|array $log_ids Log ID or array of Log IDs to be deleted.
     *
     * @return bool
     */
    public static function delete($log_ids)
    {
        // stub
    }

    /**
     * Delete all logs older than a defined timestamp.
     *
     * @since 3.4.0
     * @param integer $timestamp Timestamp to delete logs before.
     */
    public static function delete_logs_before_timestamp($timestamp = 0)
    {
        // stub
    }

    /**
     * Get appropriate source based on file name.
     *
     * Try to provide an appropriate source in case none is provided.
     *
     * @return string Text to use as log source. "" (empty string) if none is found.
     */
    protected static function get_log_source()
    {
        // stub
    }

}

