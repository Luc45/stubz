<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductCollectionDataSchema class.
 */
class ProductCollectionDataSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product-collection-data';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-collection-data';
    /**
     * Product collection data schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Format data.
     *
     * @param array $data Collection data to format and return.
     * @return array
     */
    public function get_item_response($data)
    {
    }
}