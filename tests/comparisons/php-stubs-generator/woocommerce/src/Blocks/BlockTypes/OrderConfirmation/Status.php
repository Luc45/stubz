<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * Status class.
 */
class Status extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-status';
    /**
     * This block uses a custom render method so that the email verification form can be appended to the block. This does
     * not inherit styles from the parent block.
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
    /**
     * This renders the content of the block within the wrapper.
     *
     * @param \WC_Order    $order Order object.
     * @param string|false $permission If the current user can view the order details or not.
     * @param array        $attributes Block attributes.
     * @param string       $content Original block content.
     * @return string
     */
    protected function render_content($order, $permission = false, $attributes = [], $content = '')
    {
    }
    /**
     * This is what gets rendered when the order does not exist.
     *
     * @return string
     */
    protected function render_content_fallback()
    {
    }
    /**
     * If the user associated with the order needs to set a password (new account) show a notice.
     *
     * @param \WC_Order|null $order Order object.
     * @return string
     */
    protected function render_account_notice($order = null)
    {
    }
    /**
     * If the order is invalid or there is no permission to view the details, tell the user to check email or log-in.
     *
     * @param \WC_Order|null $order Order object.
     * @return string
     */
    protected function render_confirmation_notice($order = null)
    {
    }
    /**
     * Email verification for guest users.
     *
     * @return string
     */
    protected function render_verification_form()
    {
    }
}
