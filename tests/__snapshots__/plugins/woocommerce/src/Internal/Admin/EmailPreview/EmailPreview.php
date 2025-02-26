<?php

namespace Automattic\WooCommerce\Internal\Admin\EmailPreview;

/**
 * EmailPreview Class.
 */
class EmailPreview extends \
{
    const DEFAULT_EMAIL_TYPE = 'WC_Email_Customer_Processing_Order';

    const DEFAULT_EMAIL_ID = 'customer_processing_order';

    const USER_OBJECT_EMAILS = array(
  0 => 'WC_Email_Customer_New_Account',
  1 => 'WC_Email_Customer_Reset_Password',
);

    /**
     * All fields IDs that can customize email styles in Settings.
     *
     * @var array
     */
    private static array $email_style_settings_ids = array(
  0 => 'woocommerce_email_background_color',
  1 => 'woocommerce_email_base_color',
  2 => 'woocommerce_email_body_background_color',
  3 => 'woocommerce_email_font_family',
  4 => 'woocommerce_email_footer_text',
  5 => 'woocommerce_email_footer_text_color',
  6 => 'woocommerce_email_header_alignment',
  7 => 'woocommerce_email_header_image',
  8 => 'woocommerce_email_text_color',
);

    /**
     * All fields IDs that can customize specific email content in Settings.
     *
     * @var array
     */
    private static array $email_content_settings_ids = array(
);

    /**
     * Whether the email settings IDs are initialized.
     *
     * @var bool
     */
    private static bool $email_settings_ids_initialized = false;

    /**
     * The email type to preview.
     *
     * @var string|null
     */
    private string|null $email_type = null;

    /**
     * The email object.
     *
     * @var WC_Email|null
     */
    private WC_Email|null $email = null;

    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;

    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
        // stub
    }

    /**
     * Get all email settings IDs.
     */
    public static function get_all_email_settings_ids()
    {
        // stub
    }

    /**
     * Get email style settings IDs.
     */
    public static function get_email_style_settings_ids()
    {
        // stub
    }

    /**
     * Get email content settings IDs for specific email.
     *
     * @param string|null $email_id Email ID.
     */
    public static function get_email_content_settings_ids(string|null $email_id)
    {
        // stub
    }

    /**
     * Set the email type to preview.
     *
     * @param string $email_type Email type.
     *
     * @throws \InvalidArgumentException When the email type is invalid.
     */
    public function set_email_type(string $email_type)
    {
        // stub
    }

    /**
     * Get the preview email content.
     *
     * @return string
     */
    public function render()
    {
        // stub
    }

    /**
     * Ensure links open in new tab. User in WooCommerce Settings,
     * so the links don't open inside the iframe.
     *
     * @param string $content Email content HTML.
     * @return string
     */
    public function ensure_links_open_in_new_tab(string $content)
    {
        // stub
    }

    /**
     * Get the preview email content.
     *
     * @return string
     */
    public function get_subject()
    {
        // stub
    }

    /**
     * Return a dummy product when the product is not set in email classes.
     *
     * @param WC_Product|null $product Order item product.
     * @return WC_Product
     */
    public function get_dummy_product_when_not_set($product)
    {
        // stub
    }

    /**
     * Get HTML of the legacy preview email.
     *
     * @return string
     */
    private function render_legacy_preview_email()
    {
        // stub
    }

    /**
     * Render HTML content of the preview email.
     *
     * @return string
     */
    private function render_preview_email()
    {
        // stub
    }

    /**
     * Get a dummy order object without the need to create in the database.
     *
     * @return WC_Order
     */
    private function get_dummy_order()
    {
        // stub
    }

    /**
     * Get a dummy product. Also used with `woocommerce_order_item_product` filter
     * when email templates tries to get the product from the database.
     *
     * @return WC_Product
     */
    private function get_dummy_product()
    {
        // stub
    }

    /**
     * Get a dummy product variation.
     *
     * @return WC_Product_Variation
     */
    private function get_dummy_product_variation()
    {
        // stub
    }

    /**
     * Get a dummy address.
     *
     * @return array
     */
    private function get_dummy_address()
    {
        // stub
    }

    /**
     * Get the placeholders for the email preview.
     *
     * @param WC_Order|WP_User $email_object The object to render email with.
     * @return array
     */
    private function get_placeholders($email_object)
    {
        // stub
    }

    /**
     * Set up filters for email preview.
     */
    private function set_up_filters()
    {
        // stub
    }

    /**
     * Clean up filters after email preview.
     */
    private function clean_up_filters()
    {
        // stub
    }

    /**
     * Get the shipping method for the preview email.
     *
     * @return string
     */
    public function get_shipping_method()
    {
        // stub
    }

    /**
     * Enable shipping address in the preview email. Not using __return_true so
     * we don't accidentally remove the same filter used by other plugin or theme.
     *
     * @return true
     */
    public function enable_shipping_address()
    {
        // stub
    }

    /**
     * Enable preview mode to use transient values in email-styles.php. Not using __return_true
     * so we don't accidentally remove the same filter used by other plugin or theme.
     *
     * @return true
     */
    public function enable_preview_mode()
    {
        // stub
    }

}

