<?php

namespace ;

/**
 * Structured data class.
 */
class WC_Structured_Data extends \
{
    /**
     * Stores the structured data.
     *
     * @var array $_data Array of structured data.
     */
    private $_data = array(
);

    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Sets data.
     *
     * @param  array $data  Structured data.
     * @param  bool  $reset Unset data (default: false).
     * @return bool
     */
    public function set_data($data, $reset = false)
    {
        // stub
    }

    /**
     * Gets data.
     *
     * @return array
     */
    public function get_data()
    {
        // stub
    }

    /**
     * Structures and returns data.
     *
     * List of types available by default for specific request:
     *
     * 'product',
     * 'review',
     * 'breadcrumblist',
     * 'website',
     * 'order',
     *
     * @param  array $types Structured data types.
     * @return array
     */
    public function get_structured_data($types)
    {
        // stub
    }

    /**
     * Get data types for pages.
     *
     * @return array
     */
    protected function get_data_type_for_page()
    {
        // stub
    }

    /**
     * Makes sure email structured data only outputs on non-plain text versions.
     *
     * @param WP_Order $order         Order data.
     * @param bool     $sent_to_admin Send to admin (default: false).
     * @param bool     $plain_text    Plain text email (default: false).
     */
    public function output_email_structured_data($order, $sent_to_admin = false, $plain_text = false)
    {
        // stub
    }

    /**
     * Sanitizes, encodes and outputs structured data.
     *
     * Hooked into `wp_footer` action hook.
     * Hooked into `woocommerce_email_order_details` action hook.
     */
    public function output_structured_data()
    {
        // stub
    }

    /**
     * Generates Product structured data.
     *
     * Hooked into `woocommerce_single_product_summary` action hook.
     *
     * @param WC_Product $product Product data (default: null).
     */
    public function generate_product_data($product = null)
    {
        // stub
    }

    /**
     * Generates Review structured data.
     *
     * Hooked into `woocommerce_review_meta` action hook.
     *
     * @param WP_Comment $comment Comment data.
     */
    public function generate_review_data($comment)
    {
        // stub
    }

    /**
     * Generates BreadcrumbList structured data.
     *
     * Hooked into `woocommerce_breadcrumb` action hook.
     *
     * @param WC_Breadcrumb $breadcrumbs Breadcrumb data.
     */
    public function generate_breadcrumblist_data($breadcrumbs)
    {
        // stub
    }

    /**
     * Generates WebSite structured data.
     *
     * Hooked into `woocommerce_before_main_content` action hook.
     */
    public function generate_website_data()
    {
        // stub
    }

    /**
     * Generates Order structured data.
     *
     * Hooked into `woocommerce_email_order_details` action hook.
     *
     * @param WP_Order $order         Order data.
     * @param bool     $sent_to_admin Send to admin (default: false).
     * @param bool     $plain_text    Plain text email (default: false).
     */
    public function generate_order_data($order, $sent_to_admin = false, $plain_text = false)
    {
        // stub
    }

    /**
     * Check if a GTIN is valid.
     * A valid GTIN is a string containing 8,12,13 or 14 digits.
     *
     * @see https://schema.org/gtin
     * @param string $gtin The GTIN to check.
     * @return bool True if valid. False otherwise.
     */
    public function is_valid_gtin($gtin)
    {
        // stub
    }

    /**
     * Prepare a GTIN input removing everything except numbers.
     *
     * @param string $gtin The GTIN to prepare.
     * @return string Empty string if no GTIN is provided or the string with the replacements.
     */
    public function prepare_gtin($gtin)
    {
        // stub
    }

}

