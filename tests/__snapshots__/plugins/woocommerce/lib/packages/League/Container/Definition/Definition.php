<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Definition;

class Definition
{
    /**
     * @var string
     */
    protected $alias = null;

    /**
     * @var mixed
     */
    protected $concrete = null;

    /**
     * @var boolean
     */
    protected $shared = false;

    /**
     * @var array
     */
    protected $tags = array();

    /**
     * @var array
     */
    protected $arguments = array();

    /**
     * @var array
     */
    protected $methods = array();

    /**
     * @var mixed
     */
    protected $resolved = null;

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
    public function addTag(string $tag): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function hasTag(string $tag): bool
{
}
    /**
     * {@inheritdoc}
     */
    public function setAlias(string $id): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function getAlias(): string
{
}
    /**
     * {@inheritdoc}
     */
    public function setShared(bool $shared = true): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function isShared(): bool
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
    public function setConcrete($concrete): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function addArgument($arg): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function addArguments(array $args): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function addMethodCall(string $method, array $args = array()): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function addMethodCalls(array $methods = array()): Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface
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