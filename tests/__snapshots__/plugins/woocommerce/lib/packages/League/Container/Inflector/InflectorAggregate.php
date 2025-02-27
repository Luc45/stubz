<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

class InflectorAggregate
{
    /**
     * @var Inflector[]
     */
    protected $inflectors = array (
);

    /**
     * {@inheritdoc}
     */
    public function add(string $type, callable|null $callback = null): Automattic\WooCommerce\Vendor\League\Container\Inflector\Inflector
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator(): Generator
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function inflect($object)
    {
        // stub
    }

}