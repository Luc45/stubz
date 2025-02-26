<?php

namespace ;

/**
 * Customer Note Order Email.
 *
 * Customer note emails are sent when you add a note to an order.
 *
 * @class       WC_Email_Customer_Note
 * @version     3.5.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Customer_Note extends \WC_Email
{
    /**
     * Customer note.
     *
     * @var string
     */
    public $customer_note = null;

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
     * Trigger.
     *
     * @param array $args Email arguments.
     */
    public function trigger($args)
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

}

