<?php

/**
 * Update order stats `status` index length.
 * See: https://github.com/woocommerce/woocommerce-admin/issues/2969.
 */
function wc_admin_update_0201_order_status_index()
{
}
/**
 * Rename "gross_total" to "total_sales".
 * See: https://github.com/woocommerce/woocommerce-admin/issues/3175
 */
function wc_admin_update_0230_rename_gross_total()
{
}
/**
 * Remove the note unsnoozing scheduled action.
 */
function wc_admin_update_0251_remove_unsnooze_action()
{
}
/**
 * Remove Facebook Extension note.
 */
function wc_admin_update_110_remove_facebook_note()
{
}
/**
 * Remove Dismiss action from tracking opt-in admin note.
 */
function wc_admin_update_130_remove_dismiss_action_from_tracking_opt_in_note()
{
}
/**
 * Update DB Version.
 */
function wc_admin_update_130_db_version()
{
}
/**
 * Update DB Version.
 */
function wc_admin_update_140_db_version()
{
}
/**
 * Remove Facebook Experts note.
 */
function wc_admin_update_160_remove_facebook_note()
{
}
/**
 * Set "two column" homescreen layout as default for existing stores.
 */
function wc_admin_update_170_homescreen_layout()
{
}
/**
 * Delete the preexisting export files.
 */
function wc_admin_update_270_delete_report_downloads()
{
}
/**
 * Update the old task list options.
 */
function wc_admin_update_271_update_task_list_options()
{
}
/**
 * Update order stats `status`.
 */
function wc_admin_update_280_order_status()
{
}
/**
 * Update the old task list options.
 */
function wc_admin_update_290_update_apperance_task_option()
{
}
/**
 * Delete the old woocommerce_default_homepage_layout option.
 */
function wc_admin_update_290_delete_default_homepage_layout_option()
{
}
/**
 * Use woocommerce_admin_activity_panel_inbox_last_read from the user meta to set wc_admin_notes.is_read col.
 */
function wc_admin_update_300_update_is_read_from_last_read()
{
}
/**
 * Delete "is_primary" column from the wc_admin_notes table.
 */
function wc_admin_update_340_remove_is_primary_from_note_action()
{
}
/**
 * Delete the deprecated remote inbox notifications option since transients are now used.
 */
function wc_update_670_delete_deprecated_remote_inbox_notifications_option()
{
}