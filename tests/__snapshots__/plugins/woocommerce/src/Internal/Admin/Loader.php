<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Loader Class.
 */
class Loader extends \
{
    /**
     * Class instance.
     *
     * @var Loader instance
     */
    protected static $instance = null;

    /**
     * An array of classes to load from the includes folder.
     *
     * @var array
     */
    protected static $classes = array(
);

    /**
     * WordPress capability required to use analytics features.
     *
     * @var string
     */
    protected static $required_capability = null;

    /**
     * An array of dependencies that have been preloaded (to avoid duplicates).
     *
     * @var array
     */
    protected $preloaded_dependencies = array(
  'script' => 
  array(
  ),
  'style' => 
  array(
  ),
);

    /**
     * Get class instance.
     */
    public static function get_instance()
    {
        // stub
    }

    /**
     * Constructor.
     * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Returns breadcrumbs for the current page.
     */
    private static function get_embed_breadcrumbs()
    {
        // stub
    }

    /**
     * Outputs breadcrumbs via PHP for the initial load of an embedded page.
     *
     * @param array $section Section to create breadcrumb from.
     */
    private static function output_heading($section)
    {
        // stub
    }

    /**
     * Set up a div for the header embed to render into.
     * The initial contents here are meant as a place loader for when the PHP page initially loads.
     */
    public static function embed_page_header()
    {
        // stub
    }

    /**
     * Adds body classes to the main wp-admin wrapper, allowing us to better target elements in specific scenarios.
     *
     * @param string $admin_body_class Body class to add.
     */
    public static function add_admin_body_classes($admin_body_class = '')
    {
        // stub
    }

    /**
     * Adds an iOS "Smart App Banner" for display on iOS Safari.
     * See https://developer.apple.com/library/archive/documentation/AppleApplications/Reference/SafariWebContent/PromotingAppswithAppBanners/PromotingAppswithAppBanners.html
     */
    public static function smart_app_banner()
    {
        // stub
    }

    /**
     * Removes notices that should not be displayed on WC Admin pages.
     */
    public static function remove_notices()
    {
        // stub
    }

    /**
     * Runs before admin notices action and hides them.
     */
    public static function inject_before_notices()
    {
        // stub
    }

    /**
     * Runs after admin notices and closes div.
     */
    public static function inject_after_notices()
    {
        // stub
    }

    /**
     * Edits Admin title based on section of wc-admin.
     *
     * @param string $admin_title Modifies admin title.
     * @todo Can we do some URL rewriting so we can figure out which page they are on server side?
     */
    public static function update_admin_title($admin_title)
    {
        // stub
    }

    /**
     * Set up a div for the app to render into.
     */
    public static function page_wrapper()
    {
        // stub
    }

    /**
     * Hooks extra necessary data into the component settings array already set in WooCommerce core.
     *
     * @param array $settings Array of component settings.
     * @return array Array of component settings.
     */
    public static function add_component_settings($settings)
    {
        // stub
    }

    /**
     * Format order statuses by removing a leading 'wc-' if present.
     *
     * @param array $statuses Order statuses.
     * @return array formatted statuses.
     */
    public static function get_order_statuses($statuses)
    {
        // stub
    }

    /**
     * Get all order statuses present in analytics tables that aren't registered.
     *
     * @return array Unregistered order statuses.
     */
    public static function get_unregistered_order_statuses()
    {
        // stub
    }

    /**
     * Register the admin settings for use in the WC REST API
     *
     * @param array $groups Array of setting groups.
     * @return array
     */
    public static function add_settings_group($groups)
    {
        // stub
    }

    /**
     * Add WC Admin specific settings
     *
     * @param array $settings Array of settings in wc admin group.
     * @return array
     */
    public static function add_settings($settings)
    {
        // stub
    }

    /**
     * Gets custom settings used for WC Admin.
     *
     * @param array $settings Array of settings to merge into.
     * @return array
     */
    public static function get_custom_settings($settings)
    {
        // stub
    }

    /**
     * Return an object defining the currency options for the site's current currency
     *
     * @return  array  Settings for the current currency {
     *     Array of settings.
     *
     *     @type string $code       Currency code.
     *     @type string $precision  Number of decimals.
     *     @type string $symbol     Symbol for currency.
     * }
     */
    public static function get_currency_settings()
    {
        // stub
    }

    /**
     * Delete woocommerce_onboarding_homepage_post_id field when the homepage is deleted
     *
     * @param int $post_id The deleted post id.
     */
    public static function delete_homepage($post_id)
    {
        // stub
    }

    /**
     * Adds the appearance_theme_view Tracks event.
     */
    public static function add_appearance_theme_view_tracks_event()
    {
        // stub
    }

}

