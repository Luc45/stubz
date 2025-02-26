<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * OrderController class.
 * Helper class which creates and syncs orders with the cart.
 */
class OrderController
{
    /**
     * Checkout fields controller.
     *
     * @var CheckoutFields
     */
    private Automattic\WooCommerce\Blocks\Domain\Services\CheckoutFields $additional_fields_controller;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Create order and set props based on global settings.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @return \WC_Order A new order object.
     */
    public function create_order_from_cart()
    {
        // stub
    }

    /**
     * Update an order using data from the current cart.
     *
     * @param \WC_Order $order The order object to update.
     * @param boolean   $update_totals Whether to update totals or not.
     */
    public function update_order_from_cart(WC_Order $order, $update_totals = true)
    {
        // stub
    }

    /**
     * Copies order data to customer object (not the session), so values persist for future checkouts.
     *
     * @param \WC_Order $order Order object.
     */
    public function sync_customer_data_with_order(WC_Order $order)
    {
        // stub
    }

    /**
     * Final validation ran before payment is taken.
     *
     * By this point we have an order populated with customer data and items.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param \WC_Order $order Order object.
     */
    public function validate_order_before_payment(WC_Order $order)
    {
        // stub
    }

    /**
     * Convert a coupon code to a coupon object.
     *
     * @param string $coupon_code Coupon code.
     * @return \WC_Coupon Coupon object.
     */
    protected function get_coupon($coupon_code)
    {
        // stub
    }

    /**
     * Validate coupons applied to the order and remove those that are not valid.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param \WC_Order $order Order object.
     */
    protected function validate_coupons(WC_Order $order)
    {
        // stub
    }

    /**
     * Validates the customer email. This is a required field.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param \WC_Order $order Order object.
     */
    protected function validate_email(WC_Order $order)
    {
        // stub
    }

    /**
     * Validates customer address data based on the locale to ensure required fields are set.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param \WC_Order $order Order object.
     */
    protected function validate_addresses(WC_Order $order)
    {
        // stub
    }

    /**
     * Check all required address fields are set and return errors if not.
     *
     * @param string $country Country code.
     * @param array  $allowed_countries List of valid country codes.
     * @return boolean True if valid.
     */
    protected function validate_allowed_country($country, array $allowed_countries)
    {
        // stub
    }

    /**
     * Check all required address fields are set and return errors if not.
     *
     * @param \WC_Order $order Order object.
     * @param string    $address_type billing or shipping address, used in error messages.
     * @param \WP_Error $errors Error object.
     */
    protected function validate_address_fields(WC_Order $order, $address_type, WP_Error $errors)
    {
        // stub
    }

    /**
     * Check email restrictions of a coupon against the order.
     *
     * @throws Exception Exception if invalid data is detected.
     * @param \WC_Coupon $coupon Coupon object applied to the cart.
     * @param \WC_Order  $order Order object.
     */
    protected function validate_coupon_email_restriction(WC_Coupon $coupon, WC_Order $order)
    {
        // stub
    }

    /**
     * Check usage restrictions of a coupon against the order.
     *
     * @throws Exception Exception if invalid data is detected.
     * @param \WC_Coupon $coupon Coupon object applied to the cart.
     * @param \WC_Order  $order Order object.
     */
    protected function validate_coupon_usage_limit(WC_Coupon $coupon, WC_Order $order)
    {
        // stub
    }

    /**
     * Get user email from user id.
     *
     * @param integer $user_id User ID.
     * @return string Email or empty string.
     */
    private function get_email_from_user_id($user_id)
    {
        // stub
    }

    /**
     * Get the usage count for a coupon based on a list of aliases (ids, emails).
     *
     * @param \WC_Coupon $coupon Coupon object applied to the cart.
     * @param array      $aliases List of aliases to check.
     *
     * @return integer
     */
    private function get_usage_per_aliases($coupon, $aliases)
    {
        // stub
    }

    /**
     * Check there is a shipping method if it requires shipping.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param boolean $needs_shipping Current order needs shipping.
     * @param array   $chosen_shipping_methods Array of shipping methods.
     */
    public function validate_selected_shipping_methods($needs_shipping, $chosen_shipping_methods = array (
))
    {
        // stub
    }

    /**
     * Validate a given order key against an existing order.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param integer $order_id Order ID.
     * @param string  $order_key Order key.
     */
    public function validate_order_key($order_id, $order_key)
    {
        // stub
    }

    /**
     * Get errors for order stock on failed orders.
     *
     * @throws RouteException Exception if invalid data is detected.
     * @param integer $order_id Order ID.
     */
    public function get_failed_order_stock_error($order_id)
    {
        // stub
    }

    /**
     * Changes default order status to draft for orders created via this API.
     *
     * @return string
     */
    public function default_order_status()
    {
        // stub
    }

    /**
     * Create order line items.
     *
     * @param \WC_Order $order The order object to update.
     */
    protected function update_line_items_from_cart(WC_Order $order)
    {
        // stub
    }

    /**
     * Update address data from cart and/or customer session data.
     *
     * @param \WC_Order $order The order object to update.
     */
    protected function update_addresses_from_cart(WC_Order $order)
    {
        // stub
    }

}

