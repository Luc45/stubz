<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * BatchSchema class.
 */
class BatchSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    const IDENTIFIER = 'batch';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'batch';

    /**
     * Batch schema properties.
     *
     * @return array
     */
    public function get_properties()
{
}
}