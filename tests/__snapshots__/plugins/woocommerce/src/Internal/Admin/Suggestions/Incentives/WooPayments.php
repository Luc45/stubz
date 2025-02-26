<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions\Incentives;

/**
 * WooPayments incentives provider class.
 */
class WooPayments
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
     * The memoized incentives to avoid fetching multiple times during a request.
     *
     * @var array|null
     */
    private array|null $incentives_memo = null;

    /**
     * Constructor.
     *
     * @param string $suggestion_id The suggestion ID.
     */
    public function __construct(string $suggestion_id)
    {
        // stub
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
        // stub
    }

    /**
     * Clear the incentives cache.
     */
    public function clear_cache()
    {
        // stub
    }

    /**
     * Reset the memoized incentives.
     *
     * This is useful for testing purposes.
     */
    public function reset_memo()
    {
        // stub
    }

    /**
     * Check if the extension plugin is active.
     *
     * @return boolean Whether the extension plugin is active.
     */
    protected function is_extension_active(): bool
    {
        // stub
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
        // stub
    }

    /**
     * Check if the WooPayments payment gateway is active and set up or was at some point,
     * or there are orders processed with it, at some moment.
     *
     * @return boolean Whether the store has WooPayments.
     */
    private function has_wcpay(): bool
    {
        // stub
    }

    /**
     * Check if there is meaningful data in the WooPayments account cache.
     *
     * @return boolean
     */
    private function has_wcpay_account_data(): bool
    {
        // stub
    }

    /**
     * Check if the store has any paid orders.
     *
     * Currently, we look at the past 90 days and only consider orders
     * with status `wc-completed`, `wc-processing`, or `wc-refunded`.
     *
     * @return boolean Whether the store has any paid orders.
     */
    private function has_orders(): bool
    {
        // stub
    }

    /**
     * Generate a hash from the store context data.
     *
     * @param array $context The store context data.
     *
     * @return string The context hash.
     */
    private function generate_context_hash(array $context): string
    {
        // stub
    }

}

