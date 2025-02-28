<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Inflector;

class Inflector implements \Automattic\WooCommerce\Vendor\League\Container\Argument\ArgumentResolverInterface, \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
{
    use \Automattic\WooCommerce\Vendor\League\Container\Argument\ArgumentResolverTrait;
    use \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareTrait;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var callable|null
     */
    protected $callback;
    /**
     * @var array
     */
    protected $methods = [];
    /**
     * @var array
     */
    protected $properties = [];
    /**
     * Construct.
     *
     * @param string        $type
     * @param callable|null $callback
     */
    public function __construct(string $type, ?callable $callback = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getType() : string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function invokeMethod(string $name, array $args) : \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function invokeMethods(array $methods) : \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setProperty(string $property, $value) : \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setProperties(array $properties) : \Automattic\WooCommerce\Vendor\League\Container\Inflector\InflectorInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function inflect($object)
    {
    }
}