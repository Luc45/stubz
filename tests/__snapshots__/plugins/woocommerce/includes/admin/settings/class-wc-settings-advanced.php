<?php
/**
 * WC_Settings_Advanced.
 */
class WC_Settings_Advanced extends \WC_Settings_Page
{
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'more';
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
{
}
    /**
     * Get settings for the default section.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
{
}
    /**
     * Get settings for the WooCommerce.com section.
     *
     * @return array
     */
    protected function get_settings_for_woocommerce_com_section()
{
}
    /**
     * Get settings for the legacy API section.
     *
     * @return array
     */
    protected function get_settings_for_legacy_api_section()
{
}
    /**
     * Get settings for the Blueprint section.
     *
     * @return array
     */
    protected function get_settings_for_blueprint_section()
{
}
    /**
     * Form method.
     *
     * @deprecated 3.4.4
     *
     * @param  string $method Method name.
     *
     * @return string
     */
    public function form_method($method)
{
}
    /**
     * Output the settings.
     */
    public function output()
{
}
    /**
     * Save settings.
     */
    public function save()
{
}
}
/**
 * WC_Settings_Rest_API class.
 *
 * @deprecated 3.4 in favour of WC_Settings_Advanced.
 */
class WC_Settings_Rest_API extends \WC_Settings_Advanced
{
}
