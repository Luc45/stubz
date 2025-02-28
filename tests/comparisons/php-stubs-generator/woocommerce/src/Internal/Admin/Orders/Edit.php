<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders;

/**
 * Class Edit.
 */
class Edit
{
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
    public function setup(\WC_Order $order)
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
     * Takes care of updating order data. Fires action that metaboxes can hook to for order data updating.
     *
     * @return void
     */
    public function handle_order_update()
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
}
