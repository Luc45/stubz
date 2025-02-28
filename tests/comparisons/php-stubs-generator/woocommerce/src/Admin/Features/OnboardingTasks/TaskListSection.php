<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task List section class.
 *
 * @deprecated 7.2.0
 */
class TaskListSection
{
    /**
     * Title.
     *
     * @var string
     */
    public $id = '';
    /**
     * Title.
     *
     * @var string
     */
    public $title = '';
    /**
     * Description.
     *
     * @var string
     */
    public $description = '';
    /**
     * Image.
     *
     * @var string
     */
    public $image = '';
    /**
     * Tasks.
     *
     * @var array
     */
    public $task_names = array();
    /**
     * Parent task list.
     *
     * @var TaskList
     */
    protected $task_list;
    /**
     * Constructor
     *
     * @param array         $data Task list data.
     * @param TaskList|null $task_list Parent task list.
     */
    public function __construct($data = array(), $task_list = null)
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