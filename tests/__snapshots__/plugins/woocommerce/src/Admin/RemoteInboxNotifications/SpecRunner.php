<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Runs a single spec.
 */
class SpecRunner
{
    /**
     * Run the spec.
     *
     * @param object $spec         The spec to run.
     * @param object $stored_state Stored state.
     */
    public static function run_spec($spec, $stored_state)
{
}
    /**
     * Get the URL for an action.
     *
     * @param object $action The action.
     *
     * @return string The URL for the action.
     */
    private static function get_url($action)
{
}
    /**
     * Get the locale for the WordPress locale, or fall back to the en_US
     * locale.
     *
     * @param Array $locales The locales to search through.
     *
     * @returns object The locale that was found, or null if no matching locale was found.
     */
    public static function get_locale($locales)
{
}
    /**
     * Get the action locale that matches the note locale, or fall back to the
     * en_US locale.
     *
     * @param Array $action_locales The locales from the spec's action.
     *
     * @return object The matching locale, or the en_US fallback locale, or null if neither was found.
     */
    public static function get_action_locale($action_locales)
{
}
    /**
     * Get the actions for a note.
     *
     * @param object $spec The spec.
     *
     * @return array The actions.
     */
    public static function get_actions($spec)
{
}
}