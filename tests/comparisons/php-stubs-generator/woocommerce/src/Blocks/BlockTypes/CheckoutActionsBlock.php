<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CheckoutActionsBlock class.
 */
class CheckoutActionsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'checkout-actions-block';
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
    {
    }
    /**
     * Register style variations for the block.
     */
    public function register_style_variations()
    {
    }
}