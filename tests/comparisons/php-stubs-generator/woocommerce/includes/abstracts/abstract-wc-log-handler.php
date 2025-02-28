<?php

/**
 * Abstract WC Log Handler Class
 *
 * @version        1.0.0
 * @package        WooCommerce\Abstracts
 */
abstract class WC_Log_Handler implements \WC_Log_Handler_Interface
{
    /**
     * Formats a timestamp for use in log messages.
     *
     * @param int $timestamp Log timestamp.
     * @return string Formatted time for use in log entry.
     */
    protected static function format_time($timestamp)
    {
    }
    /**
     * Builds a log entry text from level, timestamp and message.
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
     * Get a backtrace that shows where the logging function was called.
     *
     * @return array
     */
    protected static function get_backtrace()
    {
    }
}
