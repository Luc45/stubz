<?php
namespace WooCommerceIntegrationScenario\Includes;

/**
 * A class that integrates with WooCommerce to add a simple feature.
 */
class WooIntegrationPlugin {
    public function setup(): void {
        // Hook to run only if WooCommerce is active
        add_action('plugins_loaded', [ $this, 'maybeInit' ]);
    }

    public function maybeInit(): void {
        if (defined('WC_VERSION')) {
            // WooCommerce is active, do some integration
            add_filter('woocommerce_add_to_cart_validation', [ $this, 'customValidation' ], 10, 2);
        }
    }

    /**
     * Example custom validation for WooCommerce "Add to cart".
     */
    public function customValidation(bool $is_valid, int $product_id): bool {
        // Add some custom logic...
        return $is_valid;
    }
}
