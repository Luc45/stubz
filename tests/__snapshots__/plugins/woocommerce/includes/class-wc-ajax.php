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
}
