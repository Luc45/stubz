<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * WCAdminUser Class.
 */
class WCAdminUser
{
    /**
     * Class instance.
     *
     * @var WCAdminUser instance
     */
    protected static $instance = null;

    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static function get_instance()
{
}
    /**
     * Registers WooCommerce specific user data to the WordPress user API.
     */
    public function register_user_data()
{
}
    /**
     * For all the registered user data fields (  Loader::get_user_data_fields ), fetch the data
     * for returning via the REST API.
     *
     * @param WP_User $user Current user.
     */
    public function get_user_data_values($user)
{
}
    /**
     * For all the registered user data fields ( Loader::get_user_data_fields ), update the data
     * for the REST API.
     *
     * @param array   $values   The new values for the meta.
     * @param WP_User $user     The current user.
     * @param string  $field_id The field id for the user meta.
     */
    public function update_user_data_values($values, $user, $field_id)
{
}
    /**
     * We store some WooCommerce specific user meta attached to users endpoint,
     * so that we can track certain preferences or values such as the inbox activity panel last open time.
     * Additional fields can be added in the function below, and then used via wc-admin's currentUser data.
     *
     * @return array Fields to expose over the WP user endpoint.
     */
    public function get_user_data_fields()
{
}
    /**
     * Helper to update user data fields.
     *
     * @param int    $user_id  User ID.
     * @param string $field Field name.
     * @param mixed  $value  Field value.
     */
    public static function update_user_data_field($user_id, $field, $value)
{
}
    /**
     * Helper to retrieve user data fields.
     *
     * Migrates old key prefixes as well.
     *
     * @param int    $user_id  User ID.
     * @param string $field Field name.
     * @return mixed The user field value.
     */
    public static function get_user_data_field($user_id, $field)
{
}
}