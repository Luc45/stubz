<?php

namespace Automattic\WooCommerce\Vendor\League\Container;

class ReflectionContainer implements \Automattic\WooCommerce\Vendor\League\Container\Argument\ArgumentResolverInterface, \Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface
{
    use \Automattic\WooCommerce\Vendor\League\Container\Argument\ArgumentResolverTrait;
    use \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareTrait;

    /**
     * @var boolean
     */
    protected $cacheResolutions = false;
    /**
     * Cache of resolutions.
     *
     * @var array
     */
    protected $cache = [];
    /**
     * {@inheritdoc}
     *
     * @throws ReflectionException
     */
    public function get($id, array $args = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function has($id): bool
    {
    }
    /**
     * Invoke a callable via the container.
     *
     * @param callable $callable
     * @param array    $args
     *
     * @return mixed
     *
     * @throws ReflectionException
     */
    public function call(callable $callable, array $args = [])
    {
    }
    /**
     * Whether the container should default to caching resolutions and returning
     * the cache on following calls.
     *
     * @param boolean $option
     *
     * @return self
     */
    public function cacheResolutions(bool $option = true): \Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface
    {
    }
}
