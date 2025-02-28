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
}
    /**
     * Add settings to the customizer.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_sections($wp_customize)
{
}
    /**
     * Frontend CSS styles.
     */
    public function add_frontend_scripts()
{
}
    /**
     * CSS styles to disable the Checkout section, when the default checkout page contains the
     * Checkout block, and to enhance form visuals.
     */
    public function add_styles()
{
}
    /**
     * Scripts to improve our form.
     */
    public function add_scripts()
{
}
    /**
     * Enqueue scripts for the customizer.
     */
    public function enqueue_scripts()
{
}
    /**
     * Sanitize the shop page & category display setting.
     *
     * @param string $value '', 'subcategories', or 'both'.
     * @return string
     */
    public function sanitize_archive_display($value)
{
}
    /**
     * Sanitize the catalog orderby setting.
     *
     * @param string $value An array key from the below array.
     * @return string
     */
    public function sanitize_default_catalog_orderby($value)
{
}
    /**
     * Product catalog section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_product_catalog_section($wp_customize)
{
}
    /**
     * Checkout section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_checkout_section($wp_customize)
{
}
    /**
     * Sanitize field display.
     *
     * @param string $value '', 'subcategories', or 'both'.
     * @return string
     */
    public function sanitize_checkout_field_display($value)
{
}
    /**
     * Whether or not a page has been chose for the privacy policy.
     *
     * @return bool
     */
    public function has_privacy_policy_page_id()
{
}
    /**
     * Whether or not a page has been chose for the terms and conditions.
     *
     * @return bool
     */
    public function has_terms_and_conditions_page_id()
{
}
}
