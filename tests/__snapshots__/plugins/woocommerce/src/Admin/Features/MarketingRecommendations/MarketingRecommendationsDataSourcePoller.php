<?php

namespace Automattic\WooCommerce\Admin\Features\MarketingRecommendations;

/**
 * Specs data source poller class for marketing recommendations.
 */
class MarketingRecommendationsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    const ID = 'marketing_recommendations';

    const DATA_SOURCES = array();

    /**
     * Class instance.
     *
     * @var MarketingRecommendationsDataSourcePoller instance
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