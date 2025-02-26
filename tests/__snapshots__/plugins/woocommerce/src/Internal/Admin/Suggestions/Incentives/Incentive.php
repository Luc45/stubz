<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions\Incentives;

/**
 * Abstract class for payment extension suggestion incentive provider classes.
 */
abstract class Incentive extends \
{
    const PREFIX = 'woocommerce_admin_pes_incentive_';

    /**
     * The user meta name for storing dismissed incentives.
     *
     * @var string
     */
    protected string $dismissed_meta_name = 'woocommerce_admin_pes_incentive_dismissed';

    /**
     * The suggestion ID this incentive provider is for.
     *
     * @var string
     */
    protected string $suggestion_id;

    /**
     * Constructor.
     *
     * @param string $suggestion_id The suggestion ID this incentive provider is for.
     */
    public function __construct(string $suggestion_id)
    {
        // stub
    }

    /**
     * Get the details of all the incentives.
     *
     * The incentives are filtered based on the country code, incentive type, if provided, and their visibility.
     *
     * @param string $country_code   The business location country code to get incentives for.
     * @param string $incentive_type Optional. The type of incentive to check for.
     *
     * @return array The incentives list with details for each incentive.
     */
    public function get_all(string $country_code, string $incentive_type = ''): array
    {
        // stub
    }

    /**
     * Get an incentive by promo ID.
     *
     * The incentives are filtered based on the country code, incentive type, if provided, and their visibility.
     *
     * @param string $promo_id       The incentive promo ID.
     * @param string $country_code   The business location country code to get incentives for.
     * @param string $incentive_type Optional. The type of incentive to search for.
     *
     * @return ?array The incentive details. Returns null if there is no incentive available.
     */
    public function get_by_promo_id(string $promo_id, string $country_code, string $incentive_type = ''): array|null
    {
        // stub
    }

    /**
     * Get an incentive by ID.
     *
     * The incentives are filtered based on the country code, incentive type, if provided, and their visibility.
     *
     * @param string $incentive_id The incentive ID.
     * @param string $country_code The business location country code to get incentives for.
     *
     * @return ?array The incentive details. Returns null if there is no incentive available.
     */
    public function get_by_id(string $incentive_id, string $country_code): array|null
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
     * Dismiss an incentive.
     *
     * @param string $id        The incentive ID to dismiss.
     * @param string $context   Optional. The context ID in which the incentive is dismissed.
     *                          This can be used to dismiss the same incentive in different contexts.
     *                          If no context ID is provided, the incentive will be dismissed for all contexts.
     * @param ?int   $timestamp Optional The timestamp when the incentive was dismissed.
     *                          Defaults to the current time.
     *
     * @return bool True if the incentive was not previously dismissed and now it is.
     *              False if the incentive was already dismissed, or we failed to persist the dismissal data.
     */
    public function dismiss(string $id, string $context = 'all', int|null $timestamp = null): bool
    {
        // stub
    }

    /**
     * Check if an incentive has been manually dismissed.
     *
     * @param string $id      The incentive ID to check for dismissal.
     * @param string $context Optional. The context ID in which to check for dismissal.
     *                        If no context ID is provided, we check for dismissal in all contexts.
     *
     * @return boolean Whether the incentive has been manually dismissed.
     */
    public function is_dismissed(string $id, string $context = ''): bool
    {
        // stub
    }

    /**
     * Get the dismissals (contexts) for an incentive.
     *
     * @param string $id The incentive ID.
     *
     * @return array The contexts in which the incentive has been dismissed.
     */
    public function get_dismissals(string $id): array
    {
        // stub
    }

    /**
     * Get all the dismissed incentives grouped by suggestion.
     *
     * @return array The dismissed incentives grouped by suggestion.
     */
    protected function get_all_dismissed_incentives(): array
    {
        // stub
    }

    /**
     * Save all the dismissed incentives list.
     *
     * @param array $dismissed_incentives The dismissed incentives data.
     *
     * @return bool Whether the dismissed incentives were saved successfully.
     */
    protected function save_all_dismissed_incentives(array $dismissed_incentives): bool
    {
        // stub
    }

    /**
     * Check if the current user has the required capabilities to view incentives.
     *
     * @return bool Whether the current user has the required capabilities view incentives.
     */
    protected function user_has_caps(): bool
    {
        // stub
    }

    /**
     * Validate an incentive details.
     *
     * It will check if the incentive details have the required keys.
     *
     * @param array $incentive The incentive details.
     *
     * @return bool Whether the incentive data is valid.
     */
    protected function validate_incentive(array $incentive): bool
    {
        // stub
    }

    /**
     * Check if the corresponding extension suggestion plugin is active.
     *
     * @return boolean Whether the corresponding extension suggestion plugin is active.
     */
    protected abstract function is_extension_active(): bool;

    /**
     * Get eligible incentives.
     *
     * @param string $country_code The business location country code to get incentives for.
     *
     * @return array List of eligible incentives.
     */
    protected abstract function get_incentives(string $country_code): array;

}

