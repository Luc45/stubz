<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderItemSchema class.
 */
class OrderItemSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\ItemSchema
{
    use \Automattic\WooCommerce\StoreApi\Utilities\ProductItemTrait;
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order_item';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'order-item';
    /**
     * Get order items data.
     *
     * @param \WC_Order_Item_Product $order_item Order item instance.
     * @return array
     */
    public function get_item_response($order_item)
    {
    }
    /**
     * Get totals data.
     *
     * @param \WC_Order_Item_Product $order_item Order item instance.
     * @return array
     */
    public function get_totals($order_item)
    {
    }
}