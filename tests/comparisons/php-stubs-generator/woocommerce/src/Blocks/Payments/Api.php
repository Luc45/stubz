<?php

namespace Automattic\WooCommerce\Blocks\Payments;

/**
 *  The Api class provides an interface to payment method registration.
 *
 * @since 2.6.0
 */
class Api
{
    /**
     * Constructor
     *
     * @param PaymentMethodRegistry $payment_method_registry An instance of Payment Method Registry.
     * @param AssetDataRegistry     $asset_registry  Used for registering data to pass along to the request.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_registry)
    {
    }
    /**
     * Initialize class features.
     */
    public function init()
    {
    }
    /**
     * Add payment method script handles as script dependencies.
     *
     * @param array  $dependencies Array of script dependencies.
     * @param string $handle Script handle.
     * @return array
     */
    public function add_payment_method_script_dependencies($dependencies, $handle)
    {
    }
    /**
     * Add payment method data to Asset Registry.
     */
    public function add_payment_method_script_data()
    {
    }
    /**
     * Register payment method integrations bundled with blocks.
     *
     * @param PaymentMethodRegistry $payment_method_registry Payment method registry instance.
     */
    public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
    {
    }
    /**
     * Verify all dependencies of registered payment methods have been registered.
     * If not, remove that payment method script from the list of dependencies
     * of Cart and Checkout block scripts so it doesn't break the blocks and show
     * an error in the admin.
     */
    public function verify_payment_methods_dependencies()
    {
    }
}
