<?php

namespace Automattic\WooCommerce\Internal\CostOfGoodsSold;

/**
 * Main controller for the Cost of Goods Sold feature.
 */
class CostOfGoodsSoldController implements \Automattic\WooCommerce\Internal\RegisterHooksInterface
{
    /**
     * Register hooks.
     */
    public function register()
    {
    }
    /**
     * Initialize the instance, runs when the instance is created by the dependency injection container.
     *
     * @internal
     * @param FeaturesController $features_controller The instance of FeaturesController to use.
     */
    final public function init(\Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller)
    {
    }
    /**
     * Is the Cost of Goods Sold engine enabled?
     *
     * @return bool True if the engine is enabled, false otherwise.
     */
    public function feature_is_enabled(): bool
    {
    }
    /**
     * Add the feature information for the features settings page.
     *
     * @param FeaturesController $features_controller The instance of FeaturesController to use.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_feature_definition($features_controller)
    {
    }
}
