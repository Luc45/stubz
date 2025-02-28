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
     * Constructor.
     *
     * @param AssetApi          $asset_api Instance of the asset API.
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
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
}