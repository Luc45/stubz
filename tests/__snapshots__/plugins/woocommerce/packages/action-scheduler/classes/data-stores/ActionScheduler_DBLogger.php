<?php

/**
 * Class ActionScheduler_DBLogger
 *
 * Action logs data table data store.
 *
 * @since 3.0.0
 */
class ActionScheduler_DBLogger
{
    /**
     * Add a record to an action log.
     *
     * @param int           $action_id Action ID.
     * @param string        $message Message to be saved in the log entry.
     * @param DateTime|null $date Timestamp of the log entry.
     *
     * @return int     The log entry ID.
     */
    public function log($action_id, $message, DateTime|null $date = null)
    {
        // stub
    }

    /**
     * Retrieve an action log entry.
     *
     * @param int $entry_id Log entry ID.
     *
     * @return ActionScheduler_LogEntry
     */
    public function get_entry($entry_id)
    {
        // stub
    }

    /**
     * Create an action log entry from a database record.
     *
     * @param object $record Log entry database record object.
     *
     * @return ActionScheduler_LogEntry
     */
    private function create_entry_from_db_record($record)
    {
        // stub
    }

    /**
     * Retrieve an action's log entries from the database.
     *
     * @param int $action_id Action ID.
     *
     * @return ActionScheduler_LogEntry[]
     */
    public function get_logs($action_id)
    {
        // stub
    }

    /**
     * Initialize the data store.
     *
     * @codeCoverageIgnore
     */
    public function init()
    {
        // stub
    }

    /**
     * Delete the action logs for an action.
     *
     * @param int $action_id Action ID.
     */
    public function clear_deleted_action_logs($action_id)
    {
        // stub
    }

    /**
     * Bulk add cancel action log entries.
     *
     * @param array $action_ids List of action ID.
     */
    public function bulk_log_cancel_actions($action_ids)
    {
        // stub
    }

}
