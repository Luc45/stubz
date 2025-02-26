<?php

namespace ;

/**
 * Performs tax calculations and loads tax rates
 *
 * @class WC_Tax
 */
class WC_Tax
{
    /**
     * Precision.
     *
     * @var int
     */
    public static $precision = null;

    /**
     * Round at subtotal.
     *
     * @var bool
     */
    public static $round_at_subtotal = false;

    /**
     * Load options.
     */
    public static function init()
    {
        // stub
    }

    /**
     * When the woocommerce_tax_classes option is changed, remove any orphan rates.
     *
     * @deprecated 3.7.0
     * @param  string $old_value Old rates value.
     * @param  string $value New rates value.
     */
    public static function maybe_remove_tax_class_rates($old_value, $value)
    {
        // stub
    }

    /**
     * Calculate tax for a line.
     *
     * @param  float   $price              Price to calc tax on.
     * @param  array   $rates              Rates to apply.
     * @param  boolean $price_includes_tax Whether the passed price has taxes included.
     * @param  boolean $deprecated         Whether to suppress any rounding from taking place. No longer used here.
     * @return array                       Array of rates + prices after tax.
     */
    public static function calc_tax($price, $rates, $price_includes_tax = false, $deprecated = false)
    {
        // stub
    }

    /**
     * Calculate the shipping tax using a passed array of rates.
     *
     * @param float $price Shipping cost.
     * @param array $rates Taxation Rate.
     * @return array
     */
    public static function calc_shipping_tax($price, $rates)
    {
        // stub
    }

    /**
     * Round to precision.
     *
     * Filter example: to return rounding to .5 cents you'd use:
     *
     * function euro_5cent_rounding( $in ) {
     *      return round( $in / 5, 2 ) * 5;
     * }
     * add_filter( 'woocommerce_tax_round', 'euro_5cent_rounding' );
     *
     * @param float|int $in Value to round.
     * @return float
     */
    public static function round($in)
    {
        // stub
    }

    /**
     * Calc tax from inclusive price.
     *
     * @param  float $price Price to calculate tax for.
     * @param  array $rates Array of tax rates.
     * @return array
     */
    public static function calc_inclusive_tax($price, $rates)
    {
        // stub
    }

    /**
     * Calc tax from exclusive price.
     *
     * @param  float $price Price to calculate tax for.
     * @param  array $rates Array of tax rates.
     * @return array
     */
    public static function calc_exclusive_tax($price, $rates)
    {
        // stub
    }

    /**
     * Searches for all matching country/state/postcode tax rates.
     *
     * @param array $args Args that determine the rate to find.
     * @return array
     */
    public static function find_rates($args = array (
))
    {
        // stub
    }

    /**
     * Searches for all matching country/state/postcode tax rates.
     *
     * @param array $args Args that determine the rate to find.
     * @return array
     */
    public static function find_shipping_rates($args = array (
))
    {
        // stub
    }

    /**
     * Does the sort comparison. Compares (in this order):
     * - Priority
     * - Country
     * - State
     * - Number of postcodes
     * - Number of cities
     * - ID
     *
     * @param object $rate1 First rate to compare.
     * @param object $rate2 Second rate to compare.
     * @return int
     */
    private static function sort_rates_callback($rate1, $rate2)
    {
        // stub
    }

    /**
     * Logical sort order for tax rates based on the following in order of priority.
     *
     * @param  array $rates Rates to be sorted.
     * @return array
     */
    private static function sort_rates($rates)
    {
        // stub
    }

    /**
     * Loop through a set of tax rates and get the matching rates (1 per priority).
     *
     * @param  string $country Country code to match against.
     * @param  string $state State code to match against.
     * @param  string $postcode Postcode to match against.
     * @param  string $city City to match against.
     * @param  string $tax_class Tax class to match against.
     * @return array
     */
    private static function get_matched_tax_rates($country, $state, $postcode, $city, $tax_class)
    {
        // stub
    }

    /**
     * Get the customer tax location based on their status and the current page.
     *
     * Used by get_rates(), get_shipping_rates().
     *
     * @param  string $tax_class string Optional, passed to the filter for advanced tax setups.
     * @param  object $customer Override the customer object to get their location.
     * @return array
     */
    public static function get_tax_location($tax_class = '', $customer = null)
    {
        // stub
    }

    /**
     * Get's an array of matching rates for a tax class.
     *
     * @param string $tax_class Tax class to get rates for.
     * @param object $customer Override the customer object to get their location.
     * @return  array
     */
    public static function get_rates($tax_class = '', $customer = null)
    {
        // stub
    }

    /**
     * Get's an array of matching rates from location and tax class. $customer parameter is used to preserve backward compatibility for filter.
     *
     * @param string $tax_class Tax class to get rates for.
     * @param array  $location  Location to compute rates for. Should be in form: array( country, state, postcode, city).
     * @param object $customer  Only used to maintain backward compatibility for filter `woocommerce-matched_rates`.
     *
     * @return mixed|void Tax rates.
     */
    public static function get_rates_from_location($tax_class, $location, $customer = null)
    {
        // stub
    }

    /**
     * Get's an array of matching rates for the shop's base country.
     *
     * @param string $tax_class Tax Class.
     * @return array
     */
    public static function get_base_tax_rates($tax_class = '')
    {
        // stub
    }

    /**
     * Alias for get_base_tax_rates().
     *
     * @deprecated 2.3
     * @param string $tax_class Tax Class.
     * @return array
     */
    public static function get_shop_base_rate($tax_class = '')
    {
        // stub
    }

    /**
     * Gets an array of matching shipping tax rates for a given class.
     *
     * @param string $tax_class Tax class to get rates for.
     * @param object $customer Override the customer object to get their location.
     * @return mixed
     */
    public static function get_shipping_tax_rates($tax_class = null, $customer = null)
    {
        // stub
    }

    /**
     * Return true/false depending on if a rate is a compound rate.
     *
     * @param mixed $key_or_rate Tax rate ID, or the db row itself in object format.
     * @return  bool
     */
    public static function is_compound($key_or_rate)
    {
        // stub
    }

    /**
     * Return a given rates label.
     *
     * @param mixed $key_or_rate Tax rate ID, or the db row itself in object format.
     * @return  string
     */
    public static function get_rate_label($key_or_rate)
    {
        // stub
    }

    /**
     * Return a given rates percent.
     *
     * @param mixed $key_or_rate Tax rate ID, or the db row itself in object format.
     * @return  string
     */
    public static function get_rate_percent($key_or_rate)
    {
        // stub
    }

    /**
     * Return a given rates percent.
     *
     * @param mixed $key_or_rate Tax rate ID, or the db row itself in object format.
     * @return  float
     */
    public static function get_rate_percent_value($key_or_rate)
    {
        // stub
    }

    /**
     * Get a rates code. Code is made up of COUNTRY-STATE-NAME-Priority. E.g GB-VAT-1, US-AL-TAX-1.
     *
     * @param mixed $key_or_rate Tax rate ID, or the db row itself in object format.
     * @return string
     */
    public static function get_rate_code($key_or_rate)
    {
        // stub
    }

    /**
     * Sums a set of taxes to form a single total. Values are pre-rounded to precision from 3.6.0.
     *
     * @param  array $taxes Array of taxes.
     * @return float
     */
    public static function get_tax_total($taxes)
    {
        // stub
    }

    /**
     * Gets all tax rate classes from the database.
     *
     * @since 3.7.0
     * @return array Array of tax class objects consisting of tax_rate_class_id, name, and slug.
     */
    public static function get_tax_rate_classes()
    {
        // stub
    }

    /**
     * Get store tax class names.
     *
     * @return array Array of class names ("Reduced rate", "Zero rate", etc).
     */
    public static function get_tax_classes()
    {
        // stub
    }

    /**
     * Get store tax classes as slugs.
     *
     * @since  3.0.0
     * @return array Array of class slugs ("reduced-rate", "zero-rate", etc).
     */
    public static function get_tax_class_slugs()
    {
        // stub
    }

    /**
     * Create a new tax class.
     *
     * @since 3.7.0
     * @param string $name Name of the tax class to add.
     * @param string $slug (optional) Slug of the tax class to add. Defaults to sanitized name.
     * @return WP_Error|array Returns name and slug (array) if the tax class is created, or WP_Error if something went wrong.
     */
    public static function create_tax_class($name, $slug = '')
    {
        // stub
    }

    /**
     * Get an existing tax class.
     *
     * @since 3.7.0
     * @param string     $field Field to get by. Valid values are id, name, or slug.
     * @param string|int $item Item to get.
     * @return array|bool Returns the tax class as an array. False if not found.
     */
    public static function get_tax_class_by($field, $item)
    {
        // stub
    }

    /**
     * Delete an existing tax class.
     *
     * @since 3.7.0
     * @param string     $field Field to delete by. Valid values are id, name, or slug.
     * @param string|int $item Item to delete.
     * @return WP_Error|bool Returns true if deleted successfully, false if nothing was deleted, or WP_Error if there is an invalid request.
     */
    public static function delete_tax_class_by($field, $item)
    {
        // stub
    }

    /**
     * Format the city.
     *
     * @param  string $city Value to format.
     * @return string
     */
    private static function format_tax_rate_city($city)
    {
        // stub
    }

    /**
     * Format the state.
     *
     * @param  string $state Value to format.
     * @return string
     */
    private static function format_tax_rate_state($state)
    {
        // stub
    }

    /**
     * Format the country.
     *
     * @param  string $country Value to format.
     * @return string
     */
    private static function format_tax_rate_country($country)
    {
        // stub
    }

    /**
     * Format the tax rate name.
     *
     * @param  string $name Value to format.
     * @return string
     */
    private static function format_tax_rate_name($name)
    {
        // stub
    }

    /**
     * Format the rate.
     *
     * @param  float $rate Value to format.
     * @return string
     */
    private static function format_tax_rate($rate)
    {
        // stub
    }

    /**
     * Format the priority.
     *
     * @param  string $priority Value to format.
     * @return int
     */
    private static function format_tax_rate_priority($priority)
    {
        // stub
    }

    /**
     * Format the class.
     *
     * @param  string $class Value to format.
     * @return string
     */
    public static function format_tax_rate_class($class)
    {
        // stub
    }

    /**
     * Prepare and format tax rate for DB insertion.
     *
     * @param  array $tax_rate Tax rate to format.
     * @return array
     */
    private static function prepare_tax_rate($tax_rate)
    {
        // stub
    }

    /**
     * Insert a new tax rate.
     *
     * Internal use only.
     *
     * @since 2.3.0
     *
     * @param  array $tax_rate Tax rate to insert.
     * @return int tax rate id
     */
    public static function _insert_tax_rate($tax_rate)
    {
        // stub
    }

    /**
     * Get tax rate.
     *
     * Internal use only.
     *
     * @since 2.5.0
     *
     * @param int    $tax_rate_id Tax rate ID.
     * @param string $output_type Type of output.
     * @return array|object
     */
    public static function _get_tax_rate($tax_rate_id, $output_type)
    {
        // stub
    }

    /**
     * Update a tax rate.
     *
     * Internal use only.
     *
     * @since 2.3.0
     *
     * @param int   $tax_rate_id Tax rate to update.
     * @param array $tax_rate Tax rate values.
     */
    public static function _update_tax_rate($tax_rate_id, $tax_rate)
    {
        // stub
    }

    /**
     * Delete a tax rate from the database.
     *
     * Internal use only.
     *
     * @since 2.3.0
     * @param  int $tax_rate_id Tax rate to delete.
     */
    public static function _delete_tax_rate($tax_rate_id)
    {
        // stub
    }

    /**
     * Update postcodes for a tax rate in the DB.
     *
     * Internal use only.
     *
     * @since 2.3.0
     *
     * @param int    $tax_rate_id Tax rate to update.
     * @param string $postcodes String of postcodes separated by ; characters.
     */
    public static function _update_tax_rate_postcodes($tax_rate_id, $postcodes)
    {
        // stub
    }

    /**
     * Update cities for a tax rate in the DB.
     *
     * Internal use only.
     *
     * @since 2.3.0
     *
     * @param int    $tax_rate_id Tax rate to update.
     * @param string $cities Cities to set.
     */
    public static function _update_tax_rate_cities($tax_rate_id, $cities)
    {
        // stub
    }

    /**
     * Updates locations (postcode and city).
     *
     * Internal use only.
     *
     * @since 2.3.0
     *
     * @param int    $tax_rate_id Tax rate ID to update.
     * @param array  $values Values to set.
     * @param string $type Location type.
     */
    private static function update_tax_rate_locations($tax_rate_id, $values, $type)
    {
        // stub
    }

    /**
     * Used by admin settings page.
     *
     * @param string $tax_class Tax class slug.
     *
     * @return array|null|object
     */
    public static function get_rates_for_tax_class($tax_class)
    {
        // stub
    }

}

