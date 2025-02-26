<?php

namespace ;

/**
 * Class ActionScheduler_Schedule
 */
interface ActionScheduler_Schedule
{
    /**
     * Get the date & time this schedule was created to run, or calculate when it should be run
     * after a given date & time.
     *
     * @param null|DateTime $after Timestamp.
     * @return DateTime|null
     */
    public function next(DateTime|null $after = null);

    /**
     * Identify the schedule as (not) recurring.
     *
     * @return bool
     */
    public function is_recurring();

}

