<?php

namespace ;

/**
 * Class ActionScheduler_SimpleSchedule
 */
class ActionScheduler_SimpleSchedule
{
    /**
     * Deprecated property @see $this->__wakeup() for details.
     *
     * @var null|DateTime
     */
    private $timestamp = null;

    /**
     * Calculate when this schedule should start after a given date & time using
     * the number of seconds between recurrences.
     *
     * @param DateTime $after Timestamp.
     *
     * @return DateTime|null
     */
    public function calculate_next(DateTime $after)
    {
        // stub
    }

    /**
     * Schedule is not recurring.
     *
     * @return bool
     */
    public function is_recurring()
    {
        // stub
    }

    /**
     * Serialize schedule with data required prior to AS 3.0.0
     *
     * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
     * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
     * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
     * aligned properties and property names for better inheritance. To guard against the
     * scheduled date for single actions always being seen as "now" if downgrading to
     * Action Scheduler < 3.0.0, we need to also store the data with the old property names
     * so if it's unserialized in AS < 3.0, the schedule doesn't end up with a null recurrence.
     *
     * @return array
     */
    public function __sleep()
    {
        // stub
    }

    /**
     * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
     *
     * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
     * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
     * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
     * aligned properties and property names for better inheritance. To maintain backward
     * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
     * map the old property names with matching visibility.
     */
    public function __wakeup()
    {
        // stub
    }

}

