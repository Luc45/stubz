<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CheckoutOrderSchema class.
 */
class CheckoutOrderSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\CheckoutSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'checkout-order';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'checkout-order';
    /**
     * Checkout schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
}