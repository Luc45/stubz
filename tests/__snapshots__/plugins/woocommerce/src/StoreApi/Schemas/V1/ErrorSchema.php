<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ErrorSchema class.
 */
class ErrorSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    const IDENTIFIER = 'error';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'error';

    /**
     * Product schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Convert a WP_Error into an object suitable for the response.
     *
     * @param \WP_Error $error Error object.
     * @return array
     */
    public function get_item_response($error)
    {
        // stub
    }

}

