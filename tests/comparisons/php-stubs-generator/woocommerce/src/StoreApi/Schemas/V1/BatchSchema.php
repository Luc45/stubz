<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * BatchSchema class.
 */
class BatchSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'batch';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'batch';
    /**
     * Batch schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
}