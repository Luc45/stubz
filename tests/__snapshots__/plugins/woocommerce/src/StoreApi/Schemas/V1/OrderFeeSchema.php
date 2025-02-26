<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderFeeSchema class.
 */
class OrderFeeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    const IDENTIFIER = 'order-fee';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order_fee';

    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Convert a WooCommerce cart fee to an object suitable for the response.
     *
     * @param \WC_Order_Item_Fee $fee Order fee object.
     * @return array
     */
    public function get_item_response($fee)
    {
        // stub
    }

}

