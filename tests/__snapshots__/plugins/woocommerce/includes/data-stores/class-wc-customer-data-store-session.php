<?php

/**
 * WC Customer Data Store which stores the data in session.
 *
 * Used by the WC_Customer class to store customer data to the session.
 *
 * @version  3.0.0
 */
class WC_Customer_Data_Store_Session
{
    /**
     * Keys which are also stored in a session (so we can make sure they get updated...)
     *
     * @var array
     */
    protected $session_keys = array (
  0 => 'id',
  1 => 'date_modified',
  2 => 'billing_first_name',
  3 => 'billing_last_name',
  4 => 'billing_company',
  5 => 'billing_phone',
  6 => 'billing_email',
  7 => 'billing_address',
  8 => 'billing_address_1',
  9 => 'billing_address_2',
  10 => 'billing_city',
  11 => 'billing_state',
  12 => 'billing_postcode',
  13 => 'billing_country',
  14 => 'shipping_first_name',
  15 => 'shipping_last_name',
  16 => 'shipping_company',
  17 => 'shipping_phone',
  18 => 'shipping_address',
  19 => 'shipping_address_1',
  20 => 'shipping_address_2',
  21 => 'shipping_city',
  22 => 'shipping_state',
  23 => 'shipping_postcode',
  24 => 'shipping_country',
  25 => 'is_vat_exempt',
  26 => 'calculated_shipping',
  27 => 'meta_data',
);

    /**
     * Update the session. Note, this does not persist the data to the DB.
     *
     * @param WC_Customer $customer Customer object.
     */
    public function create(&$customer)
{
}
    /**
     * Update the session. Note, this does not persist the data to the DB.
     *
     * @param WC_Customer $customer Customer object.
     */
    public function update(&$customer)
{
}
    /**
     * Saves all customer data to the session.
     *
     * @param WC_Customer $customer Customer object.
     */
    public function save_to_session($customer)
{
}
    /**
     * Read customer data from the session unless the user has logged in, in which case the stored ID will differ from
     * the actual ID.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     */
    public function read(&$customer)
{
}
    /**
     * Set default values for the customer object if props are unset.
     *
     * @param WC_Customer $customer Customer object.
     */
    protected function set_defaults(&$customer)
{
}
    /**
     * Deletes the customer session.
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
}
