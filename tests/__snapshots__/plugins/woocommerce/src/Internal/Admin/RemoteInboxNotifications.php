<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Remote Inbox Notifications feature logic.
 */
class RemoteInboxNotifications
{
    /**
     * Option name used to toggle this feature.
     */
    public const TOGGLE_OPTION_NAME = 'woocommerce_show_marketplace_suggestions';
    /**
     * Class instance.
     *
     * @var RemoteInboxNotifications instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
{
}
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
{
}
}