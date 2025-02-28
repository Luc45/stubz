<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CheckoutOrderSummaryBlock class.
 */
class CheckoutOrderSummaryBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'checkout-order-summary-block';
    /**
     * Render the Checkout Order Summary block.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     * @param object $block      Block object.
     * @return string Rendered block.
     */
    protected function render($attributes, $content, $block)
    {
    }
}