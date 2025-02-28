<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Selling_Online_Courses
 */
class SellingOnlineCourses
{
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-selling-online-courses';
    /**
     * Attach hooks.
     */
    public function __construct()
{
}
    /**
     * Check to see if the profiler options match before possibly adding note.
     *
     * @param object $old_value The old option value.
     * @param object $value     The new option value.
     * @param string $option    The name of the option.
     */
    public static function check_onboarding_profile($old_value, $value, $option)
{
}
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
{
}
}