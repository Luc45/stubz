<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * \Automattic\WooCommerce\Internal\Admin\WCAdminSharedSettings class.
 */
class WCAdminSharedSettings
{
    /**
     * Settings prefix used for the window.wcSettings object.
     *
     * @var string
     */
    private $settings_prefix = 'admin';

    /**
     * Class instance.
     *
     * @var WCAdminSharedSettings instance
     */
    protected static $instance = null;

    /**
     * Hook into WooCommerce Blocks.
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
    public static function get_instance()
    {
        // stub
    }

    /**
     * Adds settings to the Blocks AssetDataRegistry when woocommerce_blocks is loaded.
     *
     * @return void
     */
    public function on_woocommerce_blocks_loaded()
    {
        // stub
    }

}