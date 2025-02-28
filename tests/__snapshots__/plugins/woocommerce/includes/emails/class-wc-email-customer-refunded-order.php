<?php
/**
 * Customer Refunded Order Email.
 *
 * Order refunded emails are sent to the customer when the order is marked refunded.
 *
 * @class    WC_Email_Customer_Refunded_Order
 * @version  3.5.0
 * @package  WooCommerce\Classes\Emails
 * @extends  WC_Email
 */
class WC_Email_Customer_Refunded_Order extends \WC_Email
{
    /**
     * Refund order.
     *
     * @var WC_Order|bool
     */
    public $refund = null;
    /**
     * Is the order partial refunded?
     *
     * @var bool
     */
    public $partial_refund = null;
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get email subject.
     *
     * @param bool $partial Whether it is a partial refund or a full refund.
     * @since  3.1.0
     * @return string
     */
    public function get_default_subject($partial = false)
{
}
    /**
     * Get email heading.
     *
     * @param bool $partial Whether it is a partial refund or a full refund.
     * @since  3.1.0
     * @return string
     */
    public function get_default_heading($partial = false)
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
     * Set email strings.
     *
     * @param bool $partial_refund Whether it is a partial refund or a full refund.
     * @deprecated 3.1.0 Unused.
     */
    public function set_email_strings($partial_refund = false)
{
}
    /**
     * Full refund notification.
     *
     * @param int $order_id Order ID.
     * @param int $refund_id Refund ID.
     */
    public function trigger_full($order_id, $refund_id = null)
{
}
    /**
     * Partial refund notification.
     *
     * @param int $order_id Order ID.
     * @param int $refund_id Refund ID.
     */
    public function trigger_partial($order_id, $refund_id = null)
{
}
    /**
     * Trigger.
     *
     * @param int  $order_id Order ID.
     * @param bool $partial_refund Whether it is a partial refund or a full refund.
     * @param int  $refund_id Refund ID.
     */
    public function trigger($order_id, $partial_refund = false, $refund_id = null)
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
}
