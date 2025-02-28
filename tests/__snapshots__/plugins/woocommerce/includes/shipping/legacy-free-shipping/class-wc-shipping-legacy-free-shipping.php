<?php

/**
 * Free Shipping Method.
 *
 * This class is here for backwards compatibility for methods existing before zones existed.
 *
 * @deprecated  2.6.0
 * @version 2.4.0
 * @package WooCommerce\Classes\Shipping
 */
class WC_Shipping_Legacy_Free_Shipping extends \WC_Shipping_Method
{
    /**
     * Min amount to be valid.
     *
     * @var float
     */
    public $min_amount = null;

    /**
     * Requires option.
     *
     * @var string
     */
    public $requires = null;

    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Process and redirect if disabled.
     */
    public function process_admin_options()
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
     * Init function.
     */
    public function init()
{
}
    /**
     * Initialise Gateway Settings Form Fields.
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
    /**
     * Calculate shipping.
     *
     * @param array $package Package information.
     */
    public function calculate_shipping($package = array())
{
}
}
