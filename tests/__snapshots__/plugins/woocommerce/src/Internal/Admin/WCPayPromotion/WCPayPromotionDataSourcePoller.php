<?php

namespace Automattic\WooCommerce\Internal\Admin\WCPayPromotion;

/**
 * Specs data source poller class for WooPayments Promotion.
 */
class WCPayPromotionDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    public const ID = 'payment_method_promotion';
    public const DATA_SOURCES = array();
    /**
     * Class instance.
     *
     * @var WCPayPromotionDataSourcePoller instance
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