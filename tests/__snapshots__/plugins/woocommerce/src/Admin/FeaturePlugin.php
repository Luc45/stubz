<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Feature plugin main class.
 *
 * @deprecated since 6.4.0
 */
class FeaturePlugin
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\\WooCommerce\\Internal\\Admin\\FeaturePlugin';

    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '6.4.0';

    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
        // stub
    }

    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static final function instance()
    {
        // stub
    }

    /**
     * Init the feature plugin, only if we can detect both Gutenberg and WooCommerce.
     *
     * @deprecated 6.4.0
     */
    public function init()
    {
        // stub
    }

}

