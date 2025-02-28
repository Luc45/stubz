<?php

namespace Automattic\WooCommerce\Admin;

/**
 * ReportCSVEmail Class.
 */
class ReportCSVEmail extends \WC_Email
{
    /**
     * Report labels.
     *
     * @var array
     */
    protected $report_labels = null;
    /**
     * Report type (e.g. 'customers').
     *
     * @var string
     */
    protected $report_type = null;
    /**
     * Download URL.
     *
     * @var string
     */
    protected $download_url = null;
    /**
     * Constructor.
     */
    public function __construct()
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
     * Get email subject.
     *
     * @return string
     */
    public function get_default_subject()
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
     * @param int    $user_id User ID to email.
     * @param string $report_type The type of report export being emailed.
     * @param string $download_url The URL for downloading the report.
     */
    public function trigger($user_id, $report_type, $download_url)
{
}
}