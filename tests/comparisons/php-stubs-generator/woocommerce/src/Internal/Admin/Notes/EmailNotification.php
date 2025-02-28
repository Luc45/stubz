<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * EmailNotification Class.
 */
class EmailNotification extends \WC_Email
{
    /**
     * Constructor.
     *
     * @param Note $note The notification to send.
     */
    public function __construct($note)
    {
    }
    /**
     * This email has no user-facing settings.
     */
    public function init_form_fields()
    {
    }
    /**
     * This email has no user-facing settings.
     */
    public function init_settings()
    {
    }
    /**
     * Return template filename.
     *
     * @param string $type Type of email to send.
     * @return string
     */
    public function get_template_filename($type = 'html')
    {
    }
    /**
     * Return email type.
     *
     * @return string
     */
    public function get_email_type()
    {
    }
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get email headers.
     *
     * @return string
     */
    public function get_headers()
    {
    }
    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get note content.
     *
     * @return string
     */
    public function get_note_content()
    {
    }
    /**
     * Get note image.
     *
     * @return string
     */
    public function get_image()
    {
    }
    /**
     * Get email action.
     *
     * @return stdClass
     */
    public function get_actions()
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
     * Trigger the sending of this email.
     *
     * @param string $user_email Email to send the note.
     * @param int    $user_id User id to to track the note.
     * @param string $user_name User's name.
     */
    public function trigger($user_email, $user_id, $user_name)
    {
    }
}
