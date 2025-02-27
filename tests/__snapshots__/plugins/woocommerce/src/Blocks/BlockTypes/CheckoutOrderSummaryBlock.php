<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CheckoutOrderSummaryBlock class.
 */
class CheckoutOrderSummaryBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'checkout-order-summary-block';

    /**
     * Get the contents of the given inner block.
     *
     * @param string $block_name Name of the order summary inner block.
     * @param string $content    The content to search.
     * @return array|bool
     */
    private function get_inner_block_content($block_name, $content)
    {
        // stub
    }

    /**
     * Get the regex that will return an inner block.
     *
     * @param string $block_name Name of the order summary inner block.
     * @return string Regex pattern.
     */
    private function inner_block_regex($block_name)
    {
        // stub
    }

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
        // stub
    }

}