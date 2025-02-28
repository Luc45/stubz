<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ItemSchema class.
 */
abstract class ItemSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\ProductSchema
{
    /**
     * Item schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
}