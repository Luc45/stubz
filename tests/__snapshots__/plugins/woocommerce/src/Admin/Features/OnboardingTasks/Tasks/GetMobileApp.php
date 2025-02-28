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
     * Determines if site has any users connected to WordPress.com via JetPack
     *
     * @return bool
     */
    private static function is_jetpack_connected()
{
}
    /**
     * Determines if the current user is connected to Jetpack.
     *
     * @return bool
     */
    private static function is_current_user_connected()
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