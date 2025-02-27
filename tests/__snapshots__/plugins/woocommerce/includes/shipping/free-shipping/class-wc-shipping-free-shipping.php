<?php

/**
 * Free Shipping Method.
 *
 * A simple shipping method for free shipping.
 *
 * @class   WC_Shipping_Free_Shipping
 * @version 2.6.0
 * @package WooCommerce\Classes\Shipping
 */
class WC_Shipping_Free_Shipping
{
    /**
     * Min amount to be valid.
     *
     * @var integer
     */
    public $min_amount = 0;

    /**
     * Requires option.
     *
     * @var string
     */
    public $requires = '';

    /**
     * Ignore discounts.
     *
     * If set, free shipping would be available based on pre-discount order amount.
     *
     * @var string
     */
    public $ignore_discounts = null;

    /**
     * Constructor.
     *
     * @param int $instance_id Shipping method instance.
     */
    public function __construct($instance_id = 0)
    {
        // stub
    }

    /**
     * Initialize free shipping.
     */
    public function init()
    {
        // stub
    }

    /**
     * Sanitize the cost field.
     *
     * @since 8.3.0
     * @param string $value Unsanitized value.
     * @throws Exception Last error triggered.
     * @return string
     */
    public function sanitize_cost($value)
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

    /**
     * Get setting form fields for instances of this shipping method within zones.
     *
     * @return array
     */
    public function get_instance_form_fields()
    {
        // stub
    }

    /**
     * See if free shipping is available based on the package and cart.
     *
     * @param array $package Shipping package.
     * @return bool
     */
    public function is_available($package)
    {
        // stub
    }

    /**
     * Called to calculate shipping rates for this method. Rates can be added using the add_rate() method.
     *
     * @uses WC_Shipping_Method::add_rate()
     *
     * @param array $package Shipping package.
     */
    public function calculate_shipping($package = array (
))
    {
        // stub
    }

    /**
     * Enqueue JS to handle free shipping options.
     *
     * Static so that's enqueued only once.
     */
    public static function enqueue_admin_js()
    {
        // stub
    }

}
