<?php

namespace Automattic\WooCommerce\Blocks\Shipping;

/**
 * ShippingController class.
 *
 * @internal
 */
class ShippingController
{
    /**
     * Instance of the asset API.
     *
     * @var AssetApi
     */
    protected $asset_api = null;

    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry = null;

    /**
     * Whether local pickup is enabled.
     *
     * @var bool
     */
    private $local_pickup_enabled = null;

    /**
     * Constructor.
     *
     * @param AssetApi          $asset_api Instance of the asset API.
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Assets\Api $asset_api, Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
    {
        // stub
    }

    /**
     * Initialization method.
     */
    public function init()
    {
        // stub
    }

    /**
     * Overrides the option to force shipping calculations NOT to wait until an address is entered, but only if the
     * Checkout page contains the Checkout Block.
     *
     * @param boolean $value Whether shipping cost calculation requires address to be entered.
     * @return boolean Whether shipping cost calculation should require an address to be entered before calculating.
     */
    public function override_cost_requires_address_option($value)
    {
        // stub
    }

    /**
     * Inject collection details onto the order received page.
     *
     * @param string    $return_value Return value.
     * @param \WC_Order $order Order object.
     * @return string
     */
    public function show_local_pickup_details($return_value, $order)
    {
        // stub
    }

    /**
     * When using the cart and checkout blocks this method is used to adjust core shipping settings via a filter hook.
     *
     * @param array $settings The default WC shipping settings.
     * @return array|mixed The filtered settings.
     */
    public function remove_shipping_settings($settings)
    {
        // stub
    }

    /**
     * Register Local Pickup settings for rest api.
     */
    public function register_settings()
    {
        // stub
    }

    /**
     * Hydrate client settings
     */
    public function hydrate_client_settings()
    {
        // stub
    }

    /**
     * Load admin scripts.
     */
    public function admin_scripts()
    {
        // stub
    }

    /**
     * Registers the Local Pickup shipping method used by the Checkout Block.
     */
    public function register_local_pickup()
    {
        // stub
    }

    /**
     * Declares the Pickup Location shipping method as a Local Pickup method for WooCommerce.
     *
     * @param array $methods Shipping method ids.
     * @return array
     */
    public function register_local_pickup_method($methods)
    {
        // stub
    }

    /**
     * Hides the shipping address on the order confirmation page when local pickup is selected.
     *
     * @param array $pickup_methods Method ids.
     * @return array
     */
    public function hide_shipping_address_for_local_pickup($pickup_methods)
    {
        // stub
    }

    /**
     * Everytime we save or update local pickup settings, we flush the shipping
     * transient group.
     *
     * @param array $settings The setting array we're saving.
     * @return array $settings The setting array we're saving.
     */
    public function flush_cache($settings)
    {
        // stub
    }

    /**
     * Filter the location used for taxes based on the chosen pickup location.
     *
     * @param array $address Location args.
     * @return array
     */
    public function filter_taxable_address($address)
    {
        // stub
    }

    /**
     * Local Pickup requires all packages to support local pickup. This is because the entire order must be picked up
     * so that all packages get the same tax rates applied during checkout.
     *
     * If a shipping package does not support local pickup (e.g. if disabled by an extension), this filters the option
     * out for all packages. This will in turn disable the "pickup" toggle in Block Checkout.
     *
     * @param array $packages Array of shipping packages.
     * @return array
     */
    public function filter_shipping_packages($packages)
    {
        // stub
    }

    /**
     * Track local pickup settings changes via Store API
     *
     * @param bool              $served Whether the request has already been served.
     * @param \WP_REST_Response $result The response object.
     * @param \WP_REST_Request  $request The request object.
     * @return bool
     */
    public function track_local_pickup($served, $result, $request)
    {
        // stub
    }

    /**
     * Check if legacy local pickup is activated in any of the shipping zones or in the Rest of the World zone.
     *
     * @since 8.8.0
     *
     * @return bool
     */
    public static function is_legacy_local_pickup_active()
    {
        // stub
    }

}