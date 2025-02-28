<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains backend logic for the Marketing feature.
 */
class Marketing
{
    /**
     * Constant representing the key for the submenu name value in the global $submenu array.
     *
     * @var int
     */
    public const SUBMENU_NAME_KEY = 0;
    /**
     * Constant representing the key for the submenu location value in the global $submenu array.
     *
     * @var int
     */
    public const SUBMENU_LOCATION_KEY = 2;
    /**
     * Class instance.
     *
     * @var Marketing instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
{
}
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
{
}
    /**
     * Add main marketing menu item.
     *
     * Uses priority of 9 so other items can easily be added at the default priority (10).
     */
    public function add_parent_menu_item()
{
}
    /**
     * Registers report pages.
     */
    public function register_pages()
{
}
    /**
     * Register the main Marketing page, which is Marketing > Overview.
     *
     * This is done separately because we need to ensure the page is registered properly and
     * that the link is done properly. For some reason the normal page registration process
     * gives us the wrong menu link.
     */
    protected function register_overview_page()
{
}
    /**
     * Order marketing menu items alphabetically.
     * Overview should be first, and Coupons should be second, followed by other marketing menu items.
     *
     * @return  void
     */
    public function reorder_marketing_submenu()
{
}
    /**
     * Add settings for marketing feature.
     *
     * @param array $settings Component settings.
     * @return array
     */
    public function component_settings($settings)
{
}
}