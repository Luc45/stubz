<?php

namespace ;

/**
 * Webhook data store class.
 */
class WC_Webhook_Data_Store extends \
{
    /**
     * Create a new webhook in the database.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook Webhook instance.
     */
    public function create(&$webhook)
    {
        // stub
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
        // stub
    }

    /**
     * Update a webhook.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook Webhook instance.
     */
    public function update(&$webhook)
    {
        // stub
    }

    /**
     * Remove a webhook from the database.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook      Webhook instance.
     */
    public function delete(&$webhook)
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Search webhooks.
     *
     * @param  array $args Search arguments.
     * @return array|object
     */
    public function search_webhooks($args)
    {
        // stub
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
        // stub
    }

    /**
     * Get total webhook counts by status.
     *
     * @return array
     */
    public function get_count_webhooks_by_status()
    {
        // stub
    }

    /**
     * Check if a given string is in known statuses, based on return value of @see wc_get_webhook_statuses().
     *
     * @since  3.6.0
     * @throws InvalidArgumentException If $status is not empty and not in the known wc_get_webhook_statuses() keys.
     * @param  string $status Status to check.
     */
    private function validate_status($status)
    {
        // stub
    }

    /**
     * Get the transient key used to cache a set of webhook IDs, optionally filtered by status.
     *
     * @since  3.6.0
     * @param  string $status Optional - status of cache key.
     * @return string
     */
    private function get_transient_key($status = '')
    {
        // stub
    }

    /**
     * Delete the transients used to cache a set of webhook IDs, optionally filtered by status.
     *
     * @since 3.6.0
     * @param string $status Optional - status of cache to delete, or 'all' to delete all caches.
     */
    private function delete_transients($status = '')
    {
        // stub
    }

}

