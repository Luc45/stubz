<?php

namespace Automattic\WooCommerce\Internal\Admin\Logging;

/**
 * LogHandlerFileV2 class.
 */
class LogHandlerFileV2
{
    /**
     * Instance of the FileController class.
     *
     * @var FileController
     */
    private $file_controller = null;

    /**
     * Instance of the Settings class.
     *
     * @var Settings
     */
    private $settings = null;

    /**
     * LogHandlerFileV2 class.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Handle a log entry.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level     emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message   Log message.
     * @param array  $context   {
     *     Optional. Additional information for log handlers. Any data can be added here, but there are some array
     *     keys that have special behavior.
     *
     *     @type string $source    Determines which log file to write to. Must be at least 3 characters in length.
     *     @type bool   $backtrace True to include a backtrace that shows where the logging function got called.
     * }
     *
     * @return bool False if value was not handled and true if value was handled.
     */
    public function handle($timestamp, $level, $message, $context)
    {
        // stub
    }

    /**
     * Builds a log entry text from level, timestamp, and message.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level     emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message   Log message.
     * @param array  $context   Additional information for log handlers.
     *
     * @return string Formatted log entry.
     */
    protected static function format_entry($timestamp, $level, $message, $context)
    {
        // stub
    }

    /**
     * Figures out a source string to use for a log entry based on where the log method was called from.
     *
     * @return string
     */
    protected function determine_source(): string
    {
        // stub
    }

    /**
     * Delete all logs from a specific source.
     *
     * @param string $source The source of the log entries.
     *
     * @return int The number of files that were deleted.
     */
    public function clear(string $source): int
    {
        // stub
    }

    /**
     * Delete all logs older than a specified timestamp.
     *
     * @param int $timestamp All files created before this timestamp will be deleted.
     *
     * @return int The number of files that were deleted.
     */
    public function delete_logs_before_timestamp(int $timestamp = 0): int
    {
        // stub
    }

}

