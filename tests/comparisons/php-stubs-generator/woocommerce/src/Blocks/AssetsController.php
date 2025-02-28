<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * AssetsController class.
 *
 * @since 5.0.0
 * @internal
 */
final class AssetsController
{
    /**
     * Constructor.
     *
     * @param AssetApi $asset_api  Asset API interface for various asset registration.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
    }
    /**
     * Register block scripts & styles.
     */
    public function register_assets()
    {
    }
    /**
     * Register and enqueue assets for exclusive usage within the Site Editor.
     */
    public function register_and_enqueue_site_editor_assets()
    {
    }
    /**
     * Defines resource hints to help speed up the loading of some critical blocks.
     *
     * These will not impact page loading times negatively because they are loaded once the current page is idle.
     *
     * @param array  $urls          URLs to print for resource hints. Each URL is an array of resource attributes, or a URL string.
     * @param string $relation_type The relation type the URLs are printed. Possible values: preconnect, dns-prefetch, prefetch, prerender.
     * @return array URLs to print for resource hints.
     */
    public function add_resource_hints($urls, $relation_type)
    {
    }
    /**
     * Skip Jetpack Boost minification on older versions of Jetpack Boost where it causes issues.
     *
     * @param mixed $do_concat Whether to concatenate the script or not.
     * @param mixed $handle The script handle.
     * @return mixed
     */
    public function skip_boost_minification_for_cart_checkout($do_concat, $handle)
    {
    }
    /**
     * Add body classes to the frontend and within admin.
     *
     * @param string|array $classes Array or string of CSS classnames.
     * @return string|array Modified classnames.
     */
    public function add_theme_body_class($classes)
    {
    }
    /**
     * Update block style dependencies after they have been registered.
     */
    public function update_block_style_dependencies()
    {
    }
    /**
     * Fix scripts with wc-settings dependency.
     *
     * The wc-settings script only works correctly when enqueued in the footer. This is to give blocks etc time to
     * register their settings data before it's printed.
     *
     * This code will look at registered scripts, and if they have a wc-settings dependency, force them to print in the
     * footer instead of the header.
     *
     * This only supports packages known to require wc-settings!
     *
     * @see https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/5052
     */
    public function update_block_settings_dependencies()
    {
    }
}
