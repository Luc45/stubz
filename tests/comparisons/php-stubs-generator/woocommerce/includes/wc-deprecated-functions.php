<?php

/**
 * Runs a deprecated action with notice only if used.
 *
 * @since 3.0.0
 * @param string $tag         The name of the action hook.
 * @param array  $args        Array of additional function arguments to be passed to do_action().
 * @param string $version     The version of WooCommerce that deprecated the hook.
 * @param string $replacement The hook that should have been used.
 * @param string $message     A message regarding the change.
 */
function wc_do_deprecated_action($tag, $args, $version, $replacement = \null, $message = \null)
{
}
/**
 * Wrapper for deprecated functions so we can apply some extra logic.
 *
 * @since 3.0.0
 * @param string $function Function used.
 * @param string $version Version the message was added in.
 * @param string $replacement Replacement for the called function.
 */
function wc_deprecated_function($function, $version, $replacement = \null)
{
}
/**
 * Wrapper for deprecated hook so we can apply some extra logic.
 *
 * @since 3.3.0
 * @param string $hook        The hook that was used.
 * @param string $version     The version of WordPress that deprecated the hook.
 * @param string $replacement The hook that should have been used.
 * @param string $message     A message regarding the change.
 */
function wc_deprecated_hook($hook, $version, $replacement = \null, $message = \null)
{
}
/**
 * When catching an exception, this allows us to log it if unexpected.
 *
 * @since 3.3.0
 * @param Exception $exception_object The exception object.
 * @param string    $function The function which threw exception.
 * @param array     $args The args passed to the function.
 */
function wc_caught_exception($exception_object, $function = '', $args = array())
{
}
/**
 * Wrapper for _doing_it_wrong().
 *
 * @since  3.0.0
 * @param string $function Function used.
 * @param string $message Message to log.
 * @param string $version Version the message was added in.
 */
function wc_doing_it_wrong($function, $message, $version)
{
}
/**
 * Wrapper for deprecated arguments so we can apply some extra logic.
 *
 * @since  3.0.0
 * @param  string $argument
 * @param  string $version
 * @param  string $replacement
 */
function wc_deprecated_argument($argument, $version, $message = \null)
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_show_messages()
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_weekend_area_js()
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_tooltip_js()
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_datepicker_js()
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_admin_scripts()
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_create_page($slug, $option = '', $page_title = '', $page_content = '', $post_parent = 0)
{
}
/**
 * @deprecated 2.1
 */
function woocommerce_readfile_chunked($file, $retbytes = \true)
{
}
/**
 * Formal total costs - format to the number of decimal places for the base currency.
 *
 * @access public
 * @param mixed $number
 * @deprecated 2.1
 * @return string
 */
function woocommerce_format_total($number)
{
}
/**
 * Get product name with extra details such as SKU price and attributes. Used within admin.
 *
 * @access public
 * @param WC_Product $product
 * @deprecated 2.1
 * @return string
 */
function woocommerce_get_formatted_product_name($product)
{
}
/**
 * Handle IPN requests for the legacy paypal gateway by calling gateways manually if needed.
 *
 * @access public
 */
function woocommerce_legacy_paypal_ipn()
{
}
/**
 * @deprecated 3.0
 */
function get_product($the_product = \false, $args = array())
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_protected_product_add_to_cart($passed, $product_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_empty_cart()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_load_persistent_cart($user_login, $user = 0)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_add_to_cart_message($product_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_clear_cart_after_payment()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cart_totals_subtotal_html()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cart_totals_shipping_html()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cart_totals_coupon_html($coupon)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cart_totals_order_total_html()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cart_totals_fee_html($fee)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cart_totals_shipping_method_label($method)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_template_part($slug, $name = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_template($template_name, $args = array(), $template_path = '', $default_path = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_locate_template($template_name, $template_path = '', $default_path = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_mail($to, $subject, $message, $headers = "Content-Type: text/html\r\n", $attachments = "")
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_disable_admin_bar($show_admin_bar)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_create_new_customer($email, $username = '', $password = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_set_customer_auth_cookie($customer_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_update_new_customer_past_orders($customer_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_paying_customer($order_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_customer_bought_product($customer_email, $user_id, $product_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_customer_has_capability($allcaps, $caps, $args)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_sanitize_taxonomy_name($taxonomy)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_filename_from_url($file_url)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_dimension($dim, $to_unit)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_weight($weight, $to_unit)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_trim_zeros($price)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_round_tax_total($tax)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_format_decimal($number, $dp = \false, $trim_zeros = \false)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_clean($var)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_array_overlay($a1, $a2)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_price($price, $args = array())
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_let_to_num($size)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_date_format()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_time_format()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_timezone_string()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_rgb_from_hex($color)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_hex_darker($color, $factor = 30)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_hex_lighter($color, $factor = 30)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_light_or_dark($color, $dark = '#000000', $light = '#FFFFFF')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_format_hex($hex)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_order_id_by_order_key($order_key)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_downloadable_file_permission($download_id, $product_id, $order)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_downloadable_product_permissions($order_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_add_order_item($order_id, $item)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_delete_order_item($item_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_update_order_item_meta($item_id, $meta_key, $meta_value, $prev_value = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_add_order_item_meta($item_id, $meta_key, $meta_value, $unique = \false)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_delete_order_item_meta($item_id, $meta_key, $meta_value = '', $delete_all = \false)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_order_item_meta($item_id, $key, $single = \true)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_cancel_unpaid_orders()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_processing_order_count()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_page_id($page)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_endpoint_url($endpoint, $value = '', $permalink = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_lostpassword_url($url)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_customer_edit_account_url()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_nav_menu_items($items, $args)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_nav_menu_item_classes($menu_items, $args)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_list_pages($pages)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_product_dropdown_categories($args = array(), $deprecated_hierarchical = 1, $deprecated_show_uncategorized = 1, $deprecated_orderby = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_walk_category_dropdown_tree($a1 = '', $a2 = '', $a3 = '')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_taxonomy_metadata_wpdbfix()
{
}
/**
 * @deprecated 3.0
 */
function wc_taxonomy_metadata_wpdbfix()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_order_terms($the_term, $next_id, $taxonomy, $index = 0, $terms = \null)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_set_term_order($term_id, $index, $taxonomy, $recursive = \false)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_terms_clauses($clauses, $taxonomies, $args)
{
}
/**
 * @deprecated 3.0
 */
function _woocommerce_term_recount($terms, $taxonomy, $callback, $terms_are_term_taxonomy_ids)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_recount_after_stock_change($product_id)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_change_term_counts($terms, $taxonomies, $args)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_product_ids_on_sale()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_featured_product_ids()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_product_terms($object_id, $taxonomy, $fields = 'all')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_product_post_type_link($permalink, $post)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_placeholder_img_src()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_placeholder_img($size = 'woocommerce_thumbnail')
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_formatted_variation($variation = '', $flat = \false)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_scheduled_sales()
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_get_attachment_image_attributes($attr)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_prepare_attachment_for_js($response)
{
}
/**
 * @deprecated 3.0
 */
function woocommerce_track_product_view()
{
}
/**
 * @deprecated 2.3 has no replacement
 */
function woocommerce_compile_less_styles()
{
}
/**
 * woocommerce_calc_shipping was an option used to determine if shipping was enabled prior to version 2.6.0. This has since been replaced with wc_shipping_enabled() function and
 * the woocommerce_ship_to_countries setting.
 * @deprecated 2.6.0
 * @return string
 */
function woocommerce_calc_shipping_backwards_compatibility($value)
{
}
/**
 * @deprecated 3.0.0
 * @see WC_Structured_Data class
 *
 * @return string
 */
function woocommerce_get_product_schema()
{
}
/**
 * Save product price.
 *
 * This is a private function (internal use ONLY) used until a data manipulation api is built.
 *
 * @deprecated 3.0.0
 * @param int $product_id
 * @param float $regular_price
 * @param float $sale_price
 * @param string $date_from
 * @param string $date_to
 */
function _wc_save_product_price($product_id, $regular_price, $sale_price = '', $date_from = '', $date_to = '')
{
}
/**
 * Return customer avatar URL.
 *
 * @deprecated 3.1.0
 * @since 2.6.0
 * @param string $email the customer's email.
 * @return string the URL to the customer's avatar.
 */
function wc_get_customer_avatar_url($email)
{
}
/**
 * WooCommerce Core Supported Themes.
 *
 * @deprecated 3.3.0
 * @since 2.2
 * @return string[]
 */
function wc_get_core_supported_themes()
{
}
/**
 * Get min/max price meta query args.
 *
 * @deprecated 3.6.0
 * @since 3.0.0
 * @param array $args Min price and max price arguments.
 * @return array
 */
function wc_get_min_max_price_meta_query($args)
{
}
/**
 * When a term is split, ensure meta data maintained.
 *
 * @deprecated 3.6.0
 * @param  int    $old_term_id      Old term ID.
 * @param  int    $new_term_id      New term ID.
 * @param  string $term_taxonomy_id Term taxonomy ID.
 * @param  string $taxonomy         Taxonomy.
 */
function wc_taxonomy_metadata_update_content_for_split_terms($old_term_id, $new_term_id, $term_taxonomy_id, $taxonomy)
{
}
/**
 * WooCommerce Term Meta API.
 *
 * WC tables for storing term meta are deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @deprecated 3.6.0
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param string $prev_value Previous value. (default: '').
 * @return bool
 */
function update_woocommerce_term_meta($term_id, $meta_key, $meta_value, $prev_value = '')
{
}
/**
 * WooCommerce Term Meta API.
 *
 * WC tables for storing term meta are deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @deprecated 3.6.0
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param bool   $unique     Make meta key unique. (default: false).
 * @return bool
 */
function add_woocommerce_term_meta($term_id, $meta_key, $meta_value, $unique = \false)
{
}
/**
 * WooCommerce Term Meta API
 *
 * WC tables for storing term meta are deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @deprecated 3.6.0
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value (default: '').
 * @param bool   $deprecated Deprecated param (default: false).
 * @return bool
 */
function delete_woocommerce_term_meta($term_id, $meta_key, $meta_value = '', $deprecated = \false)
{
}
/**
 * WooCommerce Term Meta API
 *
 * WC tables for storing term meta are deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @deprecated 3.6.0
 * @param int    $term_id Term ID.
 * @param string $key     Meta key.
 * @param bool   $single  Whether to return a single value. (default: true).
 * @return mixed
 */
function get_woocommerce_term_meta($term_id, $key, $single = \true)
{
}
/**
 * Registers the default log handler.
 *
 * @deprecated 8.6.0
 * @since 3.0
 * @param array $handlers Handlers.
 * @return array
 */
function wc_register_default_log_handler($handlers = array())
{
}
/**
 * Get a log file path.
 *
 * @deprecated 8.6.0
 * @since 2.2
 *
 * @param string $handle name.
 * @return string the log file path.
 */
function wc_get_log_file_path($handle)
{
}
/**
 * Get a log file name.
 *
 * @since 3.3
 *
 * @param string $handle Name.
 * @return string The log file name.
 */
function wc_get_log_file_name($handle)
{
}