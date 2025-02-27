<?php

/**
 * WC_Form_Handler class.
 */
class WC_Form_Handler
{
    /**
     * Hook in methods.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Remove key and user ID (or user login, as a fallback) from query string, set cookie, and redirect to account page to show the form.
     */
    public static function redirect_reset_password_link()
    {
        // stub
    }

    /**
     * Save and and update a billing or shipping address if the
     * form was submitted through the user account page.
     */
    public static function save_address()
    {
        // stub
    }

    /**
     * Save the password/account details and redirect back to the my account page.
     */
    public static function save_account_details()
    {
        // stub
    }

    /**
     * Process the checkout form.
     */
    public static function checkout_action()
    {
        // stub
    }

    /**
     * Process the pay form.
     *
     * @throws Exception On payment error.
     */
    public static function pay_action()
    {
        // stub
    }

    /**
     * Process the add payment method form.
     */
    public static function add_payment_method_action()
    {
        // stub
    }

    /**
     * Process the delete payment method form.
     */
    public static function delete_payment_method_action()
    {
        // stub
    }

    /**
     * Process the delete payment method form.
     */
    public static function set_default_payment_method_action()
    {
        // stub
    }

    /**
     * Remove from cart/update.
     */
    public static function update_cart_action()
    {
        // stub
    }

    /**
     * Place a previous order again.
     *
     * @deprecated 3.5.0 Logic moved to cart session handling.
     */
    public static function order_again()
    {
        // stub
    }

    /**
     * Cancel a pending order.
     */
    public static function cancel_order()
    {
        // stub
    }

    /**
     * Add to cart action.
     *
     * Checks for a valid request, does validation (via hooks) and then redirects if valid.
     *
     * @param bool $url (default: false) URL to redirect to.
     */
    public static function add_to_cart_action($url = false)
    {
        // stub
    }

    /**
     * Handle adding simple products to the cart.
     *
     * @since 2.4.6 Split from add_to_cart_action.
     * @param int $product_id Product ID to add to the cart.
     * @return bool success or not
     */
    private static function add_to_cart_handler_simple($product_id)
    {
        // stub
    }

    /**
     * Handle adding grouped products to the cart.
     *
     * @since 2.4.6 Split from add_to_cart_action.
     * @param int $product_id Product ID to add to the cart.
     * @return bool success or not
     */
    private static function add_to_cart_handler_grouped($product_id)
    {
        // stub
    }

    /**
     * Handle adding variable products to the cart.
     *
     * @since 2.4.6 Split from add_to_cart_action.
     * @throws Exception If add to cart fails.
     * @param int $product_id Product ID to add to the cart.
     * @return bool success or not
     */
    private static function add_to_cart_handler_variable($product_id)
    {
        // stub
    }

    /**
     * Process the login form.
     *
     * @throws Exception On login error.
     */
    public static function process_login()
    {
        // stub
    }

    /**
     * Handle lost password form.
     */
    public static function process_lost_password()
    {
        // stub
    }

    /**
     * Handle reset password form.
     */
    public static function process_reset_password()
    {
        // stub
    }

    /**
     * Process the registration form.
     *
     * @throws Exception On registration error.
     */
    public static function process_registration()
    {
        // stub
    }

}
