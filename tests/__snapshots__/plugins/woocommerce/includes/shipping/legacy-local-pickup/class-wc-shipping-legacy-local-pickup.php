<?php

/**
 * Local Pickup Shipping Method.
 *
 * This class is here for backwards compatibility for methods existing before zones existed.
 *
 * @deprecated  2.6.0
 * @version     2.3.0
 * @package     WooCommerce\Classes\Shipping
 */
class WC_Shipping_Legacy_Local_Pickup extends \WC_Shipping_Method
{
    /**
     * Allowed post/zip codes for the shipping method.
     *
     * @var string
     */
    public $codes = null;

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
     * Calculate shipping.
     *
     * @param array $package Package information.
     */
    public function calculate_shipping($package = array())
{
}
    /**
     * Initialize form fields.
     */
    public function init_form_fields()
{
}
    /**
     * Get postcodes for this method.
     *
     * @return array
     */
    public function get_valid_postcodes()
{
}
    /**
     * See if a given postcode matches valid postcodes.
     *
     * @param  string $postcode Postcode to check.
     * @param  string $country code Code of the country to check postcode against.
     * @return boolean
     */
    public function is_valid_postcode($postcode, $country)
{
}
    /**
     * See if the method is available.
     *
     * @param array $package Package information.
     * @return bool
     */
    public function is_available($package)
{
}
    /**
     * Clean function.
     *
     * @access public
     * @param mixed $code Code.
     * @return string
     */
    public function clean($code)
{
}
}
