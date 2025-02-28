<?php

namespace Automattic\WooCommerce\Admin;

/**
 * ReportExporter Class.
 */
class ReportExporter
{
    /**
     * Slug to identify the scheduler.
     *
     * @var string
     */
    public static $name = 'report_exporter';
    /**
     * Scheduler traits.
     */
    use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
        init as scheduler_init;
    }
    /**
     * Export status option name.
     */
    const EXPORT_STATUS_OPTION = 'woocommerce_admin_report_export_status';
    /**
     * Export file download action.
     */
    const DOWNLOAD_EXPORT_ACTION = 'woocommerce_admin_download_report_csv';
    /**
     * Get all available scheduling actions.
     * Used to determine action hook names and clear events.
     *
     * @return array
     */
    public static function get_scheduler_actions()
    {
    }
    /**
     * Add action dependencies.
     *
     * @return array
     */
    public static function get_dependencies()
    {
    }
    /**
     * Hook in action methods.
     */
    public static function init()
    {
    }
    /**
     * Queue up actions for a full report export.
     *
     * @param string $export_id Unique ID for report (timestamp expected).
     * @param string $report_type Report type. E.g. 'customers'.
     * @param array  $report_args Report parameters, passed to data query.
     * @param bool   $send_email Optional. Send an email when the export is complete.
     * @return int Number of items to export.
     */
    public static function queue_report_export($export_id, $report_type, $report_args = array(), $send_email = false)
    {
    }
    /**
     * Process a report export action.
     *
     * @param int    $page_number Page number for this action.
     * @param string $export_id Unique ID for report (timestamp expected).
     * @param string $report_type Report type. E.g. 'customers'.
     * @param array  $report_args Report parameters, passed to data query.
     * @return void
     */
    public static function export_report($page_number, $export_id, $report_type, $report_args)
    {
    }
    /**
     * Generate a key to reference an export status.
     *
     * @param string $report_type Report type. E.g. 'customers'.
     * @param string $export_id Unique ID for report (timestamp expected).
     * @return string Status key.
     */
    protected static function get_status_key($report_type, $export_id)
    {
    }
    /**
     * Update the completion percentage of a report export.
     *
     * @param string $report_type Report type. E.g. 'customers'.
     * @param string $export_id Unique ID for report (timestamp expected).
     * @param int    $percentage Completion percentage.
     * @return void
     */
    public static function update_export_percentage_complete($report_type, $export_id, $percentage)
    {
    }
    /**
     * Get the completion percentage of a report export.
     *
     * @param string $report_type Report type. E.g. 'customers'.
     * @param string $export_id Unique ID for report (timestamp expected).
     * @return bool|int Completion percentage, or false if export not found.
     */
    public static function get_export_percentage_complete($report_type, $export_id)
    {
    }
    /**
     * Serve the export file.
     */
    public static function download_export_file()
    {
    }
    /**
     * Process a report export email action.
     *
     * @param int    $user_id User ID that requested the email.
     * @param string $export_id Unique ID for report (timestamp expected).
     * @param string $report_type Report type. E.g. 'customers'.
     * @return void
     */
    public static function email_report_download_link($user_id, $export_id, $report_type)
    {
    }
}