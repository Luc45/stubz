<?php
/**
 * Webhook data store class.
 */
class WC_Webhook_Data_Store implements \WC_Webhook_Data_Store_Interface
{
    /**
     * Create a new webhook in the database.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook Webhook instance.
     */
    public function create(&$webhook)
{
}
    /**
     * Read a webhook from the database.
     *
     * @since  3.3.0
     * @param  WC_Webhook $webhook Webhook instance.
     * @throws Exception When webhook is invalid.
     */
    public function read(&$webhook)
{
}
    /**
     * Update a webhook.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook Webhook instance.
     */
    public function update(&$webhook)
{
}
    /**
     * Remove a webhook from the database.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook      Webhook instance.
     */
    public function delete(&$webhook)
{
}
    /**
     * Get API version number.
     *
     * @since  3.3.0
     * @param  string $api_version REST API version.
     * @return int
     */
    public function get_api_version_number($api_version)
{
}
    /**
     * Get webhooks IDs from the database.
     *
     * @since  3.3.0
     * @throws InvalidArgumentException If a $status value is passed in that is not in the known wc_get_webhook_statuses() keys.
     * @param  string $status Optional - status to filter results by. Must be a key in return value of @see wc_get_webhook_statuses(). @since 3.6.0.
     * @return int[]
     */
    public function get_webhooks_ids($status = '')
{
}
    /**
     * Search webhooks.
     *
     * @param  array $args Search arguments.
     * @return array|object
     */
    public function search_webhooks($args)
{
}
    /**
     * Count webhooks.
     *
     * @since 3.6.0
     * @param string $status Status to count.
     * @return int
     */
    protected function get_webhook_count($status = 'active')
{
}
    /**
     * Get total webhook counts by status.
     *
     * @return array
     */
    public function get_count_webhooks_by_status()
{
}
}
