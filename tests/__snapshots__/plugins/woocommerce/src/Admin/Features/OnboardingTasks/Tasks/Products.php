<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Products Task
 */
class Products
{
    const PRODUCT_COUNT_TRANSIENT_NAME = 'woocommerce_product_task_product_count_transient';

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
     * Additional data.
     *
     * @return array
     */
    public function get_additional_data()
    {
        // stub
    }

    /**
     * Adds a return to task list notice when completing the manual product task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_manual_return_notice_script($hook)
    {
        // stub
    }

    /**
     * Adds a return to task list notice when completing the import product task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_import_return_notice_script($hook)
    {
        // stub
    }

    /**
     * Adds a return to task list notice when completing the loading sample products action.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_load_sample_return_notice_script($hook)
    {
        // stub
    }

    /**
     * Delete the product count transient used in has_products() method to refresh the cache.
     *
     * @return void
     */
    public static function delete_product_count_cache()
    {
        // stub
    }

    /**
     * Check if the store has any user created published products.
     *
     * @return bool
     */
    public static function has_products()
    {
        // stub
    }

    /**
     * Count the number of user created products.
     * Generated products have the _headstart_post meta key.
     *
     * @return int The number of user created products.
     */
    private static function count_user_products()
    {
        // stub
    }

}

