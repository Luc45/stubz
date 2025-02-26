<?php

namespace ;

/**
 * Failed Order Email.
 *
 * An email sent to the admin when payment fails to go through.
 *
 * @class       WC_Email_Failed_Order
 * @version     2.5.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Failed_Order extends \WC_Email
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Get email subject.
     *
     * @since  3.1.0
     * @return string
     */
    public function get_default_subject()
    {
        // stub
    }

    /**
     * Get email heading.
     *
     * @since  3.1.0
     * @return string
     */
    public function get_default_heading()
    {
        // stub
    }

    /**
     * Trigger the sending of this email.
     *
     * @param int            $order_id The order ID.
     * @param WC_Order|false $order Order object.
     */
    public function trigger($order_id, $order = false)
    {
        // stub
    }

    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
    {
        // stub
    }

    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
    {
        // stub
    }

    /**
     * Default content to show below main email content.
     *
     * @since 3.7.0
     * @return string
     */
    public function get_default_additional_content()
    {
        // stub
    }

    /**
     * Initialise settings form fields.
     */
    public function init_form_fields()
    {
        // stub
    }

}

