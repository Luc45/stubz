<?php

namespace ;

/**
 * Class ActionScheduler_NullSchedule
 */
class ActionScheduler_NullSchedule extends \ActionScheduler_SimpleSchedule
{
    /**
     * DateTime instance.
     *
     * @var DateTime|null
     */
    protected $scheduled_date = null;

    /**
     * Make the $date param optional and default to null.
     *
     * @param null|DateTime $date The date & time to run the action.
     */
    public function __construct(DateTime|null $date = null)
    {
        // stub
    }

    /**
     * This schedule has no scheduled DateTime, so we need to override the parent __sleep().
     *
     * @return array
     */
    public function __sleep()
    {
        // stub
    }

    /**
     * Wakeup.
     */
    public function __wakeup()
    {
        // stub
    }

}

