<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Provider for order-related queries and operations.
 */
class OrdersProvider
{
    /**
     * Allowed order statuses for calculating milestones.
     *
     * @var array
     */
    protected $allowed_statuses = array('pending', 'processing', 'completed');
    /**
     * Returns the number of orders.
     *
     * @return integer The number of orders.
     */
    public function get_order_count()
    {
    }
}