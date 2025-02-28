<?php
/**
 * Emails class.
 */
class WC_Emails
{
    /**
     * Array of email notification classes
     *
     * @var WC_Email[]
     */
    public $emails = array();
    /**
     * The single instance of the class
     *
     * @var WC_Emails
     */
    protected static $_instance = null;
    /**
     * Background emailer class.
     *
     * @var WC_Background_Emailer
     */
    protected static $background_emailer = null;
    /**
     * Main WC_Emails Instance.
     *
     * Ensures only one instance of WC_Emails is loaded or can be loaded.
     *
     * @since 2.1
     * @static
     * @return WC_Emails Main instance
     */
    public static function instance()
{
}
    /**
     * Cloning is forbidden.
     *
     * @since 2.1
     */
    public function __clone()
{
}
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 2.1
     */
    public function __wakeup()
{
}
    /**
     * Hook in all transactional emails.
     */
    public static function init_transactional_emails()
{
}
    /**
     * Queues transactional email so it's not sent in current request if enabled,
     * otherwise falls back to send now.
     *
     * @param mixed ...$args Optional arguments.
     */
    public static function queue_transactional_email(...$args)
{
}
    /**
     * Init the mailer instance and call the notifications for the current filter.
     *
     * @internal
     *
     * @param string $filter Filter name.
     * @param array  $args Email args (default: []).
     */
    public static function send_queued_transactional_email($filter = '', $args = array())
{
}
    /**
     * Init the mailer instance and call the notifications for the current filter.
     *
     * @internal
     *
     * @param array $args Email args (default: []).
     */
    public static function send_transactional_email($args = array())
{
}
    /**
     * Constructor for the email class hooks in all emails that can be sent.
     */
    public function __construct()
{
}
    /**
     * Init email classes.
     */
    public function init()
{
}
    /**
     * Return the email classes - used in admin to load settings.
     *
     * @return WC_Email[]
     */
    public function get_emails()
{
}
    /**
     * Get from name for email.
     *
     * @return string
     */
    public function get_from_name()
{
}
    /**
     * Get from email address.
     *
     * @return string
     */
    public function get_from_address()
{
}
    /**
     * Get the email header.
     *
     * @param mixed $email_heading Heading for the email.
     */
    public function email_header($email_heading)
{
}
    /**
     * Get the email footer.
     */
    public function email_footer()
{
}
    /**
     * Replace placeholder text in strings.
     *
     * @since  3.7.0
     * @param  string $string Email footer text.
     * @return string         Email footer text with any replacements done.
     */
    public function replace_placeholders($string)
{
}
    /**
     * Filter callback to replace {site_title} in email footer
     *
     * @since  3.3.0
     * @deprecated 3.7.0
     * @param  string $string Email footer text.
     * @return string         Email footer text with any replacements done.
     */
    public function email_footer_replace_site_title($string)
{
}
    /**
     * Wraps a message in the woocommerce mail template.
     *
     * @param string $email_heading Heading text.
     * @param string $message       Email message.
     * @param bool   $plain_text    Set true to send as plain text. Default to false.
     *
     * @return string
     */
    public function wrap_message($email_heading, $message, $plain_text = false)
{
}
    /**
     * Send the email.
     *
     * @param mixed  $to          Receiver.
     * @param mixed  $subject     Email subject.
     * @param mixed  $message     Message.
     * @param string $headers     Email headers (default: "Content-Type: text/html\r\n").
     * @param string $attachments Attachments (default: "").
     * @return bool
     */
    public function send($to, $subject, $message, $headers = 'Content-Type: text/html
', $attachments = '')
{
}
    /**
     * Prepare and send the customer invoice email on demand.
     *
     * @param int|WC_Order $order Order instance or ID.
     */
    public function customer_invoice($order)
{
}
    /**
     * Customer new account welcome email.
     *
     * @param int   $customer_id        Customer ID.
     * @param array $new_customer_data  New customer data.
     * @param bool  $password_generated If password is generated.
     */
    public function customer_new_account($customer_id, $new_customer_data = array(), $password_generated = false)
{
}
    /**
     * Show the order details table
     *
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If should sent to admin.
     * @param bool     $plain_text    If is plain text email.
     * @param string   $email         Email address.
     */
    public function order_details($order, $sent_to_admin = false, $plain_text = false, $email = '')
{
}
    /**
     * Show order downloads in a table.
     *
     * @since 3.2.0
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If should sent to admin.
     * @param bool     $plain_text    If is plain text email.
     * @param string   $email         Email address.
     */
    public function order_downloads($order, $sent_to_admin = false, $plain_text = false, $email = '')
{
}
    /**
     * Add order meta to email templates.
     *
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If should sent to admin.
     * @param bool     $plain_text    If is plain text email.
     */
    public function order_meta($order, $sent_to_admin = false, $plain_text = false)
{
}
    /**
     * Is customer detail field valid?
     *
     * @param  array $field Field data to check if is valid.
     * @return boolean
     */
    public function customer_detail_field_is_valid($field)
{
}
    /**
     * Allows developers to add additional customer details to templates.
     *
     * In versions prior to 3.2 this was used for notes, phone and email but this data has moved.
     *
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If should sent to admin.
     * @param bool     $plain_text    If is plain text email.
     */
    public function customer_details($order, $sent_to_admin = false, $plain_text = false)
{
}
    /**
     * Get the email addresses.
     *
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If should sent to admin.
     * @param bool     $plain_text    If is plain text email.
     */
    public function email_addresses($order, $sent_to_admin = false, $plain_text = false)
{
}
    /**
     * Renders any additional fields captured during block-based checkout.
     *
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If email is sent to admin.
     * @param bool     $plain_text    If this is a plain text email.
     */
    public function additional_checkout_fields($order, $sent_to_admin = false, $plain_text = false)
{
}
    /**
     * Renders any additional address fields captured during block-based checkout.
     *
     * @param string   $address_type Address type.
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If email is sent to admin.
     * @param bool     $plain_text    If this is a plain text email.
     */
    public function additional_address_fields($address_type, $order, $sent_to_admin = false, $plain_text = false)
{
}
    /**
     * Force country display, used by WC_Emails::get_store address() method
     *
     * @return bool
     */
    public function get_store_address_force_country_display()
{
}
    /**
     * Low stock notification email.
     *
     * @param WC_Product $product Product instance.
     */
    public function low_stock($product)
{
}
    /**
     * No stock notification email.
     *
     * @param WC_Product $product Product instance.
     */
    public function no_stock($product)
{
}
    /**
     * Backorder notification email.
     *
     * @param array $args Arguments.
     */
    public function backorder($args)
{
}
    /**
     * Adds Schema.org markup for order in JSON-LD format.
     *
     * @deprecated 3.0.0
     * @see WC_Structured_Data::generate_order_data()
     *
     * @since 2.6.0
     * @param WC_Order $order         Order instance.
     * @param bool     $sent_to_admin If should sent to admin.
     * @param bool     $plain_text    If is plain text email.
     */
    public function order_schema_markup($order, $sent_to_admin = false, $plain_text = false)
{
}
}
