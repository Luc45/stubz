<?php

/**
 * Flat Rate Shipping Method.
 *
 * This class is here for backwards compatibility for methods existing before zones existed.
 *
 * @deprecated  2.6.0
 * @version     2.4.0
 * @package     WooCommerce\Classes\Shipping
 */
class WC_Shipping_Legacy_Flat_Rate
{
    /**
     * Cost passed to [fee] shortcode.
     *
     * @var string
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
     * Shipping method options.
     *
     * @deprecated 2.4.0
     * @var string
     */
    public $options = null;

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
     * Initialise Settings Form Fields.
     */
    public function init_form_fields()
    {
        // stub
    }

    /**
     * Evaluate a cost from a sum/string.
     *
     * @param  string $sum Sum to evaluate.
     * @param  array  $args Arguments.
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
     * @param  array $atts Shortcode attributes.
     * @return string
     */
    public function fee($atts)
    {
        // stub
    }

    /**
     * Calculate shipping.
     *
     * @param array $package (default: array()).
     */
    public function calculate_shipping($package = array (
))
    {
        // stub
    }

    /**
     * Get items in package.
     *
     * @param  array $package Package information.
     * @return int
     */
    public function get_package_item_qty($package)
    {
        // stub
    }

    /**
     * Finds and returns shipping classes and the products with said class.
     *
     * @param mixed $package Package information.
     * @return array
     */
    public function find_shipping_classes($package)
    {
        // stub
    }

    /**
     * Adds extra calculated flat rates.
     *
     * @deprecated 2.4.0
     *
     * Additional rates defined like this:
     *  Option Name | Additional Cost [+- Percents%] | Per Cost Type (order, class, or item).
     *
     * @param null  $method Deprecated.
     * @param array $rate Rate information.
     */
    public function calculate_extra_shipping($method, $rate)
    {
        // stub
    }

    /**
     * Calculate the percentage adjustment for each shipping rate.
     *
     * @deprecated 2.4.0
     * @param  float  $cost Cost.
     * @param  float  $percent_adjustment Percent adjustment.
     * @param  string $percent_operator Percent operator.
     * @param  float  $base_price Base price.
     * @return float
     */
    public function calc_percentage_adjustment($cost, $percent_adjustment, $percent_operator, $base_price)
    {
        // stub
    }

    /**
     * Get extra cost.
     *
     * @deprecated 2.4.0
     * @param  string $cost_string Cost string.
     * @param  string $type Type.
     * @param  array  $package Package information.
     * @return float
     */
    public function get_extra_cost($cost_string, $type, $package)
    {
        // stub
    }

}
