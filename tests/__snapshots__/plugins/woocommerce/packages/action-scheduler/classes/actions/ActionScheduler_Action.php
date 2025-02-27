<?php

/**
 * Class ActionScheduler_Action
 */
class ActionScheduler_Action
{
    /**
     * Action's hook.
     *
     * @var string
     */
    protected $hook = '';

    /**
     * Action's args.
     *
     * @var array<string, mixed>
     */
    protected $args = array (
);

    /**
     * Action's schedule.
     *
     * @var ActionScheduler_Schedule
     */
    protected $schedule = null;

    /**
     * Action's group.
     *
     * @var string
     */
    protected $group = '';

    /**
     * Priorities are conceptually similar to those used for regular WordPress actions.
     * Like those, a lower priority takes precedence over a higher priority and the default
     * is 10.
     *
     * Unlike regular WordPress actions, the priority of a scheduled action is strictly an
     * integer and should be kept within the bounds 0-255 (anything outside the bounds will
     * be brought back into the acceptable range).
     *
     * @var int
     */
    protected $priority = 10;

    /**
     * Construct.
     *
     * @param string                        $hook Action's hook.
     * @param mixed[]                       $args Action's arguments.
     * @param null|ActionScheduler_Schedule $schedule Action's schedule.
     * @param string                        $group Action's group.
     */
    public function __construct($hook, array $args = array (
), ActionScheduler_Schedule|null $schedule = null, $group = '')
    {
        // stub
    }

    /**
     * Executes the action.
     *
     * If no callbacks are registered, an exception will be thrown and the action will not be
     * fired. This is useful to help detect cases where the code responsible for setting up
     * a scheduled action no longer exists.
     *
     * @throws Exception If no callbacks are registered for this action.
     */
    public function execute()
    {
        // stub
    }

    /**
     * Set action's hook.
     *
     * @param string $hook Action's hook.
     */
    protected function set_hook($hook)
    {
        // stub
    }

    /**
     * Get action's hook.
     */
    public function get_hook()
    {
        // stub
    }

    /**
     * Set action's schedule.
     *
     * @param ActionScheduler_Schedule $schedule Action's schedule.
     */
    protected function set_schedule(ActionScheduler_Schedule $schedule)
    {
        // stub
    }

    /**
     * Action's schedule.
     *
     * @return ActionScheduler_Schedule
     */
    public function get_schedule()
    {
        // stub
    }

    /**
     * Set action's args.
     *
     * @param mixed[] $args Action's arguments.
     */
    protected function set_args(array $args)
    {
        // stub
    }

    /**
     * Get action's args.
     */
    public function get_args()
    {
        // stub
    }

    /**
     * Section action's group.
     *
     * @param string $group Action's group.
     */
    protected function set_group($group)
    {
        // stub
    }

    /**
     * Action's group.
     *
     * @return string
     */
    public function get_group()
    {
        // stub
    }

    /**
     * Action has not finished.
     *
     * @return bool
     */
    public function is_finished()
    {
        // stub
    }

    /**
     * Sets the priority of the action.
     *
     * @param int $priority Priority level (lower is higher priority). Should be in the range 0-255.
     *
     * @return void
     */
    public function set_priority($priority)
    {
        // stub
    }

    /**
     * Gets the action priority.
     *
     * @return int
     */
    public function get_priority()
    {
        // stub
    }

}
