<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * DeprecatedOptions class.
 */
class DeprecatedOptions
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Get the values from the correct source when attempting to retrieve deprecated options.
     *
     * @param string $pre_option Pre option value.
     * @param string $option Option name.
     * @return string
     */
    public static function get_deprecated_options($pre_option, $option)
    {
    }
    /**
     * Updates the new option names when deprecated options are updated.
     * This is a temporary fallback until we can fully remove the old task list components.
     *
     * @param string $value New value.
     * @param string $old_value Old value.
     * @param string $option Option name.
     * @return string
     */
    public static function update_deprecated_options($value, $old_value, $option)
    {
    }
}