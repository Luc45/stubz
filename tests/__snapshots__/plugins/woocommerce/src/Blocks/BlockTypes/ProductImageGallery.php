<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductImageGallery class.
 */
class ProductImageGallery
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-image-gallery';

    /**
     * It isn't necessary register block assets because it is a server side block.
     */
    protected function register_block_type_assets()
    {
        // stub
    }

    /**
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
    {
        // stub
    }

    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

}

