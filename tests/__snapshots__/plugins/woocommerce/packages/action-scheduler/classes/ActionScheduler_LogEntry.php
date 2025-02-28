<?php
/**
 * Class ActionScheduler_LogEntry
 */
class ActionScheduler_LogEntry
{
    /**
     * Action's ID for log entry.
     *
     * @var int $action_id
     */
    protected $action_id = '';
    /**
     * Log entry's message.
     *
     * @var string $message
     */
    protected $message = '';
    /**
     * Log entry's date.
     *
     * @var Datetime $date
     */
    protected $date;
    /**
     * Constructor
     *
     * @param mixed    $action_id Action ID.
     * @param string   $message   Message.
     * @param Datetime $date      Datetime object with the time when this log entry was created. If this parameter is
     *                            not provided a new Datetime object (with current time) will be created.
     */
    public function __construct($action_id, $message, $date = null)
{
}
    /**
     * Returns the date when this log entry was created
     *
     * @return Datetime
     */
    public function get_date()
{
}
    /**
     * Get action ID of log entry.
     */
    public function get_action_id()
{
}
    /**
     * Get log entry message.
     */
    public function get_message()
{
}
}
