<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Definition;

class Definition implements \Automattic\WooCommerce\Vendor\League\Container\Argument\ArgumentResolverInterface, \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
    use \Automattic\WooCommerce\Vendor\League\Container\Argument\ArgumentResolverTrait;
    use \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareTrait;
    /**
     * @var string
     */
    protected $alias;
    /**
     * @var mixed
     */
    protected $concrete;
    /**
     * @var boolean
     */
    protected $shared = false;
    /**
     * @var array
     */
    protected $tags = [];
    /**
     * @var array
     */
    protected $arguments = [];
    /**
     * @var array
     */
    protected $methods = [];
    /**
     * @var mixed
     */
    protected $resolved;
    /**
     * Constructor.
     *
     * @param string $id
     * @param mixed  $concrete
     */
    public function __construct(string $id, $concrete = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addTag(string $tag) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function hasTag(string $tag) : bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setAlias(string $id) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAlias() : string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setShared(bool $shared = true) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isShared() : bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConcrete()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setConcrete($concrete) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addArgument($arg) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addArguments(array $args) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addMethodCall(string $method, array $args = []) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addMethodCalls(array $methods = []) : \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(bool $new = false)
    {
    }
    /**
     * Resolve a callable.
     *
     * @param callable $concrete
     *
     * @return mixed
     */
    protected function resolveCallable(callable $concrete)
    {
    }
    /**
     * Resolve a class.
     *
     * @param string $concrete
     *
     * @return object
     *
     * @throws ReflectionException
     */
    protected function resolveClass(string $concrete)
    {
    }
    /**
     * Invoke methods on resolved instance.
     *
     * @param object $instance
     *
     * @return object
     */
    protected function invokeMethods($instance)
    {
    }
}