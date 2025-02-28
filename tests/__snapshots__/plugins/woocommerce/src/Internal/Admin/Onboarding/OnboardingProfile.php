<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Contains backend logic for the onboarding profile and checklist feature.
 */
class OnboardingProfile
{
    public const DATA_OPTION = 'woocommerce_onboarding_profile';
    public const PROGRESS_OPTION = 'woocommerce_onboarding_profile_progress';
    /**
     * Add onboarding actions.
     */
    public static function init()
{
}
    /**
     * Trigger the woocommerce_onboarding_profile_completed action
     *
     * @param array $old_value Previous value.
     * @param array $value Current value.
     */
    public static function trigger_complete($old_value, $value)
{
}
    /**
     * Check if the profiler still needs to be completed.
     *
     * @return bool
     */
    public static function needs_completion()
{
}
}