<?php

/**
 * New Order Email.
 *
 * An email sent to the admin when a new order is received/paid for.
 *
 * @class       WC_Email_New_Order
 * @version     2.0.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_New_Order
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
    /**
     * Initialise settings form fields.
     */
    public function init_form_fields()
{
}
    /**
     * Add mobile messaging.
     *
     * @param WC_Email $email that called for mobile messaging. May not contain a WC_Email for legacy reasons.
     */
    public function mobile_messaging($email)
{
}
}
