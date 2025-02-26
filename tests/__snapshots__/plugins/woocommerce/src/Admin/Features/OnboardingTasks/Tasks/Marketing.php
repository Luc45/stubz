<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Marketing Task
 */
class Marketing extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;

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
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
        // stub
    }

    /**
     * Get the marketing plugins.
     *
     * @deprecated 9.3.0 Removed to improve performance.
     * @return array
     */
    public static function get_plugins()
    {
        // stub
    }

    /**
     * Check if the store has installed marketing extensions.
     *
     * @deprecated 9.3.0 Removed to improve performance.
     * @return bool
     */
    public static function has_installed_extensions()
    {
        // stub
    }

}

