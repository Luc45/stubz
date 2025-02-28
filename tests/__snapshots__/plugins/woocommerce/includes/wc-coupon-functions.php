<?php
/**
 * Get coupon types.
 *
 * @return array
 */
function wc_get_coupon_types()
{
}
/**
 * Get a coupon type's name.
 *
 * @param string $type Coupon type.
 * @return string
 */
function wc_get_coupon_type($type = '')
{
}
/**
 * Coupon types that apply to individual products. Controls which validation rules will apply.
 *
 * @since  2.5.0
 * @return array
 */
function wc_get_product_coupon_types()
{
}
/**
 * Coupon types that apply to the cart as a whole. Controls which validation rules will apply.
 *
 * @since  2.5.0
 * @return array
 */
function wc_get_cart_coupon_types()
{
}
/**
 * Check if coupons are enabled.
 * Filterable.
 *
 * @since  2.5.0
 *
 * @return bool
 */
function wc_coupons_enabled()
{
}
/**
 * Get coupon code by ID.
 *
 * @since 3.0.0
 * @param int $id Coupon ID.
 * @return string
 */
function wc_get_coupon_code_by_id($id)
{
}
/**
 * Get coupon ID by code.
 *
 * @since 3.0.0
 * @param string $code    Coupon code.
 * @param int    $exclude Used to exclude an ID from the check if you're checking existence.
 * @return int
 */
function wc_get_coupon_id_by_code($code, $exclude = 0)
{
}
