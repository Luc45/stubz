<?php

namespace Automattic\WooCommerce\Admin\Schedulers;

/**
 * SchedulerTraits class.
 */
trait SchedulerTraits
{
    /**
     * Action scheduler group.
     *
     * @var string|null
     */
    public static $group = 'wc-admin-data';

    /**
     * Queue instance.
     *
     * @var WC_Queue_Interface
     */
    protected static $queue = null;

    /**
     * Add all actions as hooks.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Get queue instance.
     *
     * @return WC_Queue_Interface
     */
    public static function queue()
    {
        // stub
    }

    /**
     * Set queue instance.
     *
     * @param WC_Queue_Interface $queue Queue instance.
     */
    public static function set_queue($queue)
    {
        // stub
    }

    /**
     * Gets the default scheduler actions for batching and scheduling actions.
     */
    public static function get_default_scheduler_actions()
    {
        // stub
    }

    /**
     * Gets the actions for this specific scheduler.
     *
     * @return array
     */
    public static function get_scheduler_actions()
    {
        // stub
    }

    /**
     * Get all available scheduling actions.
     * Used to determine action hook names and clear events.
     */
    public static function get_actions()
    {
        // stub
    }

    /**
     * Get an action tag name from the action name.
     *
     * @param string $action_name The action name.
     * @return string|null
     */
    public static function get_action($action_name)
    {
        // stub
    }

    /**
     * Returns an array of actions and dependencies as key => value pairs.
     *
     * @return array
     */
    public static function get_dependencies()
    {
        // stub
    }

    /**
     * Get dependencies associated with an action.
     *
     * @param string $action_name The action slug.
     * @return string|null
     */
    public static function get_dependency($action_name)
    {
        // stub
    }

    /**
     * Batch action size.
     */
    public static function get_batch_sizes()
    {
        // stub
    }

    /**
     * Returns the batch size for an action.
     *
     * @param string $action Single batch action name.
     * @return int Batch size.
     */
    public static function get_batch_size($action)
    {
        // stub
    }

    /**
     * Flatten multidimensional arrays to store for scheduling.
     *
     * @param array $args Argument array.
     * @return string
     */
    public static function flatten_args($args)
    {
        // stub
    }

    /**
     * Check if existing jobs exist for an action and arguments.
     *
     * @param string $action_name Action name.
     * @param array  $args Array of arguments to pass to action.
     * @return bool
     */
    public static function has_existing_jobs($action_name, $args)
    {
        // stub
    }

    /**
     * Get the next blocking job for an action.
     *
     * @param string $action_name Action name.
     * @return false|ActionScheduler_Action
     */
    public static function get_next_blocking_job($action_name)
    {
        // stub
    }

    /**
     * Check for blocking jobs and reschedule if any exist.
     */
    public static function do_action_or_reschedule()
    {
        // stub
    }

    /**
     * Get the DateTime for the next scheduled time an action should run.
     * This function allows backwards compatibility with Action Scheduler < v3.0.
     *
     * @param \ActionScheduler_Action $action Action.
     * @return DateTime|null
     */
    public static function get_next_action_time($action)
    {
        // stub
    }

    /**
     * Schedule an action to run and check for dependencies.
     *
     * @param string $action_name Action name.
     * @param array  $args Array of arguments to pass to action.
     */
    public static function schedule_action($action_name, $args = array (
))
    {
        // stub
    }

    /**
     * Queue a large number of batch jobs, respecting the batch size limit.
     * Reduces a range of batches down to "single batch" jobs.
     *
     * @param int    $range_start Starting batch number.
     * @param int    $range_end Ending batch number.
     * @param string $single_batch_action Action to schedule for a single batch.
     * @param array  $action_args Action arguments.
     * @return void
     */
    public static function queue_batches($range_start, $range_end, $single_batch_action, $action_args = array (
))
    {
        // stub
    }

    /**
     * Clears all queued actions.
     */
    public static function clear_queued_actions()
    {
        // stub
    }

}

