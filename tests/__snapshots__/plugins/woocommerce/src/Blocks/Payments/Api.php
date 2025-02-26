<?php

namespace Automattic\WooCommerce\Blocks\Payments;

/**
 *  The Api class provides an interface to payment method registration.
 *
 * @since 2.6.0
 */
class Api extends \
{
    /**
     * Reference to the PaymentMethodRegistry instance.
     *
     * @var PaymentMethodRegistry
     */
    private $payment_method_registry = null;

    /**
     * Reference to the AssetDataRegistry instance.
     *
     * @var AssetDataRegistry
     */
    private $asset_registry = null;

    /**
     * Constructor
     *
     * @param PaymentMethodRegistry $payment_method_registry An instance of Payment Method Registry.
     * @param AssetDataRegistry     $asset_registry  Used for registering data to pass along to the request.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry, Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_registry)
    {
        // stub
    }

    /**
     * Initialize class features.
     */
    public function init()
    {
        // stub
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
        // stub
    }

    /**
     * Returns true if the payment gateway is enabled.
     *
     * @param object $gateway Payment gateway.
     * @return boolean
     */
    private function is_payment_gateway_enabled($gateway)
    {
        // stub
    }

    /**
     * Add payment method data to Asset Registry.
     */
    public function add_payment_method_script_data()
    {
        // stub
    }

    /**
     * Register payment method integrations bundled with blocks.
     *
     * @param PaymentMethodRegistry $payment_method_registry Payment method registry instance.
     */
    public function register_payment_method_integrations(Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
    {
        // stub
    }

    /**
     * Verify all dependencies of registered payment methods have been registered.
     * If not, remove that payment method script from the list of dependencies
     * of Cart and Checkout block scripts so it doesn't break the blocks and show
     * an error in the admin.
     */
    public function verify_payment_methods_dependencies()
    {
        // stub
    }

}

