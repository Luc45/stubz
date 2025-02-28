<?php

/**
 * Filter the message shown after a checkout is complete.
 *
 * @since 2.2.0
 *
 * @param string         $message The message.
 * @param WC_Order|false $order   The order created during checkout, or false if order data is not available.
 */

$message = \apply_filters('woocommerce_thankyou_order_received_text', \esc_html(\__('Thank you. Your order has been received.', 'woocommerce')), $order);
