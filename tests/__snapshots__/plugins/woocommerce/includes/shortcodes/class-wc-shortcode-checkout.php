<?php

/**
 * Shortcode checkout class.
 */
class WC_Shortcode_Checkout
{
    /**
     * Get the shortcode content.
     *
     * @param array $atts Shortcode attributes.
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
     * Show the pay page.
     *
     * @throws Exception When validate fails.
     * @param int $order_id Order ID.
     */
    private static function order_pay($order_id)
    {
        // stub
    }

    /**
     * Show the thanks page.
     *
     * @param int $order_id Order ID.
     */
    private static function order_received($order_id = 0)
    {
        // stub
    }

    /**
     * Show the checkout.
     */
    private static function checkout()
    {
        // stub
    }

    /**
     * Tries to determine if the user's email address should be verified before rendering either the 'order received' or
     * 'order pay' pages. This should only be applied to guest orders.
     *
     * @param WC_Order $order   The order for which a need for email verification is being determined.
     * @param string   $context The context in which email verification is being tested.
     *
     * @return bool
     */
    private static function guest_should_verify_email(WC_Order $order, string $context): bool
    {
        // stub
    }

}
