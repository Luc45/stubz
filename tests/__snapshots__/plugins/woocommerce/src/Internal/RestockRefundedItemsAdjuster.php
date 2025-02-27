<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Class to adjust or initialize the restock refunded items.
 */
class RestockRefundedItemsAdjuster
{
    /**
     * The order factory to use.
     *
     * @var WC_Order_Factory
     */
    private $order_factory = null;

    /**
     * Class initialization, to be executed when the class is resolved by the container.
     *
     * @internal
     */
    public final function init()
    {
        // stub
    }

    /**
     * Initializes the restock refunded items meta for order version less than 5.5.
     *
     * @see https://github.com/woocommerce/woocommerce/issues/29502
     *
     * @param int   $order_id Order ID.
     * @param array $items Order items to save.
     */
    public function initialize_restock_refunded_items($order_id, $items)
    {
        // stub
    }

}