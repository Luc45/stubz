<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class OrderAttributionController
 *
 * @since 8.5.0
 */
class OrderAttributionController implements \Automattic\WooCommerce\Internal\RegisterHooksInterface
{
    /**
     * Initialization method.
     *
     * Takes the place of the constructor within WooCommerce Dependency injection.
     *
     * @internal
     *
     * @param LegacyProxy        $proxy      The legacy proxy.
     * @param FeaturesController $controller The feature controller.
     * @param WPConsentAPI       $consent    The WPConsentAPI integration.
     */
    final public function init(Automattic\WooCommerce\Proxies\LegacyProxy $proxy, Automattic\WooCommerce\Internal\Features\FeaturesController $controller, Automattic\WooCommerce\Internal\Integrations\WPConsentAPI $consent)
{
}
    /**
     * Register this class instance to the appropriate hooks.
     *
     * @return void
     */
    public function register()
{
}
    /**
     * Hook into WordPress on init.
     */
    public function on_init()
{
}
    /**
     * Get all of the field names.
     *
     * @return array
     */
    public function get_field_names(): array
{
}
    /**
     * Get the prefix for the fields.
     *
     * @return string
     */
    public function get_prefix(): string
{
}
    /**
     * Handles the `<wc-order-attribution-inputs>` element for checkout forms, ensuring that the field is only output once.
     *
     * @since 9.0.0
     *
     * @return void
     */
    public function stamp_checkout_html_element_once()
{
}
    /**
     * Output `<wc-order-attribution-inputs>` element that contributes the order attribution values to the enclosing form.
     * Used customer register forms, and for checkout forms through `stamp_checkout_html_element()`.
     *
     * @return void
     */
    public function stamp_html_element()
{
}
}