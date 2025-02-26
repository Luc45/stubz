<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * Totals class.
 */
class Totals extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-totals';

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
     * Render order details table items.
     *
     * Loosely based on the templates order-details.php and order-details-item.php from core.
     *
     * @param \WC_Order $order Order object.
     * @return string
     */
    protected function render_order_details_table_items($order)
    {
        // stub
    }

    /**
     * Render an item in the order details table.
     *
     * @param \WC_Order         $order Order object.
     * @param integer           $item_id Item ID.
     * @param \WC_Order_Item    $item Item object.
     * @param \WC_Product|false $product Product object if it exists.
     * @return string
     */
    protected function render_order_details_table_item($order, $item_id, $item, $product)
    {
        // stub
    }

    /**
     * Render an item purchase note.
     *
     * @param \WC_Order         $order Order object.
     * @param \WC_Product|false $product Product object if it exists.
     * @return string
     */
    protected function render_order_details_table_item_purchase_note($order, $product)
    {
        // stub
    }

    /**
     * Render order details table totals.
     *
     * @param \WC_Order $order Order object.
     * @return string
     */
    protected function render_order_details_table_totals($order)
    {
        // stub
    }

    /**
     * Render customer note.
     *
     * @param \WC_Order $order Order object.
     * @return string
     */
    protected function render_order_details_customer_note($order)
    {
        // stub
    }

}

