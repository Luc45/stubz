<?php

/**
 * Session handler class.
 */
class WC_Session_Handler
{
    /**
     * Cookie name used for the session.
     *
     * @var string cookie name
     */
    protected $_cookie = null;

    /**
     * Stores session expiry.
     *
     * @var string session due to expire timestamp
     */
    protected $_session_expiring = null;

    /**
     * Stores session due to expire timestamp.
     *
     * @var string session expiration timestamp
     */
    protected $_session_expiration = null;

    /**
     * True when the cookie exists.
     *
     * @var bool Based on whether a cookie exists.
     */
    protected $_has_cookie = false;

    /**
     * Table name for session data.
     *
     * @var string Custom session table name
     */
    protected $_table = null;

    /**
     * Constructor for the session class.
     */
    public function __construct()
{
}
    /**
     * Init hooks and session data.
     *
     * @since 3.3.0
     */
    public function init()
{
}
    /**
     * Setup cookie and customer ID.
     *
     * @since 3.6.0
     */
    public function init_session_cookie()
{
}
    /**
     * Checks if session cookie is expired, or belongs to a logged out user.
     *
     * @return bool Whether session cookie is valid.
     */
    private function is_session_cookie_valid()
{
}
    /**
     * Hooks into the wp action to maybe set the session cookie if the user is on a certain page e.g. a checkout endpoint.
     *
     * Certain gateways may rely on sessions and this ensures a session is present even if the customer does not have a
     * cart.
     */
    public function maybe_set_customer_session_cookie()
{
}
    /**
     * Sets the session cookie on-demand (usually after adding an item to the cart).
     *
     * Since the cookie name (as of 2.1) is prepended with wp, cache systems like batcache will not cache pages when set.
     *
     * Warning: Cookies will only be set if this is called before the headers are sent.
     *
     * @param bool $set Should the session cookie be set.
     */
    public function set_customer_session_cookie($set)
{
}
    /**
     * Should the session cookie be secure?
     *
     * @since 3.6.0
     * @return bool
     */
    protected function use_secure_cookie()
{
}
    /**
     * Return true if the current user has an active session, i.e. a cookie to retrieve values.
     *
     * @return bool
     */
    public function has_session()
{
}
    /**
     * Set session expiration.
     */
    public function set_session_expiration()
{
}
    /**
     * Generate a unique customer ID for guests, or return user ID if logged in.
     *
     * Uses Portable PHP password hashing framework to generate a unique cryptographically strong ID.
     *
     * @return string
     */
    public function generate_customer_id()
{
}
    /**
     * Checks if this is an auto-generated customer ID.
     *
     * @param string|int $customer_id Customer ID to check.
     *
     * @return bool Whether customer ID is randomly generated.
     */
    private function is_customer_guest($customer_id)
{
}
    /**
     * Get session unique ID for requests if session is initialized or user ID if logged in.
     * Introduced to help with unit tests.
     *
     * @since 5.3.0
     * @return string
     */
    public function get_customer_unique_id()
{
}
    /**
     * Get the session cookie, if set. Otherwise return false.
     *
     * Session cookies without a customer ID are invalid.
     *
     * @return bool|array
     */
    public function get_session_cookie()
{
}
    /**
     * Get session data.
     *
     * @return array
     */
    public function get_session_data()
{
}
    /**
     * Gets a cache prefix. This is used in session names so the entire cache can be invalidated with 1 function call.
     *
     * @return string
     */
    private function get_cache_prefix()
{
}
    /**
     * Save data and delete guest session.
     *
     * @param int $old_session_key session ID before user logs in.
     */
    public function save_data($old_session_key = 0)
{
}
    /**
     * Destroy all session data.
     */
    public function destroy_session()
{
}
    /**
     * Forget all session data without destroying it.
     */
    public function forget_session()
{
}
    /**
     * When a user is logged out, ensure they have a unique nonce by using the customer/session ID.
     *
     * @deprecated 5.3.0
     * @param int $uid User ID.
     * @return int|string
     */
    public function nonce_user_logged_out($uid)
{
}
    /**
     * When a user is logged out, ensure they have a unique nonce to manage cart and more using the customer/session ID.
     * This filter runs everything `wp_verify_nonce()` and `wp_create_nonce()` gets called.
     *
     * @since 5.3.0
     * @param int    $uid    User ID.
     * @param string $action The nonce action.
     * @return int|string
     */
    public function maybe_update_nonce_user_logged_out($uid, $action)
{
}
    /**
     * Cleanup session data from the database and clear caches.
     */
    public function cleanup_sessions()
{
}
    /**
     * Returns the session.
     *
     * @param string $customer_id Customer ID.
     * @param mixed  $default Default session value.
     * @return string|array
     */
    public function get_session($customer_id, $default = false)
{
}
    /**
     * Delete the session from the cache and database.
     *
     * @param int $customer_id Customer ID.
     */
    public function delete_session($customer_id)
{
}
    /**
     * Update the session expiry timestamp.
     *
     * @param string $customer_id Customer ID.
     * @param int    $timestamp Timestamp to expire the cookie.
     */
    public function update_session_timestamp($customer_id, $timestamp)
{
}
}
