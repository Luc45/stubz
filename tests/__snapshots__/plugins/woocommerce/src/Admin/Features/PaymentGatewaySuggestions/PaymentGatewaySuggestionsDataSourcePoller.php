<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Specs data source poller class for payment gateway suggestions.
 */
class PaymentGatewaySuggestionsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    const ID = 'payment_gateway_suggestions';

    const DATA_SOURCES = array(
);

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
        // stub
    }

    /**
     * Get data sources with dynamic base URL.
     *
     * @return array
     */
    public static function get_data_sources()
    {
        // stub
    }

}

