<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services\Email;

/**
 * Customer New Account.
 *
 * An email sent to the customer when they create an account.
 * This is intended as a replacement to \WC_Email_Customer_New_Account(),
 * with a set password link instead of emailing the new password in email
 * content.
 *
 * @extends     \WC_Email
 */
class CustomerNewAccount extends \WC_Email
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
     * Magic link to set initial password.
     *
     * @var string
     */
    public $set_password_url;
    /**
     * Override (force) default template path
     *
     * @var string
     */
    public $default_template_path;
    /**
     * Constructor.
     *
     * @param Package $package An instance of (Woo Blocks) Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
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
    public function trigger($user_id, $user_pass = '', $password_generated = false)
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