<?php

/**
 * Customer On-hold Order Email.
 *
 * An email sent to the customer when a new order is on-hold for.
 *
 * @class       WC_Email_Customer_On_Hold_Order
 * @version     2.6.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Customer_On_Hold_Order
{
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get email subject.
     *
     * @since  3.1.0
     * @return string
     */
    public function get_default_subject()
{
}
    /**
     * Get email heading.
     *
     * @since  3.1.0
     * @return string
     */
    public function get_default_heading()
{
}
    /**
     * Trigger the sending of this email.
     *
     * @param int            $order_id The order ID.
     * @param WC_Order|false $order Order object.
     */
    public function trigger($order_id, $order = false)
{
}
    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
{
}
    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
{
}
    /**
     * Default content to show below main email content.
     *
     * @since 3.7.0
     * @return string
     */
    public function get_default_additional_content()
{
}
}
