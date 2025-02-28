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
}
    /**
     * Remove key and user ID (or user login, as a fallback) from query string, set cookie, and redirect to account page to show the form.
     */
    public static function redirect_reset_password_link()
{
}
    /**
     * Save and and update a billing or shipping address if the
     * form was submitted through the user account page.
     */
    public static function save_address()
{
}
    /**
     * Save the password/account details and redirect back to the my account page.
     */
    public static function save_account_details()
{
}
    /**
     * Process the checkout form.
     */
    public static function checkout_action()
{
}
    /**
     * Process the pay form.
     *
     * @throws Exception On payment error.
     */
    public static function pay_action()
{
}
    /**
     * Process the add payment method form.
     */
    public static function add_payment_method_action()
{
}
    /**
     * Process the delete payment method form.
     */
    public static function delete_payment_method_action()
{
}
    /**
     * Process the delete payment method form.
     */
    public static function set_default_payment_method_action()
{
}
    /**
     * Remove from cart/update.
     */
    public static function update_cart_action()
{
}
    /**
     * Place a previous order again.
     *
     * @deprecated 3.5.0 Logic moved to cart session handling.
     */
    public static function order_again()
{
}
    /**
     * Cancel a pending order.
     */
    public static function cancel_order()
{
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
}
    /**
     * Process the login form.
     *
     * @throws Exception On login error.
     */
    public static function process_login()
{
}
    /**
     * Handle lost password form.
     */
    public static function process_lost_password()
{
}
    /**
     * Handle reset password form.
     */
    public static function process_reset_password()
{
}
    /**
     * Process the registration form.
     *
     * @throws Exception On registration error.
     */
    public static function process_registration()
{
}
}
