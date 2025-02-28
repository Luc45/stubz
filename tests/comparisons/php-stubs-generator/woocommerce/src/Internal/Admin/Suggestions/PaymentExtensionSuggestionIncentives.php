<?php

namespace Automattic\WooCommerce\Internal\Admin\Suggestions;

/**
 * Partner payment extension incentives provider class.
 */
class PaymentExtensionSuggestionIncentives
{
    /**
     * Get the first found incentive details for a specific payment extension suggestion.
     *
     * @param string $suggestion_id         The suggestion ID.
     * @param string $country_code          The business location country code to get incentives for.
     * @param string $incentive_type        Optional. The type of incentive to check for.
     * @param bool   $skip_visibility_check Optional. Whether to skip the visibility check for the incentives.
     *
     * @return ?array The incentive details. Returns null if there is no incentive available.
     */
    public function get_incentive(string $suggestion_id, string $country_code, string $incentive_type = '', bool $skip_visibility_check = false) : ?array
    {
    }
    /**
     * Get the incentives list for a specific payment extension suggestion.
     *
     * @param string $suggestion_id         The suggestion ID.
     * @param string $country_code          The business location country code to get incentives for.
     * @param string $incentive_type        Optional. The type of incentive to check for.
     *                                      If not provided, all incentives for the suggestion will be returned.
     * @param bool   $skip_visibility_check Optional. Whether to skip the visibility check for the incentives.
     *
     * @return array The incentives list.
     */
    public function get_incentives(string $suggestion_id, string $country_code, string $incentive_type = '', bool $skip_visibility_check = false) : array
    {
    }
    /**
     * Check if an incentive is visible.
     *
     * @param string $incentive_id                The incentive ID.
     * @param string $suggestion_id               The suggestion ID this incentive is for.
     * @param string $country_code                The business location country code to get incentives for.
     * @param bool   $skip_extension_active_check Whether to skip the check for the extension plugin being active.
     *
     * @return bool Whether there is a visible incentive for the suggestion.
     */
    public function is_incentive_visible(string $incentive_id, string $suggestion_id, string $country_code, bool $skip_extension_active_check = false) : bool
    {
    }
    /**
     * Check if an incentive has been dismissed for a specific payment extension suggestion.
     *
     * @param string $incentive_id  The incentive ID.
     * @param string $suggestion_id The suggestion ID.
     * @param string $context       Optional. The context ID in which the incentive is checked.
     *
     * @return bool Whether the incentive has been dismissed for the suggestion.
     */
    public function is_incentive_dismissed(string $incentive_id, string $suggestion_id, string $context = '') : bool
    {
    }
    /**
     * Get the dismissals (contexts) for an incentive.
     *
     * @param string $incentive_id The incentive ID.
     * @param string $suggestion_id The suggestion ID.
     *
     * @return string[] The contexts in which the incentive has been dismissed.
     */
    public function get_incentive_dismissals(string $incentive_id, string $suggestion_id) : array
    {
    }
    /**
     * Dismiss an incentive for a specific payment extension suggestion.
     *
     * @param string $incentive_id  The incentive ID.
     * @param string $suggestion_id The suggestion ID.
     * @param string $context       Optional. The context ID for which the incentive should be dismissed.
     *                              If not provided, the incentive will be dismissed for all contexts.
     *
     * @return bool True if the incentive was not previously dismissed and now it is. False otherwise.
     * @throws \Exception If no incentives provider is available for the suggestion.
     */
    public function dismiss_incentive(string $incentive_id, string $suggestion_id, string $context = 'all') : bool
    {
    }
    /**
     * Get the incentive provider instance for a specific payment extension suggestion.
     *
     * @param string $suggestion_id The suggestion ID.
     *
     * @return ?Incentive The incentives provider instance for the suggestion.
     *                    Returns null if no provider is available for the suggestion.
     */
    public function get_incentive_instance(string $suggestion_id) : ?\Automattic\WooCommerce\Internal\Admin\Suggestions\Incentives\Incentive
    {
    }
    /**
     * Check if a specific payment extension suggestion has an incentive provider registered.
     *
     * @param string $suggestion_id The suggestion ID.
     *
     * @return bool Whether the suggestion has an incentive provider registered.
     */
    public function has_incentive_provider(string $suggestion_id) : bool
    {
    }
}