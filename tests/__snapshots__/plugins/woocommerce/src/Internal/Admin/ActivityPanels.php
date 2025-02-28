<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Contains backend logic for the activity panel feature.
 */
class ActivityPanels
{
    /**
     * Class instance.
     *
     * @var ActivityPanels instance
     */
    protected static $instance = null;

    /**
     * Get class instance.
     */
    public static function get_instance()
{
}
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
{
}
    /**
     * Adds fields so that we can store activity panel last read and open times.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
{
}
    /**
     * Add alert count to the component settings.
     *
     * @param array $settings Component settings.
     */
    public function component_settings($settings)
{
}
}