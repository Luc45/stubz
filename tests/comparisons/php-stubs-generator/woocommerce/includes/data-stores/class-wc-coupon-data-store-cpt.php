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
    protected $internal_meta_keys = array('discount_type', 'coupon_amount', 'expiry_date', 'date_expires', 'usage_count', 'individual_use', 'product_ids', 'exclude_product_ids', 'usage_limit', 'usage_limit_per_user', 'limit_usage_to_x_items', 'free_shipping', 'product_categories', 'exclude_product_categories', 'exclude_sale_items', 'minimum_amount', 'maximum_amount', 'customer_email', '_used_by', '_edit_lock', '_edit_last');
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
     * Increase usage count for current coupon.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon           Coupon object.
     * @param string    $used_by          Either user ID or billing email.
     * @param WC_Order  $order (Optional) If passed, clears the hold record associated with order.
     * @return int New usage count.
     */
    public function increase_usage_count(&$coupon, $used_by = '', $order = \null)
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
