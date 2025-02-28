<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

// https://github.com/Automattic/jetpack/blob/trunk/projects/packages/connection/src/class-manager.php .
/**
 * Get Mobile App Task
 */
class GetMobileApp extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
    }
    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
    }
    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
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
    }
    /**
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
    {
    }
}