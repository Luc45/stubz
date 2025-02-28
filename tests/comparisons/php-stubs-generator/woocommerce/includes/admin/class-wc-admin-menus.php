<?php

/**
 * WC_Admin_Menus Class.
 */
class WC_Admin_Menus
{
    /**
     * The CSS classes used to hide the submenu items in navigation.
     *
     * @var string
     */
    const HIDE_CSS_CLASS = 'hide-if-js';
    /**
     * Hook in tabs.
     */
    public function __construct()
    {
    }
    /**
     * Add menu items.
     */
    public function admin_menu()
    {
    }
    /**
     * Add menu item.
     */
    public function reports_menu()
    {
    }
    /**
     * Add menu item.
     */
    public function settings_menu()
    {
    }
    /**
     * Check if the user can access the top-level WooCommerce item.
     */
    public static function can_view_woocommerce_menu_item()
    {
    }
    /**
     * Loads gateways and shipping methods into memory for use within settings.
     */
    public function settings_page_init()
    {
    }
    /**
     * Handle saving of settings.
     *
     * @return void
     */
    public function save_settings()
    {
    }
    /**
     * Add menu item.
     */
    public function status_menu()
    {
    }
    /**
     * Addons menu item.
     */
    public function addons_menu()
    {
    }
    /**
     * Registers the wc-addons page within the WooCommerce menu.
     * Temporary measure till we convert the whole page to React.
     *
     * @return void
     */
    public function addons_my_subscriptions()
    {
    }
    /**
     * Highlights the correct top level admin menu item for post type add screens.
     */
    public function menu_highlight()
    {
    }
    /**
     * Adds the order processing count to the menu.
     */
    public function menu_order_count()
    {
    }
    /**
     * Reorder the WC menu items in admin.
     *
     * @param int $menu_order Menu order.
     * @return array
     */
    public function menu_order($menu_order)
    {
    }
    /**
     * Custom menu order.
     *
     * @param bool $enabled Whether custom menu ordering is already enabled.
     * @return bool
     */
    public function custom_menu_order($enabled)
    {
    }
    /**
     * Validate screen options on update.
     *
     * @param bool|int $status Screen option value. Default false to skip.
     * @param string   $option The option name.
     * @param int      $value  The number of rows to use.
     */
    public function set_screen_option($status, $option, $value)
    {
    }
    /**
     * Init the reports page.
     */
    public function reports_page()
    {
    }
    /**
     * Init the settings page.
     */
    public function settings_page()
    {
    }
    /**
     * Init the attributes page.
     */
    public function attributes_page()
    {
    }
    /**
     * Init the status page.
     */
    public function status_page()
    {
    }
    /**
     * Init the addons page.
     */
    public function addons_page()
    {
    }
    /**
     * Link to the order admin list table from the main WooCommerce menu.
     *
     * @return void
     */
    public function orders_menu() : void
    {
    }
    /**
     * Add custom nav meta box.
     *
     * Adapted from http://www.johnmorrisonline.com/how-to-add-a-fully-functional-custom-meta-box-to-wordpress-navigation-menus/.
     */
    public function add_nav_menu_meta_boxes()
    {
    }
    /**
     * Output menu links.
     */
    public function nav_menu_links()
    {
    }
    /**
     * Add the "Visit Store" link in admin bar main menu.
     *
     * @since 2.4.0
     * @param WP_Admin_Bar $wp_admin_bar Admin bar instance.
     */
    public function admin_bar_menus($wp_admin_bar)
    {
    }
    /**
     * Maybe add new management product experience.
     */
    public function maybe_add_new_product_management_experience()
    {
    }
    /**
     * Hide the submenu page based on slug and return the item that was hidden.
     *
     * Borrowed from Jetpack's Base_Admin_Menu class.
     *
     * Instead of actually removing the submenu item, a safer approach is to hide it and filter it in the API response.
     * In this manner we'll avoid breaking third-party plugins depending on items that no longer exist.
     *
     * A false|array value is returned to be consistent with remove_submenu_page() function
     *
     * @param string $menu_slug The parent menu slug.
     * @param string $submenu_slug The submenu slug that should be hidden.
     * @return false|array
     */
    public function hide_submenu_page($menu_slug, $submenu_slug)
    {
    }
    /**
     * Apply the hide-if-js CSS class to a submenu item.
     *
     * Borrowed from Jetpack's Base_Admin_Menu class.
     *
     * @param int    $index The position of a submenu item in the submenu array.
     * @param string $parent_slug The parent slug.
     * @param array  $item The submenu item.
     */
    public function hide_submenu_element($index, $parent_slug, $item)
    {
    }
}