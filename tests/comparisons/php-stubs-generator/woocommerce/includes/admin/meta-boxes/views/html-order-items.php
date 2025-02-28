<?php

/**
 * Allow plugins to determine whether refunds UI should be rendered in the template.
 *
 * @since 6.4.0
 *
 * @param bool     $render_refunds If the refunds UI should be rendered.
 * @param int      $order_id       The Order ID.
 * @param WC_Order $order          The Order object.
 */

$render_refunds = (bool) \apply_filters('woocommerce_admin_order_should_render_refunds', 0 < $order->get_total() - $order->get_total_refunded() || 0 < \absint($order->get_item_count() - $order->get_item_count_refunded()), $order->get_id(), $order);
