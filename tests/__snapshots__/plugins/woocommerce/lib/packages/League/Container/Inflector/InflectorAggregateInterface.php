<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

interface InflectorAggregateInterface extends \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface, \IteratorAggregate
{
    /**
     * Add an inflector to the aggregate.
     *
     * @param string   $type
     * @param callable $callback
     *
     * @return Inflector
     */
    public function add(string $type, callable|null $callback = null): Automattic\WooCommerce\Vendor\League\Container\Inflector\Inflector;
    /**
     * Applies all inflectors to an object.
     *
     * @param  object $object
     * @return object
     */
    public function inflect($object);
}