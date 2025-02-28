<?php

/**
 * Order details email.
 *
 * An email sent to the customer via admin, that summarizes the details of their order. This was
 * historically referred to as the 'invoice', and for backwards compatibility reasons that is still
 * reflected in the class name (although on a user-level we have moved away from that nomenclature).
 *
 * @class       WC_Email_Customer_Invoice
 * @version     3.5.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Customer_Invoice extends \WC_Email
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
     * @param bool $paid Whether the order has been paid or not.
     * @since  3.1.0
     * @return string
     */
    public function get_default_subject($paid = false)
{
}
    /**
     * Get email heading.
     *
     * @param bool $paid Whether the order has been paid or not.
     * @since  3.1.0
     * @return string
     */
    public function get_default_heading($paid = false)
{
}
    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_subject()
{
}
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_heading()
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
     * Trigger the sending of this email.
     *
     * @param int      $order_id The order ID.
     * @param WC_Order $order Order object.
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
     * Initialise settings form fields.
     */
    public function init_form_fields()
{
}
}
