<?php

namespace Automattic\WooCommerce\Internal\CostOfGoodsSold;

/**
 * Trait with general Cost of Goods Sold related functionality shared by the entire codebase.
 */
trait CogsAwareTrait
{
    /**
     * Check if the Cost of Goods Sold feature is enabled.
     *
     * @param string|null $doing_it_wrong_function_name If not null, a "doing it wrong" error will be thrown with this function name if the deature is disabled.
     *
     * @return bool True if the feature is enabled.
     */
    protected function cogs_is_enabled(?string $doing_it_wrong_function_name = null): bool
    {
    }
}
