<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class OrderAttributionBlocksController
 *
 * @since 8.5.0
 */
class OrderAttributionBlocksController
{
    /**
     * Instance of the features controller.
     *
     * @var FeaturesController
     */
    private $features_controller = null;

    /**
     * ExtendSchema instance.
     *
     * @var ExtendSchema
     */
    private $extend_schema = null;

    /**
     * Instance of the order attribution controller.
     *
     * @var OrderAttributionController
     */
    private $order_attribution_controller = null;

    /**
     * Bind dependencies on init.
     *
     * @internal
     *
     * @param ExtendSchema               $extend_schema                 ExtendSchema instance.
     * @param FeaturesController         $features_controller           Features controller.
     * @param OrderAttributionController $order_attribution_controller Instance of the order attribution controller.
     */
    public final function init(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema, Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller, Automattic\WooCommerce\Internal\Orders\OrderAttributionController $order_attribution_controller)
    {
        // stub
    }

    /**
     * Register this class instance to the appropriate hooks.
     *
     * @return void
     */
    public function register()
    {
        // stub
    }

    /**
     * Hook into WordPress on init.
     */
    public function on_init()
    {
        // stub
    }

    /**
     * Extend the Store API.
     *
     * @return void
     */
    private function extend_api()
    {
        // stub
    }

    /**
     * Get the schema callback.
     *
     * @return callable
     */
    private function get_schema_callback()
    {
        // stub
    }

}

