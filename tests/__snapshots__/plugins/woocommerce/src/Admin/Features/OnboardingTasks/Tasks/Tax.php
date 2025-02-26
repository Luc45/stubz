<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Tax Task
 */
class Tax
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
        // stub
    }

    /**
     * Adds a return to task list notice when completing the task.
     */
    public function possibly_add_return_notice_script()
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
     * Title.
     *
     * @return string
     */
    public function get_title()
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
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
        // stub
    }

    /**
     * Action label.
     *
     * @return string
     */
    public function get_action_label()
    {
        // stub
    }

    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
        // stub
    }

    /**
     * Additional data.
     *
     * @return array
     */
    public function get_additional_data()
    {
        // stub
    }

    /**
     * Check if the store has any enabled gateways.
     *
     * @return bool
     */
    public static function can_use_automated_taxes()
    {
        // stub
    }

    /**
     * Get an array of countries that support automated tax.
     *
     * @return array
     */
    public static function get_automated_support_countries()
    {
        // stub
    }

    /**
     * Get an array of countries that support Stripe tax.
     *
     * @return array
     */
    private static function get_stripe_tax_support_countries()
    {
        // stub
    }

}

