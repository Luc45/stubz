<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

abstract class AbstractServiceProvider implements \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderInterface
{
    use \Automattic\WooCommerce\Vendor\League\Container\ContainerAwareTrait;
    /**
     * @var array
     */
    protected $provides = [];
    /**
     * @var string
     */
    protected $identifier;
    /**
     * {@inheritdoc}
     */
    public function provides(string $alias) : bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setIdentifier(string $id) : \Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIdentifier() : string
    {
    }
}