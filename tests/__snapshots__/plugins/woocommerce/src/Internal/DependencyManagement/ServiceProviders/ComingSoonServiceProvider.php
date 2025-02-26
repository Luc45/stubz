<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * Service provider for the Coming Soon mode.
 */
class ComingSoonServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\ComingSoon\\ComingSoonAdminBarBadge',
  1 => 'Automattic\\WooCommerce\\Internal\\ComingSoon\\ComingSoonCacheInvalidator',
  2 => 'Automattic\\WooCommerce\\Internal\\ComingSoon\\ComingSoonHelper',
  3 => 'Automattic\\WooCommerce\\Internal\\ComingSoon\\ComingSoonRequestHandler',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

