<?php
/**
 * Coupon class.
 */
class WC_Coupon extends \WC_Legacy_Coupon
{
    const E_WC_COUPON_INVALID_FILTERED = 100;
    const E_WC_COUPON_INVALID_REMOVED = 101;
    const E_WC_COUPON_NOT_YOURS_REMOVED = 102;
    const E_WC_COUPON_ALREADY_APPLIED = 103;
    const E_WC_COUPON_ALREADY_APPLIED_INDIV_USE_ONLY = 104;
    const E_WC_COUPON_NOT_EXIST = 105;
    const E_WC_COUPON_USAGE_LIMIT_REACHED = 106;
    const E_WC_COUPON_EXPIRED = 107;
    const E_WC_COUPON_MIN_SPEND_LIMIT_NOT_MET = 108;
    const E_WC_COUPON_NOT_APPLICABLE = 109;
    const E_WC_COUPON_NOT_VALID_SALE_ITEMS = 110;
    const E_WC_COUPON_PLEASE_ENTER = 111;
    const E_WC_COUPON_MAX_SPEND_LIMIT_MET = 112;
    const E_WC_COUPON_EXCLUDED_PRODUCTS = 113;
    const E_WC_COUPON_EXCLUDED_CATEGORIES = 114;
    const E_WC_COUPON_USAGE_LIMIT_COUPON_STUCK = 115;
    const E_WC_COUPON_USAGE_LIMIT_COUPON_STUCK_GUEST = 116;
    const WC_COUPON_SUCCESS = 200;
    const WC_COUPON_REMOVED = 201;
    /**
     * Data array, with defaults.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array (
  'code' => '',
  'amount' => 0,
  'status' => null,
  'date_created' => null,
  'date_modified' => null,
  'date_expires' => null,
  'discount_type' => 'fixed_cart',
  'description' => '',
  'usage_count' => 0,
  'individual_use' => false,
  'product_ids' => 
  array(),
  'excluded_product_ids' => 
  array(),
  'usage_limit' => 0,
  'usage_limit_per_user' => 0,
  'limit_usage_to_x_items' => null,
  'free_shipping' => false,
  'product_categories' => 
  array(),
  'excluded_product_categories' => 
  array(),
  'exclude_sale_items' => false,
  'minimum_amount' => '',
  'maximum_amount' => '',
  'email_restrictions' => 
  array(),
  'used_by' => 
  array(),
  'virtual' => false,
);
    /**
     * Cache group.
     *
     * @var string
     */
    protected $cache_group = 'coupons';
    /**
     * Error message.
     *
     * This property should not be considered public API, and should not be accessed directly.
     * It is being added to suppress PHP > 8.0 warnings against dynamic property creation, and all access
     * should be through the getter and setter methods, namely `get_error_message()` and `set_error_message()`.
     * In the future, the access modifier may be changed back to protected.
     *
     * @var string
     */
    public $error_message = null;
    /**
     * Sorting.
     *
     * Used by `get_coupons_from_cart` to sort coupons.
     *
     * @var int
     */
    public $sort = 0;
    /**
     * Coupon constructor. Loads coupon data.
     *
     * @param mixed $data Coupon data, object, ID or code.
     */
    public function __construct($data = '')
{
}
    /**
     * If the object has an ID, read using the data store.
     *
     * @since 3.4.1
     */
    protected function read_object_from_database()
{
}
    /**
     * Checks the coupon type.
     *
     * @param  string|array $type Array or string of types.
     * @return bool
     */
    public function is_type($type)
{
}
    /**
     * Prefix for action and filter hooks on data.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_hook_prefix()
{
}
    /**
     * Get coupon code.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_code($context = 'view')
{
}
    /**
     * Get coupon description.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_description($context = 'view')
{
}
    /**
     * Get coupon status.
     *
     * @since  6.2.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_status($context = 'view')
{
}
    /**
     * Get discount type.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_discount_type($context = 'view')
{
}
    /**
     * Get coupon amount.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_amount($context = 'view')
{
}
    /**
     * Get coupon expiration date.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_expires($context = 'view')
{
}
    /**
     * Get date_created
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
{
}
    /**
     * Get date_modified
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
{
}
    /**
     * Get coupon usage count.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_usage_count($context = 'view')
{
}
    /**
     * Get the "individual use" checkbox status.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_individual_use($context = 'view')
{
}
    /**
     * Get product IDs this coupon can apply to.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_product_ids($context = 'view')
{
}
    /**
     * Get product IDs that this coupon should not apply to.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_excluded_product_ids($context = 'view')
{
}
    /**
     * Get coupon usage limit.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_usage_limit($context = 'view')
{
}
    /**
     * Get coupon usage limit per customer (for a single customer)
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer
     */
    public function get_usage_limit_per_user($context = 'view')
{
}
    /**
     * Usage limited to certain amount of items
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return integer|null
     */
    public function get_limit_usage_to_x_items($context = 'view')
{
}
    /**
     * If this coupon grants free shipping or not.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_free_shipping($context = 'view')
{
}
    /**
     * Get product categories this coupon can apply to.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_product_categories($context = 'view')
{
}
    /**
     * Get product categories this coupon cannot not apply to.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_excluded_product_categories($context = 'view')
{
}
    /**
     * If this coupon should exclude items on sale.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_exclude_sale_items($context = 'view')
{
}
    /**
     * Get minimum spend amount.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return float
     */
    public function get_minimum_amount($context = 'view')
{
}
    /**
     * Get maximum spend amount.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return float
     */
    public function get_maximum_amount($context = 'view')
{
}
    /**
     * Get emails to check customer usage restrictions.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_email_restrictions($context = 'view')
{
}
    /**
     * Get records of all users who have used the current coupon.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return array
     */
    public function get_used_by($context = 'view')
{
}
    /**
     * If the filter is added through the woocommerce_get_shop_coupon_data filter, it's virtual and not in the DB.
     *
     * @since 3.2.0
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return boolean
     */
    public function get_virtual($context = 'view')
{
}
    /**
     * Get discount amount for a cart item.
     *
     * @param  float      $discounting_amount Amount the coupon is being applied to.
     * @param  array|null $cart_item          Cart item being discounted if applicable.
     * @param  boolean    $single             True if discounting a single qty item, false if its the line.
     * @return float Amount this coupon has discounted.
     */
    public function get_discount_amount($discounting_amount, $cart_item = null, $single = false)
{
}
    /**
     * Set coupon code.
     *
     * @since 3.0.0
     * @param string $code Coupon code.
     */
    public function set_code($code)
{
}
    /**
     * Set coupon description.
     *
     * @since 3.0.0
     * @param string $description Description.
     */
    public function set_description($description)
{
}
    /**
     * Set coupon status.
     *
     * @since 3.0.0
     * @param string $status Status.
     */
    public function set_status($status)
{
}
    /**
     * Set discount type.
     *
     * @since 3.0.0
     * @param string $discount_type Discount type.
     */
    public function set_discount_type($discount_type)
{
}
    /**
     * Set amount.
     *
     * @since 3.0.0
     * @param float $amount Amount.
     */
    public function set_amount($amount)
{
}
    /**
     * Set expiration date.
     *
     * @since  3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     */
    public function set_date_expires($date)
{
}
    /**
     * Set date_created
     *
     * @since  3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     */
    public function set_date_created($date)
{
}
    /**
     * Set date_modified
     *
     * @since  3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     */
    public function set_date_modified($date)
{
}
    /**
     * Set how many times this coupon has been used.
     *
     * @since 3.0.0
     * @param int $usage_count Usage count.
     */
    public function set_usage_count($usage_count)
{
}
    /**
     * Set if this coupon can only be used once.
     *
     * @since 3.0.0
     * @param bool $is_individual_use If is for individual use.
     */
    public function set_individual_use($is_individual_use)
{
}
    /**
     * Set the product IDs this coupon can be used with.
     *
     * @since 3.0.0
     * @param array $product_ids Products IDs.
     */
    public function set_product_ids($product_ids)
{
}
    /**
     * Set the product IDs this coupon cannot be used with.
     *
     * @since 3.0.0
     * @param array $excluded_product_ids Exclude product IDs.
     */
    public function set_excluded_product_ids($excluded_product_ids)
{
}
    /**
     * Set the amount of times this coupon can be used.
     *
     * @since 3.0.0
     * @param int $usage_limit Usage limit.
     */
    public function set_usage_limit($usage_limit)
{
}
    /**
     * Set the amount of times this coupon can be used per user.
     *
     * @since 3.0.0
     * @param int $usage_limit Usage limit.
     */
    public function set_usage_limit_per_user($usage_limit)
{
}
    /**
     * Set usage limit to x number of items.
     *
     * @since 3.0.0
     * @param int|null $limit_usage_to_x_items Limit usage to X items.
     */
    public function set_limit_usage_to_x_items($limit_usage_to_x_items)
{
}
    /**
     * Set if this coupon enables free shipping or not.
     *
     * @since 3.0.0
     * @param bool $free_shipping If grant free shipping.
     */
    public function set_free_shipping($free_shipping)
{
}
    /**
     * Set the product category IDs this coupon can be used with.
     *
     * @since 3.0.0
     * @param array $product_categories List of product categories.
     */
    public function set_product_categories($product_categories)
{
}
    /**
     * Set the product category IDs this coupon cannot be used with.
     *
     * @since 3.0.0
     * @param array $excluded_product_categories List of excluded product categories.
     */
    public function set_excluded_product_categories($excluded_product_categories)
{
}
    /**
     * Set if this coupon should excluded sale items or not.
     *
     * @since 3.0.0
     * @param bool $exclude_sale_items If should exclude sale items.
     */
    public function set_exclude_sale_items($exclude_sale_items)
{
}
    /**
     * Set the minimum spend amount.
     *
     * @since 3.0.0
     * @param float $amount Minimum amount.
     */
    public function set_minimum_amount($amount)
{
}
    /**
     * Set the maximum spend amount.
     *
     * @since 3.0.0
     * @param float $amount Maximum amount.
     */
    public function set_maximum_amount($amount)
{
}
    /**
     * Set email restrictions.
     *
     * @since 3.0.0
     * @param array $emails List of emails.
     */
    public function set_email_restrictions($emails = array())
{
}
    /**
     * Set which users have used this coupon.
     *
     * @since 3.0.0
     * @param array $used_by List of user IDs.
     */
    public function set_used_by($used_by)
{
}
    /**
     * Set coupon virtual state.
     *
     * @param boolean $virtual Whether it is virtual or not.
     * @since 3.2.0
     */
    public function set_virtual($virtual)
{
}
    /**
     * Developers can programmatically return coupons. This function will read those values into our WC_Coupon class.
     *
     * @since 3.0.0
     * @param string $code   Coupon code.
     * @param array  $coupon Array of coupon properties.
     */
    public function read_manual_coupon($code, $coupon)
{
}
    /**
     * Increase usage count for current coupon.
     *
     * @param string   $used_by  Either user ID or billing email.
     * @param WC_Order $order  If provided, will clear the coupons held by this order.
     */
    public function increase_usage_count($used_by = '', $order = null)
{
}
    /**
     * Decrease usage count for current coupon.
     *
     * @param string $used_by Either user ID or billing email.
     */
    public function decrease_usage_count($used_by = '')
{
}
    /**
     * Returns the error_message string.
     * @return string
     */
    public function get_error_message()
{
}
    /**
     * Sets the error_message string.
     *
     * @param string $message Message string.
     *
     * @return void
     */
    public function set_error_message(string $message)
{
}
    /**
     * Check if a coupon is valid for the cart.
     *
     * @deprecated 3.2.0 In favor of WC_Discounts->is_coupon_valid.
     * @return bool
     */
    public function is_valid()
{
}
    /**
     * Check if a coupon is valid.
     *
     * @return bool
     */
    public function is_valid_for_cart()
{
}
    /**
     * Check if a coupon is valid for a product.
     *
     * @param WC_Product $product Product instance.
     * @param array      $values  Values.
     * @return bool
     */
    public function is_valid_for_product($product, $values = array())
{
}
    /**
     * Converts one of the WC_Coupon message/error codes to a message string and.
     * displays the message/error.
     *
     * @param int    $msg_code Message/error code.
     * @param string $notice_type Notice type.
     */
    public function add_coupon_message($msg_code, $notice_type = 'success')
{
}
    /**
     * Map one of the WC_Coupon message codes to a message string.
     *
     * @param integer $msg_code Message code.
     * @return string Message/error string.
     */
    public function get_coupon_message($msg_code)
{
}
    /**
     * Map one of the WC_Coupon error codes to a message string.
     *
     * @param int $err_code Message/error code.
     * @return string Message/error string
     */
    public function get_coupon_error($err_code)
{
}
    /**
     * Map one of the WC_Coupon error codes to an error string.
     * No coupon instance will be available where a coupon does not exist,
     * so this static method exists.
     *
     * @param int $err_code Error code.
     * @return string Error string.
     */
    public static function get_generic_coupon_error($err_code)
{
}
    /**
     * Get the coupon information that is needed to reapply the coupon to an existing order.
     * This information is intended to be stored as a meta value in the order line item corresponding to the coupon
     * and should NOT be modified or extended (additional/custom data should go in a separate metadata entry).
     *
     * The information returned is a JSON-encoded string of an array with the following coupon information:
     *
     * 0: Id
     * 1: Code
     * 2: Type, null is equivalent to 'fixed_cart'
     * 3: Nominal amount (either a fixed amount or a percent, depending on the coupon type)
     * 4: The coupon grants free shipping? (present only if true)
     *
     * @return string A JSON string with information that allows the coupon to be reapplied to an existing order.
     */
    public function get_short_info(): string
{
}
    /**
     * Sets the coupon parameters from a reapply information set generated with 'get_short_info'.
     *
     * @param string $info JSON string with reapply information as returned by 'get_short_info'.
     */
    public function set_short_info(string $info)
{
}
    /**
     * Returns alternate error messages based on context (eg. Cart and Checkout).
     *
     * @param int $err_code Message/error code.
     *
     * @return array Context based alternate error messages.
     */
    public function get_context_based_coupon_errors($err_code = null)
{
}
}
