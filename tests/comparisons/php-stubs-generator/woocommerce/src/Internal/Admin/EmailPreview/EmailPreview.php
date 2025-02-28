<?php

namespace Automattic\WooCommerce\Internal\Admin\EmailPreview;

/**
 * EmailPreview Class.
 */
class EmailPreview
{
    public const DEFAULT_EMAIL_TYPE = 'WC_Email_Customer_Processing_Order';
    public const DEFAULT_EMAIL_ID = 'customer_processing_order';
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
    final public static function instance()
    {
    }
    /**
     * Get all email settings IDs.
     */
    public static function get_all_email_settings_ids()
    {
    }
    /**
     * Get email style settings IDs.
     */
    public static function get_email_style_settings_ids()
    {
    }
    /**
     * Get email content settings IDs for specific email.
     *
     * @param string|null $email_id Email ID.
     */
    public static function get_email_content_settings_ids(?string $email_id)
    {
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
    }
    /**
     * Get the preview email content.
     *
     * @return string
     */
    public function render()
    {
    }
    /**
     * Get the preview email content.
     *
     * @return string
     */
    public function get_subject()
    {
    }
    /**
     * Return a dummy product when the product is not set in email classes.
     *
     * @param WC_Product|null $product Order item product.
     * @return WC_Product
     */
    public function get_dummy_product_when_not_set($product)
    {
    }
    /**
     * Enable shipping address in the preview email. Not using __return_true so
     * we don't accidentally remove the same filter used by other plugin or theme.
     *
     * @return true
     */
    public function enable_shipping_address()
    {
    }
    /**
     * Enable preview mode to use transient values in email-styles.php. Not using __return_true
     * so we don't accidentally remove the same filter used by other plugin or theme.
     *
     * @return true
     */
    public function enable_preview_mode()
    {
    }
}
