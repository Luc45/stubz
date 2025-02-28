<?php
/**
 * Class ActionScheduler_Abstract_RecurringSchedule
 */
abstract class ActionScheduler_Abstract_RecurringSchedule extends \ActionScheduler_Abstract_Schedule
{
    /**
     * Timestamp equivalent of @see $this->first_date
     *
     * @var int
     */
    protected $first_timestamp = null;
    /**
     * The recurrence between each time an action is run using this schedule.
     * Used to calculate the start date & time. Can be a number of seconds, in the
     * case of ActionScheduler_IntervalSchedule, or a cron expression, as in the
     * case of ActionScheduler_CronSchedule. Or something else.
     *
     * @var mixed
     */
    protected $recurrence = null;
    /**
     * Construct.
     *
     * @param DateTime      $date The date & time to run the action.
     * @param mixed         $recurrence The data used to determine the schedule's recurrence.
     * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
     */
    public function __construct(DateTime $date, $recurrence, DateTime|null $first = null)
{
}
    /**
     * Schedule is recurring.
     *
     * @return bool
     */
    public function is_recurring()
{
}
    /**
     * Get the date & time of the first schedule in this recurring series.
     *
     * @return DateTime|null
     */
    public function get_first_date()
{
}
    /**
     * Get the schedule's recurrence.
     *
     * @return string
     */
    public function get_recurrence()
{
}
    /**
     * For PHP 5.2 compat, since DateTime objects can't be serialized
     *
     * @return array
     */
    public function __sleep()
{
}
    /**
     * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
     *
     * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
     * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
     * was the same as ActionScheduler_SimpleSchedule::timestamp. This was addressed in
     * Action Scheduler 3.0.0, where properties and property names were aligned for better
     * inheritance. To maintain backward compatibility with scheduled serialized and stored
     * prior to 3.0, we need to correctly map the old property names.
     */
    public function __wakeup()
{
}
}
