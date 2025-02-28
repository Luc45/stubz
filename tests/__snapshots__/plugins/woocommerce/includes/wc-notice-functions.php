<?php

/**
 * Get the count of notices added, either for all notices (default) or for one.
 * particular notice type specified by $notice_type.
 *
 * @since  2.1
 * @param  string $notice_type Optional. The name of the notice type - either error, success or notice.
 * @return int
 */
function wc_notice_count($notice_type = '')
{
}
/**
 * Check if a notice has already been added.
 *
 * @since  2.1
 * @param  string $message The text to display in the notice.
 * @param  string $notice_type Optional. The name of the notice type - either error, success or notice.
 * @return bool
 */
function wc_has_notice($message, $notice_type = 'success')
{
}
/**
 * Add and store a notice.
 *
 * @since 2.1
 * @version 3.9.0
 * @param string $message     The text to display in the notice.
 * @param string $notice_type Optional. The name of the notice type - either error, success or notice.
 * @param array  $data        Optional notice data.
 */
function wc_add_notice($message, $notice_type = 'success', $data = array())
{
}
/**
 * Set all notices at once.
 *
 * @since 2.6.0
 * @param array[] $notices Array of notices.
 */
function wc_set_notices($notices)
{
}
/**
 * Unset all notices.
 *
 * @since 2.1
 */
function wc_clear_notices()
{
}
/**
 * Prints messages and errors which are stored in the session, then clears them.
 *
 * @since 2.1
 * @param bool $return true to return rather than echo. @since 3.5.0.
 * @return string|void
 */
function wc_print_notices($return = false)
{
}
/**
 * Print a single notice immediately.
 *
 * @since 2.1
 * @version 3.9.0
 * @param string $message The text to display in the notice.
 * @param string $notice_type Optional. The singular name of the notice type - either error, success or notice.
 * @param array  $data        Optional notice data. @since 3.9.0.
 * @param bool   $return      true to return rather than echo. @since 7.7.0.
 */
function wc_print_notice($message, $notice_type = 'success', $data = array(), $return = false)
{
}
/**
 * Returns all queued notices, optionally filtered by a notice type.
 *
 * @since  2.1
 * @version 3.9.0
 * @param  string $notice_type Optional. The singular name of the notice type - either error, success or notice.
 * @return array[]
 */
function wc_get_notices($notice_type = '')
{
}
/**
 * Add notices for WP Errors.
 *
 * @param WP_Error $errors Errors.
 */
function wc_add_wp_error_notices($errors)
{
}
/**
 * Filters out the same tags as wp_kses_post, but allows tabindex for <a> element.
 *
 * @since 3.5.0
 * @param string $message Content to filter through kses.
 * @return string
 */
function wc_kses_notice($message)
{
}
/**
 * Get notice data attribute.
 *
 * @since 3.9.0
 * @param array $notice Notice data.
 * @return string
 */
function wc_get_notice_data_attr($notice)
{
}
