<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * SchemaController class.
 */
class SchemaController
{
    /**
     * Stores schema class instances.
     *
     * @var Schemas\V1\AbstractSchema[]
     */
    protected $schemas = [];
    /**
     * Constructor.
     *
     * @param ExtendSchema $extend Rest Extending instance.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend)
    {
    }
    /**
     * Get a schema class instance.
     *
     * @throws \Exception If the schema does not exist.
     *
     * @param string $name Name of schema.
     * @param int    $version API Version being requested.
     * @return Schemas\V1\AbstractSchema A new instance of the requested schema.
     */
    public function get($name, $version = 1)
    {
    }
}