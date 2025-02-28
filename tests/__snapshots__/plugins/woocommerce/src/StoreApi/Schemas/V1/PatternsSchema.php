<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderSchema class.
 */
class PatternsSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    const IDENTIFIER = 'patterns';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'patterns';

    /**
     * Patterns schema properties.
     *
     * @return array
     */
    public function get_properties()
{
}
    /**
     * Get the Patterns response.
     *
     * @param array $item Item to get response for.
     *
     * @return array
     */
    public function get_item_response($item)
{
}
}