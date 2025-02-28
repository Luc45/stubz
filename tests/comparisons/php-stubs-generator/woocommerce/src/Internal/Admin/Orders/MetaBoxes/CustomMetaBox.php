<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes;

/**
 * Class CustomMetaBox.
 */
class CustomMetaBox
{
    /**
     * Renders the meta box to manage custom meta.
     *
     * @param \WP_Post|\WC_Order $order_or_post Post or order object that we are rendering for.
     */
    public function output($order_or_post)
    {
    }
    /**
     * Compute keys to display in autofill when adding new meta key entry in custom meta box.
     * Currently, returns empty keys, will be implemented after caching is merged.
     *
     * @param mixed              $deprecated Unused argument. For backwards compatibility.
     * @param \WP_Post|\WC_Order $order      Order object.
     *
     * @return array Array of keys to display in autofill.
     */
    public function order_meta_keys_autofill($deprecated, $order)
    {
    }
    /**
     * Reimplementation of WP core's `meta_form` function. Renders meta form box.
     *
     * @param \WC_Order $order WC_Order object.
     *
     * @return void
     */
    public function render_meta_form(\WC_Order $order): void
    {
    }
    /**
     * Reimplementation of WP core's `wp_ajax_add_meta` method to support order custom meta updates with custom tables.
     */
    public function add_meta_ajax()
    {
    }
    /**
     * Reimplementation of WP core's `wp_ajax_delete_meta` method to support order custom meta updates with custom tables.
     *
     * @return void
     */
    public function delete_meta_ajax()
    {
    }
    /**
     * Handle the possible changes in order metadata coming from an order edit page in admin
     * (labeled "custom fields" in the UI).
     *
     * This method expects the $_POST array to contain a 'meta' key that is an associative
     * array of [meta item id => [ 'key' => meta item name, 'value' => meta item value ];
     * and also to contain (possibly empty) 'metakeyinput' and 'metavalue' keys.
     *
     * @param WC_Order $order The order to handle.
     */
    public function handle_metadata_changes($order)
    {
    }
}
