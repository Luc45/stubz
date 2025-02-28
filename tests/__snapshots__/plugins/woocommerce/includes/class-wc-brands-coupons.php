<?php
/**
 * WC_Brands_Coupons class.
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @version 9.4.0
 */
class WC_Brands_Coupons
{
    public const E_WC_COUPON_EXCLUDED_BRANDS = 301;
    /**
     * Constructor
     */
    public function __construct()
{
}
    /**
     * Validate the coupon based on included and/or excluded product brands.
     *
     * If one of the following conditions are met, an exception will be thrown and
     * displayed as an error notice on the cart page:
     *
     * 1) Coupon has a brand requirement but no products in the cart have the brand.
     * 2) All products in the cart match the brand exclusion rule.
     * 3) For a cart discount, there is at least one product in cart that matches exclusion rule.
     *
     * @throws Exception Throws Exception for invalid coupons.
     * @param  bool         $valid  Whether the coupon is valid.
     * @param  WC_Coupon    $coupon Coupon object.
     * @param  WC_Discounts $discounts Discounts object.
     * @return bool         $valid  True if coupon is valid, otherwise Exception will be thrown.
     */
    public function is_coupon_valid($valid, $coupon, $discounts = null)
{
}
    /**
     * Check if a coupon is valid for a product.
     *
     * This allows percentage and product discounts to apply to only
     * the correct products in the cart.
     *
     * @param  bool       $valid   Whether the product should get the coupon's discounts.
     * @param  WC_Product $product WC Product Object.
     * @param  WC_Coupon  $coupon  Coupon object.
     * @return bool       $valid
     */
    public function is_valid_for_product($valid, $product, $coupon)
{
}
    /**
     * Display a custom error message when a cart discount coupon does not validate
     * because an excluded brand was found in the cart.
     *
     * @param  string $err      The error message.
     * @param  string $err_code The error code.
     * @return string
     */
    public function brand_exclusion_error($err, $err_code)
{
}
}
