<?php

namespace Automattic\WooCommerce\Internal\CostOfGoodsSold;

/**
 * Main controller for the Cost of Goods Sold feature.
 */
class CostOfGoodsSoldController
{
    /**
     * The instance of FeaturesController to use.
     *
     * @var FeaturesController
     */
    private Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller;

    /**
     * Register hooks.
     */
    public function register()
    {
        // stub
    }

    /**
     * Initialize the instance, runs when the instance is created by the dependency injection container.
     *
     * @internal
     * @param FeaturesController $features_controller The instance of FeaturesController to use.
     */
    public final function init(Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller)
    {
        // stub
    }

    /**
     * Is the Cost of Goods Sold engine enabled?
     *
     * @return bool True if the engine is enabled, false otherwise.
     */
    public function feature_is_enabled(): bool
    {
        // stub
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
        // stub
    }

}

