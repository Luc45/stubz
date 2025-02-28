<?php

/**
 * Class ActionScheduler_IntervalSchedule
 */
class ActionScheduler_IntervalSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
{
    /**
     * Calculate when this schedule should start after a given date & time using
     * the number of seconds between recurrences.
     *
     * @param DateTime $after Timestamp.
     * @return DateTime
     */
    protected function calculate_next(\DateTime $after)
    {
    }
    /**
     * Schedule interval in seconds.
     *
     * @return int
     */
    public function interval_in_seconds()
    {
    }
    /**
     * Serialize interval schedules with data required prior to AS 3.0.0
     *
     * Prior to Action Scheduler 3.0.0, recurring schedules used different property names to
     * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
     * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
     * aligned properties and property names for better inheritance. To guard against the
     * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
     * also store the data with the old property names so if it's unserialized in AS < 3.0,
     * the schedule doesn't end up with a null/false/0 recurrence.
     *
     * @return array
     */
    public function __sleep()
    {
    }
    /**
     * Unserialize interval schedules serialized/stored prior to AS 3.0.0
     *
     * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
     */
    public function __wakeup()
    {
    }
}