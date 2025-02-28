<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * Class Edit.
 */
class Edit
{
    /**
     * Screen ID for the edit order screen.
     *
     * @var string
     */
    private $screen_id = null;
    /**
     * Instance of the CustomMetaBox class. Used to render meta box for custom meta.
     *
     * @var CustomMetaBox
     */
    private $custom_meta_box = null;
    /**
     * Instance of the TaxonomiesMetaBox class. Used to render meta box for taxonomies.
     *
     * @var TaxonomiesMetaBox
     */
    private $taxonomies_meta_box = null;
    /**
     * Instance of WC_Order to be used in metaboxes.
     *
     * @var \WC_Order
     */
    private $order = null;
    /**
     * Action name that the form is currently handling. Could be new_order or edit_order.
     *
     * @var string
     */
    private $current_action = null;
    /**
     * Message to be displayed to the user. Index of message from the messages array registered when declaring shop_order post type.
     *
     * @var int
     */
    private $message = null;
    /**
     * Controller for orders page. Used to determine redirection URLs.
     *
     * @var PageController
     */
    private $orders_page_controller = null;
    /**
     * Hooks all meta-boxes for order edit page. This is static since this may be called by post edit form rendering.
     *
     * @param string $screen_id Screen ID.
     * @param string $title Title of the page.
     */
    public static function add_order_meta_boxes(string $screen_id, string $title)
{
}
    /**
     * Hooks metabox save functions for order edit page.
     *
     * @return void
     */
    public static function add_save_meta_boxes()
{
}
    /**
     * Enqueue necessary scripts for order edit page.
     */
    private function enqueue_scripts()
{
}
    /**
     * Returns the PageController for this edit form. This method is protected to allow child classes to overwrite the PageController object and return custom links.
     *
     * @since 8.0.0
     *
     * @return PageController PageController object.
     */
    protected function get_page_controller()
{
}
    /**
     * Setup hooks, actions and variables needed to render order edit page.
     *
     * @param \WC_Order $order Order object.
     */
    public function setup(WC_Order $order)
{
}
    /**
     * Set the current action for the form.
     *
     * @param string $action Action name.
     */
    public function set_current_action(string $action)
{
}
    /**
     * Hooks meta box for order specific meta.
     */
    private function add_order_specific_meta_box()
{
}
    /**
     * Render custom meta box.
     *
     * @return void
     */
    private function add_order_taxonomies_meta_box()
{
}
    /**
     * Register order attribution meta boxes if the feature is enabled.
     *
     * @since 8.5.0
     *
     * @param string $screen_id Screen ID.
     * @param string $title     Title of the page.
     *
     * @return void
     */
    private static function maybe_register_order_attribution(string $screen_id, string $title)
{
}
    /**
     * Takes care of updating order data. Fires action that metaboxes can hook to for order data updating.
     *
     * @return void
     */
    public function handle_order_update()
{
}
    /**
     * Helper method to redirect to order edit page.
     *
     * @since 8.0.0
     *
     * @param \WC_Order $order Order object.
     */
    private function redirect_order(WC_Order $order)
{
}
    /**
     * Helper method to get the name of order edit nonce.
     *
     * @return string Nonce action name.
     */
    private function get_order_edit_nonce_action()
{
}
    /**
     * Render meta box for order specific meta.
     */
    public function render_custom_meta_box()
{
}
    /**
     * Render order edit page.
     */
    public function display()
{
}
    /**
     * Helper function to render wrapper start.
     *
     * @param string $notice Notice to display, if any.
     * @param string $message Message to display, if any.
     */
    private function render_wrapper_start($notice = '', $message = '')
{
}
    /**
     * Helper function to render meta boxes.
     */
    private function render_meta_boxes()
{
}
    /**
     * Helper function to render wrapper end.
     */
    private function render_wrapper_end()
{
}
}