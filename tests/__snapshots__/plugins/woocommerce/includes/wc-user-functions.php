<?php

/**
 * Prevent any user who cannot 'edit_posts' (subscribers, customers etc) from seeing the admin bar.
 *
 * Note: get_option( 'woocommerce_lock_down_admin', true ) is a deprecated option here for backwards compatibility. Defaults to true.
 *
 * @param bool $show_admin_bar If should display admin bar.
 * @return bool
 */
function wc_disable_admin_bar($show_admin_bar)
{
    // stub
}

/**
 * Create a new customer.
 *
 * @since 9.4.0 Moved woocommerce_registration_error_email_exists filter to the shortcode checkout class.
 * @since 9.4.0 Removed handling for generating username/password based on settings--this is consumed at form level. Here, if data is missing it will be generated.
 *
 * @param  string $email    Customer email.
 * @param  string $username Customer username.
 * @param  string $password Customer password.
 * @param  array  $args     List of arguments to pass to `wp_insert_user()`.
 * @return int|WP_Error Returns WP_Error on failure, Int (user ID) on success.
 */
function wc_create_new_customer($email, $username = '', $password = '', $args = array (
))
{
    // stub
}

/**
 * Create a unique username for a new customer.
 *
 * @since 3.6.0
 * @param string $email New customer email address.
 * @param array  $new_user_args Array of new user args, maybe including first and last names.
 * @param string $suffix Append string to username to make it unique.
 * @return string Generated username.
 */
function wc_create_new_customer_username($email, $new_user_args = array (
), $suffix = '')
{
    // stub
}

/**
 * Login a customer (set auth cookie and set global user object).
 *
 * @param int $customer_id Customer ID.
 */
function wc_set_customer_auth_cookie($customer_id)
{
    // stub
}

/**
 * Get past orders (by email) and update them.
 *
 * @param  int $customer_id Customer ID.
 * @return int
 */
function wc_update_new_customer_past_orders($customer_id)
{
    // stub
}

/**
 * Order payment completed - This is a paying customer.
 *
 * @param int $order_id Order ID.
 */
function wc_paying_customer($order_id)
{
    // stub
}

/**
 * Checks if a user (by email or ID or both) has bought an item.
 *
 * @param string $customer_email Customer email to check.
 * @param int    $user_id User ID to check.
 * @param int    $product_id Product ID to check.
 * @return bool
 */
function wc_customer_bought_product($customer_email, $user_id, $product_id)
{
    // stub
}

/**
 * Checks if the current user has a role.
 *
 * @param string $role The role.
 * @return bool
 */
function wc_current_user_has_role($role)
{
    // stub
}

/**
 * Checks if a user has a role.
 *
 * @param int|\WP_User $user The user.
 * @param string       $role The role.
 * @return bool
 */
function wc_user_has_role($user, $role)
{
    // stub
}

/**
 * Checks if a user has a certain capability.
 *
 * @param array $allcaps All capabilities.
 * @param array $caps    Capabilities.
 * @param array $args    Arguments.
 *
 * @return array The filtered array of all capabilities.
 */
function wc_customer_has_capability($allcaps, $caps, $args)
{
    // stub
}

/**
 * Safe way of allowing shop managers restricted capabilities that will remove
 * access to the capabilities if WooCommerce is deactivated.
 *
 * @since 3.5.4
 * @param bool[]   $allcaps Array of key/value pairs where keys represent a capability name and boolean values
 *                          represent whether the user has that capability.
 * @param string[] $caps    Required primitive capabilities for the requested capability.
 * @param array    $args Arguments that accompany the requested capability check.
 * @param WP_User  $user    The user object.
 * @return bool[]
 */
function wc_shop_manager_has_capability($allcaps, $caps, $args, $user)
{
    // stub
}

/**
 * Modify the list of editable roles to prevent non-admin adding admin users.
 *
 * @param  array $roles Roles.
 * @return array
 */
function wc_modify_editable_roles($roles)
{
    // stub
}

/**
 * Modify capabilities to prevent non-admin users editing admin users.
 *
 * $args[0] will be the user being edited in this case.
 *
 * @param  array  $caps    Array of caps.
 * @param  string $cap     Name of the cap we are checking.
 * @param  int    $user_id ID of the user being checked against.
 * @param  array  $args    Arguments.
 * @return array
 */
function wc_modify_map_meta_cap($caps, $cap, $user_id, $args)
{
    // stub
}

/**
 * Get customer download permissions from the database.
 *
 * @param int $customer_id Customer/User ID.
 * @return array
 */
function wc_get_customer_download_permissions($customer_id)
{
    // stub
}

/**
 * Get customer available downloads.
 *
 * @param int $customer_id Customer/User ID.
 * @return array
 */
function wc_get_customer_available_downloads($customer_id)
{
    // stub
}

/**
 * Get total spent by customer.
 *
 * @param  int $user_id User ID.
 * @return string
 */
function wc_get_customer_total_spent($user_id)
{
    // stub
}

/**
 * Get total orders by customer.
 *
 * @param  int $user_id User ID.
 * @return int
 */
function wc_get_customer_order_count($user_id)
{
    // stub
}

/**
 * Reset _customer_user on orders when a user is deleted.
 *
 * @param int $user_id User ID.
 */
function wc_reset_order_customer_id_on_deleted_user($user_id)
{
    // stub
}

/**
 * Get review verification status.
 *
 * @param  int $comment_id Comment ID.
 * @return bool
 */
function wc_review_is_from_verified_owner($comment_id)
{
    // stub
}

/**
 * Disable author archives for customers.
 *
 * @since 2.5.0
 */
function wc_disable_author_archives_for_customers()
{
    // stub
}

/**
 * Hooks into the `profile_update` hook to set the user last updated timestamp.
 *
 * @since 2.6.0
 * @param int   $user_id The user that was updated.
 * @param array $old     The profile fields pre-change.
 */
function wc_update_profile_last_update_time($user_id, $old)
{
    // stub
}

/**
 * Hooks into the update user meta function to set the user last updated timestamp.
 *
 * @since 2.6.0
 * @param int    $meta_id     ID of the meta object that was changed.
 * @param int    $user_id     The user that was updated.
 * @param string $meta_key    Name of the meta key that was changed.
 * @param mixed  $_meta_value Value of the meta that was changed.
 */
function wc_meta_update_last_update_time($meta_id, $user_id, $meta_key, $_meta_value)
{
    // stub
}

/**
 * Sets a user's "last update" time to the current timestamp.
 *
 * @since 2.6.0
 * @param int $user_id The user to set a timestamp for.
 */
function wc_set_user_last_update_time($user_id)
{
    // stub
}

/**
 * Get customer saved payment methods list.
 *
 * @since 2.6.0
 * @param int $customer_id Customer ID.
 * @return array
 */
function wc_get_customer_saved_methods_list($customer_id)
{
    // stub
}

/**
 * Get info about customer's last order.
 *
 * @since 2.6.0
 * @param int $customer_id Customer ID.
 * @return WC_Order|bool Order object if successful or false.
 */
function wc_get_customer_last_order($customer_id)
{
    // stub
}

/**
 * Add support for searching by display_name.
 *
 * @since 3.2.0
 * @param array $search_columns Column names.
 * @return array
 */
function wc_user_search_columns($search_columns)
{
    // stub
}

/**
 * When a user is deleted in WordPress, delete corresponding WooCommerce data.
 *
 * @param int $user_id User ID being deleted.
 */
function wc_delete_user_data($user_id)
{
    // stub
}

/**
 * Store user agents. Used for tracker.
 *
 * @since 3.0.0
 * @param string     $user_login User login.
 * @param int|object $user       User.
 */
function wc_maybe_store_user_agent($user_login, $user)
{
    // stub
}

/**
 * Update logic triggered on login.
 *
 * @since 3.4.0
 * @param string $user_login User login.
 * @param object $user       User.
 */
function wc_user_logged_in($user_login, $user)
{
    // stub
}

/**
 * Update when the user was last active.
 *
 * @since 3.4.0
 */
function wc_current_user_is_active()
{
    // stub
}

/**
 * Set the user last active timestamp to now.
 *
 * @since 3.4.0
 * @param int $user_id User ID to mark active.
 */
function wc_update_user_last_active($user_id)
{
    // stub
}

/**
 * Translate WC roles using the woocommerce textdomain.
 *
 * @since 3.7.0
 * @param string $translation  Translated text.
 * @param string $text         Text to translate.
 * @param string $context      Context information for the translators.
 * @param string $domain       Text domain. Unique identifier for retrieving translated strings.
 * @return string
 */
function wc_translate_user_roles($translation, $text, $context, $domain)
{
    // stub
}

