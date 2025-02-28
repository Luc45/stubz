<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * TermSchema class.
 */
class TermSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    public const IDENTIFIER = 'term';
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'term';
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
{
}
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WP_Term $term Term object.
     * @return array
     */
    public function get_item_response($term)
{
}
}