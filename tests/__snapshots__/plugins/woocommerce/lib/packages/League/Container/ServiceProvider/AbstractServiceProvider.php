<?php

namespace Automattic\WooCommerce\Vendor\League\Container\ServiceProvider;

abstract class AbstractServiceProvider extends \
{
    /**
     * @var array
     */
    protected $provides = array(
);

    /**
     * @var string
     */
    protected $identifier = null;

    /**
     * {@inheritdoc}
     */
    public function provides(string $alias): bool
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function setIdentifier(string $id): Automattic\WooCommerce\Vendor\League\Container\ServiceProvider\ServiceProviderInterface
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifier(): string
    {
        // stub
    }

}

