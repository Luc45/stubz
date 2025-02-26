<?php

namespace ;

/**
 * WC_Shipping_Flat_Rate class.
 */
class WC_Shipping_Flat_Rate
{
    /**
     * Cost passed to [fee] shortcode.
     *
     * @var string Cost.
     */
    protected $fee_cost = '';

    /**
     * Shipping method cost.
     *
     * @var string
     */
    public $cost = null;

    /**
     * Shipping method type.
     *
     * @var string
     */
    public $type = null;

    /**
     * Constructor.
     *
     * @param int $instance_id Shipping method instance ID.
     */
    public function __construct($instance_id = 0)
    {
        // stub
    }

    /**
     * Init user set variables.
     */
    public function init()
    {
        // stub
    }

    /**
     * Evaluate a cost from a sum/string.
     *
     * @param  string $sum Sum of shipping.
     * @param  array  $args Args, must contain `cost` and `qty` keys. Having `array()` as default is for back compat reasons.
     * @return string
     */
    protected function evaluate_cost($sum, $args = array (
))
    {
        // stub
    }

    /**
     * Work out fee (shortcode).
     *
     * @param  array $atts Attributes.
     * @return string
     */
    public function fee($atts)
    {
        // stub
    }

    /**
     * Calculate the shipping costs.
     *
     * @param array $package Package of items from cart.
     */
    public function calculate_shipping($package = array (
))
    {
        // stub
    }

    /**
     * Get items in package.
     *
     * @param  array $package Package of items from cart.
     * @return int
     */
    public function get_package_item_qty($package)
    {
        // stub
    }

    /**
     * Finds and returns shipping classes and the products with said class.
     *
     * @param mixed $package Package of items from cart.
     * @return array
     */
    public function find_shipping_classes($package)
    {
        // stub
    }

    /**
     * Sanitize the cost field.
     *
     * @since 3.4.0
     * @param string $value Unsanitized value.
     * @throws Exception Last error triggered.
     * @return string
     */
    public function sanitize_cost($value)
    {
        // stub
    }

}

