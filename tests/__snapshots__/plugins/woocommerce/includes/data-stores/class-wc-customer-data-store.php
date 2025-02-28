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
    protected $internal_meta_keys = array (
  0 => 'locale',
  1 => 'billing_postcode',
  2 => 'billing_city',
  3 => 'billing_address_1',
  4 => 'billing_address_2',
  5 => 'billing_state',
  6 => 'billing_country',
  7 => 'shipping_postcode',
  8 => 'shipping_city',
  9 => 'shipping_address_1',
  10 => 'shipping_address_2',
  11 => 'shipping_state',
  12 => 'shipping_country',
  13 => 'paying_customer',
  14 => 'last_update',
  15 => 'first_name',
  16 => 'last_name',
  17 => 'display_name',
  18 => 'show_admin_bar_front',
  19 => 'use_ssl',
  20 => 'admin_color',
  21 => 'rich_editing',
  22 => 'comment_shortcuts',
  23 => 'dismissed_wp_pointers',
  24 => 'show_welcome_panel',
  25 => 'session_tokens',
  26 => 'nickname',
  27 => 'description',
  28 => 'billing_first_name',
  29 => 'billing_last_name',
  30 => 'billing_company',
  31 => 'billing_phone',
  32 => 'billing_email',
  33 => 'shipping_first_name',
  34 => 'shipping_last_name',
  35 => 'shipping_company',
  36 => 'shipping_phone',
  37 => 'wptests_capabilities',
  38 => 'wptests_user_level',
  39 => 'syntax_highlighting',
  40 => '_order_count',
  41 => '_money_spent',
  42 => '_last_order',
  43 => '_woocommerce_tracks_anon_id',
);
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
