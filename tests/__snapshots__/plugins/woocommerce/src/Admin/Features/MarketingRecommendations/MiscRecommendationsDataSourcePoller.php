<?php

namespace Automattic\WooCommerce\Admin\Features\MarketingRecommendations;

/**
 * Specs data source poller class for misc recommendations.
 *
 * The misc recommendations are fetched from the WooCommerce.com API, the data structure looks like this:
 *
 * [
 *   {
 *     "id": "woocommerce-analytics",
 *     "order_attribution_promotion_percentage": [
 *       [ "9.7", 100 ],
 *       [ "9.6", 60 ],
 *       [ "9.5", 10 ]
 *     ]
 *   }
 * ]
 *
 * @since 9.5.0
 */
class MiscRecommendationsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    const ID = 'misc_recommendations';

    /**
     * Class instance.
     *
     * @var MiscRecommendationsDataSourcePoller instance
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