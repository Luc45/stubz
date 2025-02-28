<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Contains backend logic for the onboarding profile and checklist feature.
 */
class OnboardingSync
{
    /**
     * Class instance.
     *
     * @var OnboardingSync instance
     */
    private static $instance = null;

    /**
     * Get class instance.
     */
    final public static function instance()
{
}
    /**
     * Init.
     */
    public function init()
{
}
    /**
     * Send profile data to WooCommerce.com.
     */
    private function send_profile_data()
{
}
    /**
     * Send profiler data on profiler change to completion.
     *
     * @param array $old_value Previous value.
     * @param array $value Current value.
     */
    public function send_profile_data_on_update($old_value, $value)
{
}
    /**
     * Send profiler data after a site is connected.
     */
    public function send_profile_data_on_connect()
{
}
    /**
     * Redirects the user to the task list if the task list is enabled and finishing a wccom checkout.
     *
     * @todo Once URL params are added to the redirect, we can check those instead of the referer.
     */
    public function redirect_wccom_install()
{
}
}