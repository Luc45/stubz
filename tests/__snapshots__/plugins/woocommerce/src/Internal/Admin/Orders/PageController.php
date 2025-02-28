<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * Controls the different pages/screens associated to the "Orders" menu page.
 */
class PageController
{
    /**
     * Sets up the page controller, including registering the menu item.
     *
     * @return void
     */
    public function setup(): void
{
}
    /**
     * Perform initialization for the current action.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_load_page_action()
{
}
    /**
     * Set the document title for Orders screens to match what it would be with the shop_order CPT.
     *
     * @param string $admin_title The admin screen title before it's filtered.
     *
     * @return string The filtered admin title.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function set_page_title($admin_title)
{
}
    /**
     * Registers the "Orders" menu.
     *
     * @return void
     */
    public function register_menu(): void
{
}
    /**
     * Outputs content for the current orders screen.
     *
     * @return void
     */
    public function output(): void
{
}
    /**
     * Returns the current order type.
     *
     * @return string
     */
    public function get_order_type()
{
}
    /**
     * Helper method to generate a link to the main orders screen.
     *
     * @return string Orders screen URL.
     */
    public function get_orders_url(): string
{
}
    /**
     * Helper method to generate edit link for an order.
     *
     * @param int $order_id Order ID.
     *
     * @return string Edit link.
     */
    public function get_edit_url(int $order_id): string
{
}
    /**
     * Helper method to generate a link for creating order.
     *
     * @param string $order_type The order type. Defaults to 'shop_order'.
     * @return string
     */
    public function get_new_page_url($order_type = 'shop_order'): string
{
}
    /**
     * Helper method to generate a link to the main screen for a custom order type.
     *
     * @param string $order_type The order type.
     *
     * @return string
     *
     * @throws \Exception When an invalid order type is passed.
     */
    public function get_base_page_url($order_type): string
{
}
    /**
     * Helper method to check if the current admin screen is related to orders.
     *
     * @param string $type   Optional. The order type to check for. Default shop_order.
     * @param string $action Optional. The purpose of the screen to check for. 'list', 'edit', or 'new'.
     *                       Leave empty to check for any order screen.
     *
     * @return bool
     */
    public function is_order_screen($type = 'shop_order', $action = ''): bool
{
}
}