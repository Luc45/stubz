<?php

namespace ;

/**
 * Webhooks table list class.
 */
class WC_Admin_Webhooks_Table_List extends \WP_List_Table
{
    /**
     * Initialize the webhook table list.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * No items found text.
     */
    public function no_items()
    {
        // stub
    }

    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
    {
        // stub
    }

    /**
     * Column cb.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_cb($webhook)
    {
        // stub
    }

    /**
     * Return title column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_title($webhook)
    {
        // stub
    }

    /**
     * Return status column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_status($webhook)
    {
        // stub
    }

    /**
     * Return topic column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_topic($webhook)
    {
        // stub
    }

    /**
     * Return delivery URL column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_delivery_url($webhook)
    {
        // stub
    }

    /**
     * Get the status label for webhooks.
     *
     * @param string $status_name Status name.
     * @param int    $amount      Amount of webhooks.
     * @return array
     */
    private function get_status_label($status_name, $amount)
    {
        // stub
    }

    /**
     * Table list views.
     *
     * @return array
     */
    protected function get_views()
    {
        // stub
    }

    /**
     * Get bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
        // stub
    }

    /**
     * Process bulk actions.
     */
    public function process_bulk_action()
    {
        // stub
    }

    /**
     * Generate the table navigation above or below the table.
     * Included to remove extra nonce input.
     *
     * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
     */
    protected function display_tablenav($which)
    {
        // stub
    }

    /**
     * Search box.
     *
     * @param  string $text     Button text.
     * @param  string $input_id Input ID.
     */
    public function search_box($text, $input_id)
    {
        // stub
    }

    /**
     * Prepare table list items.
     */
    public function prepare_items()
    {
        // stub
    }

    /**
     * Get how many of the existing webhooks are configured to use the legacy payload format.
     *
     * @since 9.0.0
     *
     * @return int Count of existing webhooks are configured to use the legacy payload format.
     */
    public function get_legacy_api_webhooks_count()
    {
        // stub
    }

    /**
     * Check if a given webhook is configured to use the legacy payload format.
     *
     * @param WC_Webhook $webhook Webhook object.
     * @return bool True if the webhook is configured to use the legacy payload format.
     */
    private function uses_legacy_rest_api($webhook)
    {
        // stub
    }

}

