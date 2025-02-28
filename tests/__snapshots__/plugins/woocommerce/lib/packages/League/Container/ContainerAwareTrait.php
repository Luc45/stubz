<?php

namespace Automattic\WooCommerce\Vendor\League\Container;

trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container;
    /**
     * @var Container
     */
    protected $leagueContainer;
    /**
     * Set a container.
     *
     * @param ContainerInterface $container
     *
     * @return ContainerAwareInterface
     */
    public function setContainer(Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface $container): Automattic\WooCommerce\Vendor\League\Container\ContainerAwareInterface
{
}
    /**
     * Get the container.
     *
     * @return ContainerInterface
     */
    public function getContainer(): Automattic\WooCommerce\Vendor\Psr\Container\ContainerInterface
{
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
}
    /**
     * Get the container.
     *
     * @return Container
     */
    public function getLeagueContainer(): Automattic\WooCommerce\Vendor\League\Container\Container
{
}
}