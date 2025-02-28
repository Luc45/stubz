<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes;

/**
 * Class CustomMetaBox.
 */
class CustomMetaBox
{
    /**
     * Update nonce shared among different meta rows.
     *
     * @var string
     */
    private $update_nonce = null;

    /**
     * Helper method to get formatted meta data array with proper keys. This can be directly fed to `list_meta()` method.
     *
     * @param \WC_Order $order Order object.
     *
     * @return array Meta data.
     */
    private function get_formatted_order_meta_data(WC_Order $order)
{
}
    /**
     * Renders the meta box to manage custom meta.
     *
     * @param \WP_Post|\WC_Order $order_or_post Post or order object that we are rendering for.
     */
    public function output($order_or_post)
{
}
    /**
     * Helper method to render layout and actual HTML
     *
     * @param array     $metadata_to_list List of metadata to render.
     * @param \WC_Order $order Order object.
     */
    private function render_custom_meta_form(array $metadata_to_list, WC_Order $order)
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
    public function render_meta_form(WC_Order $order): void
{
}
    /**
     * Helper method to verify order edit permissions.
     *
     * @param int $order_id Order ID.
     *
     * @return ?WC_Order WC_Order object if the user can edit the order, die otherwise.
     */
    private function verify_order_edit_permission_for_ajax(int $order_id): WC_Order|null
{
}
    /**
     * Reimplementation of WP core's `wp_ajax_add_meta` method to support order custom meta updates with custom tables.
     */
    public function add_meta_ajax()
{
}
    /**
     * Part of WP Core's `wp_ajax_add_meta`. This is re-implemented to support updating meta for custom tables.
     *
     * @param WC_Order $order Order object.
     * @param string   $meta_key Meta key.
     * @param string   $meta_value Meta value.
     *
     * @return void
     */
    private function handle_add_meta(WC_Order $order, string $meta_key, string $meta_value)
{
}
    /**
     * Handles updating metadata.
     *
     * @param WC_Order $order Order object.
     * @param array    $meta Meta object to update.
     *
     * @return void
     */
    private function handle_update_meta(WC_Order $order, array $meta)
{
}
    /**
     * Outputs a single row of public meta data in the Custom Fields meta box.
     *
     * @since 2.5.0
     *
     * @param array $entry Meta entry.
     * @param int   $count Sequence number of meta entries.
     * @return string
     */
    private function list_meta_row(array $entry, int &$count): string
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