<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * StoreNotices class.
 */
class StoreNotices extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'store-notices';

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
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
        // stub
    }

    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
        // stub
    }

}

