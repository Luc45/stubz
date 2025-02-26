<?php

namespace ;

/**
 * Shortcode my account class.
 */
class WC_Shortcode_My_Account extends \
{
    /**
     * Get the shortcode content.
     *
     * @param array $atts Shortcode attributes.
     *
     * @return string
     */
    public static function get($atts)
    {
        // stub
    }

    /**
     * Output the shortcode.
     *
     * @param array $atts Shortcode attributes.
     */
    public static function output($atts)
    {
        // stub
    }

    /**
     * Add notices to the my account page.
     *
     * Historically a filter has existed to render a message above the my account page content while the user is
     * logged out. See `woocommerce_my_account_message`.
     */
    private static function my_account_add_notices()
    {
        // stub
    }

    /**
     * My account page.
     *
     * @param array $atts Shortcode attributes.
     */
    private static function my_account($atts)
    {
        // stub
    }

    /**
     * View order page.
     *
     * @param int $order_id Order ID.
     */
    public static function view_order($order_id)
    {
        // stub
    }

    /**
     * Edit account details page.
     */
    public static function edit_account()
    {
        // stub
    }

    /**
     * Edit address page.
     *
     * @param string $load_address Type of address; 'billing' or 'shipping'.
     */
    public static function edit_address($load_address = 'billing')
    {
        // stub
    }

    /**
     * Lost password page handling.
     */
    public static function lost_password()
    {
        // stub
    }

    /**
     * Handles sending password retrieval email to customer.
     *
     * Based on retrieve_password() in core wp-login.php.
     *
     * @uses $wpdb WordPress Database object
     * @return bool True: when finish. False: on error
     */
    public static function retrieve_password()
    {
        // stub
    }

    /**
     * Retrieves a user row based on password reset key and login.
     *
     * @uses $wpdb WordPress Database object.
     * @param string $key   Hash to validate sending user's password.
     * @param string $login The user login.
     * @return WP_User|bool User's database row on success, false for invalid keys
     */
    public static function check_password_reset_key($key, $login)
    {
        // stub
    }

    /**
     * Handles resetting the user's password.
     *
     * @since 9.4.0 This will log the user in after resetting the password/session.
     *
     * @param object $user     The user.
     * @param string $new_pass New password for the user in plaintext.
     */
    public static function reset_password($user, $new_pass)
    {
        // stub
    }

    /**
     * Set or unset the cookie.
     *
     * @param string $value Cookie value.
     */
    public static function set_reset_password_cookie($value = '')
    {
        // stub
    }

    /**
     * Show the add payment method page.
     */
    public static function add_payment_method()
    {
        // stub
    }

}

