<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * Controls the different pages/screens associated to the "Orders" menu page.
 */
class PageController
{
    /**
     * The order type.
     *
     * @var string
     */
    private $order_type = '';

    /**
     * Instance of the posts redirection controller.
     *
     * @var PostsRedirectionController
     */
    private $redirection_controller = null;

    /**
     * Instance of the orders list table.
     *
     * @var ListTable
     */
    private $orders_table = null;

    /**
     * Instance of orders edit form.
     *
     * @var Edit
     */
    private $order_edit_form = null;

    /**
     * Current action.
     *
     * @var string
     */
    private $current_action = '';

    /**
     * Order object to be used in edit/new form.
     *
     * @var \WC_Order
     */
    private $order = null;

    /**
     * Verify that user has permission to edit orders.
     *
     * @return void
     */
    private function verify_edit_permission()
    {
        // stub
    }

    /**
     * Verify that user has permission to create order.
     *
     * @return void
     */
    private function verify_create_permission()
    {
        // stub
    }

    /**
     * Claims the lock for the order being edited/created (unless it belongs to someone else).
     * Also handles the 'claim-lock' action which allows taking over the order forcefully.
     *
     * @return void
     */
    private function handle_edit_lock()
    {
        // stub
    }

    /**
     * Sets up the page controller, including registering the menu item.
     *
     * @return void
     */
    public function setup(): void
    {
        // stub
    }

    /**
     * Perform initialization for the current action.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function handle_load_page_action()
    {
        // stub
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
        // stub
    }

    /**
     * Determines the order type for the current screen.
     *
     * @return void
     */
    private function set_order_type()
    {
        // stub
    }

    /**
     * Sets the current action based on querystring arguments. Defaults to 'list_orders'.
     *
     * @return void
     */
    private function set_action(): void
    {
        // stub
    }

    /**
     * Registers the "Orders" menu.
     *
     * @return void
     */
    public function register_menu(): void
    {
        // stub
    }

    /**
     * Outputs content for the current orders screen.
     *
     * @return void
     */
    public function output(): void
    {
        // stub
    }

    /**
     * Handles initialization of the orders list table.
     *
     * @return void
     */
    private function setup_action_list_orders(): void
    {
        // stub
    }

    /**
     * Perform a redirect to remove the `_wp_http_referer` and `_wpnonce` strings if present in the URL (see also
     * wp-admin/edit.php where a similar process takes place), otherwise the size of this field builds to an
     * unmanageable length over time.
     */
    private function strip_http_referer(): void
    {
        // stub
    }

    /**
     * Prepares the order edit form for creating or editing an order.
     *
     * @see \Automattic\WooCommerce\Internal\Admin\Orders\Edit.
     * @since 8.1.0
     */
    private function prepare_order_edit_form(): void
    {
        // stub
    }

    /**
     * Handles initialization of the orders edit form.
     *
     * @return void
     */
    private function setup_action_edit_order(): void
    {
        // stub
    }

    /**
     * Handles initialization of the orders edit form with a new order.
     *
     * @return void
     */
    private function setup_action_new_order(): void
    {
        // stub
    }

    /**
     * Returns the current order type.
     *
     * @return string
     */
    public function get_order_type()
    {
        // stub
    }

    /**
     * Helper method to generate a link to the main orders screen.
     *
     * @return string Orders screen URL.
     */
    public function get_orders_url(): string
    {
        // stub
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
        // stub
    }

    /**
     * Helper method to generate a link for creating order.
     *
     * @param string $order_type The order type. Defaults to 'shop_order'.
     * @return string
     */
    public function get_new_page_url($order_type = 'shop_order'): string
    {
        // stub
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
        // stub
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
        // stub
    }

}

