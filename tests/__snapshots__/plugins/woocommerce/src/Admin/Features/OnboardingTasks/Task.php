<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task class.
 */
abstract class Task
{
    const DISMISSED_OPTION = 'woocommerce_task_list_dismissed_tasks';

    const SNOOZED_OPTION = 'woocommerce_task_list_remind_me_later_tasks';

    const ACTIONED_OPTION = 'woocommerce_task_list_tracked_completed_actions';

    const COMPLETED_OPTION = 'woocommerce_task_list_tracked_completed_tasks';

    const ACTIVE_TASK_TRANSIENT = 'wc_onboarding_active_task';

    /**
     * Parent task list.
     *
     * @var TaskList
     */
    protected $task_list = null;

    /**
     * Duration to millisecond mapping.
     *
     * @var string
     */
    protected $duration_to_ms;

    /**
     * Constructor
     *
     * @param TaskList|null $task_list Parent task list.
     */
    public function __construct($task_list = null)
{
}
    /**
     * ID.
     *
     * @return string
     */
    abstract public function get_id();
    /**
     * Title.
     *
     * @return string
     */
    abstract public function get_title();
    /**
     * Content.
     *
     * @return string
     */
    abstract public function get_content();
    /**
     * Time.
     *
     * @return string
     */
    abstract public function get_time();
    /**
     * Parent ID.
     *
     * @return string
     */
    public function get_parent_id()
{
}
    /**
     * Get task list options.
     *
     * @return array
     */
    public function get_parent_options()
{
}
    /**
     * Get custom option.
     *
     * @param string $option_name name of custom option.
     * @return mixed|null
     */
    public function get_parent_option($option_name)
{
}
    /**
     * Prefix event for track event naming.
     *
     * @param string $event_name Event name.
     * @return string
     */
    public function prefix_event($event_name)
{
}
    /**
     * Additional info.
     *
     * @return string
     */
    public function get_additional_info()
{
}
    /**
     * Additional data.
     *
     * @return mixed
     */
    public function get_additional_data()
{
}
    /**
     * Badge.
     *
     * @return string
     */
    public function get_badge()
{
}
    /**
     * Level.
     *
     * @deprecated 7.2.0
     *
     * @return string
     */
    public function get_level()
{
}
    /**
     * Action label.
     *
     * @return string
     */
    public function get_action_label()
{
}
    /**
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
{
}
    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function is_dismissable()
{
}
    /**
     * Bool for task dismissal.
     *
     * @return bool
     */
    public function is_dismissed()
{
}
    /**
     * Dismiss the task.
     *
     * @return bool
     */
    public function dismiss()
{
}
    /**
     * Undo task dismissal.
     *
     * @return bool
     */
    public function undo_dismiss()
{
}
    /**
     * Check if a task is snoozeable.
     *
     * @deprecated 7.2.0
     *
     * @return bool
     */
    public function is_snoozeable()
{
}
    /**
     * Get the snoozed until datetime.
     *
     * @deprecated 7.2.0
     *
     * @return string
     */
    public function get_snoozed_until()
{
}
    /**
     * Bool for task snoozed.
     *
     * @deprecated 7.2.0
     *
     * @return bool
     */
    public function is_snoozed()
{
}
    /**
     * Snooze the task.
     *
     * @param string $duration Duration to snooze. day|hour|week.
     *
     * @deprecated 7.2.0
     *
     * @return bool
     */
    public function snooze($duration = 'day')
{
}
    /**
     * Undo task snooze.
     *
     * @deprecated 7.2.0
     *
     * @return bool
     */
    public function undo_snooze()
{
}
    /**
     * Check if a task list has previously been marked as complete.
     *
     * @return bool
     */
    public function has_previously_completed()
{
}
    /**
     * Track task completion if task is viewable.
     */
    public function possibly_track_completion()
{
}
    /**
     * Set this as the active task across page loads.
     */
    public function set_active()
{
}
    /**
     * Check if this is the active task.
     */
    public function is_active()
{
}
    /**
     * Check if the store is capable of viewing the task.
     *
     * @return bool
     */
    public function can_view()
{
}
    /**
     * Check if task is disabled.
     *
     * @deprecated 7.2.0
     *
     * @return bool
     */
    public function is_disabled()
{
}
    /**
     * Check if the task is complete.
     *
     * @return bool
     */
    public function is_complete()
{
}
    /**
     * Check if the task has been visited.
     *
     * @return bool
     */
    public function is_visited()
{
}
    /**
     * Check if should record event when task is viewed
     *
     * @return bool
     */
    public function get_record_view_event(): bool
{
}
    /**
     * Get the task as JSON.
     *
     * @return array
     */
    public function get_json()
{
}
    /**
     * Convert object keys to camelcase.
     *
     * @param array $data Data to convert.
     * @return object
     */
    public static function convert_object_to_camelcase($data)
{
}
    /**
     * Mark a task as actioned.  Used to verify an action has taken place in some tasks.
     *
     * @return bool
     */
    public function mark_actioned()
{
}
    /**
     * Check if a task has been actioned.
     *
     * @return bool
     */
    public function is_actioned()
{
}
    /**
     * Check if a provided task ID has been actioned.
     *
     * @param string $id Task ID.
     * @return bool
     */
    public static function is_task_actioned($id)
{
}
    /**
     * Sorting function for tasks.
     *
     * @param Task  $a Task a.
     * @param Task  $b Task b.
     * @param array $sort_by list of columns with sort order.
     * @return int
     */
    public static function sort($a, $b, $sort_by = array())
{
}
}