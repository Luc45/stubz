<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

abstract class AbstractServiceProvider implements \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderInterface
{
    /**
     * @var array
     */
    protected $provides = array();
    /**
     * @var string
     */
    protected $identifier = null;
    /**
     * {@inheritdoc}
     */
    public function provides(string $alias): bool
{
}
    /**
     * {@inheritdoc}
     */
    public function setIdentifier(string $id): Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderInterface
{
}
    /**
     * {@inheritdoc}
     */
    public function getIdentifier(): string
{
}
}