<?php

namespace Automattic\WooCommerce\Admin;

/**
 * PageController
 */
class PageController
{
    const APP_ENTRY_POINT = 'wc-admin';
    const PAGE_ROOT = 'wc-admin';
    /**
     * Singleton instance of self.
     *
     * @var PageController
     */
    private static $instance = false;
    /**
     * Current page ID (or false if not registered with this controller).
     *
     * @var string
     */
    private $current_page = null;
    /**
     * Registered pages
     * Contains information (breadcrumbs, menu info) about JS powered pages and classic WooCommerce pages.
     *
     * @var array
     */
    private $pages = array();
    /**
     * We want a single instance of this class so we can accurately track registered menus and pages.
     */
    public static function get_instance()
{
}
    /**
     * Constructor.
     * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
     */
    public function __construct()
{
}
    /**
     * Connect an existing page to wc-admin.
     *
     * @param array $options {
     *   Array describing the page.
     *
     *   @type string       id           Id to reference the page.
     *   @type string|array title        Page title. Used in menus and breadcrumbs.
     *   @type string|null  parent       Parent ID. Null for new top level page.
     *   @type string       path         Path for this page. E.g. admin.php?page=wc-settings&tab=checkout
     *   @type string       capability   Capability needed to access the page.
     *   @type string       icon         Icon. Dashicons helper class, base64-encoded SVG, or 'none'.
     *   @type int          position     Menu item position.
     *   @type boolean      js_page      If this is a JS-powered page.
     * }
     */
    public function connect_page($options)
{
}
    /**
     * Determine the current page ID, if it was registered with this controller.
     */
    public function determine_current_page()
{
}
    /**
     * Get breadcrumbs for WooCommerce Admin Page navigation.
     *
     * @return array Navigation pieces (breadcrumbs).
     */
    public function get_breadcrumbs()
{
}
    /**
     * Get the current page.
     *
     * @return array|boolean Current page or false if not registered with this controller.
     */
    public function get_current_page()
{
}
    /**
     * Returns the current screen ID.
     *
     * This is slightly different from WP's get_current_screen, in that it attaches an action,
     * so certain pages like 'add new' pages can have different breadcrumbs or handling.
     * It also catches some more unique dynamic pages like taxonomy/attribute management.
     *
     * Format:
     * - {$current_screen->action}-{$current_screen->action}-tab-section
     * - {$current_screen->action}-{$current_screen->action}-tab
     * - {$current_screen->action}-{$current_screen->action} if no tab is present
     * - {$current_screen->action} if no action or tab is present
     *
     * @return string Current screen ID.
     */
    public function get_current_screen_id()
{
}
    /**
     * Returns the path from an ID.
     *
     * @param  string $id  ID to get path for.
     * @return string Path for the given ID, or the ID on lookup miss.
     */
    public function get_path_from_id($id)
{
}
    /**
     * Returns true if we are on a page connected to this controller.
     *
     * @return boolean
     */
    public function is_connected_page()
{
}
    /**
     * Returns true if we are on a page registered with this controller.
     *
     * @return boolean
     */
    public function is_registered_page()
{
}
    /**
     * Adds a JS powered page to wc-admin.
     *
     * @param array $options {
     *   Array describing the page.
     *
     *   @type string      id           Id to reference the page.
     *   @type string      title        Page title. Used in menus and breadcrumbs.
     *   @type string|null parent       Parent ID. Null for new top level page.
     *   @type string      path         Path for this page, full path in app context; ex /analytics/report
     *   @type string      capability   Capability needed to access the page.
     *   @type string      icon         Icon. Dashicons helper class, base64-encoded SVG, or 'none'.
     *   @type int         position     Menu item position.
     *   @type int         order        Navigation item order.
     * }
     */
    public function register_page($options)
{
}
    /**
     * Get registered pages.
     *
     * @return array
     */
    public function get_pages()
{
}
    /**
     * Set up a div for the app to render into.
     */
    public static function page_wrapper()
{
}
    /**
     * Connects existing WooCommerce pages.
     *
     * @todo The entry point for the embed needs moved to this class as well.
     */
    public function register_page_handler()
{
}
    /**
     * Registers the store details (profiler) page.
     */
    public function register_store_details_page()
{
}
    /**
     * Remove the menu item for the app entry point page.
     */
    public function remove_app_entry_page_menu_item()
{
}
    /**
     * Returns true if we are on a JS powered admin page or
     * a "classic" (non JS app) powered admin page (an embedded page).
     */
    public static function is_admin_or_embed_page()
{
}
    /**
     * Returns true if we are on a JS powered admin page.
     */
    public static function is_admin_page()
{
}
    /**
     *  Returns true if we are on a "classic" (non JS app) powered admin page.
     *
     * TODO: See usage in `admin.php`. This needs refactored and implemented properly in core.
     */
    public static function is_embed_page()
{
}
}