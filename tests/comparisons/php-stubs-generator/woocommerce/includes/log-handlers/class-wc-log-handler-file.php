<?php

/**
 * Handles log entries by writing to a file.
 *
 * @class          WC_Log_Handler_File
 * @version        1.0.0
 * @package        WooCommerce\Classes\Log_Handlers
 */
class WC_Log_Handler_File extends \WC_Log_Handler
{
    /**
     * Stores open file handles.
     *
     * @var array
     */
    protected $handles = array();
    /**
     * File size limit for log files in bytes.
     *
     * @var int
     */
    protected $log_size_limit;
    /**
     * Cache logs that could not be written.
     *
     * If a log is written too early in the request, pluggable functions may be unavailable. These
     * logs will be cached and written on 'plugins_loaded' action.
     *
     * @var array
     */
    protected $cached_logs = array();
    /**
     * Constructor for the logger.
     *
     * @param int $log_size_limit Optional. Size limit for log files. Default 5mb.
     */
    public function __construct($log_size_limit = \null)
    {
    }
    /**
     * Destructor.
     *
     * Cleans up open file handles.
     */
    public function __destruct()
    {
    }
    /**
     * Handle a log entry.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message Log message.
     * @param array  $context {
     *      Additional information for log handlers.
     *
     *     @type string $source Optional. Determines log file to write to. Default 'log'.
     *     @type bool $_legacy Optional. Default false. True to use outdated log format
     *         originally used in deprecated WC_Logger::add calls.
     * }
     *
     * @return bool False if value was not handled and true if value was handled.
     */
    public function handle($timestamp, $level, $message, $context)
    {
    }
    /**
     * Builds a log entry text from timestamp, level and message.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message Log message.
     * @param array  $context Additional information for log handlers.
     *
     * @return string Formatted log entry.
     */
    protected static function format_entry($timestamp, $level, $message, $context)
    {
    }
    /**
     * Open log file for writing.
     *
     * @param string $handle Log handle.
     * @param string $mode Optional. File mode. Default 'a'.
     * @return bool Success.
     */
    protected function open($handle, $mode = 'a')
    {
    }
    /**
     * Check if a handle is open.
     *
     * @param string $handle Log handle.
     * @return bool True if $handle is open.
     */
    protected function is_open($handle)
    {
    }
    /**
     * Close a handle.
     *
     * @param string $handle Log handle.
     * @return bool success
     */
    protected function close($handle)
    {
    }
    /**
     * Add a log entry to chosen file.
     *
     * @param string $entry Log entry text.
     * @param string $handle Log entry handle.
     *
     * @return bool True if write was successful.
     */
    protected function add($entry, $handle)
    {
    }
    /**
     * Clear entries from chosen file.
     *
     * @param string $handle Log handle.
     *
     * @return bool
     */
    public function clear($handle)
    {
    }
    /**
     * Remove/delete the chosen file.
     *
     * @param string $handle Log handle.
     *
     * @return bool
     */
    public function remove($handle)
    {
    }
    /**
     * Check if log file should be rotated.
     *
     * Compares the size of the log file to determine whether it is over the size limit.
     *
     * @param string $handle Log handle.
     * @return bool True if if should be rotated.
     */
    protected function should_rotate($handle)
    {
    }
    /**
     * Rotate log files.
     *
     * Logs are rotated by prepending '.x' to the '.log' suffix.
     * The current log plus 10 historical logs are maintained.
     * For example:
     *     base.9.log -> [ REMOVED ]
     *     base.8.log -> base.9.log
     *     ...
     *     base.0.log -> base.1.log
     *     base.log   -> base.0.log
     *
     * @param string $handle Log handle.
     */
    protected function log_rotate($handle)
    {
    }
    /**
     * Increment a log file suffix.
     *
     * @param string   $handle Log handle.
     * @param null|int $number Optional. Default null. Log suffix number to be incremented.
     * @return bool True if increment was successful, otherwise false.
     */
    protected function increment_log_infix($handle, $number = \null)
    {
    }
    /**
     * Get a log file path.
     *
     * @param string $handle Log name.
     * @return bool|string The log file path or false if path cannot be determined.
     */
    public static function get_log_file_path($handle)
    {
    }
    /**
     * Get a log file name.
     *
     * File names consist of the handle, followed by the date, followed by a hash, .log.
     *
     * @since 3.3
     * @param string $handle Log name.
     * @return bool|string The log file name or false if cannot be determined.
     */
    public static function get_log_file_name($handle)
    {
    }
    /**
     * Cache log to write later.
     *
     * @param string $entry Log entry text.
     * @param string $handle Log entry handle.
     */
    protected function cache_log($entry, $handle)
    {
    }
    /**
     * Write cached logs.
     */
    public function write_cached_logs()
    {
    }
    /**
     * Delete all logs older than a defined timestamp.
     *
     * @since 3.4.0
     * @param integer $timestamp Timestamp to delete logs before.
     */
    public static function delete_logs_before_timestamp($timestamp = 0)
    {
    }
    /**
     * Get all log files in the log directory.
     *
     * @since 3.4.0
     * @return array
     */
    public static function get_log_files()
    {
    }
}
