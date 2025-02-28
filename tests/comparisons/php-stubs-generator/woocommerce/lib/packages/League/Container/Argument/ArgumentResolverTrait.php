<?php

namespace Automattic\WooCommerce\Vendor\League\Container\Argument;

trait ArgumentResolverTrait
{
    /**
     * {@inheritdoc}
     */
    public function resolveArguments(array $arguments) : array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function reflectArguments(\ReflectionFunctionAbstract $method, array $args = []) : array
    {
    }
    /**
     * @return ContainerInterface
     */
    public abstract function getContainer() : \Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface;
    /**
     * @return Container
     */
    public abstract function getLeagueContainer() : \Automattic\WooCommerce\Vendor\League\Container\Container;
}