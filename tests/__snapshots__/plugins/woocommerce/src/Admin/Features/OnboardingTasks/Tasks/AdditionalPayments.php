<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Payments Task
 */
class AdditionalPayments extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks\Payments
{
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;

    /**
     * Used to cache can_view() method result.
     *
     * @var null
     */
    private $can_view_result = null;

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
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
{
}
    /**
     * Check if the store has any enabled gateways in other category.
     *
     * @return bool
     */
    private static function has_enabled_other_category_gateways()
{
}
    /**
     * Check if the store has any enabled gateways in additional category.
     *
     * @return bool
     */
    private static function has_enabled_additional_gateways()
{
}
    /**
     * Check if the store has any enabled gateways based on the given criteria.
     *
     * @param callable|null $filter A callback function to filter the gateways.
     * @return bool
     */
    private static function has_enabled_gateways($filter = null)
{
}
    /**
     * Get the list of gateways to suggest.
     *
     * @param string $filter_by Filter by category. "category_additional" or "category_other".
     *
     * @return array
     */
    private static function get_suggestion_gateways($filter_by = 'category_additional')
{
}
}