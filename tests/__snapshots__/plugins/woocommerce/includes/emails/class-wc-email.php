<?php

/**
 * Email Class
 *
 * WooCommerce Email Class which is extended by specific email template classes to add emails to WooCommerce
 *
 * @class       WC_Email
 * @version     2.5.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Settings_API
 */
class WC_Email
{
    /**
     * Email method ID.
     *
     * @var String
     */
    public $id = null;

    /**
     * Email method title.
     *
     * @var string
     */
    public $title = null;

    /**
     * 'yes' if the method is enabled.
     *
     * @var string yes, no
     */
    public $enabled = null;

    /**
     * Description for the email.
     *
     * @var string
     */
    public $description = null;

    /**
     * Default heading.
     *
     * Supported for backwards compatibility but we recommend overloading the
     * get_default_x methods instead so localization can be done when needed.
     *
     * @var string
     */
    public $heading = '';

    /**
     * Default subject.
     *
     * Supported for backwards compatibility but we recommend overloading the
     * get_default_x methods instead so localization can be done when needed.
     *
     * @var string
     */
    public $subject = '';

    /**
     * Plain text template path.
     *
     * @var string
     */
    public $template_plain = null;

    /**
     * HTML template path.
     *
     * @var string
     */
    public $template_html = null;

    /**
     * Template path.
     *
     * @var string
     */
    public $template_base = null;

    /**
     * Recipients for the email.
     *
     * @var string
     */
    public $recipient = null;

    /**
     * Object this email is for, for example a customer, product, or email.
     *
     * @var object|bool
     */
    public $object = null;

    /**
     * Mime boundary (for multipart emails).
     *
     * @var string
     */
    public $mime_boundary = null;

    /**
     * Mime boundary header (for multipart emails).
     *
     * @var string
     */
    public $mime_boundary_header = null;

    /**
     * True when email is being sent.
     *
     * @var bool
     */
    public $sending = null;

    /**
     * True when the email notification is sent manually only.
     *
     * @var bool
     */
    protected $manual = false;

    /**
     * True when the email notification is sent to customers.
     *
     * @var bool
     */
    protected $customer_email = false;

    /**
     *  List of preg* regular expression patterns to search for,
     *  used in conjunction with $plain_replace.
     *  https://raw.github.com/ushahidi/wp-silcc/master/class.html2text.inc
     *
     *  @var array $plain_search
     *  @see $plain_replace
     */
    public $plain_search = array (
  0 => '//',
  1 => '/&(nbsp|#0*160);/i',
  2 => '/&(quot|rdquo|ldquo|#0*8220|#0*8221|#0*147|#0*148);/i',
  3 => '/&(apos|rsquo|lsquo|#0*8216|#0*8217);/i',
  4 => '/&gt;/i',
  5 => '/&lt;/i',
  6 => '/&#0*38;/i',
  7 => '/&amp;/i',
  8 => '/&(copy|#0*169);/i',
  9 => '/&(trade|#0*8482|#0*153);/i',
  10 => '/&(reg|#0*174);/i',
  11 => '/&(mdash|#0*151|#0*8212);/i',
  12 => '/&(ndash|minus|#0*8211|#0*8722);/i',
  13 => '/&(bull|#0*149|#0*8226);/i',
  14 => '/&(pound|#0*163);/i',
  15 => '/&(euro|#0*8364);/i',
  16 => '/&(dollar|#0*36);/i',
  17 => '/&[^&\\s;]+;/i',
  18 => '/[ ]{2,}/',
);

    /**
     *  List of pattern replacements corresponding to patterns searched.
     *
     *  @var array $plain_replace
     *  @see $plain_search
     */
    public $plain_replace = array (
  0 => '',
  1 => ' ',
  2 => '"',
  3 => '\'',
  4 => '>',
  5 => '<',
  6 => '&',
  7 => '&',
  8 => '(c)',
  9 => '(tm)',
  10 => '(R)',
  11 => '--',
  12 => '-',
  13 => '*',
  14 => '£',
  15 => 'EUR',
  16 => '$',
  17 => '',
  18 => ' ',
);

    /**
     * Strings to find/replace in subjects/headings.
     *
     * @var array
     */
    public $placeholders = array (
);

    /**
     * Strings to find in subjects/headings.
     *
     * @deprecated 3.2.0 in favour of placeholders
     * @var array
     */
    public $find = array (
);

    /**
     * Strings to replace in subjects/headings.
     *
     * @deprecated 3.2.0 in favour of placeholders
     * @var array
     */
    public $replace = array (
);

    /**
     * E-mail type: plain, html or multipart.
     *
     * @var string
     */
    public $email_type = null;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Handle multipart mail.
     *
     * @param  PHPMailer $mailer PHPMailer object.
     * @return PHPMailer
     */
    public function handle_multipart($mailer)
    {
        // stub
    }

    /**
     * Format email string.
     *
     * @param mixed $string Text to replace placeholders in.
     * @return string
     */
    public function format_string($string)
    {
        // stub
    }

    /**
     * Set the locale to the store locale for customer emails to make sure emails are in the store language.
     */
    public function setup_locale()
    {
        // stub
    }

    /**
     * Restore the locale to the default locale. Use after finished with setup_locale.
     */
    public function restore_locale()
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
     * Return content from the additional_content field.
     *
     * Displayed above the footer.
     *
     * @since 3.7.0
     * @return string
     */
    public function get_additional_content()
    {
        // stub
    }

    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_subject()
    {
        // stub
    }

    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_heading()
    {
        // stub
    }

    /**
     * Get valid recipients.
     *
     * @return string
     */
    public function get_recipient()
    {
        // stub
    }

    /**
     * Get email headers.
     *
     * @return string
     */
    public function get_headers()
    {
        // stub
    }

    /**
     * Get email attachments.
     *
     * @return array
     */
    public function get_attachments()
    {
        // stub
    }

    /**
     * Return email type.
     *
     * @return string
     */
    public function get_email_type()
    {
        // stub
    }

    /**
     * Get email content type.
     *
     * @param string $default_content_type Default wp_mail() content type.
     * @return string
     */
    public function get_content_type($default_content_type = '')
    {
        // stub
    }

    /**
     * Return the email's title
     *
     * @return string
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Return the email's description
     *
     * @return string
     */
    public function get_description()
    {
        // stub
    }

    /**
     * Proxy to parent's get_option and attempt to localize the result using gettext.
     *
     * @param string $key Option key.
     * @param mixed  $empty_value Value to use when option is empty.
     * @return string
     */
    public function get_option($key, $empty_value = null)
    {
        // stub
    }

    /**
     * Checks if this email is enabled and will be sent.
     *
     * @return bool
     */
    public function is_enabled()
    {
        // stub
    }

    /**
     * Checks if this email is manually sent
     *
     * @return bool
     */
    public function is_manual()
    {
        // stub
    }

    /**
     * Checks if this email is customer focussed.
     *
     * @return bool
     */
    public function is_customer_email()
    {
        // stub
    }

    /**
     * Get WordPress blog name.
     *
     * @return string
     */
    public function get_blogname()
    {
        // stub
    }

    /**
     * Get email content.
     *
     * @return string
     */
    public function get_content()
    {
        // stub
    }

    /**
     * Apply inline styles to dynamic content.
     *
     * We only inline CSS for html emails, and to do so we use Emogrifier library (if supported).
     *
     * @version 4.0.0
     * @param string|null $content Content that will receive inline styles.
     * @return string
     */
    public function style_inline($content)
    {
        // stub
    }

    /**
     * Returns CSS styles that should be included with all HTML e-mails, regardless of theme specific customizations.
     *
     * @since 9.1.0
     *
     * @return string
     */
    protected function get_must_use_css_styles(): string
    {
        // stub
    }

    /**
     * Return if emogrifier library is supported.
     *
     * @version 4.0.0
     * @since 3.5.0
     * @return bool
     */
    protected function supports_emogrifier()
    {
        // stub
    }

    /**
     * Get the email content in plain text format.
     *
     * @return string
     */
    public function get_content_plain()
    {
        // stub
    }

    /**
     * Get the email content in HTML format.
     *
     * @return string
     */
    public function get_content_html()
    {
        // stub
    }

    /**
     * Get the from name for outgoing emails.
     *
     * @param string $from_name Default wp_mail() name associated with the "from" email address.
     * @return string
     */
    public function get_from_name($from_name = '')
    {
        // stub
    }

    /**
     * Get the from address for outgoing emails.
     *
     * @param string $from_email Default wp_mail() email address to send from.
     * @return string
     */
    public function get_from_address($from_email = '')
    {
        // stub
    }

    /**
     * Set the object for the outgoing email.
     *
     * @param object $object Object this email is for, e.g. customer, or product.
     * @return void
     */
    public function set_object($object)
    {
        // stub
    }

    /**
     * Send an email.
     *
     * @param string $to Email to.
     * @param string $subject Email subject.
     * @param string $message Email message.
     * @param string $headers Email headers.
     * @param array  $attachments Email attachments.
     * @return bool success
     */
    public function send($to, $subject, $message, $headers, $attachments)
    {
        // stub
    }

    /**
     * Initialise Settings Form Fields - these are generic email options most will use.
     */
    public function init_form_fields()
    {
        // stub
    }

    /**
     * Email type options.
     *
     * @return array
     */
    public function get_email_type_options()
    {
        // stub
    }

    /**
     * Admin Panel Options Processing.
     */
    public function process_admin_options()
    {
        // stub
    }

    /**
     * Get template.
     *
     * @param  string $type Template type. Can be either 'template_html' or 'template_plain'.
     * @return string
     */
    public function get_template($type)
    {
        // stub
    }

    /**
     * Save the email templates.
     *
     * @since 2.4.0
     * @param string $template_code Template code.
     * @param string $template_path Template path.
     */
    protected function save_template($template_code, $template_path)
    {
        // stub
    }

    /**
     * Get the template file in the current theme.
     *
     * @param  string $template Template name.
     *
     * @return string
     */
    public function get_theme_template_file($template)
    {
        // stub
    }

    /**
     * Move template action.
     *
     * @param string $template_type Template type.
     */
    protected function move_template_action($template_type)
    {
        // stub
    }

    /**
     * Delete template action.
     *
     * @param string $template_type Template type.
     */
    protected function delete_template_action($template_type)
    {
        // stub
    }

    /**
     * Admin actions.
     */
    protected function admin_actions()
    {
        // stub
    }

    /**
     * Admin Options.
     *
     * Setup the email settings screen.
     * Override this in your email.
     *
     * @since 1.0.0
     */
    public function admin_options()
    {
        // stub
    }

    /**
     * Clears the PhpMailer AltBody field, to prevent that content from leaking across emails.
     */
    private function clear_alt_body_field(): void
    {
        // stub
    }

    /**
     * Get an option or transient for email preview.
     *
     * @param string $key Option key.
     * @param mixed  $empty_value Value to use when option is empty.
     */
    private function get_option_or_transient(string $key, $empty_value = null)
    {
        // stub
    }

}
