<?php
/**
 * WC_Cart class.
 */
class WC_Cart extends \WC_Legacy_Cart
{
    /**
     * Contains an array of cart items.
     *
     * @var array
     */
    public $cart_contents = array();
    /**
     * Contains an array of removed cart items so we can restore them if needed.
     *
     * @var array
     */
    public $removed_cart_contents = array();
    /**
     * Contains an array of coupon codes applied to the cart.
     *
     * @var array
     */
    public $applied_coupons = array();
    /**
     * This stores the chosen shipping methods for the cart item packages.
     *
     * @var array
     */
    protected $shipping_methods = null;
    /**
     * Total defaults used to reset.
     *
     * @var array
     */
    protected $default_totals = array (
  'subtotal' => 0,
  'subtotal_tax' => 0,
  'shipping_total' => 0,
  'shipping_tax' => 0,
  'shipping_taxes' => 
  array(),
  'discount_total' => 0,
  'discount_tax' => 0,
  'cart_contents_total' => 0,
  'cart_contents_tax' => 0,
  'cart_contents_taxes' => 
  array(),
  'fee_total' => 0,
  'fee_tax' => 0,
  'fee_taxes' => 
  array(),
  'total' => 0,
  'total_tax' => 0,
);
    /**
     * Store calculated totals.
     *
     * @var array
     */
    protected $totals = array();
    /**
     * Reference to the cart session handling class.
     *
     * @var WC_Cart_Session
     */
    protected $session = null;
    /**
     * Reference to the cart fees API class.
     *
     * @var WC_Cart_Fees
     */
    protected $fees_api = null;
    /**
     * Constructor for the cart class. Loads options and hooks in the init method.
     */
    public function __construct()
{
}
    /**
     * When cloning, ensure object properties are handled.
     *
     * These properties store a reference to the cart, so we use new instead of clone.
     */
    public function __clone()
{
}
    /**
     * Gets cart contents.
     *
     * @since 3.2.0
     * @return array of cart items
     */
    public function get_cart_contents()
{
}
    /**
     * Return items removed from the cart.
     *
     * @since 3.2.0
     * @return array
     */
    public function get_removed_cart_contents()
{
}
    /**
     * Gets the array of applied coupon codes.
     *
     * @return array of applied coupons
     */
    public function get_applied_coupons()
{
}
    /**
     * Return all calculated coupon totals.
     *
     * @since 3.2.0
     * @return array
     */
    public function get_coupon_discount_totals()
{
}
    /**
     * Return all calculated coupon tax totals.
     *
     * @since 3.2.0
     * @return array
     */
    public function get_coupon_discount_tax_totals()
{
}
    /**
     * Return all calculated totals.
     *
     * @since 3.2.0
     * @return array
     */
    public function get_totals()
{
}
    /**
     * Get a total.
     *
     * @since 3.2.0
     * @param string $key Key of element in $totals array.
     * @return mixed
     */
    protected function get_totals_var($key)
{
}
    /**
     * Get subtotal.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_subtotal()
{
}
    /**
     * Get subtotal_tax.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_subtotal_tax()
{
}
    /**
     * Get discount_total.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_discount_total()
{
}
    /**
     * Get discount_tax.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_discount_tax()
{
}
    /**
     * Get shipping_total.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_shipping_total()
{
}
    /**
     * Get shipping_tax.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_shipping_tax()
{
}
    /**
     * Gets cart total. This is the total of items in the cart, but after discounts. Subtotal is before discounts.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_cart_contents_total()
{
}
    /**
     * Gets cart tax amount.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_cart_contents_tax()
{
}
    /**
     * Gets cart total after calculation.
     *
     * @since 3.2.0
     * @param string $context If the context is view, the value will be formatted for display. This keeps it compatible with pre-3.2 versions.
     * @return float|string
     */
    public function get_total($context = 'view')
{
}
    /**
     * Get total tax amount.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_total_tax()
{
}
    /**
     * Get total fee amount.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_fee_total()
{
}
    /**
     * Get total fee tax amount.
     *
     * @since 3.2.0
     * @return float
     */
    public function get_fee_tax()
{
}
    /**
     * Get taxes.
     *
     * @since 3.2.0
     */
    public function get_shipping_taxes()
{
}
    /**
     * Get taxes.
     *
     * @since 3.2.0
     */
    public function get_cart_contents_taxes()
{
}
    /**
     * Get taxes.
     *
     * @since 3.2.0
     */
    public function get_fee_taxes()
{
}
    /**
     * Return whether or not the cart is displaying prices including tax, rather than excluding tax.
     *
     * @since 3.3.0
     * @return bool
     */
    public function display_prices_including_tax()
{
}
    /**
     * Sets the contents of the cart.
     *
     * @param array $value Cart array.
     */
    public function set_cart_contents($value)
{
}
    /**
     * Set items removed from the cart.
     *
     * @since 3.2.0
     * @param array $value Item array.
     */
    public function set_removed_cart_contents($value = array())
{
}
    /**
     * Sets the array of applied coupon codes.
     *
     * @param array $value List of applied coupon codes.
     */
    public function set_applied_coupons($value = array())
{
}
    /**
     * Sets the array of calculated coupon totals.
     *
     * @since 3.2.0
     * @param array $value Value to set.
     */
    public function set_coupon_discount_totals($value = array())
{
}
    /**
     * Sets the array of calculated coupon tax totals.
     *
     * @since 3.2.0
     * @param array $value Value to set.
     */
    public function set_coupon_discount_tax_totals($value = array())
{
}
    /**
     * Set all calculated totals.
     *
     * @since 3.2.0
     * @param array $value Value to set.
     */
    public function set_totals($value = array())
{
}
    /**
     * Set subtotal.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_subtotal($value)
{
}
    /**
     * Set subtotal.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_subtotal_tax($value)
{
}
    /**
     * Set discount_total.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_discount_total($value)
{
}
    /**
     * Set discount_tax.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_discount_tax($value)
{
}
    /**
     * Set shipping_total.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_shipping_total($value)
{
}
    /**
     * Set shipping_tax.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_shipping_tax($value)
{
}
    /**
     * Set cart_contents_total.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_cart_contents_total($value)
{
}
    /**
     * Set cart tax amount.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_cart_contents_tax($value)
{
}
    /**
     * Set cart total.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_total($value)
{
}
    /**
     * Set total tax amount.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_total_tax($value)
{
}
    /**
     * Set fee amount.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_fee_total($value)
{
}
    /**
     * Set fee tax.
     *
     * @since 3.2.0
     * @param string $value Value to set.
     */
    public function set_fee_tax($value)
{
}
    /**
     * Set taxes.
     *
     * @since 3.2.0
     * @param array $value Tax values.
     */
    public function set_shipping_taxes($value)
{
}
    /**
     * Set taxes.
     *
     * @since 3.2.0
     * @param array $value Tax values.
     */
    public function set_cart_contents_taxes($value)
{
}
    /**
     * Set taxes.
     *
     * @since 3.2.0
     * @param array $value Tax values.
     */
    public function set_fee_taxes($value)
{
}
    /**
     * Returns the cart and shipping taxes, merged.
     *
     * @return array merged taxes
     */
    public function get_taxes()
{
}
    /**
     * Returns the contents of the cart in an array.
     *
     * @return array contents of the cart
     */
    public function get_cart()
{
}
    /**
     * Returns a specific item in the cart.
     *
     * @param string $item_key Cart item key.
     * @return array Item data
     */
    public function get_cart_item($item_key)
{
}
    /**
     * Checks if the cart is empty.
     *
     * @return bool
     */
    public function is_empty()
{
}
    /**
     * Empties the cart and optionally the persistent cart too.
     *
     * @since 9.7.0 Also clears shipping methods and packages since the items they are linked to are cleared.
     *
     * @param bool $clear_persistent_cart Should the persistent cart be cleared too. Defaults to true.
     */
    public function empty_cart($clear_persistent_cart = true)
{
}
    /**
     * Get number of items in the cart.
     *
     * @return int
     */
    public function get_cart_contents_count()
{
}
    /**
     * Get weight of items in the cart.
     *
     * @since 2.5.0
     * @return float
     */
    public function get_cart_contents_weight()
{
}
    /**
     * Get cart items quantities - merged so we can do accurate stock checks on items across multiple lines.
     *
     * @return array
     */
    public function get_cart_item_quantities()
{
}
    /**
     * Check all cart items for errors.
     */
    public function check_cart_items()
{
}
    /**
     * Check cart coupons for errors.
     */
    public function check_cart_coupons()
{
}
    /**
     * Looks through cart items and checks the posts are not trashed or deleted.
     *
     * @return bool|WP_Error
     */
    public function check_cart_item_validity()
{
}
    /**
     * Looks through the cart to check each item is in stock. If not, add an error.
     *
     * @return bool|WP_Error
     */
    public function check_cart_item_stock()
{
}
    /**
     * Gets and formats a list of cart item data + variations for display on the frontend.
     *
     * @param array $cart_item Cart item object.
     * @param bool  $flat Should the data be returned flat or in a list.
     * @return string
     */
    public function get_item_data($cart_item, $flat = false)
{
}
    /**
     * Gets cross sells based on the items in the cart.
     *
     * @return array cross_sells (item ids)
     */
    public function get_cross_sells()
{
}
    /**
     * Gets the url to remove an item from the cart.
     *
     * @param string $cart_item_key contains the id of the cart item.
     * @return string url to page
     */
    public function get_remove_url($cart_item_key)
{
}
    /**
     * Gets the url to re-add an item into the cart.
     *
     * @param  string $cart_item_key Cart item key to undo.
     * @return string url to page
     */
    public function get_undo_url($cart_item_key)
{
}
    /**
     * Get taxes, merged by code, formatted ready for output.
     *
     * @return array
     */
    public function get_tax_totals()
{
}
    /**
     * Get all tax classes for items in the cart.
     *
     * @return array
     */
    public function get_cart_item_tax_classes()
{
}
    /**
     * Get all tax classes for shipping based on the items in the cart.
     *
     * @return array
     */
    public function get_cart_item_tax_classes_for_shipping()
{
}
    /**
     * Determines the value that the customer spent and the subtotal
     * displayed, used for things like coupon validation.
     *
     * Since the coupon lines are displayed based on the TAX DISPLAY value
     * of cart, this is used to determine the spend.
     *
     * If cart totals are shown including tax, use the subtotal.
     * If cart totals are shown excluding tax, use the subtotal ex tax
     * (tax is shown after coupons).
     *
     * @since 2.6.0
     * @return string
     */
    public function get_displayed_subtotal()
{
}
    /**
     * Check if product is in the cart and return cart item key.
     *
     * Cart item key will be unique based on the item and its properties, such as variations.
     *
     * @param mixed $cart_id id of product to find in the cart.
     * @return string cart item key
     */
    public function find_product_in_cart($cart_id = false)
{
}
    /**
     * Generate a unique ID for the cart item being added.
     *
     * @param int   $product_id - id of the product the key is being generated for.
     * @param int   $variation_id of the product the key is being generated for.
     * @param array $variation data for the cart item.
     * @param array $cart_item_data other cart item data passed which affects this items uniqueness in the cart.
     * @return string cart item key
     */
    public function generate_cart_id($product_id, $variation_id = 0, $variation = array(), $cart_item_data = array())
{
}
    /**
     * Add a product to the cart.
     *
     * @throws Exception Plugins can throw an exception to prevent adding to cart.
     * @param int   $product_id contains the id of the product to add to the cart.
     * @param int   $quantity contains the quantity of the item to add.
     * @param int   $variation_id ID of the variation being added to the cart.
     * @param array $variation attribute values.
     * @param array $cart_item_data extra cart item data we want to pass into the item.
     * @return string|bool $cart_item_key
     */
    public function add_to_cart($product_id = 0, $quantity = 1, $variation_id = 0, $variation = array(), $cart_item_data = array())
{
}
    /**
     * Remove a cart item.
     *
     * @since  2.3.0
     * @param  string $cart_item_key Cart item key to remove from the cart.
     * @return bool
     */
    public function remove_cart_item($cart_item_key)
{
}
    /**
     * Restore a cart item.
     *
     * @param  string $cart_item_key Cart item key to restore to the cart.
     * @return bool
     */
    public function restore_cart_item($cart_item_key)
{
}
    /**
     * Set the quantity for an item in the cart using it's key.
     *
     * @param string $cart_item_key contains the id of the cart item.
     * @param int    $quantity contains the quantity of the item.
     * @param bool   $refresh_totals whether or not to calculate totals after setting the new qty. Can be used to defer calculations if setting quantities in bulk.
     * @return bool
     */
    public function set_quantity($cart_item_key, $quantity = 1, $refresh_totals = true)
{
}
    /**
     * Get cart's owner.
     *
     * @since  3.2.0
     * @return WC_Customer
     */
    public function get_customer()
{
}
    /**
     * Calculate totals for the items in the cart.
     *
     * @uses WC_Cart_Totals
     */
    public function calculate_totals()
{
}
    /**
     * Looks at the totals to see if payment is actually required.
     *
     * @return bool
     */
    public function needs_payment()
{
}
    /**
     * Get selected shipping methods after calculation.
     *
     * @return array
     */
    public function get_shipping_methods()
{
}
    /**
     * Uses the shipping class to calculate shipping then gets the totals when its finished.
     */
    public function calculate_shipping()
{
}
    /**
     * Given a set of packages with rates, get the chosen ones only.
     *
     * @since 3.2.0
     * @param array $calculated_shipping_packages Array of packages.
     * @return array
     */
    protected function get_chosen_shipping_methods($calculated_shipping_packages = array())
{
}
    /**
     * Filter items needing shipping callback.
     *
     * @since  3.0.0
     * @param  array $item Item to check for shipping.
     * @return bool
     */
    protected function filter_items_needing_shipping($item)
{
}
    /**
     * Get only items that need shipping.
     *
     * @since  3.0.0
     * @return array
     */
    protected function get_items_needing_shipping()
{
}
    /**
     * Get packages to calculate shipping for.
     *
     * This lets us calculate costs for carts that are shipped to multiple locations.
     *
     * Shipping methods are responsible for looping through these packages.
     *
     * By default we pass the cart itself as a package - plugins can change this.
     * through the filter and break it up.
     *
     * @since 1.5.4
     * @return array of cart items
     */
    public function get_shipping_packages()
{
}
    /**
     * Looks through the cart to see if shipping is actually required.
     *
     * @return bool whether or not the cart needs shipping
     */
    public function needs_shipping()
{
}
    /**
     * Should the shipping address form be shown.
     *
     * @return bool
     */
    public function needs_shipping_address()
{
}
    /**
     * Sees if the customer has entered enough data to calc the shipping yet.
     *
     * @return bool
     */
    public function show_shipping()
{
}
    /**
     * Gets the shipping total (after calculation).
     *
     * @return string price or string for the shipping total
     */
    public function get_cart_shipping_total()
{
}
    /**
     * Check for user coupons (now that we have billing email). If a coupon is invalid, add an error.
     *
     * Checks two types of coupons:
     *  1. Where a list of customer emails are set (limits coupon usage to those defined).
     *  2. Where a usage_limit_per_user is set (limits coupon usage to a number based on user ID and email).
     *
     * @param array $posted Post data.
     */
    public function check_customer_coupons($posted)
{
}
    /**
     * Checks if the given email address(es) matches the ones specified on the coupon.
     *
     * @param array $check_emails Array of customer email addresses.
     * @param array $restrictions Array of allowed email addresses.
     *
     * @return bool
     * @deprecated 9.0.0 In favor of static method Automattic\WooCommerce\Utilities\DiscountsUtil::is_coupon_emails_allowed.
     */
    public function is_coupon_emails_allowed($check_emails, $restrictions)
{
}
    /**
     * Returns whether or not a discount has been applied.
     *
     * @param string $coupon_code Coupon code to check.
     * @return bool
     */
    public function has_discount($coupon_code = '')
{
}
    /**
     * Applies a coupon code passed to the method.
     *
     * @param string $coupon_code - The code to apply.
     * @return bool True if the coupon is applied, false if it does not exist or cannot be applied.
     */
    public function apply_coupon($coupon_code)
{
}
    /**
     * Get array of applied coupon objects and codes.
     *
     * @param null $deprecated No longer used.
     * @return array of applied coupons
     */
    public function get_coupons($deprecated = null)
{
}
    /**
     * Get the discount amount for a used coupon.
     *
     * @param  string $code coupon code.
     * @param  bool   $ex_tax inc or ex tax.
     * @return float discount amount
     */
    public function get_coupon_discount_amount($code, $ex_tax = true)
{
}
    /**
     * Get the discount tax amount for a used coupon (for tax inclusive prices).
     *
     * @param  string $code coupon code.
     * @return float discount amount
     */
    public function get_coupon_discount_tax_amount($code)
{
}
    /**
     * Remove coupons from the cart of a defined type. Type 1 is before tax, type 2 is after tax.
     *
     * @param null $deprecated No longer used.
     */
    public function remove_coupons($deprecated = null)
{
}
    /**
     * Remove a single coupon by code.
     *
     * @param  string $coupon_code Code of the coupon to remove.
     * @return bool
     */
    public function remove_coupon($coupon_code)
{
}
    /**
     * Trigger an action so 3rd parties can add custom fees.
     *
     * @since 2.0.0
     */
    public function calculate_fees()
{
}
    /**
     * Return reference to fees API.
     *
     * @since  3.2.0
     * @return WC_Cart_Fees
     */
    public function fees_api()
{
}
    /**
     * Add additional fee to the cart.
     *
     * This method should be called on a callback attached to the
     * woocommerce_cart_calculate_fees action during cart/checkout. Fees do not
     * persist.
     *
     * @uses WC_Cart_Fees::add_fee
     * @param string $name      Unique name for the fee. Multiple fees of the same name cannot be added.
     * @param float  $amount    Fee amount (do not enter negative amounts).
     * @param bool   $taxable   Is the fee taxable? (default: false).
     * @param string $tax_class The tax class for the fee if taxable. A blank string is standard tax class. (default: '').
     */
    public function add_fee($name, $amount, $taxable = false, $tax_class = '')
{
}
    /**
     * Return all added fees from the Fees API.
     *
     * @uses WC_Cart_Fees::get_fees
     * @return array
     */
    public function get_fees()
{
}
    /**
     * Gets the total excluding taxes.
     *
     * @return string formatted price
     */
    public function get_total_ex_tax()
{
}
    /**
     * Gets the cart contents total (after calculation).
     *
     * @return string formatted price
     */
    public function get_cart_total()
{
}
    /**
     * Gets the sub total (after calculation).
     *
     * @param bool $compound whether to include compound taxes.
     * @return string formatted price
     */
    public function get_cart_subtotal($compound = false)
{
}
    /**
     * Get the product row price per item.
     *
     * @param WC_Product $product Product object.
     * @return string formatted price
     */
    public function get_product_price($product)
{
}
    /**
     * Get the product row subtotal.
     *
     * Gets the tax etc to avoid rounding issues.
     *
     * When on the checkout (review order), this will get the subtotal based on the customer's tax rate rather than the base rate.
     *
     * @param WC_Product $product Product object.
     * @param int        $quantity Quantity being purchased.
     * @return string formatted price
     */
    public function get_product_subtotal($product, $quantity)
{
}
    /**
     * Gets the cart tax (after calculation).
     *
     * @return string formatted price
     */
    public function get_cart_tax()
{
}
    /**
     * Get a tax amount.
     *
     * @param  string $tax_rate_id ID of the tax rate to get taxes for.
     * @return float amount
     */
    public function get_tax_amount($tax_rate_id)
{
}
    /**
     * Get a tax amount.
     *
     * @param  string $tax_rate_id ID of the tax rate to get taxes for.
     * @return float amount
     */
    public function get_shipping_tax_amount($tax_rate_id)
{
}
    /**
     * Get tax row amounts with or without compound taxes includes.
     *
     * @param  bool $compound True if getting compound taxes.
     * @param  bool $display  True if getting total to display.
     * @return float price
     */
    public function get_taxes_total($compound = true, $display = true)
{
}
    /**
     * Gets the total discount amount.
     *
     * @return mixed formatted price or false if there are none
     */
    public function get_total_discount()
{
}
    /**
     * Reset cart totals to the defaults. Useful before running calculations.
     */
    private function reset_totals()
{
}
    /**
     * Returns 'incl' if tax should be included in cart, otherwise returns 'excl'.
     *
     * @return string
     */
    public function get_tax_price_display_mode()
{
}
    /**
     * Returns the hash based on cart contents.
     *
     * @since 3.6.0
     * @return string hash for cart content
     */
    public function get_cart_hash()
{
}
}
