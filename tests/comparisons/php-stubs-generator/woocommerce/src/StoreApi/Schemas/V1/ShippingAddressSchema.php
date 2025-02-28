<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ShippingAddressSchema class.
 *
 * Provides a generic shipping address schema for composition in other schemas.
 */
class ShippingAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractAddressSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'shipping_address';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'shipping-address';
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WC_Order|\WC_Customer $address An object with shipping address.
     *
     * @throws RouteException When the invalid object types are provided.
     * @return array
     */
    public function get_item_response($address)
    {
    }
}