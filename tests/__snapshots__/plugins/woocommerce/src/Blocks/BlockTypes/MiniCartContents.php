<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Mini-Cart Contents class.
 *
 * @internal
 */
class MiniCartContents extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'mini-cart-contents';

    /**
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
    {
        // stub
    }

    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
        // stub
    }

    /**
     * Get the frontend style handle for this block type.
     *
     * @return string[]
     */
    protected function get_block_type_style()
    {
        // stub
    }

    /**
     * Render the markup for the Mini-Cart Contents block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array    $attributes  Any attributes that currently are available from the block.
     * @param string   $content    The block content.
     * @param WP_Block $block    The block object.
     */
    protected function enqueue_assets(array $attributes, $content, $block)
    {
        // stub
    }

    /**
     * Get list of Mini-Cart Contents block & its inner-block types.
     *
     * @return array;
     */
    public static function get_mini_cart_block_types()
    {
        // stub
    }

}

