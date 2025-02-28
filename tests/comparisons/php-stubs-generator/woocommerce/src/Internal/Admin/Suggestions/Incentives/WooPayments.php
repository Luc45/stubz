<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions\Incentives;

/**
 * WooPayments incentives provider class.
 */
class WooPayments extends \Automattic\WooCommerce\Internal\Admin\Suggestions\Incentives\Incentive
{
    /**
     * The transient name for incentives cache.
     *
     * @var string
     */
    protected string $cache_transient_name;
    /**
     * The transient name used to store the value for if store has orders.
     *
     * @var string
     */
    protected string $store_has_orders_transient_name;
    /**
     * The option name used to store the value for if store had WooPayments in use.
     *
     * @var string
     */
    protected string $store_had_woopayments_option_name;
    /**
     * Constructor.
     *
     * @param string $suggestion_id The suggestion ID.
     */
    public function __construct(string $suggestion_id)
    {
    }
    /**
     * Check if an incentive should be visible.
     *
     * @param string $id                          The incentive ID to check for visibility.
     * @param string $country_code                The business location country code to get incentives for.
     * @param bool   $skip_extension_active_check Whether to skip the check for the extension plugin being active.
     *
     * @return boolean Whether the incentive should be visible.
     */
    public function is_visible(string $id, string $country_code, bool $skip_extension_active_check = false): bool
    {
    }
    /**
     * Clear the incentives cache.
     */
    public function clear_cache()
    {
    }
    /**
     * Reset the memoized incentives.
     *
     * This is useful for testing purposes.
     */
    public function reset_memo()
    {
    }
    /**
     * Check if the extension plugin is active.
     *
     * @return boolean Whether the extension plugin is active.
     */
    protected function is_extension_active(): bool
    {
    }
    /**
     * Fetches and caches eligible incentives from the WooPayments API.
     *
     * @param string $country_code The business location country code to get incentives for.
     *
     * @return array List of eligible incentives.
     */
    protected function get_incentives(string $country_code): array
    {
    }
}
