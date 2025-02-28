<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Definition;

interface DefinitionInterface extends \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface
{
    /**
     * Add a tag to the definition.
     *
     * @param string $tag
     *
     * @return self
     */
    public function addTag(string $tag): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Does the definition have a tag?
     *
     * @param string $tag
     *
     * @return boolean
     */
    public function hasTag(string $tag): bool;
    /**
     * Set the alias of the definition.
     *
     * @param string $id
     *
     * @return DefinitionInterface
     */
    public function setAlias(string $id): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Get the alias of the definition.
     *
     * @return string
     */
    public function getAlias(): string;
    /**
     * Set whether this is a shared definition.
     *
     * @param boolean $shared
     *
     * @return self
     */
    public function setShared(bool $shared): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Is this a shared definition?
     *
     * @return boolean
     */
    public function isShared(): bool;
    /**
     * Get the concrete of the definition.
     *
     * @return mixed
     */
    public function getConcrete();
    /**
     * Set the concrete of the definition.
     *
     * @param mixed $concrete
     *
     * @return DefinitionInterface
     */
    public function setConcrete($concrete): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Add an argument to be injected.
     *
     * @param mixed $arg
     *
     * @return self
     */
    public function addArgument($arg): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Add multiple arguments to be injected.
     *
     * @param array $args
     *
     * @return self
     */
    public function addArguments(array $args): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Add a method to be invoked
     *
     * @param string $method
     * @param array  $args
     *
     * @return self
     */
    public function addMethodCall(string $method, array $args = []): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Add multiple methods to be invoked
     *
     * @param array $methods
     *
     * @return self
     */
    public function addMethodCalls(array $methods = []): \Automattic\WooCommerce\Vendor\League\Container\Definition\DefinitionInterface;
    /**
     * Handle instantiation and manipulation of value and return.
     *
     * @param boolean $new
     *
     * @return mixed
     */
    public function resolve(bool $new = false);
}
