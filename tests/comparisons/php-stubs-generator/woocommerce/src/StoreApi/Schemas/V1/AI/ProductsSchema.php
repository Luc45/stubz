<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1\AI;

/**
 * ProductsSchema class.
 *
 * @internal
 */
class ProductsSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'ai/products';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/products';
    /**
     * Products schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Get the Products response.
     *
     * @param array $item Item to get response for.
     *
     * @return array
     */
    public function get_item_response($item)
    {
    }
}