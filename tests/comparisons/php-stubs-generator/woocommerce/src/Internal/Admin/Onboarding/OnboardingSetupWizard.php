<?php

namespace Automattic\WooCommerce\Internal\Admin\Onboarding;

/**
 * Contains backend logic for the onboarding profile and checklist feature.
 */
class OnboardingSetupWizard
{
    /**
     * Get class instance.
     */
    final public static function instance()
    {
    }
    /**
     * Add onboarding actions.
     */
    public function init()
    {
    }
    /**
     * Handle redirects to setup/welcome page after install and updates.
     *
     * For setup wizard, transient must be present, the user must have access rights, and we must ignore the network/bulk plugin updaters.
     */
    public function do_admin_redirects()
    {
    }
    /**
     * Trigger the woocommerce_onboarding_profile_completed action
     *
     * @param array $old_value Previous value.
     * @param array $value Current value.
     */
    public function trigger_profile_completed_action($old_value, $value)
    {
    }
    /**
     * Redirect to the profiler on homepage if completion is needed.
     */
    public function redirect_to_profiler()
    {
    }
    /**
     * Add profiler items to component settings.
     *
     * @param array $settings Component settings.
     *
     * @return array
     */
    public function component_settings($settings)
    {
    }
    /**
     * Preload WC setting options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_settings($options)
    {
    }
    /**
     * Set the admin full screen class when loading to prevent flashes of unstyled content.
     *
     * @param bool $classes Body classes.
     * @return array
     */
    public function add_loading_classes($classes)
    {
    }
    /**
     * Remove the install notice that prompts the user to visit the old onboarding setup wizard.
     *
     * @param bool   $show Show or hide the notice.
     * @param string $notice The slug of the notice.
     * @return bool
     */
    public function remove_old_install_notice($show, $notice)
    {
    }
    /**
     * Set the viewport meta tag for the setup wizard.
     *
     * @param string $viewport_meta Viewport meta content value.
     * @return string Viewport meta content value.
     *
     * @since 9.0.0
     */
    public function set_viewport_meta_tag($viewport_meta)
    {
    }
}
