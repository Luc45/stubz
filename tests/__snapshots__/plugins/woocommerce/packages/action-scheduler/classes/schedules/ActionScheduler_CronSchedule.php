<?php
/**
 * Class ActionScheduler_CronSchedule
 */
class ActionScheduler_CronSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
{
    /**
     * Wrapper for parent constructor to accept a cron expression string and map it to a CronExpression for this
     * objects $recurrence property.
     *
     * @param DateTime              $start The date & time to run the action at or after. If $start aligns with the CronSchedule passed via $recurrence, it will be used. If it does not align, the first matching date after it will be used.
     * @param CronExpression|string $recurrence The CronExpression used to calculate the schedule's next instance.
     * @param DateTime|null         $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
     */
    public function __construct(DateTime $start, $recurrence, DateTime|null $first = null)
{
}
    /**
     * Calculate when an instance of this schedule would start based on a given
     * date & time using its the CronExpression.
     *
     * @param DateTime $after Timestamp.
     * @return DateTime
     */
    protected function calculate_next(DateTime $after)
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
     * Serialize cron schedules with data required prior to AS 3.0.0
     *
     * Prior to Action Scheduler 3.0.0, recurring schedules used different property names to
     * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
     * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
     * aligned properties and property names for better inheritance. To guard against the
     * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
     * also store the data with the old property names so if it's unserialized in AS < 3.0,
     * the schedule doesn't end up with a null recurrence.
     *
     * @return array
     */
    public function __sleep()
{
}
    /**
     * Unserialize cron schedules serialized/stored prior to AS 3.0.0
     *
     * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
     */
    public function __wakeup()
{
}
}
