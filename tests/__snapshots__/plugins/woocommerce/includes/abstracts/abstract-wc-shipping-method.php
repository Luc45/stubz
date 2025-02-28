<?php

/**
 * WooCommerce Shipping Method Class.
 *
 * Extended by shipping methods to handle shipping calculations etc.
 *
 * @class       WC_Shipping_Method
 * @version     3.0.0
 * @package     WooCommerce\Abstracts
 */
abstract class WC_Shipping_Method
{
    /**
     * Features this method supports. Possible features used by core:
     * - shipping-zones Shipping zone functionality + instances
     * - instance-settings Instance settings screens.
     * - settings Non-instance settings screens. Enabled by default for BW compatibility with methods before instances existed.
     * - instance-settings-modal Allows the instance settings to be loaded within a modal in the zones UI.
     *
     * @var array
     */
    public $supports = array (
  0 => 'settings',
);

    /**
     * Unique ID for the shipping method - must be set.
     *
     * @var string
     */
    public $id = '';

    /**
     * Method title.
     *
     * @var string
     */
    public $method_title = '';

    /**
     * Method description.
     *
     * @var string
     */
    public $method_description = '';

    /**
     * Yes or no based on whether the method is enabled.
     *
     * @var string
     */
    public $enabled = 'yes';

    /**
     * Shipping method title for the frontend.
     *
     * @var string
     */
    public $title = null;

    /**
     * This is an array of rates - methods must populate this array to register shipping costs.
     *
     * @var array
     */
    public $rates = array();

    /**
     * If 'taxable' tax will be charged for this method (if applicable).
     *
     * @var string
     */
    public $tax_status = 'taxable';

    /**
     * Fee for the method (if applicable).
     *
     * @var string
     */
    public $fee = null;

    /**
     * Minimum fee for the method (if applicable).
     *
     * @var string
     */
    public $minimum_fee = null;

    /**
     * Instance ID if used.
     *
     * @var int
     */
    public $instance_id = 0;

    /**
     * Instance form fields.
     *
     * @var array
     */
    public $instance_form_fields = array();

    /**
     * Instance settings.
     *
     * @var array
     */
    public $instance_settings = array();

    /**
     * Availability - legacy. Used for method Availability.
     * No longer useful for instance based shipping methods.
     *
     * @deprecated 2.6.0
     * @var string
     */
    public $availability = null;

    /**
     * Availability countries - legacy. Used for method Availability.
     * No longer useful for instance based shipping methods.
     *
     * @deprecated 2.6.0
     * @var array
     */
    public $countries = array();

    /**
     * Shipping method order.
     *
     * @var int
     */
    public $method_order = null;

    /**
     * Whether the shipping method has settings or not. Preferably, use {@see has_settings()} instead.
     *
     * @var bool
     */
    public $has_settings = null;

    /**
     * When the method supports the settings modal, this is the admin settings HTML.
     * Preferably, use {@see get_admin_options_html()} instead.
     *
     * @var string|bool
     */
    public $settings_html = null;

    /**
     * Constructor.
     *
     * @param int $instance_id Instance ID.
     */
    public function __construct($instance_id = 0)
{
}
    /**
     * Check if a shipping method supports a given feature.
     *
     * Methods should override this to declare support (or lack of support) for a feature.
     *
     * @param string $feature The name of a feature to test support for.
     * @return bool True if the shipping method supports the feature, false otherwise.
     */
    public function supports($feature)
{
}
    /**
     * Called to calculate shipping rates for this method. Rates can be added using the add_rate() method.
     *
     * @param array $package Package array.
     */
    public function calculate_shipping($package = array())
{
}
    /**
     * Whether or not we need to calculate tax on top of the shipping rate.
     *
     * @return boolean
     */
    public function is_taxable()
{
}
    /**
     * Whether or not this method is enabled in settings.
     *
     * @since 2.6.0
     * @return boolean
     */
    public function is_enabled()
{
}
    /**
     * Return the shipping method instance ID.
     *
     * @since 2.6.0
     * @return int
     */
    public function get_instance_id()
{
}
    /**
     * Return the shipping method title.
     *
     * @since 2.6.0
     * @return string
     */
    public function get_method_title()
{
}
    /**
     * Return the shipping method description.
     *
     * @since 2.6.0
     * @return string
     */
    public function get_method_description()
{
}
    /**
     * Return the shipping title which is user set.
     *
     * @return string
     */
    public function get_title()
{
}
    /**
     * Return calculated rates for a package.
     *
     * @since 2.6.0
     * @param array $package Package array.
     * @return array
     */
    public function get_rates_for_package($package)
{
}
    /**
     * Returns a rate ID based on this methods ID and instance, with an optional
     * suffix if distinguishing between multiple rates.
     *
     * @since 2.6.0
     * @param string $suffix Suffix.
     * @return string
     */
    public function get_rate_id($suffix = '')
{
}
    /**
     * Add a shipping rate. If taxes are not set they will be calculated based on cost.
     *
     * @param array $args Arguments (default: array()).
     */
    public function add_rate($args = array())
{
}
    /**
     * Calc taxes per item being shipping in costs array.
     *
     * @since 2.6.0
     * @param  array $costs Costs.
     * @return array of taxes
     */
    protected function get_taxes_per_item($costs)
{
}
    /**
     * Is this method available?
     *
     * @param array $package Package.
     * @return bool
     */
    public function is_available($package)
{
}
    /**
     * Get fee to add to shipping cost.
     *
     * @param string|float $fee Fee.
     * @param float        $total Total.
     * @return float
     */
    public function get_fee($fee, $total)
{
}
    /**
     * Does this method have a settings page?
     *
     * @return bool
     */
    public function has_settings()
{
}
    /**
     * Return admin options as a html string.
     *
     * @return string
     */
    public function get_admin_options_html()
{
}
    /**
     * Output the shipping settings screen.
     */
    public function admin_options()
{
}
    /**
     * Get_option function.
     *
     * Gets an option from the settings API, using defaults if necessary to prevent undefined notices.
     *
     * @param  string $key Key.
     * @param  mixed  $empty_value Empty value.
     * @return mixed  The value specified for the option or a default value for the option.
     */
    public function get_option($key, $empty_value = null)
{
}
    /**
     * Gets an option from the settings API, using defaults if necessary to prevent undefined notices.
     *
     * @param  string $key Key.
     * @param  mixed  $empty_value Empty value.
     * @return mixed  The value specified for the option or a default value for the option.
     */
    public function get_instance_option($key, $empty_value = null)
{
}
    /**
     * Get settings fields for instances of this shipping method (within zones).
     * Should be overridden by shipping methods to add options.
     *
     * @since 2.6.0
     * @return array
     */
    public function get_instance_form_fields()
{
}
    /**
     * Return the name of the option in the WP DB.
     *
     * @since 2.6.0
     * @return string
     */
    public function get_instance_option_key()
{
}
    /**
     * Initialise Settings for instances.
     *
     * @since 2.6.0
     */
    public function init_instance_settings()
{
}
    /**
     * Processes and saves global shipping method options in the admin area.
     *
     * This method is usually attached to woocommerce_update_options_x hooks.
     *
     * @since 2.6.0
     * @return bool was anything saved?
     */
    public function process_admin_options()
{
}
}
