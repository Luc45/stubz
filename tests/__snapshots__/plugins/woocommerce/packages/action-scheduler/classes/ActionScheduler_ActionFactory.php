<?php

/**
 * Class ActionScheduler_ActionFactory
 */
class ActionScheduler_ActionFactory
{
    /**
     * Return stored actions for given params.
     *
     * @param string                   $status The action's status in the data store.
     * @param string                   $hook The hook to trigger when this action runs.
     * @param array                    $args Args to pass to callbacks when the hook is triggered.
     * @param ActionScheduler_Schedule $schedule The action's schedule.
     * @param string                   $group A group to put the action in.
     * phpcs:ignore Squiz.Commenting.FunctionComment.ExtraParamComment
     * @param int                      $priority The action priority.
     *
     * @return ActionScheduler_Action An instance of the stored action.
     */
    public function get_stored_action($status, $hook, array $args = array (
), ActionScheduler_Schedule|null $schedule = null, $group = '')
    {
        // stub
    }

    /**
     * Enqueue an action to run one time, as soon as possible (rather a specific scheduled time).
     *
     * This method creates a new action using the NullSchedule. In practice, this results in an action scheduled to
     * execute "now". Therefore, it will generally run as soon as possible but is not prioritized ahead of other actions
     * that are already past-due.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param string $group A group to put the action in.
     *
     * @return int The ID of the stored action.
     */
    public function async($hook, $args = array (
), $group = '')
    {
        // stub
    }

    /**
     * Same as async, but also supports $unique param.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param string $group A group to put the action in.
     * @param bool   $unique Whether to ensure the action is unique.
     *
     * @return int The ID of the stored action.
     */
    public function async_unique($hook, $args = array (
), $group = '', $unique = true)
    {
        // stub
    }

    /**
     * Create single action.
     *
     * @param string $hook  The hook to trigger when this action runs.
     * @param array  $args  Args to pass when the hook is triggered.
     * @param int    $when  Unix timestamp when the action will run.
     * @param string $group A group to put the action in.
     *
     * @return int The ID of the stored action.
     */
    public function single($hook, $args = array (
), $when = null, $group = '')
    {
        // stub
    }

    /**
     * Create single action only if there is no pending or running action with same name and params.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param int    $when Unix timestamp when the action will run.
     * @param string $group A group to put the action in.
     * @param bool   $unique Whether action scheduled should be unique.
     *
     * @return int The ID of the stored action.
     */
    public function single_unique($hook, $args = array (
), $when = null, $group = '', $unique = true)
    {
        // stub
    }

    /**
     * Create the first instance of an action recurring on a given interval.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param int    $first Unix timestamp for the first run.
     * @param int    $interval Seconds between runs.
     * @param string $group A group to put the action in.
     *
     * @return int The ID of the stored action.
     */
    public function recurring($hook, $args = array (
), $first = null, $interval = null, $group = '')
    {
        // stub
    }

    /**
     * Create the first instance of an action recurring on a given interval only if there is no pending or running action with same name and params.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param int    $first Unix timestamp for the first run.
     * @param int    $interval Seconds between runs.
     * @param string $group A group to put the action in.
     * @param bool   $unique Whether action scheduled should be unique.
     *
     * @return int The ID of the stored action.
     */
    public function recurring_unique($hook, $args = array (
), $first = null, $interval = null, $group = '', $unique = true)
    {
        // stub
    }

    /**
     * Create the first instance of an action recurring on a Cron schedule.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param int    $base_timestamp The first instance of the action will be scheduled
     *        to run at a time calculated after this timestamp matching the cron
     *        expression. This can be used to delay the first instance of the action.
     * @param int    $schedule A cron definition string.
     * @param string $group A group to put the action in.
     *
     * @return int The ID of the stored action.
     */
    public function cron($hook, $args = array (
), $base_timestamp = null, $schedule = null, $group = '')
    {
        // stub
    }

    /**
     * Create the first instance of an action recurring on a Cron schedule only if there is no pending or running action with same name and params.
     *
     * @param string $hook The hook to trigger when this action runs.
     * @param array  $args Args to pass when the hook is triggered.
     * @param int    $base_timestamp The first instance of the action will be scheduled
     *        to run at a time calculated after this timestamp matching the cron
     *        expression. This can be used to delay the first instance of the action.
     * @param int    $schedule A cron definition string.
     * @param string $group A group to put the action in.
     * @param bool   $unique Whether action scheduled should be unique.
     *
     * @return int The ID of the stored action.
     **/
    public function cron_unique($hook, $args = array (
), $base_timestamp = null, $schedule = null, $group = '', $unique = true)
    {
        // stub
    }

    /**
     * Create a successive instance of a recurring or cron action.
     *
     * Importantly, the action will be rescheduled to run based on the current date/time.
     * That means when the action is scheduled to run in the past, the next scheduled date
     * will be pushed forward. For example, if a recurring action set to run every hour
     * was scheduled to run 5 seconds ago, it will be next scheduled for 1 hour in the
     * future, which is 1 hour and 5 seconds from when it was last scheduled to run.
     *
     * Alternatively, if the action is scheduled to run in the future, and is run early,
     * likely via manual intervention, then its schedule will change based on the time now.
     * For example, if a recurring action set to run every day, and is run 12 hours early,
     * it will run again in 24 hours, not 36 hours.
     *
     * This slippage is less of an issue with Cron actions, as the specific run time can
     * be set for them to run, e.g. 1am each day. In those cases, and entire period would
     * need to be missed before there was any change is scheduled, e.g. in the case of an
     * action scheduled for 1am each day, the action would need to run an entire day late.
     *
     * @param ActionScheduler_Action $action The existing action.
     *
     * @return string The ID of the stored action
     * @throws InvalidArgumentException If $action is not a recurring action.
     */
    public function repeat($action)
    {
        // stub
    }

    /**
     * Creates a scheduled action.
     *
     * This general purpose method can be used in place of specific methods such as async(),
     * async_unique(), single() or single_unique(), etc.
     *
     * @internal Not intended for public use, should not be overridden by subclasses.
     *
     * @param array $options {
     *     Describes the action we wish to schedule.
     *
     *     @type string     $type      Must be one of 'async', 'cron', 'recurring', or 'single'.
     *     @type string     $hook      The hook to be executed.
     *     @type array      $arguments Arguments to be passed to the callback.
     *     @type string     $group     The action group.
     *     @type bool       $unique    If the action should be unique.
     *     @type int        $when      Timestamp. Indicates when the action, or first instance of the action in the case
     *                                 of recurring or cron actions, becomes due.
     *     @type int|string $pattern   Recurrence pattern. This is either an interval in seconds for recurring actions
     *                                 or a cron expression for cron actions.
     *     @type int        $priority  Lower values means higher priority. Should be in the range 0-255.
     * }
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    public function create(array $options = array (
))
    {
        // stub
    }

    /**
     * Save action to database.
     *
     * @param ActionScheduler_Action $action Action object to save.
     *
     * @return int The ID of the stored action
     */
    protected function store(ActionScheduler_Action $action)
    {
        // stub
    }

    /**
     * Store action if it's unique.
     *
     * @param ActionScheduler_Action $action Action object to store.
     *
     * @return int ID of the created action. Will be 0 if action was not created.
     */
    protected function store_unique_action(ActionScheduler_Action $action)
    {
        // stub
    }

}
