<?php

namespace Automattic\WooCommerce\Internal\Admin\Schedulers;

/**
 * CustomersScheduler Class.
 */
class CustomersScheduler extends \Automattic\WooCommerce\Internal\Admin\Schedulers\ImportScheduler
{
    /**
     * Slug to identify the scheduler.
     *
     * @var string
     */
    public static $name = 'customers';
    /**
     * Attach customer lookup update hooks.
     *
     * @internal
     */
    public static function init()
    {
    }
    /**
     * Add customer dependencies.
     *
     * @internal
     * @return array
     */
    public static function get_dependencies()
    {
    }
    /**
     * Get the customer IDs and total count that need to be synced.
     *
     * @internal
     * @param int      $limit Number of records to retrieve.
     * @param int      $page  Page number.
     * @param int|bool $days Number of days prior to current date to limit search results.
     * @param bool     $skip_existing Skip already imported customers.
     */
    public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
    {
    }
    /**
     * Exclude users that already exist in our customer lookup table.
     *
     * Meant to be hooked into 'pre_user_query' action.
     *
     * @internal
     * @param WP_User_Query $wp_user_query WP_User_Query to modify.
     */
    public static function exclude_existing_customers_from_query($wp_user_query)
    {
    }
    /**
     * Get total number of rows imported.
     *
     * @internal
     * @return int
     */
    public static function get_total_imported()
    {
    }
    /**
     * Imports a single customer.
     *
     * @internal
     * @param int $user_id User ID.
     * @return void
     */
    public static function import($user_id)
    {
    }
    /**
     * Delete a batch of customers.
     *
     * @internal
     * @param int $batch_size Number of items to delete.
     * @return void
     */
    public static function delete($batch_size)
    {
    }
}