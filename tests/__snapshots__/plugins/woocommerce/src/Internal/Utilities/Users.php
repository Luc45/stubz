<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Helper functions for working with users.
 */
class Users extends \
{
    /**
     * Indicates if the user qualifies as site administrator.
     *
     * In the context of multisite networks, this means that they must have the `manage_sites`
     * capability. In all other cases, they must have the `manage_options` capability.
     *
     * @param int $user_id Optional, used to specify a specific user (otherwise we look at the current user).
     *
     * @return bool
     */
    public static function is_site_administrator(int $user_id = 0): bool
    {
        // stub
    }

    /**
     * Check if the email is valid.
     *
     * @param int    $order_id Order ID.
     * @param string $supplied_email Supplied email.
     * @param string $context Context in which we are checking the email.
     * @return bool
     */
    public static function should_user_verify_order_email($order_id, $supplied_email = null, $context = 'view')
    {
        // stub
    }

    /**
     * Site-specific method of retrieving the requested user meta.
     *
     * This is a multisite-aware wrapper around WordPress's own `get_user_meta()` function, and works by prefixing the
     * supplied meta key with a blog-specific meta key.
     *
     * @param int    $user_id User ID.
     * @param string $key     Optional. The meta key to retrieve. By default, returns data for all keys.
     * @param bool   $single  Optional. Whether to return a single value. This parameter has no effect if `$key` is not
     *                        specified. Default false.
     *
     * @return mixed An array of values if `$single` is false. The value of meta data field if `$single` is true.
     *               False for an invalid `$user_id` (non-numeric, zero, or negative value). An empty string if a valid
     *               but non-existing user ID is passed.
     */
    public static function get_site_user_meta(int $user_id, string $key = '', bool $single = false)
    {
        // stub
    }

    /**
     * Site-specific means of updating user meta.
     *
     * This is a multisite-aware wrapper around WordPress's own `update_user_meta()` function, and works by prefixing
     * the supplied meta key with a blog-specific meta key.
     *
     * @param int    $user_id    User ID.
     * @param string $meta_key   Metadata key.
     * @param mixed  $meta_value Metadata value. Must be serializable if non-scalar.
     * @param mixed  $prev_value Optional. Previous value to check before updating. If specified, only update existing
     *                           metadata entries with this value. Otherwise, update all entries. Default empty.
     *
     * @return int|bool Meta ID if the key didn't exist, true on successful update, false on failure or if the value
     *                  passed to the function is the same as the one that is already in the database.
     */
    public static function update_site_user_meta(int $user_id, string $meta_key, $meta_value, $prev_value = '')
    {
        // stub
    }

    /**
     * Site-specific means of deleting user meta.
     *
     * This is a multisite-aware wrapper around WordPress's own `delete_user_meta()` function, and works by prefixing
     * the supplied meta key with a blog-specific meta key.
     *
     * @param int    $user_id    User ID.
     * @param string $meta_key   Metadata name.
     * @param mixed  $meta_value Optional. Metadata value. If provided, rows will only be removed that match the value.
     *                           Must be serializable if non-scalar. Default empty.
     *
     * @return bool True on success, false on failure.
     * /
     */
    public static function delete_site_user_meta($user_id, $meta_key, $meta_value = '')
    {
        // stub
    }

}

