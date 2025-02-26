<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderItemSchema class.
 */
class OrderItemSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\ItemSchema
{
    const IDENTIFIER = 'order-item';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order_item';

    /**
     * Get order items data.
     *
     * @param \WC_Order_Item_Product $order_item Order item instance.
     * @return array
     */
    public function get_item_response($order_item)
    {
        // stub
    }

    /**
     * Get totals data.
     *
     * @param \WC_Order_Item_Product $order_item Order item instance.
     * @return array
     */
    public function get_totals($order_item)
    {
        // stub
    }

}

