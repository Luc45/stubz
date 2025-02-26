<?php

namespace ;

/**
 * Shipping class.
 */
class WC_Shipping extends \
{
    /**
     * True if shipping is enabled.
     *
     * @var bool
     */
    public $enabled = false;

    /**
     * Stores methods loaded into woocommerce.
     *
     * @var array|null
     */
    public $shipping_methods = null;

    /**
     * Stores the shipping classes.
     *
     * @var array
     */
    public $shipping_classes = array(
);

    /**
     * Stores packages to ship and to get quotes for.
     *
     * @var array
     */
    public $packages = array(
);

    /**
     * The single instance of the class
     *
     * @var WC_Shipping
     * @since 2.1
     */
    protected static $_instance = null;

    /**
     * Main WC_Shipping Instance.
     *
     * Ensures only one instance of WC_Shipping is loaded or can be loaded.
     *
     * @since 2.1
     * @return WC_Shipping Main instance
     */
    public static function instance()
    {
        // stub
    }

    /**
     * Cloning is forbidden.
     *
     * @since 2.1
     */
    public function __clone()
    {
        // stub
    }

    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 2.1
     */
    public function __wakeup()
    {
        // stub
    }

    /**
     * Magic getter.
     *
     * @param string $name Property name.
     * @return mixed
     */
    public function __get($name)
    {
        // stub
    }

    /**
     * Initialize shipping.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Initialize shipping.
     */
    public function init()
    {
        // stub
    }

    /**
     * Shipping methods register themselves by returning their main class name through the woocommerce_shipping_methods filter.
     *
     * @return array
     */
    public function get_shipping_method_class_names()
    {
        // stub
    }

    /**
     * Loads all shipping methods which are hooked in.
     * If a $package is passed, some methods may add themselves conditionally and zones will be used.
     *
     * @param array $package Package information.
     * @return WC_Shipping_Method[]
     */
    public function load_shipping_methods($package = array(
))
    {
        // stub
    }

    /**
     * Register a shipping method.
     *
     * @param object|string $method Either the name of the method's class, or an instance of the method's class.
     *
     * @return bool|void
     */
    public function register_shipping_method($method)
    {
        // stub
    }

    /**
     * Unregister shipping methods.
     */
    public function unregister_shipping_methods()
    {
        // stub
    }

    /**
     * Returns all registered shipping methods for usage.
     *
     * @return WC_Shipping_Method[]
     */
    public function get_shipping_methods()
    {
        // stub
    }

    /**
     * Get an array of shipping classes.
     *
     * @return array
     */
    public function get_shipping_classes()
    {
        // stub
    }

    /**
     * Calculate shipping for (multiple) packages of cart items.
     *
     * @param array $packages multi-dimensional array of cart items to calc shipping for.
     * @return array Array of calculated packages.
     */
    public function calculate_shipping($packages = array(
))
    {
        // stub
    }

    /**
     * See if package is shippable.
     *
     * Packages are shippable until proven otherwise e.g. after getting a shipping country.
     *
     * @param  array $package Package of cart items.
     * @return bool
     */
    public function is_package_shippable($package)
    {
        // stub
    }

    /**
     * Calculate shipping rates for a package,
     *
     * Calculates each shipping methods cost. Rates are stored in the session based on the package hash to avoid re-calculation every page load.
     *
     * @param array $package Package of cart items.
     * @param int   $package_key Index of the package being calculated. Used to cache multiple package rates.
     *
     * @return array|bool
     */
    public function calculate_shipping_for_package($package = array(
), $package_key = 0)
    {
        // stub
    }

    /**
     * Get packages.
     *
     * @return array
     */
    public function get_packages()
    {
        // stub
    }

    /**
     * Reset shipping.
     *
     * Reset the totals for shipping as a whole.
     */
    public function reset_shipping()
    {
        // stub
    }

    /**
     * Deprecated
     *
     * @deprecated 2.6.0 Was previously used to determine sort order of methods, but this is now controlled by zones and thus unused.
     */
    public function sort_shipping_methods()
    {
        // stub
    }

}

