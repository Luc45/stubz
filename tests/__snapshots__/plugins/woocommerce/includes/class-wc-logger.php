<?php
/**
 * WC_Logger class.
 */
class WC_Logger implements \WC_Logger_Interface
{
    /**
     * Stores registered log handlers.
     *
     * @var array
     */
    protected $handlers = null;
    /**
     * Minimum log level this handler will process.
     *
     * @var int Integer representation of minimum log level to handle.
     */
    protected $threshold = null;
    /**
     * Constructor for the logger.
     *
     * @param array  $handlers Optional. Array of log handlers. If $handlers is not provided, the filter 'woocommerce_register_log_handlers' will be used to define the handlers. If $handlers is provided, the filter will not be applied and the handlers will be used directly.
     * @param string $threshold Optional. Define an explicit threshold. May be configured via  WC_LOG_THRESHOLD. By default, all logs will be processed.
     */
    public function __construct($handlers = null, $threshold = null)
{
}
    /**
     * Get an array of log handler instances.
     *
     * @return WC_Log_Handler_Interface[]
     */
    protected function get_handlers()
{
}
    /**
     * Get the log threshold as a numerical level severity.
     *
     * @return int
     */
    protected function get_threshold()
{
}
    /**
     * Determine whether to handle or ignore log.
     *
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @return bool True if the log should be handled.
     */
    protected function should_handle($level)
{
}
    /**
     * Add a log entry.
     *
     * This is not the preferred method for adding log messages. Please use log() or any one of
     * the level methods (debug(), info(), etc.). This method may be deprecated in the future.
     *
     * @param string $handle File handle.
     * @param string $message Message to log.
     * @param string $level Logging level.
     * @return bool
     */
    public function add($handle, $message, $level)
{
}
    /**
     * Add a log entry.
     *
     * @param string $level One of the following:
     *     'emergency': System is unusable.
     *     'alert': Action must be taken immediately.
     *     'critical': Critical conditions.
     *     'error': Error conditions.
     *     'warning': Warning conditions.
     *     'notice': Normal but significant condition.
     *     'info': Informational messages.
     *     'debug': Debug-level messages.
     * @param string $message Log message.
     * @param array  $context Optional. Additional information for log handlers.
     *
     * @return void
     */
    public function log($level, $message, $context = array())
{
}
    /**
     * Adds an emergency level message.
     *
     * System is unusable.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function emergency($message, $context = array())
{
}
    /**
     * Adds an alert level message.
     *
     * Action must be taken immediately.
     * Example: Entire website down, database unavailable, etc.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function alert($message, $context = array())
{
}
    /**
     * Adds a critical level message.
     *
     * Critical conditions.
     * Example: Application component unavailable, unexpected exception.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function critical($message, $context = array())
{
}
    /**
     * Adds an error level message.
     *
     * Runtime errors that do not require immediate action but should typically be logged
     * and monitored.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function error($message, $context = array())
{
}
    /**
     * Adds a warning level message.
     *
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things that are not
     * necessarily wrong.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function warning($message, $context = array())
{
}
    /**
     * Adds a notice level message.
     *
     * Normal but significant events.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function notice($message, $context = array())
{
}
    /**
     * Adds a info level message.
     *
     * Interesting events.
     * Example: User logs in, SQL logs.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function info($message, $context = array())
{
}
    /**
     * Adds a debug level message.
     *
     * Detailed debug information.
     *
     * @see WC_Logger::log
     *
     * @param string $message Message to log.
     * @param array  $context Log context.
     */
    public function debug($message, $context = array())
{
}
    /**
     * Clear entries for a chosen file/source.
     *
     * @param string $source Source/handle to clear.
     * @return bool
     */
    public function clear($source = '')
{
}
    /**
     * Clear all logs older than a defined number of days. Defaults to 30 days.
     *
     * @return void
     */
    public function clear_expired_logs()
{
}
}
