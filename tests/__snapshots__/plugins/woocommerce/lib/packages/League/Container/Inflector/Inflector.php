<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

class Inflector
{
    /**
     * @var string
     */
    protected $type = null;

    /**
     * @var callable|null
     */
    protected $callback = null;

    /**
     * @var array
     */
    protected $methods = array();

    /**
     * @var array
     */
    protected $properties = array();

    /**
     * Construct.
     *
     * @param string        $type
     * @param callable|null $callback
     */
    public function __construct(string $type, callable|null $callback = null)
{
}
    /**
     * {@inheritdoc}
     */
    public function getType(): string
{
}
    /**
     * {@inheritdoc}
     */
    public function invokeMethod(string $name, array $args): Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function invokeMethods(array $methods): Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function setProperty(string $property, $value): Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function setProperties(array $properties): Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function inflect($object)
{
}
}