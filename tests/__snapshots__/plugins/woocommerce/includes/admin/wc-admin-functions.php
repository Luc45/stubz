<?php

/**
 * Get all WooCommerce screen ids.
 *
 * @return array
 */
function wc_get_screen_ids()
{
}
/**
 * Get page ID for a specific WC resource.
 *
 * @param string $for Name of the resource.
 *
 * @return string Page ID. Empty string if resource not found.
 */
function wc_get_page_screen_id($for)
{
}
/**
 * Create a page and store the ID in an option.
 *
 * @param mixed  $slug Slug for the new page.
 * @param string $option Option name to store the page's ID.
 * @param string $page_title (default: '') Title for the new page.
 * @param string $page_content (default: '') Content for the new page.
 * @param int    $post_parent (default: 0) Parent for the new page.
 * @param string $post_status (default: publish) The post status of the new page.
 * @return int page ID.
 */
function wc_create_page($slug, $option = '', $page_title = '', $page_content = '', $post_parent = 0, $post_status = 'publish')
{
}
/**
 * Output admin fields.
 *
 * Loops through the woocommerce options array and outputs each field.
 *
 * @param array $options Opens array to output.
 */
function woocommerce_admin_fields($options)
{
}
/**
 * Update all settings which are passed.
 *
 * @param array $options Option fields to save.
 * @param array $data Passed data.
 */
function woocommerce_update_options($options, $data = null)
{
}
/**
 * Get a setting from the settings API.
 *
 * @param mixed $option_name Option name to save.
 * @param mixed $default Default value to save.
 * @return string
 */
function woocommerce_settings_get_option($option_name, $default = '')
{
}
/**
 * Sees if line item stock has already reduced stock, and whether those values need adjusting e.g. after changing item qty.
 *
 * @since 3.6.0
 * @param WC_Order_Item $item Item object.
 * @param integer       $item_quantity Optional quantity to check against. Read from object if not passed.
 * @return boolean|array|WP_Error Array of changes or error object when stock is updated (@see wc_update_product_stock). False if nothing changes.
 */
function wc_maybe_adjust_line_item_product_stock($item, $item_quantity = -1)
{
}
/**
 * Save order items. Uses the CRUD.
 *
 * @since 2.2
 * @param int   $order_id Order ID.
 * @param array $items Order items to save.
 */
function wc_save_order_items($order_id, $items)
{
}
/**
 * Get HTML for some action buttons. Used in list tables.
 *
 * @since 3.3.0
 * @param array $actions Actions to output.
 * @return string
 */
function wc_render_action_buttons($actions)
{
}
/**
 * Shows a notice if variations are missing prices.
 *
 * @since 3.6.0
 * @param WC_Product $product_object Product object.
 */
function wc_render_invalid_variation_notice($product_object)
{
}
/**
 * Get current admin page URL.
 *
 * Returns an empty string if it cannot generate a URL.
 *
 * @internal
 * @since 4.4.0
 * @return string
 */
function wc_get_current_admin_url()
{
}
/**
 * Get default product type options.
 *
 * @internal
 * @since 7.9.0
 * @return array
 */
function wc_get_default_product_type_options()
{
}
