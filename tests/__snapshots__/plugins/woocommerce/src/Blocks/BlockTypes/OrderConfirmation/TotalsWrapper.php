<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * TotalsWrapper class.
 */
class TotalsWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-totals-wrapper';

    /**
     * This renders the content of the totals wrapper.
     *
     * @param \WC_Order    $order Order object.
     * @param string|false $permission If the current user can view the order details or not.
     * @param array        $attributes Block attributes.
     * @param string       $content Original block content.
     */
    protected function render_content($order, $permission = false, $attributes = array(
), $content = '')
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

