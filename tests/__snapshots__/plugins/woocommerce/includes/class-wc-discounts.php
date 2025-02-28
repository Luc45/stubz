<?php
/**
 * Discounts class.
 */
class WC_Discounts
{
    /**
     * Reference to cart or order object.
     *
     * @since 3.2.0
     * @var WC_Cart|WC_Order
     */
    protected $object;
    /**
     * An array of items to discount.
     *
     * @var array
     */
    protected $items = array();
    /**
     * An array of discounts which have been applied to items.
     *
     * @var array[] Code => Item Key => Value
     */
    protected $discounts = array();
    /**
     * WC_Discounts Constructor.
     *
     * @param WC_Cart|WC_Order $object Cart or order object.
     */
    public function __construct($object = null)
{
}
    /**
     * Set items directly. Used by WC_Cart_Totals.
     *
     * @since 3.2.3
     * @param array $items Items to set.
     */
    public function set_items($items)
{
}
    /**
     * Normalise cart items which will be discounted.
     *
     * @since 3.2.0
     * @param WC_Cart $cart Cart object.
     */
    public function set_items_from_cart($cart)
{
}
    /**
     * Normalise order items which will be discounted.
     *
     * @since 3.2.0
     * @param WC_Order $order Order object.
     */
    public function set_items_from_order($order)
{
}
    /**
     * Get the object concerned.
     *
     * @since  3.3.2
     * @return object
     */
    public function get_object()
{
}
    /**
     * Get items.
     *
     * @since  3.2.0
     * @return object[]
     */
    public function get_items()
{
}
    /**
     * Get items to validate.
     *
     * @since  3.3.2
     * @return object[]
     */
    public function get_items_to_validate()
{
}
    /**
     * Get discount by key with or without precision.
     *
     * @since  3.2.0
     * @param  string $key name of discount row to return.
     * @param  bool   $in_cents Should the totals be returned in cents, or without precision.
     * @return float
     */
    public function get_discount($key, $in_cents = false)
{
}
    /**
     * Get all discount totals.
     *
     * @since  3.2.0
     * @param  bool $in_cents Should the totals be returned in cents, or without precision.
     * @return array
     */
    public function get_discounts($in_cents = false)
{
}
    /**
     * Get all discount totals per item.
     *
     * @since  3.2.0
     * @param  bool $in_cents Should the totals be returned in cents, or without precision.
     * @return array
     */
    public function get_discounts_by_item($in_cents = false)
{
}
    /**
     * Get all discount totals per coupon.
     *
     * @since  3.2.0
     * @param  bool $in_cents Should the totals be returned in cents, or without precision.
     * @return array
     */
    public function get_discounts_by_coupon($in_cents = false)
{
}
    /**
     * Get discounted price of an item without precision.
     *
     * @since  3.2.0
     * @param  object $item Get data for this item.
     * @return float
     */
    public function get_discounted_price($item)
{
}
    /**
     * Get discounted price of an item to precision (in cents).
     *
     * @since  3.2.0
     * @param  object $item Get data for this item.
     * @return int
     */
    public function get_discounted_price_in_cents($item)
{
}
    /**
     * Apply a discount to all items using a coupon.
     *
     * @since  3.2.0
     * @param  WC_Coupon $coupon Coupon object being applied to the items.
     * @param  bool      $validate Set to false to skip coupon validation.
     * @throws Exception Error message when coupon isn't valid.
     * @return bool|WP_Error True if applied or WP_Error instance in failure.
     */
    public function apply_coupon($coupon, $validate = true)
{
}
    /**
     * Sort by price.
     *
     * @since  3.2.0
     * @param  array $a First element.
     * @param  array $b Second element.
     * @return int
     */
    protected function sort_by_price($a, $b)
{
}
    /**
     * Filter out all products which have been fully discounted to 0.
     * Used as array_filter callback.
     *
     * @since  3.2.0
     * @param  object $item Get data for this item.
     * @return bool
     */
    protected function filter_products_with_price($item)
{
}
    /**
     * Get items which the coupon should be applied to.
     *
     * @since  3.2.0
     * @param  object $coupon Coupon object.
     * @return array
     */
    protected function get_items_to_apply_coupon($coupon)
{
}
    /**
     * Apply percent discount to items and return an array of discounts granted.
     *
     * @since  3.2.0
     * @param  WC_Coupon $coupon Coupon object. Passed through filters.
     * @param  array     $items_to_apply Array of items to apply the coupon to.
     * @return int Total discounted.
     */
    protected function apply_coupon_percent($coupon, $items_to_apply)
{
}
    /**
     * Apply fixed product discount to items.
     *
     * @since  3.2.0
     * @param  WC_Coupon $coupon Coupon object. Passed through filters.
     * @param  array     $items_to_apply Array of items to apply the coupon to.
     * @param  int       $amount Fixed discount amount to apply in cents. Leave blank to pull from coupon.
     * @return int Total discounted.
     */
    protected function apply_coupon_fixed_product($coupon, $items_to_apply, $amount = null)
{
}
    /**
     * Apply fixed cart discount to items.
     *
     * @since  3.2.0
     * @param  WC_Coupon $coupon Coupon object. Passed through filters.
     * @param  array     $items_to_apply Array of items to apply the coupon to.
     * @param  int       $amount Fixed discount amount to apply in cents. Leave blank to pull from coupon.
     * @return int Total discounted.
     */
    protected function apply_coupon_fixed_cart($coupon, $items_to_apply, $amount = null)
{
}
    /**
     * Apply custom coupon discount to items.
     *
     * @since  3.3
     * @param  WC_Coupon $coupon Coupon object. Passed through filters.
     * @param  array     $items_to_apply Array of items to apply the coupon to.
     * @return int Total discounted.
     */
    protected function apply_coupon_custom($coupon, $items_to_apply)
{
}
    /**
     * Deal with remaining fractional discounts by splitting it over items
     * until the amount is expired, discounting 1 cent at a time.
     *
     * @since 3.2.0
     * @param  WC_Coupon $coupon Coupon object if applicable. Passed through filters.
     * @param  array     $items_to_apply Array of items to apply the coupon to.
     * @param  int       $amount Fixed discount amount to apply.
     * @return int Total discounted.
     */
    protected function apply_coupon_remainder($coupon, $items_to_apply, $amount)
{
}
    /**
     * Ensure coupon exists or throw exception.
     *
     * A coupon is also considered to no longer exist if it has been placed in the trash, even if the trash has not yet
     * been emptied.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_exists($coupon)
{
}
    /**
     * Ensure coupon usage limit is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_usage_limit($coupon)
{
}
    /**
     * Ensure coupon user usage limit is valid or throw exception.
     *
     * Per user usage limit - check here if user is logged in (against user IDs).
     * Checked again for emails later on in WC_Cart::check_customer_coupons().
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon  Coupon data.
     * @param  int       $user_id User ID.
     * @return bool
     */
    protected function validate_coupon_user_usage_limit($coupon, $user_id = 0)
{
}
    /**
     * Ensure coupon date is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_expiry_date($coupon)
{
}
    /**
     * Ensure coupon amount is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon   Coupon data.
     * @return bool
     */
    protected function validate_coupon_minimum_amount($coupon)
{
}
    /**
     * Ensure coupon amount is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon   Coupon data.
     * @return bool
     */
    protected function validate_coupon_maximum_amount($coupon)
{
}
    /**
     * Ensure coupon is valid for products in the list is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_product_ids($coupon)
{
}
    /**
     * Ensure coupon is valid for product categories in the list is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_product_categories($coupon)
{
}
    /**
     * Ensure coupon is valid for sale items in the list is valid or throw exception.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_sale_items($coupon)
{
}
    /**
     * All exclusion rules must pass at the same time for a product coupon to be valid.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_excluded_items($coupon)
{
}
    /**
     * Cart discounts cannot be added if non-eligible product is found.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_eligible_items($coupon)
{
}
    /**
     * Exclude products.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_excluded_product_ids($coupon)
{
}
    /**
     * Exclude categories from product list.
     *
     * @since  3.2.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_excluded_product_categories($coupon)
{
}
    /**
     * Ensure coupon is valid for allowed emails or throw exception.
     *
     * @since  8.6.0
     * @throws Exception Error message.
     * @param  WC_Coupon $coupon Coupon data.
     * @return bool
     */
    protected function validate_coupon_allowed_emails($coupon)
{
}
    /**
     * Get the object subtotal
     *
     * @return int
     */
    protected function get_object_subtotal()
{
}
    /**
     * Check if a coupon is valid.
     *
     * Error Codes:
     * - 100: Invalid filtered.
     * - 101: Invalid removed.
     * - 102: Not yours removed.
     * - 103: Already applied.
     * - 104: Individual use only.
     * - 105: Not exists.
     * - 106: Usage limit reached.
     * - 107: Expired.
     * - 108: Minimum spend limit not met.
     * - 109: Not applicable.
     * - 110: Not valid for sale items.
     * - 111: Missing coupon code.
     * - 112: Maximum spend limit met.
     * - 113: Excluded products.
     * - 114: Excluded categories.
     *
     * @param WC_Coupon $coupon Coupon data.
     *
     * @return bool|WP_Error
     * @throws Exception Error message.
     * @since  3.2.0
     */
    public function is_coupon_valid($coupon)
{
}
}
