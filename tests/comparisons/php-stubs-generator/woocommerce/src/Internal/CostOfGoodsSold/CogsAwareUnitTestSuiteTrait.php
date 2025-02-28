<?php

namespace Automattic\WooCommerce\Internal\CostOfGoodsSold;

/**
 * Trait with common functionality for unit tests related to the Cost of Goods Sold feature.
 */
trait CogsAwareUnitTestSuiteTrait
{
    /**
     * Enable the Cost of Goods Sold feature.
     */
    private function enable_cogs_feature()
    {
    }
    /**
     * Enable the Cost of Goods Sold feature.
     */
    private function disable_cogs_feature()
    {
    }
    /**
     * Sets the expectation for a "doing it wrong" being thrown.
     *
     * @param string $method_name The method name inside the error message.
     */
    private function expect_doing_it_wrong_cogs_disabled(string $method_name)
    {
    }
}