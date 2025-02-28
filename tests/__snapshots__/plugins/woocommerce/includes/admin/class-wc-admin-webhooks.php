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
}
    /**
     * Check if is webhook settings page.
     *
     * @return bool
     */
    private function is_webhook_settings_page()
{
}
    /**
     * Save method.
     */
    private function save()
{
}
    /**
     * Bulk delete.
     *
     * @param array $webhooks List of webhooks IDs.
     */
    public static function bulk_delete($webhooks)
{
}
    /**
     * Delete webhook.
     */
    private function delete()
{
}
    /**
     * Webhooks admin actions.
     */
    public function actions()
{
}
    /**
     * Page output.
     */
    public static function page_output()
{
}
    /**
     * Notices.
     */
    public static function notices()
{
}
    /**
     * Add screen option.
     */
    public function screen_option()
{
}
    /**
     * Table list output.
     */
    private static function table_list_output()
{
}
    /**
     * Display a warning message if the Legacy REST API extension is not installed
     * and there are webhooks configured to use the legacy payload format.
     */
    private static function maybe_display_legacy_rest_api_warning()
{
}
    /**
     * Logs output.
     *
     * @deprecated 3.3.0
     * @param WC_Webhook $webhook Deprecated.
     */
    public static function logs_output($webhook = 'deprecated')
{
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
}
}
