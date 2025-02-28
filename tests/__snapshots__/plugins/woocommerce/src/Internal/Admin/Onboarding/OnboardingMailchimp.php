<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Logic around updating Mailchimp during onboarding.
 */
class OnboardingMailchimp
{
    /**
     * Class instance.
     *
     * @var OnboardingMailchimp instance
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
     * Reset MailchimpScheduler if profile data is being updated with a new email.
     *
     * @param array $existing_data Existing option data.
     * @param array $updating_data Updating option data.
     */
    public function on_profile_data_updated($existing_data, $updating_data)
{
}
}