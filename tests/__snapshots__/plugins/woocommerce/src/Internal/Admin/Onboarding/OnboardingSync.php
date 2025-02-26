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
    public static final function instance()
    {
        // stub
    }

    /**
     * Init.
     */
    public function init()
    {
        // stub
    }

    /**
     * Send profile data to WooCommerce.com.
     */
    private function send_profile_data()
    {
        // stub
    }

    /**
     * Send profiler data on profiler change to completion.
     *
     * @param array $old_value Previous value.
     * @param array $value Current value.
     */
    public function send_profile_data_on_update($old_value, $value)
    {
        // stub
    }

    /**
     * Send profiler data after a site is connected.
     */
    public function send_profile_data_on_connect()
    {
        // stub
    }

    /**
     * Redirects the user to the task list if the task list is enabled and finishing a wccom checkout.
     *
     * @todo Once URL params are added to the redirect, we can check those instead of the referer.
     */
    public function redirect_wccom_install()
    {
        // stub
    }

}

