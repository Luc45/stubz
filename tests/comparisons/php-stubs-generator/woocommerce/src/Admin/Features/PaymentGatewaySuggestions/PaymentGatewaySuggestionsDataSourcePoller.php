<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Specs data source poller class for payment gateway suggestions.
 */
class PaymentGatewaySuggestionsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    /**
     * Data Source Poller ID.
     */
    const ID = 'payment_gateway_suggestions';
    /**
     * Default data sources array.
     *
     * @deprecated since 9.5.0. Use get_data_sources() instead.
     */
    const DATA_SOURCES = array();
    /**
     * Class instance.
     *
     * @var PaymentGatewaySuggestionsDataSourcePoller instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Get data sources with dynamic base URL.
     *
     * @return array
     */
    public static function get_data_sources()
    {
    }
}