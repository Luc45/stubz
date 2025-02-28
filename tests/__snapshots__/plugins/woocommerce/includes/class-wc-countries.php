<?php
/**
 * The WooCommerce countries class stores country/state data.
 */
class WC_Countries
{
    /**
     * Locales list.
     *
     * @var array
     */
    public $locale = array();
    /**
     * List of address formats for locales.
     *
     * @var array
     */
    public $address_formats = array();
    /**
     * Cache of geographical regions.
     *
     * Only to be used by the get_* and load_* methods, as other methods may expect the regions to be
     * loaded on demand.
     *
     * @var array
     */
    private $geo_cache = array();
    /**
     * Auto-load in-accessible properties on demand.
     *
     * @param  mixed $key Key.
     * @return mixed
     */
    public function __get($key)
{
}
    /**
     * Get all countries.
     *
     * @return array
     */
    public function get_countries()
{
}
    /**
     * Check if a given code represents a valid ISO 3166-1 alpha-2 code for a country known to us.
     *
     * @since 5.1.0
     * @param string $country_code The country code to check as a ISO 3166-1 alpha-2 code.
     * @return bool True if the country is known to us, false otherwise.
     */
    public function country_exists($country_code)
{
}
    /**
     * Get all continents.
     *
     * @return array
     */
    public function get_continents()
{
}
    /**
     * Get continent code for a country code.
     *
     * @since 2.6.0
     * @param string $cc Country code.
     * @return string
     */
    public function get_continent_code_for_country($cc)
{
}
    /**
     * Get calling code for a country code.
     *
     * @since 3.6.0
     * @param string $cc Country code.
     * @return string|array Some countries have multiple. The code will be stripped of - and spaces and always be prefixed with +.
     */
    public function get_country_calling_code($cc)
{
}
    /**
     * Get continents that the store ships to.
     *
     * @since 3.6.0
     * @return array
     */
    public function get_shipping_continents()
{
}
    /**
     * Load the states.
     *
     * @deprecated 3.6.0 This method was used to load state files, but is no longer needed. @see get_states().
     */
    public function load_country_states()
{
}
    /**
     * Get the states for a country.
     *
     * @param  string $cc Country code.
     * @return false|array of states
     */
    public function get_states($cc = null)
{
}
    /**
     * Get the base address (first line) for the store.
     *
     * @since 3.1.1
     * @return string
     */
    public function get_base_address()
{
}
    /**
     * Get the base address (second line) for the store.
     *
     * @since 3.1.1
     * @return string
     */
    public function get_base_address_2()
{
}
    /**
     * Get the base country for the store.
     *
     * @return string
     */
    public function get_base_country()
{
}
    /**
     * Get the base state for the store.
     *
     * @return string
     */
    public function get_base_state()
{
}
    /**
     * Get the base city for the store.
     *
     * @version 3.1.1
     * @return string
     */
    public function get_base_city()
{
}
    /**
     * Get the base postcode for the store.
     *
     * @since 3.1.1
     * @return string
     */
    public function get_base_postcode()
{
}
    /**
     * Get countries that the store sells to.
     *
     * @return array
     */
    public function get_allowed_countries()
{
}
    /**
     * Get countries that the store ships to.
     *
     * @return array
     */
    public function get_shipping_countries()
{
}
    /**
     * Get allowed country states.
     *
     * @return array
     */
    public function get_allowed_country_states()
{
}
    /**
     * Get shipping country states.
     *
     * @return array
     */
    public function get_shipping_country_states()
{
}
    /**
     * Gets an array of countries in the EU.
     *
     * @param  string $type Type of countries to retrieve. Blank for EU member countries. eu_vat for EU VAT countries.
     * @return string[]
     */
    public function get_european_union_countries($type = '')
{
}
    /**
     * Gets an array of Non-EU countries that use VAT as the Local name for their taxes based on this list - https://en.wikipedia.org/wiki/Value-added_tax#Non-European_Union_countries
     *
     * @deprecated 4.0.0
     * @since 3.9.0
     * @return string[]
     */
    public function countries_using_vat()
{
}
    /**
     * Gets an array of countries using VAT.
     *
     * @since 4.0.0
     * @return string[] of country codes.
     */
    public function get_vat_countries()
{
}
    /**
     * Gets the correct string for shipping - either 'to the' or 'to'.
     *
     * @param string $country_code Country code.
     * @return string
     */
    public function shipping_to_prefix($country_code = '')
{
}
    /**
     * Prefix certain countries with 'the'.
     *
     * @param string $country_code Country code.
     * @return string
     */
    public function estimated_for_prefix($country_code = '')
{
}
    /**
     * Correctly name tax in some countries VAT on the frontend.
     *
     * @return string
     */
    public function tax_or_vat()
{
}
    /**
     * Include the Inc Tax label.
     *
     * @return string
     */
    public function inc_tax_or_vat()
{
}
    /**
     * Include the Ex Tax label.
     *
     * @return string
     */
    public function ex_tax_or_vat()
{
}
    /**
     * Outputs the list of countries and states for use in dropdown boxes.
     *
     * @param string $selected_country Selected country.
     * @param string $selected_state   Selected state.
     * @param bool   $escape           If we should escape HTML.
     */
    public function country_dropdown_options($selected_country = '', $selected_state = '', $escape = false)
{
}
    /**
     * Get country address formats.
     *
     * These define how addresses are formatted for display in various countries.
     *
     * @return array
     */
    public function get_address_formats()
{
}
    /**
     * Get country address format.
     *
     * @param  array  $args Arguments.
     * @param  string $separator How to separate address lines. @since 3.5.0.
     * @return string
     */
    public function get_formatted_address($args = array(), $separator = '<br/>')
{
}
    /**
     * Trim white space and commas off a line.
     *
     * @param  string $line Line.
     * @return string
     */
    private function trim_formatted_address_line($line)
{
}
    /**
     * Returns the fields we show by default. This can be filtered later on.
     *
     * @return array
     */
    public function get_default_address_fields()
{
}
    /**
     * Get JS selectors for fields which are shown/hidden depending on the locale.
     *
     * @return array
     */
    public function get_country_locale_field_selectors()
{
}
    /**
     * Get country locale settings.
     *
     * These locales override the default country selections after a country is chosen.
     *
     * @return array
     */
    public function get_country_locale()
{
}
    /**
     * Apply locale and get address fields.
     *
     * @param  mixed  $country Country.
     * @param  string $type    Address type, defaults to 'billing_'.
     * @return array
     */
    public function get_address_fields($country = '', $type = 'billing_')
{
}
}
