<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * Downloads class.
 */
class Downloads extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-downloads';

    /**
     * This renders the content of the block within the wrapper.
     *
     * @param \WC_Order    $order Order object.
     * @param string|false $permission If the current user can view the order details or not.
     * @param array        $attributes Block attributes.
     * @param string       $content Original block content.
     * @return string
     */
    protected function render_content($order, $permission = false, $attributes = array(
), $content = '')
    {
        // stub
    }

    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     * @return string
     */
    protected function get_inline_styles(array $attributes)
    {
        // stub
    }

    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array     $attributes  Any attributes that currently are available from the block.
     * @param string    $content    The block content.
     * @param \WP_Block $block    The block object.
     */
    protected function enqueue_assets(array $attributes, $content, $block)
    {
        // stub
    }

    /**
     * Render column headers for downloads table.
     *
     * @return string
     */
    protected function render_order_downloads_column_headers()
    {
        // stub
    }

    /**
     * Render downloads.
     *
     * @param \WC_Order $order Order object.
     * @param array     $downloads Array of downloads.
     * @return string
     */
    protected function render_order_downloads($order, $downloads)
    {
        // stub
    }

    /**
     * Render a download row in the table.
     *
     * @param array $download Download data.
     * @return string
     */
    protected function render_order_download_row($download)
    {
        // stub
    }

}

