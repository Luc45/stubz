<?php

namespace ;

/**
 * Frontend scripts class.
 */
class WC_Frontend_Scripts
{
    /**
     * Contains an array of script handles registered by WC.
     *
     * @var array
     */
    private static $scripts = array (
);

    /**
     * Contains an array of script handles registered by WC.
     *
     * @var array
     */
    private static $styles = array (
);

    /**
     * Contains an array of script handles localized by WC.
     *
     * @var array
     */
    private static $wp_localize_scripts = array (
);

    /**
     * Hook in methods.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Get styles for the frontend.
     *
     * @return array
     */
    public static function get_styles()
    {
        // stub
    }

    /**
     * Return asset URL.
     *
     * @param string $path Assets path.
     * @return string
     */
    private static function get_asset_url($path)
    {
        // stub
    }

    /**
     * Register a script for use.
     *
     * @uses   wp_register_script()
     * @param  string   $handle    Name of the script. Should be unique.
     * @param  string   $path      Full URL of the script, or path of the script relative to the WordPress root directory.
     * @param  string[] $deps      An array of registered script handles this script depends on.
     * @param  string   $version   String specifying script version number, if it has one, which is added to the URL as a query string for cache busting purposes. If version is set to false, a version number is automatically added equal to current installed WordPress version. If set to null, no version is added.
     * @param  boolean  $in_footer Whether to enqueue the script before </body> instead of in the <head>. Default 'false'.
     */
    private static function register_script($handle, $path, $deps = array (
  0 => 'jquery',
), $version, $in_footer = array (
  'strategy' => 'defer',
))
    {
        // stub
    }

    /**
     * Register and enqueue a script for use.
     *
     * @uses   wp_enqueue_script()
     * @param  string   $handle    Name of the script. Should be unique.
     * @param  string   $path      Full URL of the script, or path of the script relative to the WordPress root directory.
     * @param  string[] $deps      An array of registered script handles this script depends on.
     * @param  string   $version   String specifying script version number, if it has one, which is added to the URL as a query string for cache busting purposes. If version is set to false, a version number is automatically added equal to current installed WordPress version. If set to null, no version is added.
     * @param  boolean  $in_footer Whether to enqueue the script before </body> instead of in the <head>. Default 'false'.
     */
    private static function enqueue_script($handle, $path = '', $deps = array (
  0 => 'jquery',
), $version, $in_footer = array (
  'strategy' => 'defer',
))
    {
        // stub
    }

    /**
     * Register a style for use.
     *
     * @uses   wp_register_style()
     * @param  string   $handle  Name of the stylesheet. Should be unique.
     * @param  string   $path    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
     * @param  string[] $deps    An array of registered stylesheet handles this stylesheet depends on.
     * @param  string   $version String specifying stylesheet version number, if it has one, which is added to the URL as a query string for cache busting purposes. If version is set to false, a version number is automatically added equal to current installed WordPress version. If set to null, no version is added.
     * @param  string   $media   The media for which this stylesheet has been defined. Accepts media types like 'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
     * @param  boolean  $has_rtl If has RTL version to load too.
     */
    private static function register_style($handle, $path, $deps = array (
), $version, $media = 'all', $has_rtl = false)
    {
        // stub
    }

    /**
     * Register and enqueue a styles for use.
     *
     * @uses   wp_enqueue_style()
     * @param  string   $handle  Name of the stylesheet. Should be unique.
     * @param  string   $path    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
     * @param  string[] $deps    An array of registered stylesheet handles this stylesheet depends on.
     * @param  string   $version String specifying stylesheet version number, if it has one, which is added to the URL as a query string for cache busting purposes. If version is set to false, a version number is automatically added equal to current installed WordPress version. If set to null, no version is added.
     * @param  string   $media   The media for which this stylesheet has been defined. Accepts media types like 'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
     * @param  boolean  $has_rtl If has RTL version to load too.
     */
    private static function enqueue_style($handle, $path = '', $deps = array (
), $version, $media = 'all', $has_rtl = false)
    {
        // stub
    }

    /**
     * Register all WC scripts.
     */
    private static function register_scripts()
    {
        // stub
    }

    /**
     * Register all WC styles.
     */
    private static function register_styles()
    {
        // stub
    }

    /**
     * Register/queue frontend scripts.
     */
    public static function load_scripts()
    {
        // stub
    }

    /**
     * Localize a WC script once.
     *
     * @since 2.3.0 this needs less wp_script_is() calls due to https://core.trac.wordpress.org/ticket/28404 being added in WP 4.0.
     * @param string $handle Script handle the data will be attached to.
     */
    private static function localize_script($handle)
    {
        // stub
    }

    /**
     * Return data for script handles.
     *
     * @param  string $handle Script handle the data will be attached to.
     * @return array|bool
     */
    private static function get_script_data($handle)
    {
        // stub
    }

    /**
     * Localize scripts only when enqueued.
     */
    public static function localize_printed_scripts()
    {
        // stub
    }

}

