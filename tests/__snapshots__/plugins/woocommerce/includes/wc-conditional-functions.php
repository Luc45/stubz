<?php

/**
 * Is_woocommerce - Returns true if on a page which uses WooCommerce templates (cart and checkout are standard pages with shortcodes and thus are not included).
 *
 * @return bool
 */
function is_woocommerce()
{
    // stub
}

/**
 * Is_shop - Returns true when viewing the product type archive (shop).
 *
 * @return bool
 */
function is_shop()
{
    // stub
}

/**
 * Is_product_taxonomy - Returns true when viewing a product taxonomy archive.
 *
 * @return bool
 */
function is_product_taxonomy()
{
    // stub
}

/**
 * Is_product_category - Returns true when viewing a product category.
 *
 * @param  string $term (default: '') The term slug your checking for. Leave blank to return true on any.
 * @return bool
 */
function is_product_category($term = '')
{
    // stub
}

/**
 * Is_product_tag - Returns true when viewing a product tag.
 *
 * @param  string $term (default: '') The term slug your checking for. Leave blank to return true on any.
 * @return bool
 */
function is_product_tag($term = '')
{
    // stub
}

/**
 * Is_product - Returns true when viewing a single product.
 *
 * @return bool
 */
function is_product()
{
    // stub
}

/**
 * Is_cart - Returns true when viewing the cart page.
 *
 * @return bool
 */
function is_cart()
{
    // stub
}

/**
 * Is_checkout - Returns true when viewing the checkout page, or when processing AJAX requests for updating or processing the checkout.
 *
 * @return bool
 */
function is_checkout()
{
    // stub
}

/**
 * Is_checkout_pay - Returns true when viewing the checkout's pay page.
 *
 * @return bool
 */
function is_checkout_pay_page()
{
    // stub
}

/**
 * Is_wc_endpoint_url - Check if an endpoint is showing.
 *
 * @param string|false $endpoint Whether endpoint.
 * @return bool
 */
function is_wc_endpoint_url($endpoint = false)
{
    // stub
}

/**
 * Is_account_page - Returns true when viewing an account page.
 *
 * @return bool
 */
function is_account_page()
{
    // stub
}

/**
 * Is_view_order_page - Returns true when on the view order page.
 *
 * @return bool
 */
function is_view_order_page()
{
    // stub
}

/**
 * Check for edit account page.
 * Returns true when viewing the edit account page.
 *
 * @since 2.5.1
 * @return bool
 */
function is_edit_account_page()
{
    // stub
}

/**
 * Is_order_received_page - Returns true when viewing the order received page.
 *
 * @return bool
 */
function is_order_received_page()
{
    // stub
}

/**
 * Is_add_payment_method_page - Returns true when viewing the add payment method page.
 *
 * @return bool
 */
function is_add_payment_method_page()
{
    // stub
}

/**
 * Is_lost_password_page - Returns true when viewing the lost password page.
 *
 * @return bool
 */
function is_lost_password_page()
{
    // stub
}

/**
 * Is_ajax - Returns true when the page is loaded via ajax.
 *
 * @see wp_doing_ajax() for an equivalent function provided by WordPress since 4.7.0
 * @return bool
 */
function is_ajax()
{
    // stub
}

/**
 * Is_store_notice_showing - Returns true when store notice is active.
 *
 * @return bool
 */
function is_store_notice_showing()
{
    // stub
}

/**
 * Is_filtered - Returns true when filtering products using layered nav or price sliders.
 *
 * @return bool
 */
function is_filtered()
{
    // stub
}

/**
 * Returns true when the passed taxonomy name is a product attribute.
 *
 * @uses   $wc_product_attributes global which stores taxonomy names upon registration
 * @param  string $name of the attribute.
 * @return bool
 */
function taxonomy_is_product_attribute($name)
{
    // stub
}

/**
 * Returns true when the passed meta name is a product attribute.
 *
 * @param  string $name of the attribute.
 * @param  string $value of the attribute.
 * @param  int    $product_id to check for attribute.
 * @return bool
 */
function meta_is_product_attribute($name, $value, $product_id)
{
    // stub
}

/**
 * Are store-wide taxes enabled?
 *
 * @return bool
 */
function wc_tax_enabled()
{
    // stub
}

/**
 * Is shipping enabled?
 *
 * @return bool
 */
function wc_shipping_enabled()
{
    // stub
}

/**
 * Are prices inclusive of tax?
 *
 * @return bool
 */
function wc_prices_include_tax()
{
    // stub
}

/**
 * Simple check for validating a URL, it must start with http:// or https://.
 * and pass FILTER_VALIDATE_URL validation.
 *
 * @param  string $url to check.
 * @return bool
 */
function wc_is_valid_url($url)
{
    // stub
}

/**
 * Check if the home URL is https. If it is, we don't need to do things such as 'force ssl'.
 *
 * @since  2.4.13
 * @return bool
 */
function wc_site_is_https()
{
    // stub
}

/**
 * Check if the checkout is configured for https. Look at options, WP HTTPS plugin, or the permalink itself.
 *
 * @since  2.5.0
 * @return bool
 */
function wc_checkout_is_https()
{
    // stub
}

/**
 * Checks whether the content passed contains a specific short code.
 *
 * @param  string $tag Shortcode tag to check.
 * @return bool
 */
function wc_post_content_has_shortcode($tag = '')
{
    // stub
}

/**
 * Check if reviews are enabled.
 *
 * @since 3.6.0
 * @return bool
 */
function wc_reviews_enabled()
{
    // stub
}

/**
 * Check if reviews ratings are enabled.
 *
 * @since 3.6.0
 * @return bool
 */
function wc_review_ratings_enabled()
{
    // stub
}

/**
 * Check if review ratings are required.
 *
 * @since 3.6.0
 * @return bool
 */
function wc_review_ratings_required()
{
    // stub
}

/**
 * Check if a CSV file is valid.
 *
 * @since 3.6.5
 * @param string $file       File name.
 * @param bool   $check_path If should check for the path.
 * @return bool
 */
function wc_is_file_valid_csv($file, $check_path = true)
{
    // stub
}

/**
 * Check if the current theme is a block theme.
 *
 * @since 6.0.0
 * @return bool
 */
function wc_current_theme_is_fse_theme()
{
    // stub
}

/**
 * Check if the current theme has WooCommerce support or is a FSE theme.
 *
 * @since 6.0.0
 * @return bool
 */
function wc_current_theme_supports_woocommerce_or_fse()
{
    // stub
}

/**
 * Given an element name, returns a class name.
 *
 * If the WP-related function is not defined or current theme is not a FSE theme, return empty string.
 *
 * @param string $element The name of the element.
 *
 * @since 7.0.1
 * @return string
 */
function wc_wp_theme_get_element_class_name($element)
{
    // stub
}

/**
 * Given an element name, returns true or false depending on whether the
 * current theme has styles for that element defined in theme.json.
 *
 * If the theme is not a block theme or the WP-related function is not defined,
 * return false.
 *
 * @param string $element The name of the element.
 *
 * @since 7.4.0
 * @return bool
 */
function wc_block_theme_has_styles_for_element($element)
{
    // stub
}

