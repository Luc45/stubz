<?php

/**
 * WC_Admin_API_Keys.
 */
class WC_Admin_API_Keys
{
    /**
     * Initialize the API Keys admin actions.
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
     * Check if is API Keys settings page.
     *
     * @return bool
     */
    private function is_api_keys_settings_page()
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
     * Get key data.
     *
     * @param  int $key_id API Key ID.
     * @return array
     */
    private static function get_key_data($key_id)
    {
        // stub
    }

    /**
     * API Keys admin actions.
     */
    public function actions()
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
     * Revoke key.
     */
    private function revoke_key()
    {
        // stub
    }

    /**
     * Bulk actions.
     */
    private function bulk_actions()
    {
        // stub
    }

    /**
     * Bulk revoke key.
     *
     * @param array $keys API Keys.
     */
    private function bulk_revoke_key($keys)
    {
        // stub
    }

    /**
     * Remove key.
     *
     * @param  int $key_id API Key ID.
     * @return bool
     */
    private function remove_key($key_id)
    {
        // stub
    }

}
