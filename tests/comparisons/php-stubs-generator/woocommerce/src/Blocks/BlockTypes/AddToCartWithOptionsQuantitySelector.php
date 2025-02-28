<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CatalogSorting class.
 */
class AddToCartWithOptionsQuantitySelector extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-quantity-selector';
    /**
     * Enqueue assets specific to this block.
     * We enqueue frontend scripts only if the quantitySelectorStyle is set to 'stepper'.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     */
    protected function enqueue_assets($attributes, $content, $block)
    {
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
    }
}
