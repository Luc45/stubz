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
        // stub
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
        // stub
    }

    /**
     * Set WC AJAX constant and headers.
     */
    public static function define_ajax()
    {
        // stub
    }

    /**
     * Send headers for WC Ajax Requests.
     *
     * @since 2.5.0
     */
    private static function wc_ajax_headers()
    {
        // stub
    }

    /**
     * Check for WC Ajax request and fire action.
     */
    public static function do_wc_ajax()
    {
        // stub
    }

    /**
     * Hook in methods - uses WordPress ajax handlers (admin-ajax).
     */
    public static function add_ajax_events()
    {
        // stub
    }

    /**
     * Get a refreshed cart fragment, including the mini cart HTML.
     */
    public static function get_refreshed_fragments()
    {
        // stub
    }

    /**
     * AJAX apply coupon on checkout page.
     */
    public static function apply_coupon()
    {
        // stub
    }

    /**
     * AJAX remove coupon on cart and checkout page.
     */
    public static function remove_coupon()
    {
        // stub
    }

    /**
     * AJAX update shipping method on cart page.
     */
    public static function update_shipping_method()
    {
        // stub
    }

    /**
     * AJAX receive updated cart_totals div.
     */
    public static function get_cart_totals()
    {
        // stub
    }

    /**
     * Session has expired.
     */
    private static function update_order_review_expired()
    {
        // stub
    }

    /**
     * AJAX update order review on checkout.
     */
    public static function update_order_review()
    {
        // stub
    }

    /**
     * AJAX add to cart.
     */
    public static function add_to_cart()
    {
        // stub
    }

    /**
     * AJAX remove from cart.
     */
    public static function remove_from_cart()
    {
        // stub
    }

    /**
     * Process ajax checkout form.
     */
    public static function checkout()
    {
        // stub
    }

    /**
     * Get a matching variation based on posted attributes.
     */
    public static function get_variation()
    {
        // stub
    }

    /**
     * Locate user via AJAX.
     */
    public static function get_customer_location()
    {
        // stub
    }

    /**
     * Toggle Featured status of a product from admin.
     */
    public static function feature_product()
    {
        // stub
    }

    /**
     * Mark an order with a status.
     */
    public static function mark_order_status()
    {
        // stub
    }

    /**
     * Get order details.
     */
    public static function get_order_details()
    {
        // stub
    }

    /**
     * Add an attribute row.
     */
    public static function add_attribute()
    {
        // stub
    }

    /**
     * Add a new attribute via ajax function.
     */
    public static function add_new_attribute()
    {
        // stub
    }

    /**
     * Delete variations via ajax function.
     */
    public static function remove_variations()
    {
        // stub
    }

    /**
     * Save attributes via ajax.
     */
    public static function save_attributes()
    {
        // stub
    }

    /**
     * Save attributes and variations via ajax.
     */
    public static function add_attributes_and_variations()
    {
        // stub
    }

    /**
     * Create product with attributes from POST data.
     *
     * @param  array $data Attribute data.
     * @return mixed Product class.
     */
    private static function create_product_with_attributes($data)
    {
        // stub
    }

    /**
     * Create all product variations from existing attributes.
     *
     * @param mixed $product Product class.
     * @returns int Number of variations created.
     */
    private static function create_all_product_variations($product)
    {
        // stub
    }

    /**
     * Add variation via ajax function.
     */
    public static function add_variation()
    {
        // stub
    }

    /**
     * Link all variations via ajax function.
     */
    public static function link_all_variations()
    {
        // stub
    }

    /**
     * Delete download permissions via ajax function.
     */
    public static function revoke_access_to_download()
    {
        // stub
    }

    /**
     * Grant download permissions via ajax function.
     */
    public static function grant_access_to_download()
    {
        // stub
    }

    /**
     * Get customer details via ajax.
     */
    public static function get_customer_details()
    {
        // stub
    }

    /**
     * Add order item via ajax. Used on the edit order screen in WP Admin.
     *
     * @throws Exception If order is invalid.
     */
    public static function add_order_item()
    {
        // stub
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
        // stub
    }

    /**
     * Add order fee via ajax.
     *
     * @throws Exception If order is invalid.
     */
    public static function add_order_fee()
    {
        // stub
    }

    /**
     * Add order shipping cost via ajax.
     *
     * @throws Exception If order is invalid.
     */
    public static function add_order_shipping()
    {
        // stub
    }

    /**
     * Add order tax column via ajax.
     *
     * @throws Exception If order or tax rate is invalid.
     */
    public static function add_order_tax()
    {
        // stub
    }

    /**
     * Add order discount via ajax.
     *
     * @throws Exception If order or coupon is invalid.
     */
    public static function add_coupon_discount()
    {
        // stub
    }

    /**
     * Remove coupon from an order via ajax.
     *
     * @throws Exception If order or coupon is invalid.
     */
    public static function remove_order_coupon()
    {
        // stub
    }

    /**
     * Remove an order item.
     *
     * @throws Exception If order is invalid.
     */
    public static function remove_order_item()
    {
        // stub
    }

    /**
     * Remove an order tax.
     *
     * @throws Exception If there is an error whilst deleting the rate.
     */
    public static function remove_order_tax()
    {
        // stub
    }

    /**
     * Calc line tax.
     */
    public static function calc_line_taxes()
    {
        // stub
    }

    /**
     * Save order items via ajax.
     */
    public static function save_order_items()
    {
        // stub
    }

    /**
     * Load order items via ajax.
     */
    public static function load_order_items()
    {
        // stub
    }

    /**
     * Add order note via ajax.
     */
    public static function add_order_note()
    {
        // stub
    }

    /**
     * Delete order note via ajax.
     */
    public static function delete_order_note()
    {
        // stub
    }

    /**
     * Search for products and echo json.
     *
     * @param string $term (default: '') Term to search for.
     * @param bool   $include_variations in search or not.
     */
    public static function json_search_products($term = '', $include_variations = false)
    {
        // stub
    }

    /**
     * Search for product variations and return json.
     *
     * @see WC_AJAX::json_search_products()
     */
    public static function json_search_products_and_variations()
    {
        // stub
    }

    /**
     * Search for downloadable product variations and return json.
     *
     * @see WC_AJAX::json_search_products()
     */
    public static function json_search_downloadable_products_and_variations()
    {
        // stub
    }

    /**
     * Search for customers and return json.
     */
    public static function json_search_customers()
    {
        // stub
    }

    /**
     * Search for categories and return json.
     */
    public static function json_search_categories()
    {
        // stub
    }

    /**
     * Search for categories and return json.
     */
    public static function json_search_categories_tree()
    {
        // stub
    }

    /**
     * Search for taxonomy terms and return json.
     */
    public static function json_search_taxonomy_terms()
    {
        // stub
    }

    /**
     * Search for product attributes and return json.
     */
    public static function json_search_product_attributes()
    {
        // stub
    }

    /**
     * Ajax request handling for page searching.
     */
    public static function json_search_pages()
    {
        // stub
    }

    /**
     * Ajax request handling for categories ordering.
     */
    public static function term_ordering()
    {
        // stub
    }

    /**
     * Ajax request handling for product ordering.
     *
     * Based on Simple Page Ordering by 10up (https://wordpress.org/plugins/simple-page-ordering/).
     */
    public static function product_ordering()
    {
        // stub
    }

    /**
     * Handle a refund via the edit order screen.
     *
     * @throws Exception To return errors.
     */
    public static function refund_line_items()
    {
        // stub
    }

    /**
     * Delete a refund.
     */
    public static function delete_refund()
    {
        // stub
    }

    /**
     * Triggered when clicking the rating footer.
     */
    public static function rated()
    {
        // stub
    }

    /**
     * Create/Update API key.
     *
     * @throws Exception On invalid or empty description, user, or permissions.
     */
    public static function update_api_key()
    {
        // stub
    }

    /**
     * Load variations via AJAX.
     */
    public static function load_variations()
    {
        // stub
    }

    /**
     * Save variations via AJAX.
     */
    public static function save_variations()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Bulk toggle convenience function.
     *
     * @param array  $variations List of variations.
     * @param string $field Field to toggle.
     */
    private static function variation_bulk_toggle($variations, $field)
    {
        // stub
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
        // stub
    }

    /**
     * Handle submissions from assets/js/settings-views-html-settings-tax.js Backbone model.
     */
    public static function tax_rates_save_changes()
    {
        // stub
    }

    /**
     * Handle submissions from assets/js/wc-shipping-zones.js Backbone model.
     */
    public static function shipping_zones_save_changes()
    {
        // stub
    }

    /**
     * Handle submissions from assets/js/wc-shipping-zone-methods.js Backbone model.
     */
    public static function shipping_zone_add_method()
    {
        // stub
    }

    /**
     * Handle submissions from assets/js/wc-shipping-zone-methods.js Backbone model.
     */
    public static function shipping_zone_remove_method()
    {
        // stub
    }

    /**
     * Handle submissions from assets/js/wc-shipping-zone-methods.js Backbone model.
     */
    public static function shipping_zone_methods_save_changes()
    {
        // stub
    }

    /**
     * Save method settings
     */
    public static function shipping_zone_methods_save_settings()
    {
        // stub
    }

    /**
     * Handle submissions from assets/js/wc-shipping-classes.js Backbone model.
     */
    public static function shipping_classes_save_changes()
    {
        // stub
    }

    /**
     * Toggle payment gateway on or off via AJAX.
     *
     * @since 3.4.0
     */
    public static function toggle_gateway_enabled()
    {
        // stub
    }

    /**
     * Reimplementation of WP core's `wp_ajax_add_meta` method to support order custom meta updates with custom tables.
     */
    private static function order_add_meta()
    {
        // stub
    }

    /**
     * Reimplementation of WP core's `wp_ajax_delete_meta` method to support order custom meta updates with custom tables.
     *
     * @return void
     */
    private static function order_delete_meta(): void
    {
        // stub
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
        // stub
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
        // stub
    }

}
