<?php

namespace Automattic\WooCommerce\Vendor\League\Container;

class ReflectionContainer
{
    /**
     * @var boolean
     */
    protected $cacheResolutions = false;

    /**
     * Cache of resolutions.
     *
     * @var array
     */
    protected $cache = array (
);

    /**
     * {@inheritdoc}
     *
     * @throws ReflectionException
     */
    public function get($id, array $args = array (
))
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function has($id): bool
    {
        // stub
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
    public function call(callable $callable, array $args = array (
))
    {
        // stub
    }

    /**
     * Whether the container should default to caching resolutions and returning
     * the cache on following calls.
     *
     * @param boolean $option
     *
     * @return self
     */
    public function cacheResolutions(bool $option = true): Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface
    {
        // stub
    }

}