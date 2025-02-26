<?php

namespace ;

/**
 * Class ActionScheduler_CanceledAction
 *
 * Stored action which was canceled and therefore acts like a finished action but should always return a null schedule,
 * regardless of schedule passed to its constructor.
 */
class ActionScheduler_CanceledAction
{
    /**
     * Construct.
     *
     * @param string                        $hook Action's hook.
     * @param array                         $args Action's arguments.
     * @param null|ActionScheduler_Schedule $schedule Action's schedule.
     * @param string                        $group Action's group.
     */
    public function __construct($hook, array $args = array (
), ActionScheduler_Schedule|null $schedule = null, $group = '')
    {
        // stub
    }

}

