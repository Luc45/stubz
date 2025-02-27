<?php

namespace Automattic\WooCommerce\Vendor\League\Container;

trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container = null;

    /**
     * @var Container
     */
    protected $leagueContainer = null;

    /**
     * Set a container.
     *
     * @param ContainerInterface $container
     *
     * @return ContainerAwareInterface
     */
    public function setContainer(Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface $container): Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface
    {
        // stub
    }

    /**
     * Get the container.
     *
     * @return ContainerInterface
     */
    public function getContainer(): Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface
    {
        // stub
    }

    /**
     * Set a container.
     *
     * @param Container $container
     *
     * @return self
     */
    public function setLeagueContainer(Automattic\WooCommerce\Vendor\League\Container\Container $container): Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface
    {
        // stub
    }

    /**
     * Get the container.
     *
     * @return Container
     */
    public function getLeagueContainer(): Automattic\WooCommerce\Vendor\League\Container\Container
    {
        // stub
    }

}