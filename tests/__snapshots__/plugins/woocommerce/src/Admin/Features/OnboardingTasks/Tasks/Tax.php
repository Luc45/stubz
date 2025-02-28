<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Tax Task
 */
class Tax extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;

    /**
     * Constructor
     *
     * @param TaskList $task_list Parent task list.
     */
    public function __construct($task_list)
{
}
    /**
     * Adds a return to task list notice when completing the task.
     */
    public function possibly_add_return_notice_script()
{
}
    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
{
}
    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
{
}
    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
{
}
    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
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
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
{
}
    /**
     * Additional data.
     *
     * @return array
     */
    public function get_additional_data()
{
}
    /**
     * Check if the store has any enabled gateways.
     *
     * @return bool
     */
    public static function can_use_automated_taxes()
{
}
    /**
     * Get an array of countries that support automated tax.
     *
     * @return array
     */
    public static function get_automated_support_countries()
{
}
    /**
     * Get an array of countries that support Stripe tax.
     *
     * @return array
     */
    private static function get_stripe_tax_support_countries()
{
}
}