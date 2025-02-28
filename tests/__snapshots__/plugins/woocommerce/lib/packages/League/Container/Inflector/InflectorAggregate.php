<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

class InflectorAggregate implements \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorAggregateInterface
{
    /**
     * @var Inflector[]
     */
    protected $inflectors = array();
    /**
     * {@inheritdoc}
     */
    public function add(string $type, callable|null $callback = null): Automattic\WooCommerce\Vendor\League\Container\Inflector\Inflector
{
}
    /**
     * {@inheritdoc}
     */
    public function getIterator(): Generator
{
}
    /**
     * {@inheritdoc}
     */
    public function inflect($object)
{
}
}