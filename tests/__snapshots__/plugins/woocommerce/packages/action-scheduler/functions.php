<?php

/**
 * Enqueue an action to run one time, as soon as possible
 *
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
 * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
 *
 * @return int The action ID. Zero if there was an error scheduling the action.
 */
function as_enqueue_async_action($hook, $args = array (
), $group = '', $unique = false, $priority = 10)
{
    // stub
}

/**
 * Schedule an action to run one time
 *
 * @param int    $timestamp When the job will run.
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
 * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
 *
 * @return int The action ID. Zero if there was an error scheduling the action.
 */
function as_schedule_single_action($timestamp, $hook, $args = array (
), $group = '', $unique = false, $priority = 10)
{
    // stub
}

/**
 * Schedule a recurring action
 *
 * @param int    $timestamp When the first instance of the job will run.
 * @param int    $interval_in_seconds How long to wait between runs.
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
 * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
 *
 * @return int The action ID. Zero if there was an error scheduling the action.
 */
function as_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array (
), $group = '', $unique = false, $priority = 10)
{
    // stub
}

/**
 * Schedule an action that recurs on a cron-like schedule.
 *
 * @param int    $timestamp The first instance of the action will be scheduled
 *           to run at a time calculated after this timestamp matching the cron
 *           expression. This can be used to delay the first instance of the action.
 * @param string $schedule A cron-link schedule string.
 * @see http://en.wikipedia.org/wiki/Cron
 *   *    *    *    *    *    *
 *   ┬    ┬    ┬    ┬    ┬    ┬
 *   |    |    |    |    |    |
 *   |    |    |    |    |    + year [optional]
 *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
 *   |    |    |    +---------- month (1 - 12)
 *   |    |    +--------------- day of month (1 - 31)
 *   |    +-------------------- hour (0 - 23)
 *   +------------------------- min (0 - 59)
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
 * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
 *
 * @return int The action ID. Zero if there was an error scheduling the action.
 */
function as_schedule_cron_action($timestamp, $schedule, $hook, $args = array (
), $group = '', $unique = false, $priority = 10)
{
    // stub
}

/**
 * Cancel the next occurrence of a scheduled action.
 *
 * While only the next instance of a recurring or cron action is unscheduled by this method, that will also prevent
 * all future instances of that recurring or cron action from being run. Recurring and cron actions are scheduled in
 * a sequence instead of all being scheduled at once. Each successive occurrence of a recurring action is scheduled
 * only after the former action is run. If the next instance is never run, because it's unscheduled by this function,
 * then the following instance will never be scheduled (or exist), which is effectively the same as being unscheduled
 * by this method also.
 *
 * @param string $hook The hook that the job will trigger.
 * @param array  $args Args that would have been passed to the job.
 * @param string $group The group the job is assigned to.
 *
 * @return int|null The scheduled action ID if a scheduled action was found, or null if no matching action found.
 */
function as_unschedule_action($hook, $args = array (
), $group = '')
{
    // stub
}

/**
 * Cancel all occurrences of a scheduled action.
 *
 * @param string $hook The hook that the job will trigger.
 * @param array  $args Args that would have been passed to the job.
 * @param string $group The group the job is assigned to.
 */
function as_unschedule_all_actions($hook, $args = array (
), $group = '')
{
    // stub
}

/**
 * Check if there is an existing action in the queue with a given hook, args and group combination.
 *
 * An action in the queue could be pending, in-progress or async. If the is pending for a time in
 * future, its scheduled date will be returned as a timestamp. If it is currently being run, or an
 * async action sitting in the queue waiting to be processed, in which case boolean true will be
 * returned. Or there may be no async, in-progress or pending action for this hook, in which case,
 * boolean false will be the return value.
 *
 * @param string $hook Name of the hook to search for.
 * @param array  $args Arguments of the action to be searched.
 * @param string $group Group of the action to be searched.
 *
 * @return int|bool The timestamp for the next occurrence of a pending scheduled action, true for an async or in-progress action or false if there is no matching action.
 */
function as_next_scheduled_action($hook, $args = null, $group = '')
{
    // stub
}

/**
 * Check if there is a scheduled action in the queue but more efficiently than as_next_scheduled_action().
 *
 * It's recommended to use this function when you need to know whether a specific action is currently scheduled
 * (pending or in-progress).
 *
 * @since 3.3.0
 *
 * @param string $hook  The hook of the action.
 * @param array  $args  Args that have been passed to the action. Null will matches any args.
 * @param string $group The group the job is assigned to.
 *
 * @return bool True if a matching action is pending or in-progress, false otherwise.
 */
function as_has_scheduled_action($hook, $args = null, $group = '')
{
    // stub
}

/**
 * Find scheduled actions
 *
 * @param array  $args Possible arguments, with their default values.
 *         'hook' => '' - the name of the action that will be triggered.
 *         'args' => NULL - the args array that will be passed with the action.
 *         'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
 *         'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='.
 *         'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
 *         'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='.
 *         'group' => '' - the group the action belongs to.
 *         'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING.
 *         'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID.
 *         'per_page' => 5 - Number of results to return.
 *         'offset' => 0.
 *         'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', 'date' or 'none'.
 *         'order' => 'ASC'.
 *
 * @param string $return_format OBJECT, ARRAY_A, or ids.
 *
 * @return array
 */
function as_get_scheduled_actions($args = array (
), $return_format)
{
    // stub
}

/**
 * Helper function to create an instance of DateTime based on a given
 * string and timezone. By default, will return the current date/time
 * in the UTC timezone.
 *
 * Needed because new DateTime() called without an explicit timezone
 * will create a date/time in PHP's timezone, but we need to have
 * assurance that a date/time uses the right timezone (which we almost
 * always want to be UTC), which means we need to always include the
 * timezone when instantiating datetimes rather than leaving it up to
 * the PHP default.
 *
 * @param mixed  $date_string A date/time string. Valid formats are explained in http://php.net/manual/en/datetime.formats.php.
 * @param string $timezone A timezone identifier, like UTC or Europe/Lisbon. The list of valid identifiers is available http://php.net/manual/en/timezones.php.
 *
 * @return ActionScheduler_DateTime
 */
function as_get_datetime_object($date_string = null, $timezone = 'UTC')
{
    // stub
}
