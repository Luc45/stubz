<?php

namespace ;

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
        // stub
    }

    /**
     * __get function.
     * @param string $key
     * @return string
     */
    public function __get($key)
    {
        // stub
    }

    /**
     * __set function.
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set($key, $value)
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Get default country for a customer.
     * @return string
     */
    public function get_default_country()
    {
        // stub
    }

    /**
     * Get default state for a customer.
     * @return string
     */
    public function get_default_state()
    {
        // stub
    }

    /**
     * Set customer address to match shop base address.
     */
    public function set_to_base()
    {
        // stub
    }

    /**
     * Set customer shipping address to base address.
     */
    public function set_shipping_to_base()
    {
        // stub
    }

    /**
     * Calculated shipping.
     * @param boolean $calculated
     */
    public function calculated_shipping($calculated = true)
    {
        // stub
    }

    /**
     * Set default data for a customer.
     */
    public function set_default_data()
    {
        // stub
    }

    /**
     * Save data function.
     */
    public function save_data()
    {
        // stub
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
        // stub
    }

    /**
     * Legacy get address.
     */
    public function get_address()
    {
        // stub
    }

    /**
     * Legacy get address 2.
     */
    public function get_address_2()
    {
        // stub
    }

    /**
     * Legacy get country.
     */
    public function get_country()
    {
        // stub
    }

    /**
     * Legacy get state.
     */
    public function get_state()
    {
        // stub
    }

    /**
     * Legacy get postcode.
     */
    public function get_postcode()
    {
        // stub
    }

    /**
     * Legacy get city.
     */
    public function get_city()
    {
        // stub
    }

    /**
     * Legacy set country.
     *
     * @param string $country
     */
    public function set_country($country)
    {
        // stub
    }

    /**
     * Legacy set state.
     *
     * @param string $state
     */
    public function set_state($state)
    {
        // stub
    }

    /**
     * Legacy set postcode.
     *
     * @param string $postcode
     */
    public function set_postcode($postcode)
    {
        // stub
    }

    /**
     * Legacy set city.
     *
     * @param string $city
     */
    public function set_city($city)
    {
        // stub
    }

    /**
     * Legacy set address.
     *
     * @param string $address
     */
    public function set_address($address)
    {
        // stub
    }

    /**
     * Legacy set address.
     *
     * @param string $address
     */
    public function set_address_2($address)
    {
        // stub
    }

}

