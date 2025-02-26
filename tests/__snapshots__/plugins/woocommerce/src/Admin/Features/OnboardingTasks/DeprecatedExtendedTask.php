<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * DeprecatedExtendedTask class.
 */
class DeprecatedExtendedTask
{
    /**
     * ID.
     *
     * @var string
     */
    public $id = '';

    /**
     * Additional info.
     *
     * @var string|null
     */
    public $additional_info = '';

    /**
     * Content.
     *
     * @var string
     */
    public $content = '';

    /**
     * Whether the task is complete or not.
     *
     * @var boolean
     */
    public $is_complete = false;

    /**
     * Snoozeable.
     *
     * @var boolean
     */
    public $is_snoozeable = false;

    /**
     * Dismissable.
     *
     * @var boolean
     */
    public $is_dismissable = false;

    /**
     * Whether the store is capable of viewing the task.
     *
     * @var bool
     */
    public $can_view = true;

    /**
     * Level.
     *
     * @var int
     */
    public $level = 3;

    /**
     * Time.
     *
     * @var string|null
     */
    public $time = null;

    /**
     * Title.
     *
     * @var string
     */
    public $title = '';

    /**
     * Constructor.
     *
     * @param TaskList $task_list Parent task list.
     * @param array    $args Array of task args.
     */
    public function __construct($task_list, $args)
    {
        // stub
    }

    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Additional info.
     *
     * @return string
     */
    public function get_additional_info()
    {
        // stub
    }

    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
        // stub
    }

    /**
     * Level.
     *
     * @return int
     */
    public function get_level()
    {
        // stub
    }

    /**
     * Title
     *
     * @return string
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Time
     *
     * @return string|null
     */
    public function get_time()
    {
        // stub
    }

    /**
     * Check if a task is snoozeable.
     *
     * @return bool
     */
    public function is_snoozeable()
    {
        // stub
    }

    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function is_dismissable()
    {
        // stub
    }

    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function is_complete()
    {
        // stub
    }

    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function can_view()
    {
        // stub
    }

}

