<?php

namespace Automattic\WooCommerce\Blocks\Assets;

/**
 * The Api class provides an interface to various asset registration helpers.
 *
 * Contains asset api methods
 *
 * @since 2.5.0
 */
class Api
{
    /**
     * Stores the prefixed WC version. Used because the WC Blocks version has not been updated since the monorepo merge.
     *
     * @var string
     */
    public $wc_version = null;

    /**
     * Stores inline scripts already enqueued.
     *
     * @var array
     */
    private $inline_scripts = array (
);

    /**
     * Determines if caching is enabled for script data.
     *
     * @var boolean
     */
    private $disable_cache = false;

    /**
     * Stores loaded script data for the current request
     *
     * @var array|null
     */
    private $script_data = null;

    /**
     * Tracks whether script_data was modified during the current request.
     *
     * @var boolean
     */
    private $script_data_modified = false;

    /**
     * Stores the hash for the script data, made up of the site url, plugin version and package path.
     *
     * @var string
     */
    private $script_data_hash = null;

    /**
     * Stores the transient key used to cache the script data. This will change if the site is accessed via HTTPS or HTTP.
     *
     * @var string
     */
    private $script_data_transient_key = 'woocommerce_blocks_asset_api_script_data';

    /**
     * Reference to the Package instance
     *
     * @var Package
     */
    private $package = null;

    /**
     * Constructor for class
     *
     * @param Package $package An instance of Package.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
        // stub
    }

    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @param string $file Local path to the file (relative to the plugin
     *                     directory).
     * @return string The cache buster value to use for the given file.
     */
    protected function get_file_version($file)
    {
        // stub
    }

    /**
     * Retrieve the url to an asset for this plugin.
     *
     * @param string $relative_path An optional relative path appended to the
     *                              returned url.
     *
     * @return string
     */
    protected function get_asset_url($relative_path = '')
    {
        // stub
    }

    /**
     * Get the path to a block's metadata
     *
     * @param string $block_name The block to get metadata for.
     * @param string $path Optional. The path to the metadata file inside the 'assets/client/blocks' folder.
     *
     * @return string|boolean False if metadata file is not found for the block.
     */
    public function get_block_metadata_path($block_name, $path = '')
    {
        // stub
    }

    /**
     * Generates a hash containing the site url, plugin version and package path.
     *
     * Moving the plugin, changing the version, or changing the site url will result in a new hash and the cache will be invalidated.
     *
     * @return string The generated hash.
     */
    private function get_script_data_hash()
    {
        // stub
    }

    /**
     * Initialize and load cached script data from the transient cache.
     *
     * @return array
     */
    private function get_cached_script_data()
    {
        // stub
    }

    /**
     * Store all cached script data in the transient cache.
     */
    public function update_script_data_cache()
    {
        // stub
    }

    /**
     * Get src, version and dependencies given a script relative src.
     *
     * @param string $relative_src Relative src to the script.
     * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
     *
     * @return array src, version and dependencies of the script.
     */
    public function get_script_data($relative_src, $dependencies = array (
))
    {
        // stub
    }

    /**
     * Registers a script according to `wp_register_script`, adding the correct prefix, and additionally loading translations.
     *
     * When creating script assets, the following rules should be followed:
     *   1. All asset handles should have a `wc-` prefix.
     *   2. If the asset handle is for a Block (in editor context) use the `-block` suffix.
     *   3. If the asset handle is for a Block (in frontend context) use the `-block-frontend` suffix.
     *   4. If the asset is for any other script being consumed or enqueued by the blocks plugin, use the `wc-blocks-` prefix.
     *
     * @since 2.5.0
     * @throws Exception If the registered script has a dependency on itself.
     *
     * @param string $handle        Unique name of the script.
     * @param string $relative_src  Relative url for the script to the path from plugin root.
     * @param array  $dependencies  Optional. An array of registered script handles this script depends on. Default empty array.
     * @param bool   $has_i18n      Optional. Whether to add a script translation call to this file. Default: true.
     */
    public function register_script($handle, $relative_src, $dependencies = array (
), $has_i18n = true)
    {
        // stub
    }

    /**
     * Registers a style according to `wp_register_style`.
     *
     * @since 2.5.0
     * @since 2.6.0 Change src to be relative source.
     *
     * @param string  $handle       Name of the stylesheet. Should be unique.
     * @param string  $relative_src Relative source of the stylesheet to the plugin path.
     * @param array   $deps         Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
     * @param string  $media        Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
     *                              'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
     * @param boolean $rtl   Optional. Whether or not to register RTL styles.
     */
    public function register_style($handle, $relative_src, $deps = array (
), $media = 'all', $rtl = false)
    {
        // stub
    }

    /**
     * Returns the appropriate asset path for current builds.
     *
     * @param   string $filename  Filename for asset path (without extension).
     * @param   string $type      File type (.css or .js).
     * @return  string             The generated path.
     */
    public function get_block_asset_build_path($filename, $type = 'js')
    {
        // stub
    }

    /**
     * Adds an inline script, once.
     *
     * @param string $handle Script handle.
     * @param string $script Script contents.
     */
    public function add_inline_script($handle, $script)
    {
        // stub
    }

}