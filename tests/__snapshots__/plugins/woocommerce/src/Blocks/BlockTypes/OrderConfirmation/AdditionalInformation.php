<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * AdditionalInformation class.
 */
class AdditionalInformation
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-additional-information';

    /**
     * This renders the content of the block within the wrapper.
     *
     * @param \WC_Order    $order Order object.
     * @param string|false $permission If the current user can view the order details or not.
     * @param array        $attributes Block attributes.
     * @param string       $content Original block content.
     * @return string
     */
    protected function render_content($order, $permission = false, $attributes = array(), $content = '')
{
}
    /**
     * Remove core hooks from the thankyou page.
     */
    protected function remove_core_hooks()
{
}
    /**
     * Restore core hooks from the thankyou page.
     */
    protected function restore_core_hooks()
{
}
}