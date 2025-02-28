<?php

/**
 * WC_Ajax class.
 */
class WC_AJAX
{
    /**
     * Hook in ajax handlers.
     */
    public static function init()
{
}
    /**
     * Get WC Ajax Endpoint.
     *
     * @param string $request Optional.
     *
     * @return string
     */
    public static function get_endpoint($request = '')
{
}
    /**
     * Set WC AJAX constant and headers.
     */
    public static function define_ajax()
{
}
    /**
     * Send headers for WC Ajax Requests.
     *
     * @since 2.5.0
     */
    private static function wc_ajax_headers()
{
}
    /**
     * Check for WC Ajax request and fire action.
     */
    public static function do_wc_ajax()
{
}
    /**
     * Hook in methods - uses WordPress ajax handlers (admin-ajax).
     */
    public static function add_ajax_events()
{
}
    /**
     * Get a refreshed cart fragment, including the mini cart HTML.
     */
    public static function get_refreshed_fragments()
{
}
    /**
     * AJAX apply coupon on checkout page.
     */
    public static function apply_coupon()
{
}
    /**
     * AJAX remove coupon on cart and checkout page.
     */
    public static function remove_coupon()
{
}
    /**
     * AJAX update shipping method on cart page.
     */
    public static function update_shipping_method()
{
}
    /**
     * AJAX receive updated cart_totals div.
     */
    public static function get_cart_totals()
{
}
    /**
     * Session has expired.
     */
    private static function update_order_review_expired()
{
}
    /**
     * AJAX update order review on checkout.
     */
    public static function update_order_review()
{
}
    /**
     * AJAX add to cart.
     */
    public static function add_to_cart()
{
}
    /**
     * AJAX remove from cart.
     */
    public static function remove_from_cart()
{
}
    /**
     * Process ajax checkout form.
     */
    public static function checkout()
{
}
    /**
     * Get a matching variation based on posted attributes.
     */
    public static function get_variation()
{
}
    /**
     * Locate user via AJAX.
     */
    public static function get_customer_location()
{
}
    /**
     * Toggle Featured status of a product from admin.
     */
    public static function feature_product()
{
}
    /**
     * Mark an order with a status.
     */
    public static function mark_order_status()
{
}
    /**
     * Get order details.
     */
    public static function get_order_details()
{
}
    /**
     * Add an attribute row.
     */
    public static function add_attribute()
{
}
    /**
     * Add a new attribute via ajax function.
     */
    public static function add_new_attribute()
{
}
    /**
     * Delete variations via ajax function.
     */
    public static function remove_variations()
{
}
    /**
     * Save attributes via ajax.
     */
    public static function save_attributes()
{
}
    /**
     * Save attributes and variations via ajax.
     */
    public static function add_attributes_and_variations()
{
}
    /**
     * Create product with attributes from POST data.
     *
     * @param  array $data Attribute data.
     * @return mixed Product class.
     */
    private static function create_product_with_attributes($data)
{
}
    /**
     * Create all product variations from existing attributes.
     *
     * @param mixed $product Product class.
     * @returns int Number of variations created.
     */
    private static function create_all_product_variations($product)
{
}
    /**
     * Add variation via ajax function.
     */
    public static function add_variation()
{
}
    /**
     * Link all variations via ajax function.
     */
    public static function link_all_variations()
{
}
    /**
     * Delete download permissions via ajax function.
     */
    public static function revoke_access_to_download()
{
}
    /**
     * Grant download permissions via ajax function.
     */
    public static function grant_access_to_download()
{
}
    /**
     * Get customer details via ajax.
     */
    public static function get_customer_details()
{
}
    /**
     * Add order item via ajax. Used on the edit order screen in WP Admin.
     *
     * @throws Exception If order is invalid.
     */
    public static function add_order_item()
{
}
    /**
     * Add order item via AJAX. This is refactored for better unit testing.
     *
     * @param int          $order_id     ID of order to add items to.
     * @param string|array $items        Existing items in order. Empty string if no items to add.
     * @param array        $items_to_add Array of items to add.
     *
     * @return array     Fragments to render and notes HTML.
     * @throws Exception When unable to add item.
     */
    private static function maybe_add_order_item($order_id, $items, $items_to_add)
{
}
    /**
     * Add order fee via ajax.
     *
     * @throws Exception If order is invalid.
     */
    public static function add_order_fee()
{
}
    /**
     * Add order shipping cost via ajax.
     *
     * @throws Exception If order is invalid.
     */
    public static function add_order_shipping()
{
}
    /**
     * Add order tax column via ajax.
     *
     * @throws Exception If order or tax rate is invalid.
     */
    public static function add_order_tax()
{
}
    /**
     * Add order discount via ajax.
     *
     * @throws Exception If order or coupon is invalid.
     */
    public static function add_coupon_discount()
{
}
    /**
     * Remove coupon from an order via ajax.
     *
     * @throws Exception If order or coupon is invalid.
     */
    public static function remove_order_coupon()
{
}
    /**
     * Remove an order item.
     *
     * @throws Exception If order is invalid.
     */
    public static function remove_order_item()
{
}
    /**
     * Remove an order tax.
     *
     * @throws Exception If there is an error whilst deleting the rate.
     */
    public static function remove_order_tax()
{
}
    /**
     * Calc line tax.
     */
    public static function calc_line_taxes()
{
}
    /**
     * Save order items via ajax.
     */
    public static function save_order_items()
{
}
    /**
     * Load order items via ajax.
     */
    public static function load_order_items()
{
}
    /**
     * Add order note via ajax.
     */
    public static function add_order_note()
{
}
    /**
     * Delete order note via ajax.
     */
    public static function delete_order_note()
{
}
    /**
     * Search for products and echo json.
     *
     * @param string $term (default: '') Term to search for.
     * @param bool   $include_variations in search or not.
     */
    public static function json_search_products($term = '', $include_variations = false)
{
}
    /**
     * Search for product variations and return json.
     *
     * @see WC_AJAX::json_search_products()
     */
    public static function json_search_products_and_variations()
{
}
    /**
     * Search for downloadable product variations and return json.
     *
     * @see WC_AJAX::json_search_products()
     */
    public static function json_search_downloadable_products_and_variations()
{
}
    /**
     * Search for customers and return json.
     */
    public static function json_search_customers()
{
}
    /**
     * Search for categories and return json.
     */
    public static function json_search_categories()
{
}
    /**
     * Search for categories and return json.
     */
    public static function json_search_categories_tree()
{
}
    /**
     * Search for taxonomy terms and return json.
     */
    public static function json_search_taxonomy_terms()
{
}
    /**
     * Search for product attributes and return json.
     */
    public static function json_search_product_attributes()
{
}
    /**
     * Ajax request handling for page searching.
     */
    public static function json_search_pages()
{
}
    /**
     * Ajax request handling for categories ordering.
     */
    public static function term_ordering()
{
}
    /**
     * Ajax request handling for product ordering.
     *
     * Based on Simple Page Ordering by 10up (https://wordpress.org/plugins/simple-page-ordering/).
     */
    public static function product_ordering()
{
}
    /**
     * Handle a refund via the edit order screen.
     *
     * @throws Exception To return errors.
     */
    public static function refund_line_items()
{
}
    /**
     * Delete a refund.
     */
    public static function delete_refund()
{
}
    /**
     * Triggered when clicking the rating footer.
     */
    public static function rated()
{
}
    /**
     * Create/Update API key.
     *
     * @throws Exception On invalid or empty description, user, or permissions.
     */
    public static function update_api_key()
{
}
    /**
     * Load variations via AJAX.
     */
    public static function load_variations()
{
}
    /**
     * Save variations via AJAX.
     */
    public static function save_variations()
{
}
    /**
     * Bulk action - Toggle Enabled.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_toggle_enabled($variations, $data)
{
}
    /**
     * Bulk action - Toggle Downloadable Checkbox.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_toggle_downloadable($variations, $data)
{
}
    /**
     * Bulk action - Toggle Virtual Checkbox.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_toggle_virtual($variations, $data)
{
}
    /**
     * Bulk action - Toggle Manage Stock Checkbox.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_toggle_manage_stock($variations, $data)
{
}
    /**
     * Bulk action - Set Regular Prices.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_regular_price($variations, $data)
{
}
    /**
     * Bulk action - Set Sale Prices.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_sale_price($variations, $data)
{
}
    /**
     * Bulk action - Set Stock Status as In Stock.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_stock_status_instock($variations, $data)
{
}
    /**
     * Bulk action - Set Stock Status as Out of Stock.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_stock_status_outofstock($variations, $data)
{
}
    /**
     * Bulk action - Set Stock Status as On Backorder.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_stock_status_onbackorder($variations, $data)
{
}
    /**
     * Bulk action - Set Stock.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_stock($variations, $data)
{
}
    /**
     * Bulk action - Set Low Stock Amount.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_low_stock_amount($variations, $data)
{
}
    /**
     * Bulk action - Set Weight.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_weight($variations, $data)
{
}
    /**
     * Bulk action - Set Length.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_length($variations, $data)
{
}
    /**
     * Bulk action - Set Width.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_width($variations, $data)
{
}
    /**
     * Bulk action - Set Height.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_height($variations, $data)
{
}
    /**
     * Bulk action - Set Download Limit.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_download_limit($variations, $data)
{
}
    /**
     * Bulk action - Set Download Expiry.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_download_expiry($variations, $data)
{
}
    /**
     * Bulk action - Delete all.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_delete_all($variations, $data)
{
}
    /**
     * Bulk action - Sale Schedule.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_sale_schedule($variations, $data)
{
}
    /**
     * Bulk action - Increase Regular Prices.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_regular_price_increase($variations, $data)
{
}
    /**
     * Bulk action - Decrease Regular Prices.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_regular_price_decrease($variations, $data)
{
}
    /**
     * Bulk action - Increase Sale Prices.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_sale_price_increase($variations, $data)
{
}
    /**
     * Bulk action - Decrease Sale Prices.
     *
     * @param array $variations List of variations.
     * @param array $data Data to set.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_action_variable_sale_price_decrease($variations, $data)
{
}
    /**
     * Bulk action - Set Price.
     *
     * @param array  $variations List of variations.
     * @param string $field price being adjusted _regular_price or _sale_price.
     * @param string $operator + or -.
     * @param string $value Price or Percent.
     *
     * @used-by bulk_edit_variations
     */
    private static function variation_bulk_adjust_price($variations, $field, $operator, $value)
{
}
    /**
     * Bulk set convenience function.
     *
     * @param array  $variations List of variations.
     * @param string $field Field to set.
     * @param string $value to set.
     */
    private static function variation_bulk_set($variations, $field, $value)
{
}
    /**
     * Bulk toggle convenience function.
     *
     * @param array  $variations List of variations.
     * @param string $field Field to toggle.
     */
    private static function variation_bulk_toggle($variations, $field)
{
}
    /**
     * Bulk edit variations via AJAX.
     *
     * @uses WC_AJAX::variation_bulk_set()
     * @uses WC_AJAX::variation_bulk_adjust_price()
     * @uses WC_AJAX::variation_bulk_action_variable_sale_price_decrease()
     * @uses WC_AJAX::variation_bulk_action_variable_sale_price_increase()
     * @uses WC_AJAX::variation_bulk_action_variable_regular_price_decrease()
     * @uses WC_AJAX::variation_bulk_action_variable_regular_price_increase()
     * @uses WC_AJAX::variation_bulk_action_variable_sale_schedule()
     * @uses WC_AJAX::variation_bulk_action_delete_all()
     * @uses WC_AJAX::variation_bulk_action_variable_download_expiry()
     * @uses WC_AJAX::variation_bulk_action_variable_download_limit()
     * @uses WC_AJAX::variation_bulk_action_variable_height()
     * @uses WC_AJAX::variation_bulk_action_variable_width()
     * @uses WC_AJAX::variation_bulk_action_variable_length()
     * @uses WC_AJAX::variation_bulk_action_variable_weight()
     * @uses WC_AJAX::variation_bulk_action_variable_stock()
     * @uses WC_AJAX::variation_bulk_action_variable_sale_price()
     * @uses WC_AJAX::variation_bulk_action_variable_regular_price()
     * @uses WC_AJAX::variation_bulk_action_toggle_manage_stock()
     * @uses WC_AJAX::variation_bulk_action_toggle_virtual()
     * @uses WC_AJAX::variation_bulk_action_toggle_downloadable()
     * @uses WC_AJAX::variation_bulk_action_toggle_enabled
     * @uses WC_AJAX::variation_bulk_action_variable_low_stock_amount()
     */
    public static function bulk_edit_variations()
{
}
    /**
     * Handle submissions from assets/js/settings-views-html-settings-tax.js Backbone model.
     */
    public static function tax_rates_save_changes()
{
}
    /**
     * Handle submissions from assets/js/wc-shipping-zones.js Backbone model.
     */
    public static function shipping_zones_save_changes()
{
}
    /**
     * Handle submissions from assets/js/wc-shipping-zone-methods.js Backbone model.
     */
    public static function shipping_zone_add_method()
{
}
    /**
     * Handle submissions from assets/js/wc-shipping-zone-methods.js Backbone model.
     */
    public static function shipping_zone_remove_method()
{
}
    /**
     * Handle submissions from assets/js/wc-shipping-zone-methods.js Backbone model.
     */
    public static function shipping_zone_methods_save_changes()
{
}
    /**
     * Save method settings
     */
    public static function shipping_zone_methods_save_settings()
{
}
    /**
     * Handle submissions from assets/js/wc-shipping-classes.js Backbone model.
     */
    public static function shipping_classes_save_changes()
{
}
    /**
     * Toggle payment gateway on or off via AJAX.
     *
     * @since 3.4.0
     */
    public static function toggle_gateway_enabled()
{
}
    /**
     * Reimplementation of WP core's `wp_ajax_add_meta` method to support order custom meta updates with custom tables.
     */
    private static function order_add_meta()
{
}
    /**
     * Reimplementation of WP core's `wp_ajax_delete_meta` method to support order custom meta updates with custom tables.
     *
     * @return void
     */
    private static function order_delete_meta(): void
{
}
    /**
     * Hooked to 'heartbeat_received' on the edit order page to refresh the lock on an order being edited by the current user.
     *
     * @param array $response The heartbeat response to be sent.
     * @param array $data     Data sent through the heartbeat.
     * @return array Response to be sent.
     */
    private static function order_refresh_lock($response, $data)
{
}
    /**
     * Hooked to 'heartbeat_received' on the orders screen to refresh the locked status of orders in the list table.
     *
     * @since 7.8.0
     *
     * @param array $response The heartbeat response to be sent.
     * @param array $data     Data sent through the heartbeat.
     * @return array Response to be sent.
     */
    private static function check_locked_orders($response, $data)
{
}
}
