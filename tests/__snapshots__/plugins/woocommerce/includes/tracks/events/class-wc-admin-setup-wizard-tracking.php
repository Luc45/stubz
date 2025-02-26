<?php

namespace ;

/**
 * This class adds actions to track usage of the WooCommerce Onboarding Wizard.
 */
class WC_Admin_Setup_Wizard_Tracking extends \
{
    /**
     * Steps for the setup wizard
     *
     * @var array
     */
    private $steps = array(
);

    /**
     * Init tracking.
     *
     * @deprecated 4.6.0
     */
    public function init()
    {
        // stub
    }

    /**
     * Get the name of the current step.
     *
     * @deprecated 4.6.0
     * @return string
     */
    public function get_current_step()
    {
        // stub
    }

    /**
     * Add footer scripts to OBW via woocommerce_setup_footer
     *
     * @deprecated 4.6.0
     */
    public function add_footer_scripts()
    {
        // stub
    }

    /**
     * Dequeue unwanted scripts from OBW footer.
     *
     * @deprecated 4.6.0
     */
    public function dequeue_non_allowed_scripts()
    {
        // stub
    }

    /**
     * Track when tracking is opted into and OBW has started.
     *
     * @param string $option Option name.
     * @param string $value  Option value.
     *
     * @deprecated 4.6.0
     */
    public function track_start($option, $value)
    {
        // stub
    }

    /**
     * Track the marketing form on submit.
     *
     * @deprecated 4.6.0
     */
    public function track_ready_next_steps()
    {
        // stub
    }

    /**
     * Track various events when a step is saved.
     *
     * @deprecated 4.6.0
     */
    public function add_step_save_events()
    {
        // stub
    }

    /**
     * Track store setup and store properties on save.
     *
     * @deprecated 4.6.0
     */
    public function track_store_setup()
    {
        // stub
    }

    /**
     * Track payment gateways selected.
     *
     * @deprecated 4.6.0
     */
    public function track_payments()
    {
        // stub
    }

    /**
     * Track shipping units and whether or not labels are set.
     *
     * @deprecated 4.6.0
     */
    public function track_shipping()
    {
        // stub
    }

    /**
     * Track recommended plugins selected for install.
     *
     * @deprecated 4.6.0
     */
    public function track_recommended()
    {
        // stub
    }

    /**
     * Tracks when Jetpack is activated through the OBW.
     *
     * @deprecated 4.6.0
     */
    public function track_jetpack_activate()
    {
        // stub
    }

    /**
     * Tracks when last next_steps screen is viewed in the OBW.
     *
     * @deprecated 4.6.0
     */
    public function track_next_steps()
    {
        // stub
    }

    /**
     * Track skipped steps.
     *
     * @deprecated 4.6.0
     */
    public function track_skip_step()
    {
        // stub
    }

    /**
     * Set the OBW steps inside this class instance.
     *
     * @param array $steps Array of OBW steps.
     *
     * @deprecated 4.6.0
     */
    public function set_obw_steps($steps)
    {
        // stub
    }

}

