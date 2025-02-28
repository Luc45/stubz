<?php

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
    }
    /**
     * No items found text.
     */
    public function no_items()
    {
    }
    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * Column cb.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_cb($webhook)
    {
    }
    /**
     * Return title column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_title($webhook)
    {
    }
    /**
     * Return status column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_status($webhook)
    {
    }
    /**
     * Return topic column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_topic($webhook)
    {
    }
    /**
     * Return delivery URL column.
     *
     * @param  WC_Webhook $webhook Webhook instance.
     * @return string
     */
    public function column_delivery_url($webhook)
    {
    }
    /**
     * Table list views.
     *
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * Get bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Process bulk actions.
     */
    public function process_bulk_action()
    {
    }
    /**
     * Generate the table navigation above or below the table.
     * Included to remove extra nonce input.
     *
     * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * Search box.
     *
     * @param  string $text     Button text.
     * @param  string $input_id Input ID.
     */
    public function search_box($text, $input_id)
    {
    }
    /**
     * Prepare table list items.
     */
    public function prepare_items()
    {
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
    }
}
