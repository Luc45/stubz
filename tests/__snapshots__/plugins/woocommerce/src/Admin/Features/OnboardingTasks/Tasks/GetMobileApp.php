<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Get Mobile App Task
 */
class GetMobileApp
{
    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
        // stub
    }

    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
        // stub
    }

    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
        // stub
    }

    /**
     * Task visibility.
     * Can view under these conditions:
     *  - Jetpack is installed and connected && current site user has a wordpress.com account connected to jetpack
     *  - Jetpack is not connected && current user is capable of installing plugins
     *
     * @return bool
     */
    public function can_view()
    {
        // stub
    }

    /**
     * Determines if site has any users connected to WordPress.com via JetPack
     *
     * @return bool
     */
    private static function is_jetpack_connected()
    {
        // stub
    }

    /**
     * Determines if the current user is connected to Jetpack.
     *
     * @return bool
     */
    private static function is_current_user_connected()
    {
        // stub
    }

    /**
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
    {
        // stub
    }

}