<?php

/**
 * Process the web hooks at the end of the request.
 *
 * @since 4.4.0
 */
function wc_webhook_execute_queue()
{
    // stub
}

/**
 * Process webhook delivery.
 *
 * @since 3.3.0
 * @param WC_Webhook $webhook Webhook instance.
 * @param array      $arg     Delivery arguments.
 */
function wc_webhook_process_delivery($webhook, $arg)
{
    // stub
}

/**
 * Wrapper function to execute the `woocommerce_deliver_webhook_async` cron.
 * hook, see WC_Webhook::process().
 *
 * @since 2.2.0
 * @param int   $webhook_id Webhook ID to deliver.
 * @throws Exception        If webhook cannot be read/found and $data parameter of WC_Webhook class constructor is set.
 * @param mixed $arg        Hook argument.
 */
function wc_deliver_webhook_async($webhook_id, $arg)
{
    // stub
}

/**
 * Check if the given topic is a valid webhook topic, a topic is valid if:
 *
 * + starts with `action.woocommerce_` or `action.wc_`.
 * + it has a valid resource & event.
 *
 * @since  2.2.0
 * @param  string $topic Webhook topic.
 * @return bool
 */
function wc_is_webhook_valid_topic($topic)
{
    // stub
}

/**
 * Check if given status is a valid webhook status.
 *
 * @since 3.5.3
 * @param string $status Status to check.
 * @return bool
 */
function wc_is_webhook_valid_status($status)
{
    // stub
}

/**
 * Get Webhook statuses.
 *
 * @since  2.3.0
 * @return array
 */
function wc_get_webhook_statuses()
{
    // stub
}

/**
 * Load webhooks.
 *
 * @since  3.3.0
 * @throws Exception If webhook cannot be read/found and $data parameter of WC_Webhook class constructor is set.
 * @param  string   $status Optional - status to filter results by. Must be a key in return value of @see wc_get_webhook_statuses(). @since 3.5.0.
 * @param  null|int $limit Limit number of webhooks loaded. @since 3.6.0.
 * @return bool
 */
function wc_load_webhooks($status = '', $limit = null)
{
    // stub
}

/**
 * Get webhook.
 *
 * @param  int|WC_Webhook $id Webhook ID or object.
 * @throws Exception          If webhook cannot be read/found and $data parameter of WC_Webhook class constructor is set.
 * @return WC_Webhook|null
 */
function wc_get_webhook($id)
{
    // stub
}

/**
 * Get webhoook REST API versions.
 *
 * @since 3.5.1
 * @return array
 */
function wc_get_webhook_rest_api_versions()
{
    // stub
}

