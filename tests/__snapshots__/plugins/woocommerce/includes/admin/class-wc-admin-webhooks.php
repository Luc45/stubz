<?php

/**
 * WC_Admin_Webhooks.
 */
class WC_Admin_Webhooks
{
    /**
     * Initialize the webhooks admin actions.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Check if should allow save settings.
     * This prevents "Your settings have been saved." notices on the table list.
     *
     * @param  bool $allow If allow save settings.
     * @return bool
     */
    public function allow_save_settings($allow)
    {
        // stub
    }

    /**
     * Check if is webhook settings page.
     *
     * @return bool
     */
    private function is_webhook_settings_page()
    {
        // stub
    }

    /**
     * Save method.
     */
    private function save()
    {
        // stub
    }

    /**
     * Bulk delete.
     *
     * @param array $webhooks List of webhooks IDs.
     */
    public static function bulk_delete($webhooks)
    {
        // stub
    }

    /**
     * Delete webhook.
     */
    private function delete()
    {
        // stub
    }

    /**
     * Webhooks admin actions.
     */
    public function actions()
    {
        // stub
    }

    /**
     * Page output.
     */
    public static function page_output()
    {
        // stub
    }

    /**
     * Notices.
     */
    public static function notices()
    {
        // stub
    }

    /**
     * Add screen option.
     */
    public function screen_option()
    {
        // stub
    }

    /**
     * Table list output.
     */
    private static function table_list_output()
    {
        // stub
    }

    /**
     * Display a warning message if the Legacy REST API extension is not installed
     * and there are webhooks configured to use the legacy payload format.
     */
    private static function maybe_display_legacy_rest_api_warning()
    {
        // stub
    }

    /**
     * Logs output.
     *
     * @deprecated 3.3.0
     * @param WC_Webhook $webhook Deprecated.
     */
    public static function logs_output($webhook = 'deprecated')
    {
        // stub
    }

    /**
     * Get the webhook topic data.
     *
     * @param WC_Webhook $webhook Webhook instance.
     *
     * @return array
     */
    public static function get_topic_data($webhook)
    {
        // stub
    }

    /**
     * Get the logs navigation.
     *
     * @deprecated 3.3.0
     * @param int        $total Deprecated.
     * @param WC_Webhook $webhook Deprecated.
     */
    public static function get_logs_navigation($total, $webhook)
    {
        // stub
    }

}
