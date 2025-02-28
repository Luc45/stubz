<?php

namespace Automattic\WooCommerce\Internal\Logging;

/**
 * WooCommerce Remote Logger
 *
 * The WooCommerce remote logger class adds functionality to log WooCommerce errors remotely based on if the customer opted in and several other conditions.
 *
 * No personal information is logged, only error information and relevant context.
 *
 * @class RemoteLogger
 * @since 9.2.0
 * @package WooCommerce\Classes
 */
class RemoteLogger extends \WC_Log_Handler
{
    public const LOG_ENDPOINT = 'https://public-api.wordpress.com/rest/v1.1/logstash';
    public const RATE_LIMIT_ID = 'woocommerce_remote_logging';
    public const RATE_LIMIT_DELAY = 60;
    public const WC_NEW_VERSION_TRANSIENT = 'woocommerce_new_version';
    /**
     * Handle a log entry.
     *
     * @param int    $timestamp Log timestamp.
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message Log message.
     * @param array  $context Additional information for log handlers.
     *
     * @throws \Exception If the remote logging fails. The error is caught and logged locally.
     *
     * @return bool False if value was not handled and true if value was handled.
     */
    public function handle($timestamp, $level, $message, $context)
{
}
    /**
     * Get formatted log data to be sent to the remote logging service.
     *
     * This method formats the log data by sanitizing the message, adding default fields, and including additional context
     * such as backtrace, tags, and extra attributes. It also integrates with WC_Tracks to include blog and store details.
     * The formatted log data is then filtered before being sent to the remote logging service.
     *
     * @param string $level   Log level (e.g., 'error', 'warning', 'info').
     * @param string $message Log message to be recorded.
     * @param array  $context Optional. Additional information for log handlers, such as 'backtrace', 'tags', 'extra', and 'error'.
     *
     * @return array Formatted log data ready to be sent to the remote logging service.
     */
    public function get_formatted_log($level, $message, $context = array())
{
}
    /**
     * Determines if remote logging is allowed based on the following conditions:
     *
     * 1. The feature flag for remote error logging is enabled.
     * 2. The user has opted into tracking/logging.
     * 3. The store is allowed to log based on the variant assignment percentage.
     * 4. The current WooCommerce version is the latest so we don't log errors that might have been fixed in a newer version.
     *
     * @return bool
     */
    public function is_remote_logging_allowed()
{
}
    /**
     * Determine whether to handle or ignore log.
     *
     * @param string $level emergency|alert|critical|error|warning|notice|info|debug.
     * @param string $message Log message to be recorded.
     * @param array  $context Additional information for log handlers.
     *
     * @return bool True if the log should be handled.
     */
    protected function should_handle($level, $message, $context)
{
}
    /**
     * Check if the error exclusively contains third-party stack frames for fatal-errors source context.
     *
     * @param string $message The error message.
     * @param array  $context The error context.
     *
     * @return bool
     */
    protected function is_third_party_error(string $message, array $context): bool
{
}
    /**
     * Check if the current environment is development or local.
     *
     * Creates a helper method so we can easily mock this in tests.
     *
     * @return bool
     */
    protected function is_dev_or_local_environment()
{
}
}