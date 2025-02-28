<?php

/**
 * Legacy Coupon.
 *
 * Legacy and deprecated functions are here to keep the WC_Legacy_Coupon class clean.
 * This class will be removed in future versions.
 *
 * @class       WC_Legacy_Coupon
 * @version     3.0.0
 * @package     WooCommerce\Classes
 * @category    Class
 * @author      WooThemes
 */
abstract class WC_Legacy_Coupon extends \WC_Data
{
    /**
     * Magic __isset method for backwards compatibility. Legacy properties which could be accessed directly in the past.
     * @param  string $key
     * @return bool
     */
    public function __isset($key)
    {
    }
    /**
     * Magic __get method for backwards compatibility. Maps legacy vars to new getters.
     * @param  string $key
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Format loaded data as array.
     * @param  string|array $array
     * @return array
     */
    public function format_array($array)
    {
    }
    /**
     * Check if coupon needs applying before tax.
     *
     * @return bool
     */
    public function apply_before_tax()
    {
    }
    /**
     * Check if a coupon enables free shipping.
     *
     * @return bool
     */
    public function enable_free_shipping()
    {
    }
    /**
     * Check if a coupon excludes sale items.
     *
     * @return bool
     */
    public function exclude_sale_items()
    {
    }
    /**
     * Increase usage count for current coupon.
     *
     * @param string $used_by Either user ID or billing email
     */
    public function inc_usage_count($used_by = '')
    {
    }
    /**
     * Decrease usage count for current coupon.
     *
     * @param string $used_by Either user ID or billing email
     */
    public function dcr_usage_count($used_by = '')
    {
    }
}