<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTypesController class.
 *
 * @since 5.0.0
 * @internal
 */
final class BlockTypesController
{
    /**
     * Instance of the asset API.
     *
     * @var AssetApi
     */
    protected $asset_api = null;
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry = null;
    /**
     * Holds the registered blocks that have WooCommerce blocks as their parents.
     *
     * @var array List of registered blocks.
     */
    private $registered_blocks_with_woocommerce_parents = null;
    /**
     * Constructor.
     *
     * @param AssetApi          $asset_api Instance of the asset API.
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Assets\Api $asset_api, Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
{
}
    /**
     * Initialize class features.
     */
    protected function init()
{
}
    /**
     * Get registered blocks that have WooCommerce blocks as their parents. Adds the value to the
     * `registered_blocks_with_woocommerce_parents` cache if `init` has been fired.
     *
     * @return array Registered blocks with WooCommerce blocks as parents.
     */
    public function get_registered_blocks_with_woocommerce_parent()
{
}
    /**
     * Register blocks, hooking up assets and render functions as needed.
     */
    public function register_blocks()
{
}
    /**
     * Register block metadata collections for WooCommerce blocks.
     *
     * This method handles the registration of block metadata by using WordPress's block metadata
     * collection registration system. It includes a temporary workaround for WordPress 6.7's
     * strict path validation that might fail for sites using symlinked plugins.
     *
     * If the registration fails due to path validation, blocks will fall back to regular
     * registration without affecting functionality.
     */
    public function register_block_metadata()
{
}
    /**
     * Temporarily bypasses _doing_it_wrong() notices for block metadata collection registration.
     *
     * WordPress 6.7 introduced block metadata collections (with strict path validation).
     * Any sites using symlinks for plugins will fail the validation which causes the metadata
     * collection to not be registered. However, the blocks will still fall back to the regular
     * registration and no functionality is affected.
     * While this validation is being discussed in WordPress Core (#62140),
     * this method allows registration to proceed by temporarily disabling
     * the relevant notice.
     *
     * @param bool   $trigger       Whether to trigger the error.
     * @param string $function      The function that was called.
     * @param string $message       A message explaining what was done incorrectly.
     * @param string $version       The version of WordPress where the message was added.
     * @return bool Whether to trigger the error.
     */
    public static function bypass_block_metadata_doing_it_wrong($trigger, $function, $message, $version)
{
}
    /**
     * Register block patterns
     */
    public function register_block_patterns()
{
}
    /**
     * Register block categories
     *
     * Used in combination with the `block_categories_all` filter, to append
     * WooCommerce Blocks related categories to the Gutenberg editor.
     *
     * @param array $categories The array of already registered categories.
     */
    public function register_block_categories($categories)
{
}
    /**
     * Check if a block should have data attributes appended on render. If it's in an allowed namespace, or the block
     * has explicitly been added to the allowed block list, or if one of the block's parents is in the WooCommerce
     * namespace it can have data attributes.
     *
     * @param string $block_name Name of the block to check.
     *
     * @return boolean
     */
    public function block_should_have_data_attributes($block_name)
{
}
    /**
     * Add data- attributes to blocks when rendered if the block is under the woocommerce/ namespace.
     *
     * @param string $content Block content.
     * @param array  $block Parsed block data.
     * @return string
     */
    public function add_data_attributes($content, $block)
{
}
    /**
     * Adds a redirect field to the login form so blocks can redirect users after login.
     */
    public function redirect_to_field()
{
}
    /**
     * Hide legacy widgets with a feature complete block equivalent in the inserter
     * and prevent them from showing as an option in the Legacy Widget block.
     *
     * @param array $widget_types An array of widgets hidden in core.
     * @return array $widget_types An array including the WooCommerce widgets to hide.
     */
    public function hide_legacy_widgets_with_block_equivalent($widget_types)
{
}
    /**
     * Delete product transients when a product is deleted.
     */
    public function delete_product_transients()
{
}
    /**
     * Get list of block types allowed in Widget Areas. New blocks won't be
     * exposed in the Widget Area unless specifically added here.
     *
     * @return array Array of block types.
     */
    protected function get_widget_area_block_types()
{
}
    /**
     * Get list of block types.
     *
     * @return array
     */
    protected function get_block_types()
{
}
}