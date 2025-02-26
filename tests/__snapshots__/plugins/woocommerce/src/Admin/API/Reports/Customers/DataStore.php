<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers;

/**
 * Admin\API\Reports\Customers\DataStore.
 */
class DataStore
{
    /**
     * Table used to get the data.
     *
     * @override ReportsDataStore::$table_name
     *
     * @var string
     */
    protected static $table_name = 'wc_customer_lookup';

    /**
     * Cache identifier.
     *
     * @override ReportsDataStore::$cache_key
     *
     * @var string
     */
    protected $cache_key = 'customers';

    /**
     * Mapping columns to data type to return correct response types.
     *
     * @override ReportsDataStore::$column_types
     *
     * @var array
     */
    protected $column_types = array (
  'id' => 'intval',
  'user_id' => 'intval',
  'orders_count' => 'intval',
  'total_spend' => 'floatval',
  'avg_order_value' => 'floatval',
);

    /**
     * Data store context used to pass to filters.
     *
     * @override ReportsDataStore::$context
     *
     * @var string
     */
    protected $context = 'customers';

    /**
     * Assign report columns once full table name has been assigned.
     *
     * @override ReportsDataStore::assign_report_columns()
     */
    protected function assign_report_columns()
    {
        // stub
    }

    /**
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Sync customers data after an order was deleted.
     *
     * When an order is deleted, the customer record is deleted from the
     * table if the customer has no other orders.
     *
     * @param int $order_id Order ID.
     * @param int $customer_id Customer ID.
     */
    public static function sync_on_order_delete($order_id, $customer_id)
    {
        // stub
    }

    /**
     * Sync customers data after an order was updated.
     *
     * Only updates customer if it is the customers last order.
     *
     * @param int $post_id of order.
     * @return true|-1
     */
    public static function sync_order_customer($post_id)
    {
        // stub
    }

    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @override ReportsDataStore::normalize_order_by()
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
        // stub
    }

    /**
     * Fills WHERE clause of SQL request with date-related constraints.
     *
     * @override ReportsDataStore::add_time_period_sql_params()
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     */
    protected function add_time_period_sql_params($query_args, $table_name)
    {
        // stub
    }

    /**
     * Updates the database query with parameters used for Customers report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
    {
        // stub
    }

    /**
     * Get the default query arguments to be used by get_data().
     * These defaults are only partially applied when used via REST API, as that has its own defaults.
     *
     * @override ReportsDataStore::get_default_query_vars()
     *
     * @return array Query parameters.
     */
    public function get_default_query_vars()
    {
        // stub
    }

    /**
     * Returns an existing customer ID for an order if one exists.
     *
     * @param object $order WC Order.
     * @return int|bool
     */
    public static function get_existing_customer_id_from_order($order)
    {
        // stub
    }

    /**
     * Returns the report data based on normalized parameters.
     * Will be called by `get_data` if there is no data in cache.
     *
     * @override ReportsDataStore::get_noncached_data()
     *
     * @see get_data
     * @param array $query_args Query parameters.
     * @return stdClass|WP_Error Data object `{ totals: *, intervals: array, total: int, pages: int, page_no: int }`, or error.
     */
    public function get_noncached_data($query_args)
    {
        // stub
    }

    /**
     * Get or create a customer from a given order.
     *
     * @param object $order WC Order.
     * @return int|bool
     */
    public static function get_or_create_customer_from_order($order)
    {
        // stub
    }

    /**
     * Returns a data object and format object of the customers data coming from the order.
     *
     * @param object      $order         WC_Order where we get customer info from.
     * @param object|null $customer_user WC_Customer registered customer WP user.
     * @return array ($data, $format)
     */
    public static function get_customer_order_data_and_format($order, $customer_user = null)
    {
        // stub
    }

    /**
     * Retrieve a guest ID (when user_id is null) by email.
     *
     * @param string $email Email address.
     * @return false|array Customer array if found, boolean false if not.
     */
    public static function get_guest_id_by_email($email)
    {
        // stub
    }

    /**
     * Retrieve a registered customer row id by user_id.
     *
     * @param string|int $user_id User ID.
     * @return false|int Customer ID if found, boolean false if not.
     */
    public static function get_customer_id_by_user_id($user_id)
    {
        // stub
    }

    /**
     * Retrieve the last order made by a customer.
     *
     * @param int $customer_id Customer ID.
     * @return object WC_Order|false.
     */
    public static function get_last_order($customer_id)
    {
        // stub
    }

    /**
     * Retrieve the oldest orders made by a customer.
     *
     * @param int $customer_id Customer ID.
     * @return array Orders.
     */
    public static function get_oldest_orders($customer_id)
    {
        // stub
    }

    /**
     * Retrieve the amount of orders made by a customer.
     *
     * @param int $customer_id Customer ID.
     * @return int|null Amount of orders for customer or null on failure.
     */
    public static function get_order_count($customer_id)
    {
        // stub
    }

    /**
     * Update the database with customer data.
     *
     * @param int $user_id WP User ID to update customer data for.
     * @return int|bool|null Number or rows modified or false on failure.
     */
    public static function update_registered_customer($user_id)
    {
        // stub
    }

    /**
     * Update the database if the "last active" meta value was changed.
     * Function expects to be hooked into the `added_user_meta` and `updated_user_meta` actions.
     *
     * @param int    $meta_id ID of updated metadata entry.
     * @param int    $user_id ID of the user being updated.
     * @param string $meta_key Meta key being updated.
     */
    public static function update_registered_customer_via_last_active($meta_id, $user_id, $meta_key)
    {
        // stub
    }

    /**
     * Check if a user ID is a valid customer or other user role with past orders.
     *
     * @param int $user_id User ID.
     * @return bool
     */
    protected static function is_valid_customer($user_id)
    {
        // stub
    }

    /**
     * Delete a customer lookup row.
     *
     * @param int $customer_id Customer ID.
     */
    public static function delete_customer($customer_id)
    {
        // stub
    }

    /**
     * Delete a customer lookup row by WordPress User ID.
     *
     * @param int $user_id WordPress User ID.
     */
    public static function delete_customer_by_user_id($user_id)
    {
        // stub
    }

    /**
     * Anonymize the customer data for a single order.
     *
     * @internal
     * @param int|WC_Order $order Order instance or ID.
     * @return void
     */
    public static function anonymize_customer($order)
    {
        // stub
    }

    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
        // stub
    }

}

