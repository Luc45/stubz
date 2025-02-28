<?php

/**
 * Legacy Webhook class.
 */
abstract class WC_Legacy_Webhook extends \WC_Data
{
    /**
     * Magic __isset method for backwards compatibility. Legacy properties which could be accessed directly in the past.
     *
     * @param  string $key Item to check.
     * @return bool
     */
    public function __isset($key)
    {
    }
    /**
     * Magic __get method for backwards compatibility. Maps legacy vars to new getters.
     *
     * @param  string $key Item to get.
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Get the post data for the webhook.
     *
     * @deprecated 3.2.0
     * @since      2.2
     * @return     null|WP_Post
     */
    public function get_post_data()
    {
    }
    /**
     * Update the webhook status.
     *
     * @deprecated 3.2.0
     * @since      2.2.0
     * @param      string $status Status to set.
     */
    public function update_status($status)
    {
    }
}