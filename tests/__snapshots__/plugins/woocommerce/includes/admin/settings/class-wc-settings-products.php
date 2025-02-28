<?php
/**
 * WC_Settings_Products.
 */
class WC_Settings_Products extends \WC_Settings_Page
{
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'box';
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
     * Get settings for the inventory section.
     *
     * @return array
     */
    protected function get_settings_for_inventory_section()
{
}
    /**
     * Get settings for the downloadable section.
     *
     * @return array
     */
    protected function get_settings_for_downloadable_section()
{
}
    /**
     * Save settings and trigger the 'woocommerce_update_options_'.id action.
     */
    public function save()
{
}
}
