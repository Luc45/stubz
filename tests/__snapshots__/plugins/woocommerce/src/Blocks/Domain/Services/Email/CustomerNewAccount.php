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
class CustomerNewAccount
{
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
     * Magic link to set initial password.
     *
     * @var string
     */
    public $set_password_url = null;

    /**
     * Override (force) default template path
     *
     * @var string
     */
    public $default_template_path = null;

    /**
     * Constructor.
     *
     * @param Package $package An instance of (Woo Blocks) Package.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Domain\Package $package)
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
     * @param int    $user_id User ID.
     * @param string $user_pass User password.
     * @param bool   $password_generated Whether the password was generated automatically or not.
     */
    public function trigger($user_id, $user_pass = '', $password_generated = false)
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