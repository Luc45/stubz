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
    public function calculated_shipping($calculated = \true)
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
    function is_paying_customer($user_id = '')
    {
    }
    /**
     * Legacy get address.
     */
    function get_address()
    {
    }
    /**
     * Legacy get address 2.
     */
    function get_address_2()
    {
    }
    /**
     * Legacy get country.
     */
    function get_country()
    {
    }
    /**
     * Legacy get state.
     */
    function get_state()
    {
    }
    /**
     * Legacy get postcode.
     */
    function get_postcode()
    {
    }
    /**
     * Legacy get city.
     */
    function get_city()
    {
    }
    /**
     * Legacy set country.
     *
     * @param string $country
     */
    function set_country($country)
    {
    }
    /**
     * Legacy set state.
     *
     * @param string $state
     */
    function set_state($state)
    {
    }
    /**
     * Legacy set postcode.
     *
     * @param string $postcode
     */
    function set_postcode($postcode)
    {
    }
    /**
     * Legacy set city.
     *
     * @param string $city
     */
    function set_city($city)
    {
    }
    /**
     * Legacy set address.
     *
     * @param string $address
     */
    function set_address($address)
    {
    }
    /**
     * Legacy set address.
     *
     * @param string $address
     */
    function set_address_2($address)
    {
    }
}