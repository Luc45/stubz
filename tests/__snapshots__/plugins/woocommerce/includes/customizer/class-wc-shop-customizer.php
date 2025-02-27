<?php

/**
 * WC_Shop_Customizer class.
 */
class WC_Shop_Customizer
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Add settings to the customizer.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_sections($wp_customize)
    {
        // stub
    }

    /**
     * Frontend CSS styles.
     */
    public function add_frontend_scripts()
    {
        // stub
    }

    /**
     * CSS styles to disable the Checkout section, when the default checkout page contains the
     * Checkout block, and to enhance form visuals.
     */
    public function add_styles()
    {
        // stub
    }

    /**
     * Scripts to improve our form.
     */
    public function add_scripts()
    {
        // stub
    }

    /**
     * Enqueue scripts for the customizer.
     */
    public function enqueue_scripts()
    {
        // stub
    }

    /**
     * Sanitize the shop page & category display setting.
     *
     * @param string $value '', 'subcategories', or 'both'.
     * @return string
     */
    public function sanitize_archive_display($value)
    {
        // stub
    }

    /**
     * Sanitize the catalog orderby setting.
     *
     * @param string $value An array key from the below array.
     * @return string
     */
    public function sanitize_default_catalog_orderby($value)
    {
        // stub
    }

    /**
     * Store notice section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    private function add_store_notice_section($wp_customize)
    {
        // stub
    }

    /**
     * Product catalog section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_product_catalog_section($wp_customize)
    {
        // stub
    }

    /**
     * Product images section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    private function add_product_images_section($wp_customize)
    {
        // stub
    }

    /**
     * Checkout section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_checkout_section($wp_customize)
    {
        // stub
    }

    /**
     * Sanitize field display.
     *
     * @param string $value '', 'subcategories', or 'both'.
     * @return string
     */
    public function sanitize_checkout_field_display($value)
    {
        // stub
    }

    /**
     * Whether or not a page has been chose for the privacy policy.
     *
     * @return bool
     */
    public function has_privacy_policy_page_id()
    {
        // stub
    }

    /**
     * Whether or not a page has been chose for the terms and conditions.
     *
     * @return bool
     */
    public function has_terms_and_conditions_page_id()
    {
        // stub
    }

    /**
     * Weather or not the checkout page contains the Checkout block.
     *
     * @return bool
     */
    private function has_block_checkout()
    {
        // stub
    }

}
