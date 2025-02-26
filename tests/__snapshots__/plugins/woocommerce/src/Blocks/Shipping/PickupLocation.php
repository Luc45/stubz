<?php

namespace Automattic\WooCommerce\Blocks\Shipping;

/**
 * Local Pickup Shipping Method.
 */
class PickupLocation extends \WC_Shipping_Method
{
    /**
     * Pickup locations.
     *
     * @var array
     */
    protected $pickup_locations = array(
);

    /**
     * Cost
     *
     * @var string
     */
    protected $cost = '';

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Init function.
     */
    public function init()
    {
        // stub
    }

    /**
     * Checks if a given address is complete.
     *
     * @param array $address Address.
     * @return bool
     */
    protected function has_valid_pickup_location($address)
    {
        // stub
    }

    /**
     * Calculate shipping.
     *
     * @param array $package Package information.
     */
    public function calculate_shipping($package = array(
))
    {
        // stub
    }

    /**
     * See if the method is available.
     *
     * @param array $package Package information.
     * @return bool
     */
    public function is_available($package)
    {
        // stub
    }

    /**
     * Translates meta data for the shipping method.
     *
     * @param string $label Meta label.
     * @param string $name Meta key.
     * @param mixed  $product Product if applicable.
     * @return string
     */
    public function translate_meta_data($label, $name, $product)
    {
        // stub
    }

    /**
     * Admin options screen.
     *
     * See also WC_Shipping_Method::admin_options().
     */
    public function admin_options()
    {
        // stub
    }

}

