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
        // stub
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
    public abstract function log($action_id, $message, DateTime|null $date = null);

    /**
     * Get action's log entry.
     *
     * @param string $entry_id Entry ID.
     *
     * @return ActionScheduler_LogEntry
     */
    public abstract function get_entry($entry_id);

    /**
     * Get action's logs.
     *
     * @param string $action_id Action ID.
     *
     * @return ActionScheduler_LogEntry[]
     */
    public abstract function get_logs($action_id);

    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public function init()
    {
        // stub
    }

    /**
     * Register callback for storing action.
     */
    public function hook_stored_action()
    {
        // stub
    }

    /**
     * Unhook callback for storing action.
     */
    public function unhook_stored_action()
    {
        // stub
    }

    /**
     * Log action stored.
     *
     * @param int $action_id Action ID.
     */
    public function log_stored_action($action_id)
    {
        // stub
    }

    /**
     * Log action cancellation.
     *
     * @param int $action_id Action ID.
     */
    public function log_canceled_action($action_id)
    {
        // stub
    }

    /**
     * Log action start.
     *
     * @param int    $action_id Action ID.
     * @param string $context Action execution context.
     */
    public function log_started_action($action_id, $context = '')
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Log action timeout.
     *
     * @param int    $action_id  Action ID.
     * @param string $timeout Timeout.
     */
    public function log_timed_out_action($action_id, $timeout)
    {
        // stub
    }

    /**
     * Log unexpected shutdown.
     *
     * @param int     $action_id Action ID.
     * @param mixed[] $error     Error.
     */
    public function log_unexpected_shutdown($action_id, $error)
    {
        // stub
    }

    /**
     * Log action reset.
     *
     * @param int $action_id Action ID.
     */
    public function log_reset_action($action_id)
    {
        // stub
    }

    /**
     * Log ignored action.
     *
     * @param int    $action_id Action ID.
     * @param string $context Action execution context.
     */
    public function log_ignored_action($action_id, $context = '')
    {
        // stub
    }

    /**
     * Log the failure of fetching the action.
     *
     * @param string         $action_id Action ID.
     * @param null|Exception $exception The exception which occurred when fetching the action. NULL by default for backward compatibility.
     */
    public function log_failed_fetch_action($action_id, Exception|null $exception = null)
    {
        // stub
    }

    /**
     * Log the failure of scheduling the action's next instance.
     *
     * @param int       $action_id Action ID.
     * @param Exception $exception Exception object.
     */
    public function log_failed_schedule_next_instance($action_id, Exception $exception)
    {
        // stub
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
        // stub
    }

}
