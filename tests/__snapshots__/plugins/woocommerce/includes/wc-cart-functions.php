<?php
/**
 * Prevent password protected products being added to the cart.
 *
 * @param  bool $passed     Validation.
 * @param  int  $product_id Product ID.
 * @return bool
 */
function wc_protected_product_add_to_cart($passed, $product_id)
{
}
/**
 * Clears the cart session when called.
 */
function wc_empty_cart()
{
}
/**
 * Load the persistent cart.
 *
 * @param string  $user_login User login.
 * @param WP_User $user       User data.
 * @deprecated 2.3
 */
function wc_load_persistent_cart($user_login, $user)
{
}
/**
 * Retrieves unvalidated referer from '_wp_http_referer' or HTTP referer.
 *
 * Do not use for redirects, use {@see wp_get_referer()} instead.
 *
 * @since 2.6.1
 * @return string|false Referer URL on success, false on failure.
 */
function wc_get_raw_referer()
{
}
/**
 * Add to cart messages.
 *
 * @param int|array $products Product ID list or single product ID.
 * @param bool      $show_qty Should quantities be shown? Added in 2.6.0.
 * @param bool      $return   Return message rather than add it.
 *
 * @return mixed
 */
function wc_add_to_cart_message($products, $show_qty = false, $return = false)
{
}
/**
 * Comma separate a list of item names, and replace final comma with 'and'.
 *
 * @param  array $items Cart items.
 * @return string
 */
function wc_format_list_of_items($items)
{
}
/**
 * Clear cart after payment.
 */
function wc_clear_cart_after_payment()
{
}
/**
 * Get the subtotal.
 */
function wc_cart_totals_subtotal_html()
{
}
/**
 * Get shipping methods.
 */
function wc_cart_totals_shipping_html()
{
}
/**
 * Get taxes total.
 */
function wc_cart_totals_taxes_total_html()
{
}
/**
 * Get a coupon label.
 *
 * @param string|WC_Coupon $coupon Coupon data or code.
 * @param bool             $echo   Echo or return.
 *
 * @return string
 */
function wc_cart_totals_coupon_label($coupon, $echo = true)
{
}
/**
 * Get coupon display HTML.
 *
 * @param string|WC_Coupon $coupon Coupon data or code.
 */
function wc_cart_totals_coupon_html($coupon)
{
}
/**
 * Get order total html including inc tax if needed.
 */
function wc_cart_totals_order_total_html()
{
}
/**
 * Get the fee value.
 *
 * @param object $fee Fee data.
 */
function wc_cart_totals_fee_html($fee)
{
}
/**
 * Get a shipping methods full label including price.
 *
 * @param  WC_Shipping_Rate $method Shipping method rate data.
 * @return string
 */
function wc_cart_totals_shipping_method_label($method)
{
}
/**
 * Round discount.
 *
 * @param  double $value Amount to round.
 * @param  int    $precision DP to round.
 * @return float
 */
function wc_cart_round_discount($value, $precision)
{
}
/**
 * Gets chosen shipping method IDs from chosen_shipping_methods session, without instance IDs.
 *
 * @since  2.6.2
 * @return string[]
 */
function wc_get_chosen_shipping_method_ids()
{
}
/**
 * Get chosen method for package from session.
 *
 * @since  3.2.0
 * @param  int   $key Key of package.
 * @param  array $package Package data array.
 * @return string|bool Either the chosen method ID or false if nothing is chosen yet.
 */
function wc_get_chosen_shipping_method_for_package($key, $package)
{
}
/**
 * Choose the default method for a package.
 *
 * @since  3.2.0
 * @param  int    $key Key of package.
 * @param  array  $package Package data array.
 * @param  string $chosen_method Chosen shipping method. e.g. flat_rate:1.
 * @return string
 */
function wc_get_default_shipping_method_for_package($key, $package, $chosen_method)
{
}
/**
 * See if the methods have changed since the last request.
 *
 * @since  3.2.0
 * @param  int   $key Key of package.
 * @param  array $package Package data array.
 * @return bool
 */
function wc_shipping_methods_have_changed($key, $package)
{
}
/**
 * Gets a hash of important product data that when changed should cause cart items to be invalidated.
 *
 * The woocommerce_cart_item_data_to_validate filter can be used to add custom properties.
 *
 * @param WC_Product $product Product object.
 * @return string
 */
function wc_get_cart_item_data_hash($product)
{
}
