<?php

// Before wpautop().
/**
 * Define a constant if it is not already defined.
 *
 * @since 3.0.0
 * @param string $name  Constant name.
 * @param mixed  $value Value.
 */
function wc_maybe_define_constant($name, $value)
{
}
/**
 * Create a new order programmatically.
 *
 * Returns a new order object on success which can then be used to add additional data.
 *
 * @param  array $args Order arguments.
 * @return WC_Order|WP_Error
 */
function wc_create_order($args = array())
{
}
/**
 * Update an order. Uses wc_create_order.
 *
 * @param  array $args Order arguments.
 * @return WC_Order|WP_Error
 */
function wc_update_order($args)
{
}
/**
 * Given a path, this will convert any of the subpaths into their corresponding tokens.
 *
 * @since 4.3.0
 * @param string $path The absolute path to tokenize.
 * @param array  $path_tokens An array keyed with the token, containing paths that should be replaced.
 * @return string The tokenized path.
 */
function wc_tokenize_path($path, $path_tokens)
{
}
/**
 * Given a tokenized path, this will expand the tokens to their full path.
 *
 * @since 4.3.0
 * @param string $path The absolute path to expand.
 * @param array  $path_tokens An array keyed with the token, containing paths that should be expanded.
 * @return string The absolute path.
 */
function wc_untokenize_path($path, $path_tokens)
{
}
/**
 * Fetches an array containing all of the configurable path constants to be used in tokenization.
 *
 * @return array The key is the define and the path is the constant.
 */
function wc_get_path_define_tokens()
{
}
/**
 * Get template part (for templates like the shop-loop).
 *
 * WC_TEMPLATE_DEBUG_MODE will prevent overrides in themes from taking priority.
 *
 * @param mixed  $slug Template slug.
 * @param string $name Template name (default: '').
 */
function wc_get_template_part($slug, $name = '')
{
}
/**
 * Get other templates (e.g. product attributes) passing attributes and including the file.
 *
 * @param string $template_name Template name.
 * @param array  $args          Arguments. (default: array).
 * @param string $template_path Template path. (default: '').
 * @param string $default_path  Default path. (default: '').
 */
function wc_get_template($template_name, $args = array(), $template_path = '', $default_path = '')
{
}
/**
 * Like wc_get_template, but returns the HTML instead of outputting.
 *
 * @see wc_get_template
 * @since 2.5.0
 * @param string $template_name Template name.
 * @param array  $args          Arguments. (default: array).
 * @param string $template_path Template path. (default: '').
 * @param string $default_path  Default path. (default: '').
 *
 * @return string
 */
function wc_get_template_html($template_name, $args = array(), $template_path = '', $default_path = '')
{
}
/**
 * Locate a template and return the path for inclusion.
 *
 * This is the load order:
 *
 * yourtheme/$template_path/$template_name
 * yourtheme/$template_name
 * $default_path/$template_name
 *
 * @param string $template_name Template name.
 * @param string $template_path Template path. (default: '').
 * @param string $default_path  Default path. (default: '').
 * @return string
 */
function wc_locate_template($template_name, $template_path = '', $default_path = '')
{
}
/**
 * Add a template to the template cache.
 *
 * @since 4.3.0
 * @param string $cache_key Object cache key.
 * @param string $template Located template.
 */
function wc_set_template_cache($cache_key, $template)
{
}
/**
 * Clear the template cache.
 *
 * @since 4.3.0
 */
function wc_clear_template_cache()
{
}
/**
 * Clear the system status theme info cache.
 *
 * @since 9.4.0
 */
function wc_clear_system_status_theme_info_cache()
{
}
/**
 * Get Base Currency Code.
 *
 * @return string
 */
function get_woocommerce_currency()
{
}
/**
 * Get full list of currency codes.
 *
 * Currency symbols and names should follow the Unicode CLDR recommendation (https://cldr.unicode.org/translation/currency-names-and-symbols)
 *
 * @return array
 */
function get_woocommerce_currencies()
{
}
/**
 * Get all available Currency symbols.
 *
 * Currency symbols and names should follow the Unicode CLDR recommendation (https://cldr.unicode.org/translation/currency-names-and-symbols)
 *
 * @since 4.1.0
 * @return array
 */
function get_woocommerce_currency_symbols()
{
}
/**
 * Get Currency symbol.
 *
 * Currency symbols and names should follow the Unicode CLDR recommendation (https://cldr.unicode.org/translation/currency-names-and-symbols)
 *
 * @param string $currency Currency. (default: '').
 * @return string
 */
function get_woocommerce_currency_symbol($currency = '')
{
}
/**
 * Send HTML emails from WooCommerce.
 *
 * @param mixed  $to          Receiver.
 * @param mixed  $subject     Subject.
 * @param mixed  $message     Message.
 * @param string $headers     Headers. (default: "Content-Type: text/html\r\n").
 * @param string $attachments Attachments. (default: "").
 * @return bool
 */
function wc_mail($to, $subject, $message, $headers = "Content-Type: text/html\r\n", $attachments = '')
{
}
/**
 * Return "theme support" values from the current theme, if set.
 *
 * @since  3.3.0
 * @param  string $prop Name of prop (or key::subkey for arrays of props) if you want a specific value. Leave blank to get all props as an array.
 * @param  mixed  $default Optional value to return if the theme does not declare support for a prop.
 * @return mixed  Value of prop(s).
 */
function wc_get_theme_support($prop = '', $default = \null)
{
}
/**
 * Get an image size by name or defined dimensions.
 *
 * The returned variable is filtered by woocommerce_get_image_size_{image_size} filter to
 * allow 3rd party customisation.
 *
 * Sizes defined by the theme take priority over settings. Settings are hidden when a theme
 * defines sizes.
 *
 * @param array|string $image_size Name of the image size to get, or an array of dimensions.
 * @return array Array of dimensions including width, height, and cropping mode. Cropping mode is 0 for no crop, and 1 for hard crop.
 */
function wc_get_image_size($image_size)
{
}
/**
 * Queue some JavaScript code to be output in the footer.
 *
 * @param string $code Code.
 */
function wc_enqueue_js($code)
{
}
/**
 * Output any queued javascript code in the footer.
 */
function wc_print_js()
{
}
/**
 * Set a cookie - wrapper for setcookie using WP constants.
 *
 * @param  string  $name   Name of the cookie being set.
 * @param  string  $value  Value of the cookie.
 * @param  integer $expire Expiry of the cookie.
 * @param  bool    $secure Whether the cookie should be served only over https.
 * @param  bool    $httponly Whether the cookie is only accessible over HTTP, not scripting languages like JavaScript. @since 3.6.0.
 */
function wc_setcookie($name, $value, $expire = 0, $secure = \false, $httponly = \false)
{
}
/**
 * Get the URL to the WooCommerce Legacy REST API.
 *
 * Note that as of WooCommerce 9.0 the WooCommerce Legacy REST API has been moved to a dedicated extension,
 * and the implementation of its root endpoint in WooCommerce core is now just a stub that will always return an error.
 * See the setup_legacy_api_stub method in includes/class-woocommerce.php and:
 * https://developer.woocommerce.com/2023/10/03/the-legacy-rest-api-will-move-to-a-dedicated-extension-in-woocommerce-9-0/
 *
 * @deprecated 9.0.0 The Legacy REST API has been removed from WooCommerce core.
 *
 * @since 2.1
 * @param string $path an endpoint to include in the URL.
 * @return string the URL.
 */
function get_woocommerce_api_url($path)
{
}
/**
 * Recursively get page children.
 *
 * @param  int $page_id Page ID.
 * @return int[]
 */
function wc_get_page_children($page_id)
{
}
/**
 * Flushes rewrite rules when the shop page (or it's children) gets saved.
 */
function flush_rewrite_rules_on_shop_page_save()
{
}
/**
 * Various rewrite rule fixes.
 *
 * @since 2.2
 * @param array $rules Rules.
 * @return array
 */
function wc_fix_rewrite_rules($rules)
{
}
/**
 * Prevent product attachment links from breaking when using complex rewrite structures.
 *
 * @param  string $link    Link.
 * @param  int    $post_id Post ID.
 * @return string
 */
function wc_fix_product_attachment_link($link, $post_id)
{
}
/**
 * Protect downloads from ms-files.php in multisite.
 *
 * @param string $rewrite rewrite rules.
 * @return string
 */
function wc_ms_protect_download_rewite_rules($rewrite)
{
}
/**
 * Formats a string in the format COUNTRY:STATE into an array.
 *
 * @since 2.3.0
 * @param  string $country_string Country string.
 * @return array
 */
function wc_format_country_state_string($country_string)
{
}
/**
 * Get the store's base location.
 *
 * @since 2.3.0
 * @return array
 */
function wc_get_base_location()
{
}
/**
 * Uses geolocation to get the customer country and state only if they are valid values.
 *
 * @since 9.5.0
 * @param array $fallback Fallback location.
 * @return array
 */
function wc_get_customer_geolocation($fallback = array('country' => '', 'state' => ''))
{
}
/**
 * Get the customer's default location.
 *
 * Filtered, and set to base location or left blank. If cache-busting,
 * this should only be used when 'location' is set in the querystring.
 *
 * @since 2.3.0
 * @return array
 */
function wc_get_customer_default_location()
{
}
/**
 * Get user agent string.
 *
 * @since  3.0.0
 * @return string
 */
function wc_get_user_agent()
{
}
/**
 * Generate a rand hash.
 *
 * @since  2.4.0
 * @return string
 */
function wc_rand_hash()
{
}
/**
 * WC API - Hash.
 *
 * @since  2.4.0
 * @param  string $data Message to be hashed.
 * @return string
 */
function wc_api_hash($data)
{
}
/**
 * Find all possible combinations of values from the input array and return in a logical order.
 *
 * @since 2.5.0
 * @param array $input Input.
 * @return array
 */
function wc_array_cartesian($input)
{
}
/**
 * Run a MySQL transaction query, if supported.
 *
 * @since 2.5.0
 * @param string $type Types: start (default), commit, rollback.
 * @param bool   $force use of transactions.
 */
function wc_transaction_query($type = 'start', $force = \false)
{
}
/**
 * Gets the url to the cart page.
 *
 * @since 2.5.0
 * @since 9.3.0 To support shortcodes on other pages besides the main cart page, this returns the current URL if it is the cart page.
 *
 * @return string Url to cart page
 */
function wc_get_cart_url()
{
}
/**
 * Gets the url to the checkout page.
 *
 * @since  2.5.0
 *
 * @return string Url to checkout page
 */
function wc_get_checkout_url()
{
}
/**
 * Register a shipping method.
 *
 * @since 1.5.7
 * @param string|object $shipping_method class name (string) or a class object.
 */
function woocommerce_register_shipping_method($shipping_method)
{
}
/**
 * Get the shipping zone matching a given package from the cart.
 *
 * @since  2.6.0
 * @uses   WC_Shipping_Zones::get_zone_matching_package
 * @param  array $package Shipping package.
 * @return WC_Shipping_Zone
 */
function wc_get_shipping_zone($package)
{
}
/**
 * Get a nice name for credit card providers.
 *
 * @since  2.6.0
 * @param  string $type Provider Slug/Type.
 * @return string
 */
function wc_get_credit_card_type_label($type)
{
}
/**
 * Outputs a "back" link so admin screens can easily jump back a page.
 *
 * @param string $label Title of the page to return to.
 * @param string $url   URL of the page to return to.
 */
function wc_back_link($label, $url)
{
}
/**
 * Display a WooCommerce help tip.
 *
 * @since  2.5.0
 *
 * @param  string $tip        Help tip text.
 * @param  bool   $allow_html Allow sanitized HTML if true or escape.
 * @return string
 */
function wc_help_tip($tip, $allow_html = \false)
{
}
/**
 * Return a list of potential postcodes for wildcard searching.
 *
 * @since 2.6.0
 * @param  string $postcode Postcode.
 * @param  string $country  Country to format postcode for matching.
 * @return string[]
 */
function wc_get_wildcard_postcodes($postcode, $country = '')
{
}
/**
 * Used by shipping zones and taxes to compare a given $postcode to stored
 * postcodes to find matches for numerical ranges, and wildcards.
 *
 * @since 2.6.0
 * @param string $postcode           Postcode you want to match against stored postcodes.
 * @param array  $objects            Array of postcode objects from Database.
 * @param string $object_id_key      DB column name for the ID.
 * @param string $object_compare_key DB column name for the value.
 * @param string $country            Country from which this postcode belongs. Allows for formatting.
 * @return array Array of matching object ID and matching values.
 */
function wc_postcode_location_matcher($postcode, $objects, $object_id_key, $object_compare_key, $country = '')
{
}
/**
 * Gets number of shipping methods currently enabled. Used to identify if
 * shipping is configured.
 *
 * @since  2.6.0
 * @param  bool $include_legacy Count legacy shipping methods too.
 * @param  bool $enabled_only   Whether non-legacy shipping methods should be
 *                              restricted to enabled ones. It doesn't affect
 *                              legacy shipping methods. @since 4.3.0.
 * @return int
 */
function wc_get_shipping_method_count($include_legacy = \false, $enabled_only = \false)
{
}
/**
 * Wrapper for set_time_limit to see if it is enabled.
 *
 * @since 2.6.0
 * @param int $limit Time limit.
 */
function wc_set_time_limit($limit = 0)
{
}
/**
 * Wrapper for nocache_headers which also disables page caching.
 *
 * @since 3.2.4
 */
function wc_nocache_headers()
{
}
/**
 * Used to sort products attributes with uasort.
 *
 * @since 2.6.0
 * @param array $a First attribute to compare.
 * @param array $b Second attribute to compare.
 * @return int
 */
function wc_product_attribute_uasort_comparison($a, $b)
{
}
/**
 * Used to sort shipping zone methods with uasort.
 *
 * @since 3.0.0
 * @param array $a First shipping zone method to compare.
 * @param array $b Second shipping zone method to compare.
 * @return int
 */
function wc_shipping_zone_method_order_uasort_comparison($a, $b)
{
}
/**
 * User to sort checkout fields based on priority with uasort.
 *
 * @since 3.5.1
 * @param array $a First field to compare.
 * @param array $b Second field to compare.
 * @return int
 */
function wc_checkout_fields_uasort_comparison($a, $b)
{
}
/**
 * User to sort two values with ausort.
 *
 * @since 3.5.1
 * @param int $a First value to compare.
 * @param int $b Second value to compare.
 * @return int
 */
function wc_uasort_comparison($a, $b)
{
}
/**
 * Sort values based on ascii, useful for special chars in strings.
 *
 * @param string $a First value.
 * @param string $b Second value.
 * @return int
 */
function wc_ascii_uasort_comparison($a, $b)
{
}
/**
 * Sort array according to current locale rules and maintaining index association.
 * By default tries to use Collator from PHP Internationalization Functions if available.
 * If PHP Collator class doesn't exists it fallback to removing accepts from a array
 * and by sorting with `uasort( $data, 'strcmp' )` giving support for ASCII values.
 *
 * @since 4.6.0
 * @param array  $data   List of values to sort.
 * @param string $locale Locale.
 * @return array
 */
function wc_asort_by_locale(&$data, $locale = '')
{
}
/**
 * Get rounding mode for internal tax calculations.
 *
 * @since 3.2.4
 * @return int
 */
function wc_get_tax_rounding_mode()
{
}
/**
 * Get rounding precision for internal WC calculations.
 * Will return the value of wc_get_price_decimals increased by 2 decimals, with WC_ROUNDING_PRECISION being the minimum.
 *
 * @since 2.6.3
 * @return int
 */
function wc_get_rounding_precision()
{
}
/**
 * Add precision to a number by moving the decimal point to the right as many places as indicated by wc_get_price_decimals().
 * Optionally the result is rounded so that the total number of digits equals wc_get_rounding_precision() plus one.
 *
 * @since  3.2.0
 * @param  float|null $value Number to add precision to.
 * @param  bool       $round If the result should be rounded.
 * @return int|float
 */
function wc_add_number_precision(?float $value, bool $round = \true)
{
}
/**
 * Remove precision from a number and return a float.
 *
 * @since  3.2.0
 * @param  float $value Number to add precision to.
 * @return float
 */
function wc_remove_number_precision($value)
{
}
/**
 * Add precision to an array of number and return an array of int.
 *
 * @since  3.2.0
 * @param  array $value Number to add precision to.
 * @param  bool  $round Should we round after adding precision?.
 * @return int|array
 */
function wc_add_number_precision_deep($value, $round = \true)
{
}
/**
 * Remove precision from an array of number and return an array of int.
 *
 * @since  3.2.0
 * @param  array $value Number to add precision to.
 * @return int|array
 */
function wc_remove_number_precision_deep($value)
{
}
/**
 * Get a shared logger instance.
 *
 * Use the woocommerce_logging_class filter to change the logging class. You may provide one of the following:
 *     - a class name which will be instantiated as `new $class` with no arguments
 *     - an instance which will be used directly as the logger
 * In either case, the class or instance *must* implement WC_Logger_Interface.
 *
 * @return WC_Logger_Interface
 */
function wc_get_logger()
{
}
/**
 * Trigger logging cleanup using the logging class.
 *
 * @since 3.4.0
 */
function wc_cleanup_logs()
{
}
/**
 * Prints human-readable information about a variable.
 *
 * Some server environments block some debugging functions. This function provides a safe way to
 * turn an expression into a printable, readable form without calling blocked functions.
 *
 * @since 3.0
 *
 * @param mixed $expression The expression to be printed.
 * @param bool  $return     Optional. Default false. Set to true to return the human-readable string.
 * @return string|bool False if expression could not be printed. True if the expression was printed.
 *     If $return is true, a string representation will be returned.
 */
function wc_print_r($expression, $return = \false)
{
}
/**
 * Based on wp_list_pluck, this calls a method instead of returning a property.
 *
 * @since 3.0.0
 * @param array      $list              List of objects or arrays.
 * @param int|string $callback_or_field Callback method from the object to place instead of the entire object.
 * @param int|string $index_key         Optional. Field from the object to use as keys for the new array.
 *                                      Default null.
 * @return array Array of values.
 */
function wc_list_pluck($list, $callback_or_field, $index_key = \null)
{
}
/**
 * Get permalink settings for things like products and taxonomies.
 *
 * As of 3.3.0, the permalink settings are stored to the option instead of
 * being blank and inheritting from the locale. This speeds up page loading
 * times by negating the need to switch locales on each page load.
 *
 * This is more inline with WP core behavior which does not localize slugs.
 *
 * @since  3.0.0
 * @return array
 */
function wc_get_permalink_structure()
{
}
/**
 * Switch WooCommerce to site language.
 *
 * @since 3.1.0
 */
function wc_switch_to_site_locale()
{
}
/**
 * Switch WooCommerce language to original.
 *
 * @since 3.1.0
 */
function wc_restore_locale()
{
}
/**
 * Convert plaintext phone number to clickable phone number.
 *
 * Remove formatting and allow "+".
 * Example and specs: https://developer.mozilla.org/en/docs/Web/HTML/Element/a#Creating_a_phone_link
 *
 * @since 3.1.0
 *
 * @param string $phone Content to convert phone number.
 * @return string Content with converted phone number.
 */
function wc_make_phone_clickable($phone)
{
}
/**
 * Get an item of post data if set, otherwise return a default value.
 *
 * @since  3.0.9
 * @param  string $key     Meta key.
 * @param  string $default Default value.
 * @return mixed Value sanitized by wc_clean.
 */
function wc_get_post_data_by_key($key, $default = '')
{
}
/**
 * Get data if set, otherwise return a default value or null. Prevents notices when data is not set.
 *
 * @since  3.2.0
 * @param  mixed  $var     Variable.
 * @param  string $default Default value.
 * @return mixed
 */
function wc_get_var(&$var, $default = \null)
{
}
/**
 * Read in WooCommerce headers when reading plugin headers.
 *
 * @since 3.2.0
 * @param array $headers Headers.
 * @return array
 */
function wc_enable_wc_plugin_headers($headers)
{
}
/**
 * Prevent auto-updating the WooCommerce plugin on major releases if there are untested extensions active.
 *
 * @since 3.2.0
 * @param  bool   $should_update If should update.
 * @param  object $plugin        Plugin data.
 * @return bool
 */
function wc_prevent_dangerous_auto_updates($should_update, $plugin)
{
}
/**
 * Delete expired transients.
 *
 * Deletes all expired transients. The multi-table delete syntax is used.
 * to delete the transient record from table a, and the corresponding.
 * transient_timeout record from table b.
 *
 * Based on code inside core's upgrade_network() function.
 *
 * @since 3.2.0
 * @return int Number of transients that were cleared.
 */
function wc_delete_expired_transients()
{
}
/**
 * Make a URL relative, if possible.
 *
 * @since 3.2.0
 * @param string $url URL to make relative.
 * @return string
 */
function wc_get_relative_url($url)
{
}
/**
 * See if a resource is remote.
 *
 * @since 3.2.0
 * @param string $url URL to check.
 * @return bool
 */
function wc_is_external_resource($url)
{
}
/**
 * See if theme/s is activate or not.
 *
 * @since 3.3.0
 * @param string|array $theme Theme name or array of theme names to check.
 * @return boolean
 */
function wc_is_active_theme($theme)
{
}
/**
 * Is the site using a default WP theme?
 *
 * @return boolean
 */
function wc_is_wp_default_theme_active()
{
}
/**
 * Cleans up session data - cron callback.
 *
 * @since 3.3.0
 */
function wc_cleanup_session_data()
{
}
/**
 * Convert a decimal (e.g. 3.5) to a fraction (e.g. 7/2).
 * From: https://www.designedbyaturtle.co.uk/2015/converting-a-decimal-to-a-fraction-in-php/
 *
 * @param float $decimal the decimal number.
 * @return array|bool a 1/2 would be [1, 2] array (this can be imploded with '/' to form a string).
 */
function wc_decimal_to_fraction($decimal)
{
}
/**
 * Round discount.
 *
 * @param  double $value Amount to round.
 * @param  int    $precision DP to round.
 * @return float
 */
function wc_round_discount($value, $precision)
{
}
/**
 * Return the html selected attribute if stringified $value is found in array of stringified $options
 * or if stringified $value is the same as scalar stringified $options.
 *
 * @param string|int       $value   Value to find within options.
 * @param string|int|array $options Options to go through when looking for value.
 * @return string
 */
function wc_selected($value, $options)
{
}
/**
 * Retrieves the MySQL server version. Based on $wpdb.
 *
 * @since 3.4.1
 * @return array Version information.
 */
function wc_get_server_database_version()
{
}
/**
 * Initialize and load the cart functionality.
 *
 * @since 3.6.4
 * @return void
 */
function wc_load_cart()
{
}
/**
 * Test whether the context of execution comes from async action scheduler.
 *
 * @since 4.0.0
 * @return bool
 */
function wc_is_running_from_async_action_scheduler()
{
}
/**
 * Polyfill for wp_cache_get_multiple for WP versions before 5.5.
 *
 * @param array  $keys   Array of keys to get from group.
 * @param string $group  Optional. Where the cache contents are grouped. Default empty.
 * @param bool   $force  Optional. Whether to force an update of the local cache from the persistent
 *                            cache. Default false.
 * @return array|bool Array of values.
 */
function wc_cache_get_multiple($keys, $group = '', $force = \false)
{
}