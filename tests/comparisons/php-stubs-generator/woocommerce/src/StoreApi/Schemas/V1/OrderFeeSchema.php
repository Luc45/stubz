<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderFeeSchema class.
 */
class OrderFeeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order_fee';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'order-fee';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce cart fee to an object suitable for the response.
     *
     * @param \WC_Order_Item_Fee $fee Order fee object.
     * @return array
     */
    public function get_item_response($fee)
    {
    }
}