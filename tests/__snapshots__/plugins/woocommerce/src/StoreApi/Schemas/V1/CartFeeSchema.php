<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CartFeeSchema class.
 */
class CartFeeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    const IDENTIFIER = 'cart-fee';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_fee';

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
     * @param array $fee Cart fee data.
     * @return array
     */
    public function get_item_response($fee)
    {
        // stub
    }

}

