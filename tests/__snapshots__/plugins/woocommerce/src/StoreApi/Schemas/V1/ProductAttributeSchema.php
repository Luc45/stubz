<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductAttributeSchema class.
 */
class ProductAttributeSchema
{
    const IDENTIFIER = 'product-attribute';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product_attribute';

    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Convert an attribute object into an object suitable for the response.
     *
     * @param object $attribute Attribute object.
     * @return array
     */
    public function get_item_response($attribute)
    {
        // stub
    }

}

