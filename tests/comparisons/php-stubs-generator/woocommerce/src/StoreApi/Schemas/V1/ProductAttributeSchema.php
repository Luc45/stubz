<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductAttributeSchema class.
 */
class ProductAttributeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product_attribute';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-attribute';
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert an attribute object into an object suitable for the response.
     *
     * @param object $attribute Attribute object.
     * @return array
     */
    public function get_item_response($attribute)
    {
    }
}