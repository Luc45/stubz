<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * WCAdminAssets Class.
 */
class WCAdminAssets
{
    /**
     * Class instance.
     *
     * @var WCAdminAssets instance
     */
    protected static $instance = null;

    /**
     * An array of dependencies that have been preloaded (to avoid duplicates).
     *
     * @var array
     */
    protected $preloaded_dependencies = null;

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
     * Gets the path for the asset depending on file type.
     *
     * @param  string $ext File extension.
     * @return string Folder path of asset.
     */
    public static function get_path($ext)
    {
        // stub
    }

    /**
     * Determines if a minified JS file should be served.
     *
     * @param  boolean $script_debug Only serve unminified files if script debug is on.
     * @return boolean If js asset should use minified version.
     */
    public static function should_use_minified_js_file($script_debug)
    {
        // stub
    }

    /**
     * Gets the URL to an asset file.
     *
     * @param  string $file File name (without extension).
     * @param  string $ext File extension.
     * @return string URL to asset.
     */
    public static function get_url($file, $ext)
    {
        // stub
    }

    /**
     * Gets the file modified time as a cache buster if we're in dev mode,
     * or the asset version (file content hash) if exists, or the WooCommerce version.
     *
     * @param string      $ext File extension.
     * @param string|null $asset_version Optional. The version from the asset file.
     * @return string The cache buster value to use for the given file.
     */
    public static function get_file_version($ext, $asset_version = null)
    {
        // stub
    }

    /**
     * Gets a script asset registry filename. The asset registry lists dependencies for the given script.
     *
     * @param  string $script_path_name Path to where the script asset registry is contained.
     * @param  string $file File name (without extension).
     * @return string complete asset filename.
     *
     * @throws \Exception Throws an exception when a readable asset registry file cannot be found.
     */
    public static function get_script_asset_filename($script_path_name, $file)
    {
        // stub
    }

    /**
     * Render a preload link tag for a dependency, optionally
     * checked against a provided allowlist.
     *
     * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
     *
     * @param WP_Dependency $dependency The WP_Dependency being preloaded.
     * @param string        $type Dependency type - 'script' or 'style'.
     * @param array         $allowlist Optional. List of allowed dependency handles.
     */
    private function maybe_output_preload_link_tag($dependency, $type, $allowlist = array (
))
    {
        // stub
    }

    /**
     * Output a preload link tag for dependencies (and their sub dependencies)
     * with an optional allowlist.
     *
     * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
     *
     * @param string $type Dependency type - 'script' or 'style'.
     * @param array  $allowlist Optional. List of allowed dependency handles.
     */
    private function output_header_preload_tags_for_type($type, $allowlist = array (
))
    {
        // stub
    }

    /**
     * Output preload link tags for all enqueued stylesheets and scripts.
     *
     * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
     */
    private function output_header_preload_tags()
    {
        // stub
    }

    /**
     * Loads the required scripts on the correct pages.
     */
    public function enqueue_assets()
    {
        // stub
    }

    /**
     * Registers all the necessary scripts and styles to show the admin experience.
     */
    public function register_scripts()
    {
        // stub
    }

    /**
     * Injects wp-shared-settings as a dependency if it's present.
     */
    public function inject_wc_settings_dependencies()
    {
        // stub
    }

    /**
     * Loads a script
     *
     * @param string $script_path_name The script path name.
     * @param string $script_name Filename of the script to load.
     * @param bool   $need_translation Whether the script need translations.
     * @param array  $dependencies Array of any extra dependencies. Note wc-admin and any application JS dependencies are automatically added by Dependency Extraction Webpack Plugin. Use this parameter to designate any extra dependencies.
     */
    public static function register_script($script_path_name, $script_name, $need_translation = false, $dependencies = array (
))
    {
        // stub
    }

    /**
     * Loads a style
     *
     * @param string $style_path_name The style path name.
     * @param string $style_name Filename of the style to load.
     * @param array  $dependencies Array of any extra dependencies.
     */
    public static function register_style($style_path_name, $style_name, $dependencies = array (
))
    {
        // stub
    }

}