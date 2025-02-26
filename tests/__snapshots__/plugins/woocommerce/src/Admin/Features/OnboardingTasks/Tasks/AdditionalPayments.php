<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Payments Task
 */
class AdditionalPayments
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
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
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
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
    {
        // stub
    }

    /**
     * Check if the store has any enabled gateways in other category.
     *
     * @return bool
     */
    private static function has_enabled_other_category_gateways()
    {
        // stub
    }

    /**
     * Check if the store has any enabled gateways in additional category.
     *
     * @return bool
     */
    private static function has_enabled_additional_gateways()
    {
        // stub
    }

    /**
     * Check if the store has any enabled gateways based on the given criteria.
     *
     * @param callable|null $filter A callback function to filter the gateways.
     * @return bool
     */
    private static function has_enabled_gateways($filter = null)
    {
        // stub
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
        // stub
    }

}

