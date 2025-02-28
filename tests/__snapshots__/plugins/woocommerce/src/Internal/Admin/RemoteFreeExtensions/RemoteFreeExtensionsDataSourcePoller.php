<?php

namespace Automattic\WooCommerce\Internal\Admin\RemoteFreeExtensions;

/**
 * Specs data source poller class for remote free extensions.
 */
class RemoteFreeExtensionsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    public const ID = 'remote_free_extensions';
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