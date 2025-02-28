<?php

// Once WooCommerce requires PHP 7.4, the "$x = $x ?? ''" constructs can be replaced with "$x ??= ''".
/**
 * Converts a string (e.g. 'yes' or 'no') to a bool.
 *
 * @since 3.0.0
 * @param string|bool $string String to convert. If a bool is passed it will be returned as-is.
 * @return bool
 */
function wc_string_to_bool($string)
{
}
/**
 * Converts a bool to a 'yes' or 'no'.
 *
 * @since 3.0.0
 * @param bool|string $bool Bool to convert. If a string is passed it will first be converted to a bool.
 * @return string
 */
function wc_bool_to_string($bool)
{
}
/**
 * Explode a string into an array by $delimiter and remove empty values.
 *
 * @since 3.0.0
 * @param string $string    String to convert.
 * @param string $delimiter Delimiter, defaults to ','.
 * @return array
 */
function wc_string_to_array($string, $delimiter = ',')
{
}
/**
 * Sanitize taxonomy names. Slug format (no spaces, lowercase).
 * Urldecode is used to reverse munging of UTF8 characters.
 *
 * @param string $taxonomy Taxonomy name.
 * @return string
 */
function wc_sanitize_taxonomy_name($taxonomy)
{
}
/**
 * Sanitize permalink values before insertion into DB.
 *
 * Cannot use wc_clean because it sometimes strips % chars and breaks the user's setting.
 *
 * @since  2.6.0
 * @param  string $value Permalink.
 * @return string
 */
function wc_sanitize_permalink($value)
{
}
/**
 * Gets the filename part of a download URL.
 *
 * @param string $file_url File URL.
 * @return string
 */
function wc_get_filename_from_url($file_url)
{
}
/**
 * Normalise dimensions, unify to cm then convert to wanted unit value.
 *
 * Usage:
 * wc_get_dimension( 55, 'in' );
 * wc_get_dimension( 55, 'in', 'm' );
 *
 * @param int|float $dimension    Dimension.
 * @param string    $to_unit      Unit to convert to.
 *                                Options: 'in', 'mm', 'cm', 'm'.
 * @param string    $from_unit    Unit to convert from.
 *                                Defaults to ''.
 *                                Options: 'in', 'mm', 'cm', 'm'.
 * @return float
 */
function wc_get_dimension($dimension, $to_unit, $from_unit = '')
{
}
/**
 * Normalise weights, unify to kg then convert to wanted unit value.
 *
 * Usage:
 * wc_get_weight(55, 'kg');
 * wc_get_weight(55, 'kg', 'lbs');
 *
 * @param int|float $weight    Weight.
 * @param string    $to_unit   Unit to convert to.
 *                             Options: 'g', 'kg', 'lbs', 'oz'.
 * @param string    $from_unit Unit to convert from.
 *                             Defaults to ''.
 *                             Options: 'g', 'kg', 'lbs', 'oz'.
 * @return float
 */
function wc_get_weight($weight, $to_unit, $from_unit = '')
{
}
/**
 * Trim trailing zeros off prices.
 *
 * @param string|float|int $price Price.
 * @return string
 */
function wc_trim_zeros($price)
{
}
/**
 * Round a tax amount.
 *
 * @param  double $value Amount to round.
 * @param  int    $precision DP to round. Defaults to wc_get_price_decimals.
 * @return float
 */
function wc_round_tax_total($value, $precision = \null)
{
}
/**
 * Round half down in PHP 5.2.
 *
 * @since 3.2.6
 * @param float $value Value to round.
 * @param int   $precision Precision to round down to.
 * @return float
 */
function wc_legacy_round_half_down($value, $precision)
{
}
/**
 * Make a refund total negative.
 *
 * @param float $amount Refunded amount.
 *
 * @return float
 */
function wc_format_refund_total($amount)
{
}
/**
 * Format decimal numbers ready for DB storage.
 *
 * Sanitize, optionally remove decimals, and optionally round + trim off zeros.
 *
 * This function does not remove thousands - this should be done before passing a value to the function.
 *
 * @param  float|string $number     Expects either a float or a string with a decimal separator only (no thousands).
 * @param  mixed        $dp number  Number of decimal points to use, blank to use woocommerce_price_num_decimals, or false to avoid all rounding.
 * @param  bool         $trim_zeros From end of string.
 * @return string
 */
function wc_format_decimal($number, $dp = \false, $trim_zeros = \false)
{
}
/**
 * Convert a float to a string without locale formatting which PHP adds when changing floats to strings.
 *
 * @param  float $float Float value to format.
 * @return string
 */
function wc_float_to_string($float)
{
}
/**
 * Format a price with WC Currency Locale settings.
 *
 * @param  string $value Price to localize.
 * @return string
 */
function wc_format_localized_price($value)
{
}
/**
 * Format a decimal with the decimal separator for prices or PHP Locale settings.
 *
 * @param  string $value Decimal to localize.
 * @return string
 */
function wc_format_localized_decimal($value)
{
}
/**
 * Format a coupon code.
 *
 * @since  3.0.0
 * @param  string $value Coupon code to format.
 * @return string
 */
function wc_format_coupon_code($value)
{
}
/**
 * Sanitize a coupon code.
 *
 * Uses sanitize_post_field since coupon codes are stored as post_titles - the sanitization and escaping must match.
 *
 * Due to the unfiltered_html captability that some (admin) users have, we need to account for slashes.
 *
 * @since  3.6.0
 * @param  string $value Coupon code to format.
 * @return string
 */
function wc_sanitize_coupon_code($value)
{
}
/**
 * Clean variables using sanitize_text_field. Arrays are cleaned recursively.
 * Non-scalar values are ignored.
 *
 * @param string|array $var Data to sanitize.
 * @return string|array
 */
function wc_clean($var)
{
}
/**
 * Function wp_check_invalid_utf8 with recursive array support.
 *
 * @param string|array $var Data to sanitize.
 * @return string|array
 */
function wc_check_invalid_utf8($var)
{
}
/**
 * Run wc_clean over posted textarea but maintain line breaks.
 *
 * @since  3.0.0
 * @param  string $var Data to sanitize.
 * @return string
 */
function wc_sanitize_textarea($var)
{
}
/**
 * Sanitize a string destined to be a tooltip.
 *
 * @since  2.3.10 Tooltips are encoded with htmlspecialchars to prevent XSS. Should not be used in conjunction with esc_attr()
 * @param  string $var Data to sanitize.
 * @return string
 */
function wc_sanitize_tooltip($var)
{
}
/**
 * Merge two arrays.
 *
 * @param array $a1 First array to merge.
 * @param array $a2 Second array to merge.
 * @return array
 */
function wc_array_overlay($a1, $a2)
{
}
/**
 * Formats a stock amount by running it through a filter.
 *
 * @param  int|float $amount Stock amount.
 * @return int|float
 */
function wc_stock_amount($amount)
{
}
/**
 * Get the price format depending on the currency position.
 *
 * @return string
 */
function get_woocommerce_price_format()
{
}
/**
 * Return the thousand separator for prices.
 *
 * @since  2.3
 * @return string
 */
function wc_get_price_thousand_separator()
{
}
/**
 * Return the decimal separator for prices.
 *
 * @since  2.3
 * @return string
 */
function wc_get_price_decimal_separator()
{
}
/**
 * Return the number of decimals after the decimal point.
 *
 * @since  2.3
 * @return int
 */
function wc_get_price_decimals()
{
}
/**
 * Format the price with a currency symbol.
 *
 * @param  float $price Raw price.
 * @param  array $args  Arguments to format a price {
 *     Array of arguments.
 *     Defaults to empty array.
 *
 *     @type bool   $ex_tax_label       Adds exclude tax label.
 *                                      Defaults to false.
 *     @type string $currency           Currency code.
 *                                      Defaults to empty string (Use the result from get_woocommerce_currency()).
 *     @type string $decimal_separator  Decimal separator.
 *                                      Defaults the result of wc_get_price_decimal_separator().
 *     @type string $thousand_separator Thousand separator.
 *                                      Defaults the result of wc_get_price_thousand_separator().
 *     @type string $decimals           Number of decimals.
 *                                      Defaults the result of wc_get_price_decimals().
 *     @type string $price_format       Price format depending on the currency position.
 *                                      Defaults the result of get_woocommerce_price_format().
 * }
 * @return string
 */
function wc_price($price, $args = array())
{
}
/**
 * Notation to numbers.
 *
 * This function transforms the php.ini notation for numbers (like '2M') to an integer.
 *
 * @param  string $size Size value.
 * @return int
 */
function wc_let_to_num($size)
{
}
/**
 * WooCommerce Date Format - Allows to change date format for everything WooCommerce.
 *
 * @return string
 */
function wc_date_format()
{
}
/**
 * WooCommerce Time Format - Allows to change time format for everything WooCommerce.
 *
 * @return string
 */
function wc_time_format()
{
}
/**
 * Convert mysql datetime to PHP timestamp, forcing UTC. Wrapper for strtotime.
 *
 * Based on wcs_strtotime_dark_knight() from WC Subscriptions by Prospress.
 *
 * @since  3.0.0
 * @param  string   $time_string    Time string.
 * @param  int|null $from_timestamp Timestamp to convert from.
 * @return int
 */
function wc_string_to_timestamp($time_string, $from_timestamp = \null)
{
}
/**
 * Convert a date string to a WC_DateTime.
 *
 * @since  3.1.0
 * @param  string $time_string Time string.
 * @return WC_DateTime
 */
function wc_string_to_datetime($time_string)
{
}
/**
 * WooCommerce Timezone - helper to retrieve the timezone string for a site until.
 * a WP core method exists (see https://core.trac.wordpress.org/ticket/24730).
 *
 * Adapted from https://secure.php.net/manual/en/function.timezone-name-from-abbr.php#89155.
 *
 * @since 2.1
 * @return string PHP timezone string for the site
 */
function wc_timezone_string()
{
}
/**
 * Get timezone offset in seconds.
 *
 * @since  3.0.0
 * @return float
 */
function wc_timezone_offset()
{
}
/**
 * Callback which can flatten post meta (gets the first value if it's an array).
 *
 * @since  3.0.0
 * @param  array $value Value to flatten.
 * @return mixed
 */
function wc_flatten_meta_callback($value)
{
}
/**
 * Convert RGB to HEX.
 *
 * @param mixed $color Color.
 *
 * @return array
 */
function wc_rgb_from_hex($color)
{
}
/**
 * Make HEX color darker.
 *
 * @param mixed $color  Color.
 * @param int   $factor Darker factor.
 *                      Defaults to 30.
 * @return string
 */
function wc_hex_darker($color, $factor = 30)
{
}
/**
 * Make HEX color lighter.
 *
 * @param mixed $color  Color.
 * @param int   $factor Lighter factor.
 *                      Defaults to 30.
 * @return string
 */
function wc_hex_lighter($color, $factor = 30)
{
}
/**
 * Determine whether a hex color is light.
 *
 * @param mixed $color Color.
 * @return bool  True if a light color.
 */
function wc_hex_is_light($color)
{
}
/**
 * Detect if we should use a light or dark color on a background color.
 *
 * @param mixed  $color Color.
 * @param string $dark  Darkest reference.
 *                      Defaults to '#000000'.
 * @param string $light Lightest reference.
 *                      Defaults to '#FFFFFF'.
 * @return string
 */
function wc_light_or_dark($color, $dark = '#000000', $light = '#FFFFFF')
{
}
/**
 * Format string as hex.
 *
 * @param string $hex HEX color.
 * @return string|null
 */
function wc_format_hex($hex)
{
}
/**
 * Format the postcode according to the country and length of the postcode.
 *
 * @param string $postcode Unformatted postcode.
 * @param string $country  Base country.
 * @return string
 */
function wc_format_postcode($postcode, $country)
{
}
/**
 * Normalize postcodes.
 *
 * Remove spaces and convert characters to uppercase.
 *
 * @since 2.6.0
 * @param string $postcode Postcode.
 * @return string
 */
function wc_normalize_postcode($postcode)
{
}
/**
 * Format phone numbers.
 *
 * @param string $phone Phone number.
 * @return string
 */
function wc_format_phone_number($phone)
{
}
/**
 * Sanitize phone number.
 * Allows only numbers and "+" (plus sign).
 *
 * @since 3.6.0
 * @param string $phone Phone number.
 * @return string
 */
function wc_sanitize_phone_number($phone)
{
}
/**
 * Wrapper for mb_strtoupper which see's if supported first.
 *
 * @since  3.1.0
 * @param  string $string String to format.
 * @return string
 */
function wc_strtoupper($string)
{
}
/**
 * Make a string lowercase.
 * Try to use mb_strtolower() when available.
 *
 * @since  2.3
 * @param  string $string String to format.
 * @return string
 */
function wc_strtolower($string)
{
}
/**
 * Trim a string and append a suffix.
 *
 * @param  string  $string String to trim.
 * @param  integer $chars  Amount of characters.
 *                         Defaults to 200.
 * @param  string  $suffix Suffix.
 *                         Defaults to '...'.
 * @return string
 */
function wc_trim_string($string, $chars = 200, $suffix = '...')
{
}
/**
 * Format content to display shortcodes.
 *
 * @since  2.3.0
 * @param  string $raw_string Raw string.
 * @return string
 */
function wc_format_content($raw_string)
{
}
/**
 * Format product short description.
 * Adds support for Jetpack Markdown.
 *
 * @codeCoverageIgnore
 * @since  2.4.0
 * @param  string $content Product short description.
 * @return string
 */
function wc_format_product_short_description($content)
{
}
/**
 * Formats curency symbols when saved in settings.
 *
 * @codeCoverageIgnore
 * @param  string $value     Option value.
 * @param  array  $option    Option name.
 * @param  string $raw_value Raw value.
 * @return string
 */
function wc_format_option_price_separators($value, $option, $raw_value)
{
}
/**
 * Formats decimals when saved in settings.
 *
 * @codeCoverageIgnore
 * @param  string $value     Option value.
 * @param  array  $option    Option name.
 * @param  string $raw_value Raw value.
 * @return string
 */
function wc_format_option_price_num_decimals($value, $option, $raw_value)
{
}
/**
 * Formats hold stock option and sets cron event up.
 *
 * @codeCoverageIgnore
 * @param  string $value     Option value.
 * @param  array  $option    Option name.
 * @param  string $raw_value Raw value.
 * @return string
 */
function wc_format_option_hold_stock_minutes($value, $option, $raw_value)
{
}
/**
 * Sanitize terms from an attribute text based.
 *
 * @since  2.4.5
 * @param  string $term Term value.
 * @return string
 */
function wc_sanitize_term_text_based($term)
{
}
/**
 * Make numeric postcode.
 *
 * Converts letters to numbers so we can do a simple range check on postcodes.
 * E.g. PE30 becomes 16050300 (P = 16, E = 05, 3 = 03, 0 = 00)
 *
 * @since 2.6.0
 * @param string $postcode Regular postcode.
 * @return string
 */
function wc_make_numeric_postcode($postcode)
{
}
/**
 * Format the stock amount ready for display based on settings.
 *
 * @since  3.0.0
 * @param  WC_Product $product Product object for which the stock you need to format.
 * @return string
 */
function wc_format_stock_for_display($product)
{
}
/**
 * Format the stock quantity ready for display.
 *
 * @since  3.0.0
 * @param  int        $stock_quantity Stock quantity.
 * @param  WC_Product $product        Product instance so that we can pass through the filters.
 * @return string
 */
function wc_format_stock_quantity_for_display($stock_quantity, $product)
{
}
/**
 * Format a sale price for display.
 *
 * @since  3.0.0
 * @param  string $regular_price Regular price.
 * @param  string $sale_price    Sale price.
 * @return string
 */
function wc_format_sale_price($regular_price, $sale_price)
{
}
/**
 * Format a price range for display.
 *
 * @param  string $from Price from.
 * @param  string $to   Price to.
 * @return string
 */
function wc_format_price_range($from, $to)
{
}
/**
 * Format a weight for display.
 *
 * @since  3.0.0
 * @param  float $weight Weight.
 * @return string
 */
function wc_format_weight($weight)
{
}
/**
 * Format dimensions for display.
 *
 * @since  3.0.0
 * @param  array $dimensions Array of dimensions.
 * @return string
 */
function wc_format_dimensions($dimensions)
{
}
/**
 * Format a date for output.
 *
 * @since  3.0.0
 * @param  WC_DateTime $date   Instance of WC_DateTime.
 * @param  string      $format Data format.
 *                             Defaults to the wc_date_format function if not set.
 * @return string
 */
function wc_format_datetime($date, $format = '')
{
}
/**
 * Process oEmbeds.
 *
 * @since  3.1.0
 * @param  string $content Content.
 * @return string
 */
function wc_do_oembeds($content)
{
}
/**
 * Get part of a string before :.
 *
 * Used for example in shipping methods ids where they take the format
 * method_id:instance_id
 *
 * @since  3.2.0
 * @param  string $string String to extract.
 * @return string
 */
function wc_get_string_before_colon($string)
{
}
/**
 * Array merge and sum function.
 *
 * Source:  https://gist.github.com/Nickology/f700e319cbafab5eaedc
 *
 * @since 3.2.0
 * @return array
 */
function wc_array_merge_recursive_numeric()
{
}
/**
 * Implode and escape HTML attributes for output.
 *
 * @since 3.3.0
 * @param array $raw_attributes Attribute name value pairs.
 * @return string
 */
function wc_implode_html_attributes($raw_attributes)
{
}
/**
 * Escape JSON for use on HTML or attribute text nodes.
 *
 * @since 3.5.5
 * @param string $json JSON to escape.
 * @param bool   $html True if escaping for HTML text node, false for attributes. Determines how quotes are handled.
 * @return string Escaped JSON.
 */
function wc_esc_json($json, $html = \false)
{
}
/**
 * Parse a relative date option from the settings API into a standard format.
 *
 * @since 3.4.0
 * @param mixed $raw_value Value stored in DB.
 * @return array Nicely formatted array with number and unit values.
 */
function wc_parse_relative_date_option($raw_value)
{
}
/**
 * Format the endpoint slug, strip out anything not allowed in a url.
 *
 * @since 3.5.0
 * @param string $raw_value The raw value.
 * @return string
 */
function wc_sanitize_endpoint_slug($raw_value)
{
}