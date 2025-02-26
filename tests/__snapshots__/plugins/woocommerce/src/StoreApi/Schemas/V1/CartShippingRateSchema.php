<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CartShippingRateSchema class.
 */
class CartShippingRateSchema
{
    const IDENTIFIER = 'cart-shipping-rate';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart-shipping-rate';

    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Schema for a single rate.
     *
     * @return array
     */
    protected function get_rate_properties()
    {
        // stub
    }

    /**
     * Convert a shipping rate from WooCommerce into a valid response.
     *
     * @param array $package Shipping package complete with rates from WooCommerce.
     * @return array
     */
    public function get_item_response($package)
    {
        // stub
    }

    /**
     * Gets and formats the destination address of a package.
     *
     * @param array $package Shipping package complete with rates from WooCommerce.
     * @return object
     */
    protected function prepare_package_destination_response($package)
    {
        // stub
    }

    /**
     * Gets items from a package and creates an array of strings containing product names and quantities.
     *
     * @param array $package Shipping package complete with rates from WooCommerce.
     * @return array
     */
    protected function prepare_package_items_response($package)
    {
        // stub
    }

    /**
     * Prepare an array of rates from a package for the response.
     *
     * @param array $package Shipping package complete with rates from WooCommerce.
     * @return array
     */
    protected function prepare_package_shipping_rates_response($package)
    {
        // stub
    }

    /**
     * Response for a single rate.
     *
     * @param WC_Shipping_Rate $rate Rate object.
     * @param string           $selected_rate Selected rate.
     * @return array
     */
    protected function get_rate_response($rate, $selected_rate = '')
    {
        // stub
    }

    /**
     * Gets a prop of the rate object, if callable.
     *
     * @param WC_Shipping_Rate $rate Rate object.
     * @param string           $prop Prop name.
     * @return string
     */
    protected function get_rate_prop($rate, $prop)
    {
        // stub
    }

    /**
     * Converts rate meta data into a suitable response object.
     *
     * @param WC_Shipping_Rate $rate Rate object.
     * @return array
     */
    protected function get_rate_meta_data($rate)
    {
        // stub
    }

}

