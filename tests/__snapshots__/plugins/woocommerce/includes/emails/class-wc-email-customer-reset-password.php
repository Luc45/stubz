<?php

/**
 * Customer Reset Password.
 *
 * An email sent to the customer when they reset their password.
 *
 * @class       WC_Email_Customer_Reset_Password
 * @version     3.5.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Customer_Reset_Password
{
    /**
     * User ID.
     *
     * @var integer
     */
    public $user_id = null;

    /**
     * User login name.
     *
     * @var string
     */
    public $user_login = null;

    /**
     * User email.
     *
     * @var string
     */
    public $user_email = null;

    /**
     * Reset key.
     *
     * @var string
     */
    public $reset_key = null;

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
     * Trigger.
     *
     * @param string $user_login User login.
     * @param string $reset_key Password reset key.
     */
    public function trigger($user_login = '', $reset_key = '')
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
