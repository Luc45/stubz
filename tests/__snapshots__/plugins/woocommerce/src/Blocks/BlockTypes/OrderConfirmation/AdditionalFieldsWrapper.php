<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * AdditionalFieldsWrapper class.
 */
class AdditionalFieldsWrapper
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-additional-fields-wrapper';

    /**
     * This renders the content of the downloads wrapper.
     *
     * @param \WC_Order    $order Order object.
     * @param string|false $permission If the current user can view the order details or not.
     * @param array        $attributes Block attributes.
     * @param string       $content Original block content.
     */
    protected function render_content($order, $permission = false, $attributes = array (
), $content = '')
    {
        // stub
    }

    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array (
))
    {
        // stub
    }

}