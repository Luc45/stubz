<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Coming Soon mode.
 */
class ComingSoonServiceProvider extends \Automattic\WooCommerce\Internal\DependencyManagement\AbstractServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array(\Automattic\WooCommerce\Internal\ComingSoon\ComingSoonAdminBarBadge::class, \Automattic\WooCommerce\Internal\ComingSoon\ComingSoonCacheInvalidator::class, \Automattic\WooCommerce\Internal\ComingSoon\ComingSoonHelper::class, \Automattic\WooCommerce\Internal\ComingSoon\ComingSoonRequestHandler::class);
    /**
     * Register the classes.
     */
    public function register()
    {
    }
}
