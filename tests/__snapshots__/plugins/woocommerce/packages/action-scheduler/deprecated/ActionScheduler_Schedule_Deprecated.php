<?php

namespace ;

/**
 * Class ActionScheduler_Abstract_Schedule
 */
abstract class ActionScheduler_Schedule_Deprecated extends \
{
    /**
     * Get the date & time this schedule was created to run, or calculate when it should be run
     * after a given date & time.
     *
     * @param DateTime $after DateTime to calculate against.
     *
     * @return DateTime|null
     */
    public function next(DateTime|null $after = null)
    {
        // stub
    }

}

