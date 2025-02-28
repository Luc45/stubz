<?php
/**
 * Class ActionScheduler_Logger
 *
 * @codeCoverageIgnore
 */
abstract class ActionScheduler_Logger
{
    /**
     * Instance.
     *
     * @var null|self
     */
    private static $logger = null;
    /**
     * Get instance.
     *
     * @return ActionScheduler_Logger
     */
    public static function instance()
{
}
    /**
     * Create log entry.
     *
     * @param string        $action_id Action ID.
     * @param string        $message   Log message.
     * @param DateTime|null $date      Log date.
     *
     * @return string The log entry ID
     */
    abstract public function log($action_id, $message, DateTime|null $date = null);
    /**
     * Get action's log entry.
     *
     * @param string $entry_id Entry ID.
     *
     * @return ActionScheduler_LogEntry
     */
    abstract public function get_entry($entry_id);
    /**
     * Get action's logs.
     *
     * @param string $action_id Action ID.
     *
     * @return ActionScheduler_LogEntry[]
     */
    abstract public function get_logs($action_id);
    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public function init()
{
}
    /**
     * Register callback for storing action.
     */
    public function hook_stored_action()
{
}
    /**
     * Unhook callback for storing action.
     */
    public function unhook_stored_action()
{
}
    /**
     * Log action stored.
     *
     * @param int $action_id Action ID.
     */
    public function log_stored_action($action_id)
{
}
    /**
     * Log action cancellation.
     *
     * @param int $action_id Action ID.
     */
    public function log_canceled_action($action_id)
{
}
    /**
     * Log action start.
     *
     * @param int    $action_id Action ID.
     * @param string $context Action execution context.
     */
    public function log_started_action($action_id, $context = '')
{
}
    /**
     * Log action completion.
     *
     * @param int                         $action_id Action ID.
     * @param null|ActionScheduler_Action $action Action.
     * @param string                      $context Action execution context.
     */
    public function log_completed_action($action_id, $action = null, $context = '')
{
}
    /**
     * Log action failure.
     *
     * @param int       $action_id Action ID.
     * @param Exception $exception Exception.
     * @param string    $context Action execution context.
     */
    public function log_failed_action($action_id, Exception $exception, $context = '')
{
}
    /**
     * Log action timeout.
     *
     * @param int    $action_id  Action ID.
     * @param string $timeout Timeout.
     */
    public function log_timed_out_action($action_id, $timeout)
{
}
    /**
     * Log unexpected shutdown.
     *
     * @param int     $action_id Action ID.
     * @param mixed[] $error     Error.
     */
    public function log_unexpected_shutdown($action_id, $error)
{
}
    /**
     * Log action reset.
     *
     * @param int $action_id Action ID.
     */
    public function log_reset_action($action_id)
{
}
    /**
     * Log ignored action.
     *
     * @param int    $action_id Action ID.
     * @param string $context Action execution context.
     */
    public function log_ignored_action($action_id, $context = '')
{
}
    /**
     * Log the failure of fetching the action.
     *
     * @param string         $action_id Action ID.
     * @param null|Exception $exception The exception which occurred when fetching the action. NULL by default for backward compatibility.
     */
    public function log_failed_fetch_action($action_id, Exception|null $exception = null)
{
}
    /**
     * Log the failure of scheduling the action's next instance.
     *
     * @param int       $action_id Action ID.
     * @param Exception $exception Exception object.
     */
    public function log_failed_schedule_next_instance($action_id, Exception $exception)
{
}
    /**
     * Bulk add cancel action log entries.
     *
     * Implemented here for backward compatibility. Should be implemented in parent loggers
     * for more performant bulk logging.
     *
     * @param array $action_ids List of action ID.
     */
    public function bulk_log_cancel_actions($action_ids)
{
}
}
