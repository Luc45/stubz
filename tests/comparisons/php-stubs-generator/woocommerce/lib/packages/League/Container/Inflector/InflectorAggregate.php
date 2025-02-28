<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

class InflectorAggregate implements \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorAggregateInterface
{
    use \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareTrait;

    /**
     * @var Inflector[]
     */
    protected $inflectors = [];
    /**
     * {@inheritdoc}
     */
    public function add(string $type, ?callable $callback = null): \Automattic\WooCommerce\Vendor\League\Container\Inflector\Inflector
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIterator(): \Generator
    {
    }
    /**
     * {@inheritdoc}
     */
    public function inflect($object)
    {
    }
}
