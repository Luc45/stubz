<?php
/**
 * WC Coupon Data Store: Custom Post Type.
 *
 * @version  3.0.0
 */
class WC_Coupon_Data_Store_CPT extends \WC_Data_Store_WP implements \WC_Coupon_Data_Store_Interface, \WC_Object_Data_Store_Interface
{
    /**
     * Internal meta type used to store coupon data.
     *
     * @since 3.0.0
     * @var string
     */
    protected $meta_type = 'post';
    /**
     * Data stored in meta keys, but not considered "meta" for a coupon.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => 'discount_type',
  1 => 'coupon_amount',
  2 => 'expiry_date',
  3 => 'date_expires',
  4 => 'usage_count',
  5 => 'individual_use',
  6 => 'product_ids',
  7 => 'exclude_product_ids',
  8 => 'usage_limit',
  9 => 'usage_limit_per_user',
  10 => 'limit_usage_to_x_items',
  11 => 'free_shipping',
  12 => 'product_categories',
  13 => 'exclude_product_categories',
  14 => 'exclude_sale_items',
  15 => 'minimum_amount',
  16 => 'maximum_amount',
  17 => 'customer_email',
  18 => '_used_by',
  19 => '_edit_lock',
  20 => '_edit_last',
);
    /**
     * The updated coupon properties
     *
     * @since 4.1.0
     * @var array
     */
    protected $updated_props = array();
    /**
     * Method to create a new coupon in the database.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     */
    public function create(&$coupon)
{
}
    /**
     * Method to read a coupon.
     *
     * @since 3.0.0
     *
     * @param WC_Coupon $coupon Coupon object.
     *
     * @throws Exception If invalid coupon.
     */
    public function read(&$coupon)
{
}
    /**
     * Get a metadata value that is stored as either a string consisting of a comma-separated list of values
     * or as a serialized array.
     *
     * WooCommerce always stores the coupon product ids as a comma-separated string, but it seems that
     * some plugins mistakenly change these to an array.
     *
     * @param int    $coupon_id The coupon id.
     * @param string $meta_key The meta key to get.
     * @return array The metadata value as an array, with empty values removed.
     */
    private function get_coupon_meta_as_array($coupon_id, string $meta_key)
{
}
    /**
     * Updates a coupon in the database.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     */
    public function update(&$coupon)
{
}
    /**
     * Deletes a coupon from the database.
     *
     * @since 3.0.0
     *
     * @param WC_Coupon $coupon Coupon object.
     * @param array     $args Array of args to pass to the delete method.
     */
    public function delete(&$coupon, $args = array())
{
}
    /**
     * Helper method that updates all the post meta for a coupon based on it's settings in the WC_Coupon class.
     *
     * @param WC_Coupon $coupon Coupon object.
     * @since 3.0.0
     */
    private function update_post_meta(&$coupon)
{
}
    /**
     * Increase usage count for current coupon.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon           Coupon object.
     * @param string    $used_by          Either user ID or billing email.
     * @param WC_Order  $order (Optional) If passed, clears the hold record associated with order.
     * @return int New usage count.
     */
    public function increase_usage_count(&$coupon, $used_by = '', $order = null)
{
}
    /**
     * Helper function to add a `_used_by` record to track coupons used by the user.
     *
     * @param WC_Coupon $coupon           Coupon object.
     * @param string    $used_by          Either user ID or billing email.
     * @param string    $coupon_held_key (Optional) Update meta key to `_used_by` instead of adding a new record.
     */
    private function add_coupon_used_by($coupon, $used_by, $coupon_held_key)
{
}
    /**
     * Decrease usage count for current coupon.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $used_by Either user ID or billing email.
     * @return int New usage count.
     */
    public function decrease_usage_count(&$coupon, $used_by = '')
{
}
    /**
     * Increase or decrease the usage count for a coupon by 1.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $operation 'increase' or 'decrease'.
     * @return int New usage count
     */
    private function update_usage_count_meta(&$coupon, $operation = 'increase')
{
}
    /**
     * Returns tentative usage count for coupon.
     *
     * @param int $coupon_id Coupon ID.
     *
     * @return int Tentative usage count.
     */
    public function get_tentative_usage_count($coupon_id)
{
}
    /**
     * Get the number of uses for a coupon by user ID.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param int       $user_id User ID.
     * @return int
     */
    public function get_usage_by_user_id(&$coupon, $user_id)
{
}
    /**
     * Get the number of uses for a coupon by email address
     *
     * @since 3.6.4
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $email Email address.
     * @return int
     */
    public function get_usage_by_email(&$coupon, $email)
{
}
    /**
     * Get tentative coupon usages for user.
     *
     * @param int   $coupon_id    Coupon ID.
     * @param array $user_aliases Array of user aliases to check tentative usages for.
     *
     * @return string|null
     */
    public function get_tentative_usages_for_user($coupon_id, $user_aliases)
{
}
    /**
     * Get held time for resources before cancelling the order.
     * It will use `woocommerce_coupon_hold_minutes` filter to get the value, defaulting to `woocommerce_hold_stock_minutes` option if set, with a 1-minute minimum if set to 0.
     * Note that the filter `woocommerce_coupon_hold_minutes` only support minutes because it's getting used elsewhere as well, however this function returns in seconds.
     *
     * @return int
     */
    private function get_tentative_held_time()
{
}
    /**
     * Check and records coupon usage tentatively for short period of time so that counts validation is correct. Returns early if there is no limit defined for the coupon.
     *
     * @param WC_Coupon $coupon Coupon object.
     *
     * @return bool|int|string|null Returns meta key if coupon was held, null if returned early.
     */
    public function check_and_hold_coupon($coupon)
{
}
    /**
     * Generate query to calculate tentative usages for the coupon.
     *
     * @param int $coupon_id Coupon ID to get tentative usage query for.
     *
     * @return string Query for tentative usages.
     */
    private function get_tentative_usage_query($coupon_id)
{
}
    /**
     * Check and records coupon usage tentatively for passed user aliases for short period of time so that counts validation is correct. Returns early if there is no limit per user for the coupon.
     *
     * @param WC_Coupon $coupon       Coupon object.
     * @param array     $user_aliases Emails or Ids to check for user.
     * @param string    $user_alias   Email/ID to use as `used_by` value.
     *
     * @return null|false|int
     */
    public function check_and_hold_coupon_for_user($coupon, $user_aliases, $user_alias)
{
}
    /**
     * Generate query to calculate tentative usages for the coupon by the user.
     *
     * @param int   $coupon_id    Coupon ID.
     * @param array $user_aliases List of user aliases to check for usages.
     *
     * @return string Tentative usages query.
     */
    private function get_tentative_usage_query_for_user($coupon_id, $user_aliases)
{
}
    /**
     * This function clears coupon data from the WP cache after certain operations which, for performance reasons,
     * are done via SQL queries.
     *
     * @param \WC_Coupon $coupon The coupon object.
     * @return void
     */
    private function refresh_coupon_data(&$coupon)
{
}
    /**
     * Return a coupon code for a specific ID.
     *
     * @since 3.0.0
     * @param int $id Coupon ID.
     * @return string Coupon Code
     */
    public function get_code_by_id($id)
{
}
    /**
     * Return an array of IDs for for a specific coupon code.
     * Can return multiple to check for existence.
     *
     * @since 3.0.0
     * @param string $code Coupon code.
     * @return array Array of IDs.
     */
    public function get_ids_by_code($code)
{
}
}
