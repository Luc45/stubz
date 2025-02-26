<?php

namespace ;

/**
 * Legacy cart class.
 */
#[AllowDynamicProperties]
abstract class WC_Legacy_Cart extends \
{
    /**
     * Array of defaults. Not used since 3.2.
     *
     * @deprecated 3.2.0
     */
    public $cart_session_data = array(
  'cart_contents_total' => 0,
  'total' => 0,
  'subtotal' => 0,
  'subtotal_ex_tax' => 0,
  'tax_total' => 0,
  'taxes' => 
  array(
  ),
  'shipping_taxes' => 
  array(
  ),
  'discount_cart' => 0,
  'discount_cart_tax' => 0,
  'shipping_total' => 0,
  'shipping_tax_total' => 0,
  'coupon_discount_amounts' => 
  array(
  ),
  'coupon_discount_tax_amounts' => 
  array(
  ),
  'fee_total' => 0,
  'fees' => 
  array(
  ),
);

    /**
     * Contains an array of coupon usage counts after they have been applied.
     *
     * @deprecated 3.2.0
     * @var array
     */
    public $coupon_applied_count = array(
);

    /**
     * Map legacy variables.
     *
     * @param string $name Property name.
     * @param mixed  $value Value to set.
     */
    public function __isset($name)
    {
        // stub
    }

    /**
     * Magic getters.
     *
     * If you add/remove cases here please update $legacy_keys in __isset accordingly.
     *
     * @param string $name Property name.
     * @return mixed
     */
    public function __get($name)
    {
        // stub
    }

    /**
     * Map legacy variables to setters.
     *
     * @param string $name Property name.
     * @param mixed  $value Value to set.
     */
    public function __set($name, $value)
    {
        // stub
    }

    /**
     * Methods moved to session class in 3.2.0.
     */
    public function get_cart_from_session()
    {
        // stub
    }

    public function maybe_set_cart_cookies()
    {
        // stub
    }

    public function set_session()
    {
        // stub
    }

    public function get_cart_for_session()
    {
        // stub
    }

    public function persistent_cart_update()
    {
        // stub
    }

    public function persistent_cart_destroy()
    {
        // stub
    }

    /**
     * Get the total of all cart discounts.
     *
     * @return float
     */
    public function get_cart_discount_total()
    {
        // stub
    }

    /**
     * Get the total of all cart tax discounts (used for discounts on tax inclusive prices).
     *
     * @return float
     */
    public function get_cart_discount_tax_total()
    {
        // stub
    }

    /**
     * Renamed for consistency.
     *
     * @param string $coupon_code
     * @return bool	True if the coupon is applied, false if it does not exist or cannot be applied.
     */
    public function add_discount($coupon_code)
    {
        // stub
    }

    /**
     * Remove taxes.
     *
     * @deprecated 3.2.0 Taxes are never calculated if customer is tax except making this function unused.
     */
    public function remove_taxes()
    {
        // stub
    }

    /**
     * Init.
     *
     * @deprecated 3.2.0 Session is loaded via hooks rather than directly.
     */
    public function init()
    {
        // stub
    }

    /**
     * Function to apply discounts to a product and get the discounted price (before tax is applied).
     *
     * @deprecated 3.2.0 Calculation and coupon logic is handled in WC_Cart_Totals.
     * @param mixed $values Cart item.
     * @param mixed $price Price of item.
     * @param bool  $add_totals Legacy.
     * @return float price
     */
    public function get_discounted_price($values, $price, $add_totals = false)
    {
        // stub
    }

    /**
     * Gets the url to the cart page.
     *
     * @deprecated 2.5.0 in favor to wc_get_cart_url()
     * @return string url to page
     */
    public function get_cart_url()
    {
        // stub
    }

    /**
     * Gets the url to the checkout page.
     *
     * @deprecated 2.5.0 in favor to wc_get_checkout_url()
     * @return string url to page
     */
    public function get_checkout_url()
    {
        // stub
    }

    /**
     * Sees if we need a shipping address.
     *
     * @deprecated 2.5.0 in favor to wc_ship_to_billing_address_only()
     * @return bool
     */
    public function ship_to_billing_address_only()
    {
        // stub
    }

    /**
     * Coupons enabled function. Filterable.
     *
     * @deprecated 2.5.0
     * @return bool
     */
    public function coupons_enabled()
    {
        // stub
    }

    /**
     * Gets the total (product) discount amount - these are applied before tax.
     *
     * @deprecated 2.3.0 Order discounts (after tax) removed in 2.3 so multiple methods for discounts are no longer required.
     * @return mixed formatted price or false if there are none.
     */
    public function get_discounts_before_tax()
    {
        // stub
    }

    /**
     * Get the total of all order discounts (after tax discounts).
     *
     * @deprecated 2.3.0 Order discounts (after tax) removed in 2.3.
     * @return int
     */
    public function get_order_discount_total()
    {
        // stub
    }

    /**
     * Function to apply cart discounts after tax.
     *
     * @deprecated 2.3.0 Coupons can not be applied after tax.
     * @param $values
     * @param $price
     */
    public function apply_cart_discounts_after_tax($values, $price)
    {
        // stub
    }

    /**
     * Function to apply product discounts after tax.
     *
     * @deprecated 2.3.0 Coupons can not be applied after tax.
     *
     * @param $values
     * @param $price
     */
    public function apply_product_discounts_after_tax($values, $price)
    {
        // stub
    }

    /**
     * Gets the order discount amount - these are applied after tax.
     *
     * @deprecated 2.3.0 Coupons can not be applied after tax.
     */
    public function get_discounts_after_tax()
    {
        // stub
    }

}

