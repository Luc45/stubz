<?php

/**
 * International Delivery - Based on the Flat Rate Shipping Method.
 *
 * This class is here for backwards compatibility for methods existing before zones existed.
 *
 * @deprecated  2.6.0
 * @version     2.4.0
 * @package     WooCommerce\Classes\Shipping
 */
class WC_Shipping_Legacy_International_Delivery extends \WC_Shipping_Legacy_Flat_Rate
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return the name of the option in the WP DB.
     *
     * @since 2.6.0
     * @return string
     */
    public function get_option_key()
    {
    }
    /**
     * Initialise settings form fields.
     */
    public function init_form_fields()
    {
    }
    /**
     * Check if package is available.
     *
     * @param array $package Package information.
     * @return bool
     */
    public function is_available($package)
    {
    }
}
