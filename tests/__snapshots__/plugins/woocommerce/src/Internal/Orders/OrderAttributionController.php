<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class OrderAttributionController
 *
 * @since 8.5.0
 */
class OrderAttributionController
{
    /**
     * The WPConsentAPI integration instance.
     *
     * @var WPConsentAPI
     */
    private $consent = null;

    /**
     * The FeatureController instance.
     *
     * @var FeaturesController
     */
    private $feature_controller = null;

    /**
     * WooCommerce logger class instance.
     *
     * @var WC_Logger_Interface
     */
    private $logger = null;

    /**
     * The LegacyProxy instance.
     *
     * @var LegacyProxy
     */
    private $proxy = null;

    /**
     *  Whether the `stamp_checkout_html_element` method has been called.
     *
     * @var bool
     */
    private static $is_stamp_checkout_html_called = false;

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
     * If the order is created in the admin, set the source type and origin to admin/Web admin.
     * Only execute this if the order is created in the admin interface (or via ajax in the admin interface).
     *
     * @param WC_Order $order The recently created order object.
     *
     * @since 8.5.0
     */
    private function maybe_set_admin_source(WC_Order $order)
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
     * Scripts & styles for custom source tracking and cart tracking.
     */
    private function enqueue_scripts_and_styles()
{
}
    /**
     * Enqueue the stylesheet for admin pages.
     *
     * @return void
     */
    private function enqueue_admin_scripts_and_styles()
{
}
    /**
     * Display the origin column in the orders table.
     *
     * @param int $order_id The order ID.
     *
     * @return void
     */
    private function display_origin_column($order_id): void
{
}
    /**
     * Output the translated origin label for the Origin column in the orders table.
     *
     * Default to "Unknown" if no origin is set.
     *
     * @param WC_Order $order The order object.
     *
     * @return void
     */
    private function output_origin_column(WC_Order $order)
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
    /**
     * Save source data for a Customer object.
     *
     * @param WC_Customer $customer The customer object.
     *
     * @return void
     */
    private function set_customer_source_data(WC_Customer $customer)
{
}
    /**
     * Save source data for an Order object.
     *
     * @param array    $source_data The source data.
     * @param WC_Order $order       The order object.
     *
     * @return void
     */
    private function set_order_source_data(array $source_data, WC_Order $order)
{
}
    /**
     * Log a message as a debug log entry.
     *
     * @param string $message The message to log.
     * @param string $method  The method that is logging the message.
     * @param string $level   The log level.
     */
    private function log(string $message, string $method, string $level)
{
}
    /**
     * Send order source data to Tracks.
     *
     * @param array    $source_data The source data.
     * @param WC_Order $order       The order object.
     *
     * @return void
     */
    private function send_order_tracks(array $source_data, WC_Order $order)
{
}
    /**
     * Get the screen ID for the orders page.
     *
     * @return string
     */
    private function get_order_screen_id(): string
{
}
    /**
     * Register the origin column in the orders table.
     *
     * This accounts for the differences in hooks based on whether HPOS is enabled or not.
     *
     * @return void
     */
    private function register_order_origin_column()
{
}
}