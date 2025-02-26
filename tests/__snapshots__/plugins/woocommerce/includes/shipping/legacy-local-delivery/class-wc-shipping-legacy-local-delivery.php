<?php

namespace ;

/**
 * Local Delivery Shipping Method.
 *
 * This class is here for backwards compatibility for methods existing before zones existed.
 *
 * @deprecated  2.6.0
 * @version     2.3.0
 * @package     WooCommerce\Classes\Shipping
 */
class WC_Shipping_Legacy_Local_Delivery extends \WC_Shipping_Local_Pickup
{
    /**
     * Shipping method fee type.
     *
     * How to calculate delivery charges.
     *
     * @var string
     */
    public $type = null;

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
        // stub
    }

    /**
     * Process and redirect if disabled.
     */
    public function process_admin_options()
    {
        // stub
    }

    /**
     * Return the name of the option in the WP DB.
     *
     * @since 2.6.0
     * @return string
     */
    public function get_option_key()
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
     * Calculate_shipping function.
     *
     * @param array $package (default: array()).
     */
    public function calculate_shipping($package = array(
))
    {
        // stub
    }

    /**
     * Init form fields.
     */
    public function init_form_fields()
    {
        // stub
    }

}

