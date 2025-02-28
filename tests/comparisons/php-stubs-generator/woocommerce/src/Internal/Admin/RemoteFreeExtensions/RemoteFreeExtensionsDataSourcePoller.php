<?php

namespace Automattic\WooCommerce\Internal\Admin\RemoteFreeExtensions;

/**
 * Specs data source poller class for remote free extensions.
 */
class RemoteFreeExtensionsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    public const ID = 'remote_free_extensions';
    /**
     * Default data sources array.
     *
     * @deprecated since 9.5.0. Use get_data_sources() instead.
     */
    public const DATA_SOURCES = array();
    /**
     * Class instance.
     *
     * @var RemoteFreeExtensionsDataSourcePoller instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Get data sources.
     *
     * @return array
     */
    public static function get_data_sources()
    {
    }
}
