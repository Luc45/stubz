<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Payments Task
 */
class Payments
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
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
{
}
    /**
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
{
}
    /**
     * Check if the store has any enabled gateways.
     *
     * @return bool
     */
    public static function has_gateways()
{
}
    /**
     * The task action URL.
     *
     * Empty string means the task linking will be handled by the JS logic.
     *
     * @return string
     */
    public function get_action_url()
{
}
}