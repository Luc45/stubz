<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task List class.
 */
class TaskList
{
    const HIDDEN_OPTION = 'woocommerce_task_list_hidden_lists';
    const COMPLETED_OPTION = 'woocommerce_task_list_completed_lists';
    const REMINDER_BAR_HIDDEN_OPTION = 'woocommerce_task_list_reminder_bar_hidden';
    /**
     * ID.
     *
     * @var string
     */
    public $id = '';
    /**
     * ID.
     *
     * @var string
     */
    public $hidden_id = '';
    /**
     * ID.
     *
     * @var boolean
     */
    public $display_progress_header = false;
    /**
     * Title.
     *
     * @var string
     */
    public $title = '';
    /**
     * Tasks.
     *
     * @var array
     */
    public $tasks = array();
    /**
     * Sort keys.
     *
     * @var array
     */
    public $sort_by = array();
    /**
     * Event prefix.
     *
     * @var string|null
     */
    public $event_prefix = null;
    /**
     * Task list visibility.
     *
     * @var boolean
     */
    public $visible = true;
    /**
     * Array of custom options.
     *
     * @var array
     */
    public $options = array();
    /**
     * Array of TaskListSection.
     *
     * @deprecated 7.2.0
     *
     * @var array
     */
    private $sections = array();
    /**
     * Key value map of task class and id used for sections.
     *
     * @deprecated 7.2.0
     *
     * @var array
     */
    public $task_class_id_map = array();
    /**
     * Constructor
     *
     * @param array $data Task list data.
     */
    public function __construct($data = array())
{
}
    /**
     * Check if the task list is hidden.
     *
     * @return bool
     */
    public function is_hidden()
{
}
    /**
     * Check if the task list is visible.
     *
     * @return bool
     */
    public function is_visible()
{
}
    /**
     * Hide the task list.
     *
     * @return bool
     */
    public function hide()
{
}
    /**
     * Sets the default homepage layout to two_columns if "setup" tasklist is completed or hidden.
     *
     * @param array $completed_or_hidden_tasklist_ids Array of tasklist ids.
     */
    public function maybe_set_default_layout($completed_or_hidden_tasklist_ids)
{
}
    /**
     * Undo hiding of the task list.
     *
     * @return bool
     */
    public function unhide()
{
}
    /**
     * Check if all viewable tasks are complete.
     *
     * @return bool
     */
    public function is_complete()
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
     * Add task to the task list.
     *
     * @param Task $task Task class.
     */
    public function add_task($task)
{
}
    /**
     * Get only visible tasks in list.
     *
     * @param string $task_id id of task.
     * @return Task
     */
    public function get_task($task_id)
{
}
    /**
     * Get only visible tasks in list.
     *
     * @return array
     */
    public function get_viewable_tasks()
{
}
    /**
     * Get task list sections.
     *
     * @deprecated 7.2.0
     *
     * @return array
     */
    public function get_sections()
{
}
    /**
     * Track list completion of viewable tasks.
     */
    public function possibly_track_completion()
{
}
    /**
     * Sorts the attached tasks array.
     *
     * @param array $sort_by list of columns with sort order.
     * @return TaskList returns $this, for chaining.
     */
    public function sort_tasks($sort_by = array())
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
     * Returns option to keep completed task list.
     *
     * @return string
     */
    public function get_keep_completed_task_list()
{
}
    /**
     * Remove reminder bar four weeks after store creation.
     */
    public static function possibly_remove_reminder_bar()
{
}
    /**
     * Get the list for use in JSON.
     *
     * @return array
     */
    public function get_json()
{
}
}