<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Class containing utility methods for dealing with the Cart and Checkout blocks.
 */
class CartCheckoutUtils
{
    /**
     * Checks if the default cart page is using the Cart block.
     *
     * @return bool true if the WC cart page is using the Cart block.
     */
    public static function is_cart_block_default()
    {
    }
    /**
     * Checks if the default checkout page is using the Checkout block.
     *
     * @return bool true if the WC checkout page is using the Checkout block.
     */
    public static function is_checkout_block_default()
    {
    }
    /**
     * Migrate checkout block field visibility attributes to settings when using the checkout block.
     *
     * This migration routine is called if the options (woocommerce_checkout_phone_field, woocommerce_checkout_company_field,
     * woocommerce_checkout_address_2_field) are not set. They are not set by default; they were orignally set by the
     * customizer interface of the legacy shortcode based checkout.
     *
     * Once migration is initiated, the settings will be updated and will not trigger this routine again.
     *
     * Note: The block only stores non-default attributes. Not all attributes will be present.
     *
     * e.g. `{"showCompanyField":true,"requireCompanyField":true,"showApartmentField":false,"className":"wc-block-checkout"}`
     *
     * If the attributes are missing, we assume default values are needed.
     */
    protected static function migrate_checkout_block_field_visibility_attributes()
    {
    }
    /**
     * Get the default visibility for the address_2 field.
     *
     * @return string
     */
    public static function get_company_field_visibility()
    {
    }
    /**
     * Get the default visibility for the address_2 field.
     *
     * @return string
     */
    public static function get_address_2_field_visibility()
    {
    }
    /**
     * Get the default visibility for the address_2 field.
     *
     * @return string
     */
    public static function get_phone_field_visibility()
    {
    }
    /**
     * Checks if the template overriding the page loads the page content or not.
     * Templates by default load the page content, but if that block is deleted the content can get out of sync with the one presented in the page editor.
     *
     * @param string $block The block to check.
     *
     * @return bool true if the template has out of sync content.
     */
    public static function is_overriden_by_custom_template_content(string $block) : bool
    {
    }
    /**
     * Gets country codes, names, states, and locale information.
     *
     * @return array
     */
    public static function get_country_data()
    {
    }
    /**
     * Removes accents from an array of values, sorts by the values, then returns the original array values sorted.
     *
     * @param array $array Array of values to sort.
     * @return array Sorted array.
     */
    protected static function deep_sort_with_accents($array)
    {
    }
    /**
     * Retrieves formatted shipping zones from WooCommerce.
     *
     * @return array An array of formatted shipping zones.
     */
    public static function get_shipping_zones()
    {
    }
    /**
     * Recursively search the checkout block to find the express checkout block and
     * get the button style attributes
     *
     * @param array  $blocks Blocks to search.
     * @param string $cart_or_checkout The block type to check.
     */
    public static function find_express_checkout_attributes($blocks, $cart_or_checkout)
    {
    }
    /**
     * Given an array of blocks, find the express payment block and update its attributes.
     *
     * @param array  $blocks Blocks to search.
     * @param string $cart_or_checkout The block type to check.
     * @param array  $updated_attrs The new attributes to set.
     */
    public static function update_blocks_with_new_attrs(&$blocks, $cart_or_checkout, $updated_attrs)
    {
    }
}