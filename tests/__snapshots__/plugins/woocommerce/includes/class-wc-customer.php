<?php

/**
 * Customer class.
 */
class WC_Customer
{
    /**
     * Stores customer data.
     *
     * @var array
     */
    protected $data = array (
  'date_created' => null,
  'date_modified' => null,
  'email' => '',
  'first_name' => '',
  'last_name' => '',
  'display_name' => '',
  'role' => 'customer',
  'username' => '',
  'billing' => 
  array (
    'first_name' => '',
    'last_name' => '',
    'company' => '',
    'address_1' => '',
    'address_2' => '',
    'city' => '',
    'postcode' => '',
    'country' => '',
    'state' => '',
    'email' => '',
    'phone' => '',
  ),
  'shipping' => 
  array (
    'first_name' => '',
    'last_name' => '',
    'company' => '',
    'address_1' => '',
    'address_2' => '',
    'city' => '',
    'postcode' => '',
    'country' => '',
    'state' => '',
    'phone' => '',
  ),
  'is_paying_customer' => false,
);

    /**
     * Stores a password if this needs to be changed. Write-only and hidden from _data.
     *
     * @var string
     */
    protected $password = '';

    /**
     * Stores if user is VAT exempt for this session.
     *
     * @var string
     */
    protected $is_vat_exempt = false;

    /**
     * Stores if user has calculated shipping in this session.
     *
     * @var string
     */
    protected $calculated_shipping = false;

    /**
     * This is the name of this object type.
     *
     * @since 5.6.0
     * @var string
     */
    protected $object_type = 'customer';

    /**
     * Load customer data based on how WC_Customer is called.
     *
     * If $customer is 'new', you can build a new WC_Customer object. If it's empty, some
     * data will be pulled from the session for the current user/customer.
     *
     * @param WC_Customer|int $data       Customer ID or data.
     * @param bool            $is_session True if this is the customer session.
     * @throws Exception If customer cannot be read/found and $data is set.
     */
    public function __construct($data = 0, $is_session = false)
{
}
    /**
     * Delete a customer and reassign posts..
     *
     * @param int $reassign Reassign posts and links to new User ID.
     * @since 3.0.0
     * @return bool
     */
    public function delete_and_reassign($reassign = null)
{
}
    /**
     * Is customer outside base country (for tax purposes)?
     *
     * @return bool
     */
    public function is_customer_outside_base()
{
}
    /**
     * Return this customer's avatar.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_avatar_url()
{
}
    /**
     * Get taxable address.
     *
     * @return array
     */
    public function get_taxable_address()
{
}
    /**
     * Gets a customer's downloadable products.
     *
     * @return array Array of downloadable products
     */
    public function get_downloadable_products()
{
}
    /**
     * Is customer VAT exempt?
     *
     * @return bool
     */
    public function is_vat_exempt()
{
}
    /**
     * Has calculated shipping?
     *
     * @return bool
     */
    public function has_calculated_shipping()
{
}
    /**
     * Indicates if the customer has a non-empty shipping address.
     *
     * Note that this does not indicate if the customer's shipping address
     * is complete, only that one or more fields are populated.
     *
     * @since 5.3.0
     *
     * @return bool
     */
    public function has_shipping_address()
{
}
    /**
     * Get if customer is VAT exempt?
     *
     * @since 3.0.0
     * @return bool
     */
    public function get_is_vat_exempt()
{
}
    /**
     * Get password (only used when updating the user object).
     *
     * @return string
     */
    public function get_password()
{
}
    /**
     * Has customer calculated shipping?
     *
     * @return bool
     */
    public function get_calculated_shipping()
{
}
    /**
     * Set if customer has tax exemption.
     *
     * @param bool $is_vat_exempt If is vat exempt.
     */
    public function set_is_vat_exempt($is_vat_exempt)
{
}
    /**
     * Calculated shipping?
     *
     * @param bool $calculated If shipping is calculated.
     */
    public function set_calculated_shipping($calculated = true)
{
}
    /**
     * Set customer's password.
     *
     * @since 3.0.0
     * @param string $password Password.
     */
    public function set_password($password)
{
}
    /**
     * Gets the customers last order.
     *
     * @return WC_Order|false
     */
    public function get_last_order()
{
}
    /**
     * Return the number of orders this customer has.
     *
     * @return integer
     */
    public function get_order_count()
{
}
    /**
     * Return how much money this customer has spent.
     *
     * @return float
     */
    public function get_total_spent()
{
}
    /**
     * Return the customer's username.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_username($context = 'view')
{
}
    /**
     * Return the customer's email.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_email($context = 'view')
{
}
    /**
     * Return customer's first name.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_first_name($context = 'view')
{
}
    /**
     * Return customer's last name.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_last_name($context = 'view')
{
}
    /**
     * Return customer's display name.
     *
     * @since  3.1.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_display_name($context = 'view')
{
}
    /**
     * Return customer's user role.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_role($context = 'view')
{
}
    /**
     * Return the date this customer was created.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
{
}
    /**
     * Return the date this customer was last updated.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
{
}
    /**
     * Gets a prop for a getter method.
     *
     * @since  3.0.0
     * @param  string $prop Name of prop to get.
     * @param  string $address_type Type of address; 'billing' or 'shipping'.
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return mixed
     */
    protected function get_address_prop($prop, $address_type = 'billing', $context = 'view')
{
}
    /**
     * Get billing.
     *
     * @since  3.2.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_billing($context = 'view')
{
}
    /**
     * Get billing_first_name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_first_name($context = 'view')
{
}
    /**
     * Get billing_last_name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_last_name($context = 'view')
{
}
    /**
     * Get billing_company.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_company($context = 'view')
{
}
    /**
     * Get billing_address_1.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_address($context = 'view')
{
}
    /**
     * Get billing_address_1.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_address_1($context = 'view')
{
}
    /**
     * Get billing_address_2.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string $value
     */
    public function get_billing_address_2($context = 'view')
{
}
    /**
     * Get billing_city.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string $value
     */
    public function get_billing_city($context = 'view')
{
}
    /**
     * Get billing_state.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_state($context = 'view')
{
}
    /**
     * Get billing_postcode.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_postcode($context = 'view')
{
}
    /**
     * Get billing_country.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_country($context = 'view')
{
}
    /**
     * Get billing_email.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_email($context = 'view')
{
}
    /**
     * Get billing_phone.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_billing_phone($context = 'view')
{
}
    /**
     * Get shipping.
     *
     * @since  3.2.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_shipping($context = 'view')
{
}
    /**
     * Get shipping_first_name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_first_name($context = 'view')
{
}
    /**
     * Get shipping_last_name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_last_name($context = 'view')
{
}
    /**
     * Get shipping_company.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_company($context = 'view')
{
}
    /**
     * Get shipping_address_1.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_address($context = 'view')
{
}
    /**
     * Get shipping_address_1.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_address_1($context = 'view')
{
}
    /**
     * Get shipping_address_2.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_address_2($context = 'view')
{
}
    /**
     * Get shipping_city.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_city($context = 'view')
{
}
    /**
     * Get shipping_state.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_state($context = 'view')
{
}
    /**
     * Get shipping_postcode.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_postcode($context = 'view')
{
}
    /**
     * Get shipping_country.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_country($context = 'view')
{
}
    /**
     * Get shipping phone.
     *
     * @since 5.6.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_shipping_phone($context = 'view')
{
}
    /**
     * Is the user a paying customer?
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_is_paying_customer($context = 'view')
{
}
    /**
     * Set customer's username.
     *
     * @since 3.0.0
     * @param string $username Username.
     */
    public function set_username($username)
{
}
    /**
     * Set customer's email.
     *
     * @since 3.0.0
     * @param string $value Email.
     */
    public function set_email($value)
{
}
    /**
     * Set customer's first name.
     *
     * @since 3.0.0
     * @param string $first_name First name.
     */
    public function set_first_name($first_name)
{
}
    /**
     * Set customer's last name.
     *
     * @since 3.0.0
     * @param string $last_name Last name.
     */
    public function set_last_name($last_name)
{
}
    /**
     * Set customer's display name.
     *
     * @since 3.1.0
     * @param string $display_name Display name.
     */
    public function set_display_name($display_name)
{
}
    /**
     * Set customer's user role(s).
     *
     * @since 3.0.0
     * @param mixed $role User role.
     */
    public function set_role($role)
{
}
    /**
     * Set the date this customer was last updated.
     *
     * @since  3.0.0
     * @param  string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_created($date = null)
{
}
    /**
     * Set the date this customer was last updated.
     *
     * @since  3.0.0
     * @param  string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_modified($date = null)
{
}
    /**
     * Set customer address to match shop base address.
     *
     * @since 3.0.0
     */
    public function set_billing_address_to_base()
{
}
    /**
     * Set customer shipping address to base address.
     *
     * @since 3.0.0
     */
    public function set_shipping_address_to_base()
{
}
    /**
     * Sets all address info at once.
     *
     * @param string $country  Country.
     * @param string $state    State.
     * @param string $postcode Postcode.
     * @param string $city     City.
     */
    public function set_billing_location($country, $state = '', $postcode = '', $city = '')
{
}
    /**
     * Sets all shipping info at once.
     *
     * @param string $country  Country.
     * @param string $state    State.
     * @param string $postcode Postcode.
     * @param string $city     City.
     */
    public function set_shipping_location($country, $state = '', $postcode = '', $city = '')
{
}
    /**
     * Sets a prop for a setter method.
     *
     * @since 3.0.0
     * @param string $prop         Name of prop to set.
     * @param string $address_type Type of address; 'billing' or 'shipping'.
     * @param mixed  $value        Value of the prop.
     */
    protected function set_address_prop($prop, $address_type, $value)
{
}
    /**
     * Set billing_first_name.
     *
     * @param string $value Billing first name.
     */
    public function set_billing_first_name($value)
{
}
    /**
     * Set billing_last_name.
     *
     * @param string $value Billing last name.
     */
    public function set_billing_last_name($value)
{
}
    /**
     * Set billing_company.
     *
     * @param string $value Billing company.
     */
    public function set_billing_company($value)
{
}
    /**
     * Set billing_address_1.
     *
     * @param string $value Billing address line 1.
     */
    public function set_billing_address($value)
{
}
    /**
     * Set billing_address_1.
     *
     * @param string $value Billing address line 1.
     */
    public function set_billing_address_1($value)
{
}
    /**
     * Set billing_address_2.
     *
     * @param string $value Billing address line 2.
     */
    public function set_billing_address_2($value)
{
}
    /**
     * Set billing_city.
     *
     * @param string $value Billing city.
     */
    public function set_billing_city($value)
{
}
    /**
     * Set billing_state.
     *
     * @param string $value Billing state.
     */
    public function set_billing_state($value)
{
}
    /**
     * Set billing_postcode.
     *
     * @param string $value Billing postcode.
     */
    public function set_billing_postcode($value)
{
}
    /**
     * Set billing_country.
     *
     * @param string $value Billing country.
     */
    public function set_billing_country($value)
{
}
    /**
     * Set billing_email.
     *
     * @param string $value Billing email.
     */
    public function set_billing_email($value)
{
}
    /**
     * Set billing_phone.
     *
     * @param string $value Billing phone.
     */
    public function set_billing_phone($value)
{
}
    /**
     * Set shipping_first_name.
     *
     * @param string $value Shipping first name.
     */
    public function set_shipping_first_name($value)
{
}
    /**
     * Set shipping_last_name.
     *
     * @param string $value Shipping last name.
     */
    public function set_shipping_last_name($value)
{
}
    /**
     * Set shipping_company.
     *
     * @param string $value Shipping company.
     */
    public function set_shipping_company($value)
{
}
    /**
     * Set shipping_address_1.
     *
     * @param string $value Shipping address line 1.
     */
    public function set_shipping_address($value)
{
}
    /**
     * Set shipping_address_1.
     *
     * @param string $value Shipping address line 1.
     */
    public function set_shipping_address_1($value)
{
}
    /**
     * Set shipping_address_2.
     *
     * @param string $value Shipping address line 2.
     */
    public function set_shipping_address_2($value)
{
}
    /**
     * Set shipping_city.
     *
     * @param string $value Shipping city.
     */
    public function set_shipping_city($value)
{
}
    /**
     * Set shipping_state.
     *
     * @param string $value Shipping state.
     */
    public function set_shipping_state($value)
{
}
    /**
     * Set shipping_postcode.
     *
     * @param string $value Shipping postcode.
     */
    public function set_shipping_postcode($value)
{
}
    /**
     * Set shipping_country.
     *
     * @param string $value Shipping country.
     */
    public function set_shipping_country($value)
{
}
    /**
     * Set shipping phone.
     *
     * @since 5.6.0
     * @param string $value Shipping phone.
     */
    public function set_shipping_phone($value)
{
}
    /**
     * Set if the user a paying customer.
     *
     * @since 3.0.0
     * @param bool $is_paying_customer If is a paying customer.
     */
    public function set_is_paying_customer($is_paying_customer)
{
}
}
