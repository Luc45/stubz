<?php

namespace Automattic\WooCommerce\Internal\Orders;

/**
 * Class OrderAttributionBlocksController
 *
 * @since 8.5.0
 */
class OrderAttributionBlocksController implements \Automattic\WooCommerce\Internal\RegisterHooksInterface
{
    /**
     * Bind dependencies on init.
     *
     * @internal
     *
     * @param ExtendSchema               $extend_schema                 ExtendSchema instance.
     * @param FeaturesController         $features_controller           Features controller.
     * @param OrderAttributionController $order_attribution_controller Instance of the order attribution controller.
     */
    final public function init(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema, Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller, Automattic\WooCommerce\Internal\Orders\OrderAttributionController $order_attribution_controller)
{
}
    /**
     * Register this class instance to the appropriate hooks.
     *
     * @return void
     */
    public function register()
{
}
    /**
     * Hook into WordPress on init.
     */
    public function on_init()
{
}
}