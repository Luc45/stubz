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
     * Check if the store has any shipping zones.
     *
     * @return bool
     */
    public static function has_shipping_zones()
{
}
    /**
     * Check if the store has physical products.
     *
     * @return bool
     */
    public static function has_physical_products()
{
}
    /**
     * Delete the zone count transient used in has_shipping_zones() method
     * to refresh the cache.
     */
    public static function delete_zone_count_transient()
{
}
    /**
     * Check if the store sells digital products only.
     *
     * @return bool
     */
    private static function is_selling_digital_type_only()
{
}
}