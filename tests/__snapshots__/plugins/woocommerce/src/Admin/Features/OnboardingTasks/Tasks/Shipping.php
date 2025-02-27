<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Shipping Task
 */
class Shipping
{
    const ZONE_COUNT_TRANSIENT_NAME = 'woocommerce_shipping_task_zone_count_transient';

    /**
     * Constructor
     *
     * @param TaskList $task_list Parent task list.
     */
    public function __construct($task_list = null)
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
     * Check if the store has any shipping zones.
     *
     * @return bool
     */
    public static function has_shipping_zones()
    {
        // stub
    }

    /**
     * Check if the store has physical products.
     *
     * @return bool
     */
    public static function has_physical_products()
    {
        // stub
    }

    /**
     * Delete the zone count transient used in has_shipping_zones() method
     * to refresh the cache.
     */
    public static function delete_zone_count_transient()
    {
        // stub
    }

    /**
     * Check if the store sells digital products only.
     *
     * @return bool
     */
    private static function is_selling_digital_type_only()
    {
        // stub
    }

}