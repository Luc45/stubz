<?php

/**
 * WC Customer Data Store.
 *
 * @version  3.0.0
 */
class WC_Customer_Data_Store extends \WC_Data_Store_WP implements \WC_Customer_Data_Store_Interface, \WC_Object_Data_Store_Interface
{
    /**
     * Data stored in meta keys, but not considered "meta".
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('locale', 'billing_postcode', 'billing_city', 'billing_address_1', 'billing_address_2', 'billing_state', 'billing_country', 'shipping_postcode', 'shipping_city', 'shipping_address_1', 'shipping_address_2', 'shipping_state', 'shipping_country', 'paying_customer', 'last_update', 'first_name', 'last_name', 'display_name', 'show_admin_bar_front', 'use_ssl', 'admin_color', 'rich_editing', 'comment_shortcuts', 'dismissed_wp_pointers', 'show_welcome_panel', 'session_tokens', 'nickname', 'description', 'billing_first_name', 'billing_last_name', 'billing_company', 'billing_phone', 'billing_email', 'shipping_first_name', 'shipping_last_name', 'shipping_company', 'shipping_phone', 'wptests_capabilities', 'wptests_user_level', 'syntax_highlighting', '_order_count', '_money_spent', '_last_order', '_woocommerce_tracks_anon_id');
    /**
     * Internal meta type used to store user data.
     *
     * @var string
     */
    protected $meta_type = 'user';
    /**
     * Callback to remove unwanted meta data.
     *
     * @param object $meta Meta object.
     * @return bool
     */
    protected function exclude_internal_meta_keys($meta)
    {
    }
    /**
     * Method to create a new customer in the database.
     *
     * @since 3.0.0
     *
     * @param WC_Customer $customer Customer object.
     *
     * @throws WC_Data_Exception If unable to create new customer.
     */
    public function create(&$customer)
    {
    }
    /**
     * Method to read a customer object.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @throws Exception If invalid customer.
     */
    public function read(&$customer)
    {
    }
    /**
     * Updates a customer in the database.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     */
    public function update(&$customer)
    {
    }
    /**
     * Deletes a customer from the database.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @param array       $args Array of args to pass to the delete method.
     */
    public function delete(&$customer, $args = array())
    {
    }
    /**
     * Gets the customers last order.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @return WC_Order|false
     */
    public function get_last_order(&$customer)
    {
    }
    /**
     * Return the number of orders this customer has.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @return integer
     */
    public function get_order_count(&$customer)
    {
    }
    /**
     * Return how much money this customer has spent.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @return float
     */
    public function get_total_spent(&$customer)
    {
    }
    /**
     * Search customers and return customer IDs.
     *
     * @param  string     $term Search term.
     * @param  int|string $limit Limit search results.
     * @since 3.0.7
     *
     * @return array
     */
    public function search_customers($term, $limit = '')
    {
    }
    /**
     * Get all user ids who have `billing_email` set to any of the email passed in array.
     *
     * @param array $emails List of emails to check against.
     *
     * @return array
     */
    public function get_user_ids_for_billing_email($emails)
    {
    }
}