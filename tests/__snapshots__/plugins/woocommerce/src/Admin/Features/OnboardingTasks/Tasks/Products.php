<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Products Task
 */
class Products extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    const PRODUCT_COUNT_TRANSIENT_NAME = 'woocommerce_product_task_product_count_transient';
    /**
     * Constructor
     *
     * @param TaskList $task_list Parent task list.
     */
    public function __construct($task_list)
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
     * Additional data.
     *
     * @return array
     */
    public function get_additional_data()
{
}
    /**
     * Adds a return to task list notice when completing the manual product task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_manual_return_notice_script($hook)
{
}
    /**
     * Adds a return to task list notice when completing the import product task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_import_return_notice_script($hook)
{
}
    /**
     * Adds a return to task list notice when completing the loading sample products action.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_load_sample_return_notice_script($hook)
{
}
    /**
     * Delete the product count transient used in has_products() method to refresh the cache.
     *
     * @return void
     */
    public static function delete_product_count_cache()
{
}
    /**
     * Check if the store has any user created published products.
     *
     * @return bool
     */
    public static function has_products()
{
}
    /**
     * Count the number of user created products.
     * Generated products have the _headstart_post meta key.
     *
     * @return int The number of user created products.
     */
    private static function count_user_products()
{
}
}