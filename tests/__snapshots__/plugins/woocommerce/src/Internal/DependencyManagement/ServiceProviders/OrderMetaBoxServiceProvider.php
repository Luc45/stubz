<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement\ServiceProviders;

/**
 * OrderMetaBoxServiceProvider class.
 */
class OrderMetaBoxServiceProvider
{
    /**
     * The classes/interfaces that are serviced by this service provider.
     *
     * @var array
     */
    protected $provides = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\MetaBoxes\\CustomerHistory',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\MetaBoxes\\CustomMetaBox',
  2 => 'Automattic\\WooCommerce\\Internal\\Admin\\Orders\\MetaBoxes\\OrderAttribution',
);

    /**
     * Register the classes.
     */
    public function register()
    {
        // stub
    }

}

