<?php

namespace Automattic\WooCommerce\Vendor\League\Container;

interface ContainerAwareInterface
{
    /**
     * Set a container
     *
     * @param ContainerInterface $container
     *
     * @return self
     */
    public function setContainer(Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface $container): Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface;

    /**
     * Get the container
     *
     * @return ContainerInterface
     */
    public function getContainer(): Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface;

    /**
     * Set a container. This will be removed in favour of setContainer receiving Container in next major release.
     *
     * @param Container $container
     *
     * @return self
     */
    public function setLeagueContainer(Automattic\WooCommerce\Vendor\League\Container\Container $container): self;

    /**
     * Get the container. This will be removed in favour of getContainer returning Container in next major release.
     *
     * @return Container
     */
    public function getLeagueContainer(): Automattic\WooCommerce\Vendor\League\Container\Container;

}