<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductTemplate class.
 */
class ProductTemplate
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-template';

    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     * - Hook into pre_render_block to update the query.
     */
    protected function initialize()
    {
        // stub
    }

    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
        // stub
    }

    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

    /**
     * Determines whether a block list contains a block that uses the featured image.
     *
     * @param WP_Block_List $inner_blocks Inner block instance.
     *
     * @return bool Whether the block list contains a block that uses the featured image.
     */
    protected function block_core_post_template_uses_featured_image($inner_blocks)
    {
        // stub
    }

    /**
     * Product Template renders inner blocks manually so we need to skip default
     * rendering routine for its inner blocks
     *
     * @param array $settings Array of determined settings for registering a block type.
     * @param array $metadata Metadata provided for registering a block type.
     * @return array
     */
    public function add_block_type_metadata_settings($settings, $metadata)
    {
        // stub
    }

}