<?php
/**
 * Legacy Customer.
 *
 * @version  3.0.0
 * @package  WooCommerce\Classes
 * @category Class
 * @author   WooThemes
 */
abstract class WC_Legacy_Customer extends \WC_Data
{
    /**
     * __isset legacy.
     * @param mixed $key
     * @return bool
     */
    public function __isset($key)
{
}
    /**
     * __get function.
     * @param string $key
     * @return string
     */
    public function __get($key)
{
}
    /**
     * __set function.
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set($key, $value)
{
}
    /**
     * Address and shipping_address are aliased, so we want to get the 'real' key name.
     * For all other keys, we can just return it.
     * @since 3.0.0
     * @param  string $key
     * @return string
     */
    private function filter_legacy_key($key)
{
}
    /**
     * Sets session data for the location.
     *
     * @param string $country
     * @param string $state
     * @param string $postcode (default: '')
     * @param string $city (default: '')
     */
    public function set_location($country, $state, $postcode = '', $city = '')
{
}
    /**
     * Get default country for a customer.
     * @return string
     */
    public function get_default_country()
{
}
    /**
     * Get default state for a customer.
     * @return string
     */
    public function get_default_state()
{
}
    /**
     * Set customer address to match shop base address.
     */
    public function set_to_base()
{
}
    /**
     * Set customer shipping address to base address.
     */
    public function set_shipping_to_base()
{
}
    /**
     * Calculated shipping.
     * @param boolean $calculated
     */
    public function calculated_shipping($calculated = true)
{
}
    /**
     * Set default data for a customer.
     */
    public function set_default_data()
{
}
    /**
     * Save data function.
     */
    public function save_data()
{
}
    /**
     * Is the user a paying customer?
     *
     * @param int $user_id
     *
     * @return bool
     */
    public function is_paying_customer($user_id = '')
{
}
    /**
     * Legacy get address.
     */
    public function get_address()
{
}
    /**
     * Legacy get address 2.
     */
    public function get_address_2()
{
}
    /**
     * Legacy get country.
     */
    public function get_country()
{
}
    /**
     * Legacy get state.
     */
    public function get_state()
{
}
    /**
     * Legacy get postcode.
     */
    public function get_postcode()
{
}
    /**
     * Legacy get city.
     */
    public function get_city()
{
}
    /**
     * Legacy set country.
     *
     * @param string $country
     */
    public function set_country($country)
{
}
    /**
     * Legacy set state.
     *
     * @param string $state
     */
    public function set_state($state)
{
}
    /**
     * Legacy set postcode.
     *
     * @param string $postcode
     */
    public function set_postcode($postcode)
{
}
    /**
     * Legacy set city.
     *
     * @param string $city
     */
    public function set_city($city)
{
}
    /**
     * Legacy set address.
     *
     * @param string $address
     */
    public function set_address($address)
{
}
    /**
     * Legacy set address.
     *
     * @param string $address
     */
    public function set_address_2($address)
{
}
}
