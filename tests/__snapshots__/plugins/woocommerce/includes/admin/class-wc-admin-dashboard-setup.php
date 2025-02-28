<?php

/**
 * WC_Admin_Dashboard_Setup Class.
 */
class WC_Admin_Dashboard_Setup
{
    /**
     * Check for task list initialization.
     */
    private $initalized = false;

    /**
     * The task list.
     */
    private $task_list = null;

    /**
     * The tasks.
     */
    private $tasks = null;

    /**
     * # of completed tasks.
     *
     * @var int
     */
    private $completed_tasks_count = 0;

    /**
     * WC_Admin_Dashboard_Setup constructor.
     */
    public function __construct()
{
}
    /**
     * Render meta box output.
     */
    public function render()
{
}
    /**
     * Get the button link for a given task.
     *
     * @param Task $task Task.
     * @return string
     */
    public function get_button_link($task)
{
}
    /**
     * Get the task list.
     *
     * @return array
     */
    public function get_task_list()
{
}
    /**
     * Set the task list.
     */
    public function set_task_list($task_list)
{
}
    /**
     * Get the tasks.
     *
     * @return array
     */
    public function get_tasks()
{
}
    /**
     * Return # of completed tasks
     *
     * @return integer
     */
    public function get_completed_tasks_count()
{
}
    /**
     * Get the next task.
     *
     * @return array|null
     */
    private function get_next_task()
{
}
    /**
     * Check to see if we should display the widget
     *
     * @return bool
     */
    public function should_display_widget()
{
}
}
