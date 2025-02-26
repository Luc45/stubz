<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Selling_Online_Courses
 */
class SellingOnlineCourses extends \
{
    const NOTE_NAME = 'wc-admin-selling-online-courses';

    /**
     * Attach hooks.
     */
    public function __construct()
    {
        // stub
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
        // stub
    }

    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
        // stub
    }

}

