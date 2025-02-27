<?php

/**
 * WC_Cart_Session class.
 *
 * @since 3.2.0
 */
final class WC_Cart_Session
{
    /**
     * Reference to cart object.
     *
     * @since 3.2.0
     * @var WC_Cart
     */
    protected $cart = null;

    /**
     * Sets up the items provided, and calculate totals.
     *
     * @since 3.2.0
     * @throws Exception If missing WC_Cart object.
     *
     * @param WC_Cart $cart Cart object to calculate totals for.
     */
    public function __construct($cart)
    {
        // stub
    }

    /**
     * Sets the cart instance.
     *
     * @param WC_Cart $cart Cart object.
     */
    public function set_cart(WC_Cart $cart)
    {
        // stub
    }

    /**
     * Register methods for this object on the appropriate WordPress hooks.
     */
    public function init()
    {
        // stub
    }

    /**
     * Get the cart data from the PHP session and store it in class variables.
     *
     * @since 3.2.0
     */
    public function get_cart_from_session()
    {
        // stub
    }

    /**
     * Destroy cart session data.
     *
     * @since 3.2.0
     */
    public function destroy_cart_session()
    {
        // stub
    }

    /**
     * Will set cart cookies if needed and when possible.
     *
     * Headers are only updated if headers have not yet been sent.
     *
     * @since 3.2.0
     */
    public function maybe_set_cart_cookies()
    {
        // stub
    }

    /**
     * Remove duplicate cookies from the response.
     */
    private function dedupe_cookies()
    {
        // stub
    }

    /**
     * Find a cookie by name in an array of cookies.
     *
     * @param  string $cookie_name Name of the cookie to find.
     * @param  array  $cookies     Array of cookies to search.
     * @return mixed               Key of the cookie if found, false if not.
     */
    private function find_cookie_by_name($cookie_name, $cookies)
    {
        // stub
    }

    /**
     * Sets the php session data for the cart and coupons.
     */
    public function set_session()
    {
        // stub
    }

    /**
     * Returns the contents of the cart in an array without the 'data' element.
     *
     * @return array contents of the cart
     */
    public function get_cart_for_session()
    {
        // stub
    }

    /**
     * Save the persistent cart when the cart is updated.
     */
    public function persistent_cart_update()
    {
        // stub
    }

    /**
     * Delete the persistent cart permanently.
     */
    public function persistent_cart_destroy()
    {
        // stub
    }

    /**
     * Set cart hash cookie and items in cart if not already set.
     *
     * @param bool $set Should cookies be set (true) or unset.
     */
    private function set_cart_cookies($set = true)
    {
        // stub
    }

    /**
     * Get the persistent cart from the database.
     *
     * @since  3.5.0
     * @return array
     */
    private function get_saved_cart()
    {
        // stub
    }

    /**
     * Get a cart from an order, if user has permission.
     *
     * @since  3.5.0
     *
     * @param int   $order_id Order ID to try to load.
     * @param array $cart Current cart array.
     *
     * @return array
     */
    private function populate_cart_from_order($order_id, $cart)
    {
        // stub
    }

}
