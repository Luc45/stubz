<?php

/**
 * Customer New Account.
 *
 * An email sent to the customer when they create an account.
 *
 * @class       WC_Email_Customer_New_Account
 * @version     3.5.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Customer_New_Account extends \WC_Email
{
    /**
     * User login name.
     *
     * @var string
     */
    public $user_login;
    /**
     * User email.
     *
     * @var string
     */
    public $user_email;
    /**
     * User password.
     *
     * @var string
     */
    public $user_pass;
    /**
     * Is the password generated?
     *
     * @var bool
     */
    public $password_generated;
    /**
     * Magic link to set initial password.
     *
     * @var string
     */
    public $set_password_url;
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
     * @param int    $user_id User ID.
     * @param string $user_pass User password.
     * @param bool   $password_generated Whether the password was generated automatically or not.
     */
    public function trigger($user_id, $user_pass = '', $password_generated = \false)
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
     * Generate set password URL link for a new user.
     * 
     * See also Automattic\WooCommerce\Blocks\Domain\Services\Email\CustomerNewAccount and wp_new_user_notification.
     * 
     * @since 6.0.0
     * @return string
     */
    protected function generate_set_password_url()
    {
    }
}