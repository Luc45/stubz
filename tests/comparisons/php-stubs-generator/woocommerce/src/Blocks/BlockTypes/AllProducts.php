<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AllProducts class.
 */
class AllProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'all-products';
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * It is necessary to register and enqueue assets during the render phase because we want to load assets only if the block has the content.
     */
    protected function register_block_type_assets()
    {
    }
}