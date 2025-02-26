<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CartLink class.
 */
class CartLink extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'cart-link';

    /**
     * Render the block.
     *
     * @param array     $attributes Block attributes.
     * @param string    $content Block content.
     * @param \WP_Block $block Block instance.
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

}

