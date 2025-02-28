<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task Lists class.
 */
class TaskLists
{
    const DEFAULT_TASKS = array (
  0 => 'StoreDetails',
  1 => 'Products',
  2 => 'WooCommercePayments',
  3 => 'Payments',
  4 => 'Tax',
  5 => 'Shipping',
  6 => 'Marketing',
  7 => 'Appearance',
  8 => 'AdditionalPayments',
  9 => 'ReviewShippingOptions',
  10 => 'GetMobileApp',
);

    /**
     * Class instance.
     *
     * @var TaskLists instance
     */
    protected static $instance = null;

    /**
     * An array of all registered lists.
     *
     * @var array
     */
    protected static $lists = array();

    /**
     * Boolean value to indicate if default tasks have been added.
     *
     * @var boolean
     */
    protected static $default_tasks_loaded = false;

    /**
     * Get class instance.
     */
    final public static function instance()
{
}
    /**
     * Initialize the task lists.
     */
    public static function init()
{
}
    /**
     * Check if an experiment is the treatment or control.
     *
     * @param string $name Name prefix of experiment.
     * @return bool
     */
    public static function is_experiment_treatment($name)
{
}
    /**
     * Initialize default lists.
     */
    public static function init_default_lists()
{
}
    /**
     * Initialize tasks.
     */
    public static function init_tasks()
{
}
    /**
     * Temporarily store the active task to persist across page loads when necessary.
     * Most tasks do not need this.
     */
    public static function set_active_task()
{
}
    /**
     * Add a task list.
     *
     * @param array $args Task list properties.
     * @return \WP_Error|TaskList
     */
    public static function add_list($args)
{
}
    /**
     * Add task to a given task list.
     *
     * @param string $list_id List ID to add the task to.
     * @param Task   $task Task object.
     *
     * @return \WP_Error|Task
     */
    public static function add_task($list_id, $task)
{
}
    /**
     * Add default extended task lists.
     *
     * @param array $extended_tasks list of extended tasks.
     */
    public static function maybe_add_extended_tasks($extended_tasks)
{
}
    /**
     * Get all task lists.
     *
     * @return array
     */
    public static function get_lists()
{
}
    /**
     * Get all task lists.
     *
     * @param array $ids list of task list ids.
     * @return array
     */
    public static function get_lists_by_ids($ids)
{
}
    /**
     * Get all task list ids.
     *
     * @return array
     */
    public static function get_list_ids()
{
}
    /**
     * Clear all task lists.
     */
    public static function clear_lists()
{
}
    /**
     * Get visible task lists.
     */
    public static function get_visible()
{
}
    /**
     * Retrieve a task list by ID.
     *
     * @param String $id Task list ID.
     *
     * @return TaskList|null
     */
    public static function get_list($id)
{
}
    /**
     * Retrieve single task.
     *
     * @param String $id Task ID.
     * @param String $task_list_id Task list ID.
     *
     * @return Object
     */
    public static function get_task($id, $task_list_id = null)
{
}
    /**
     * Return number of setup tasks remaining
     *
     * This is not updated immediately when a task is completed, but rather when task is marked as complete in the database to reduce performance impact.
     *
     * @return int|null
     */
    public static function setup_tasks_remaining()
{
}
    /**
     * Add badge to homescreen menu item for remaining tasks
     */
    public static function menu_task_count()
{
}
    /**
     * Add visible list ids to component settings.
     *
     * @param array $settings Component settings.
     *
     * @return array
     */
    public static function task_list_preloaded_settings($settings)
{
}
}