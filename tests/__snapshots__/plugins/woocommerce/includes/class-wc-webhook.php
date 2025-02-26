<?php

namespace ;

/**
 * Webhook class.
 */
class WC_Webhook extends \WC_Legacy_Webhook
{
    /**
     * Store which object IDs this webhook has processed (ie scheduled to be delivered)
     * within the current page request.
     *
     * @var array
     */
    protected $processed = array(
);

    /**
     * Stores webhook data.
     *
     * @var array
     */
    protected $data = array(
  'date_created' => null,
  'date_modified' => null,
  'status' => 'disabled',
  'delivery_url' => '',
  'secret' => '',
  'name' => '',
  'topic' => '',
  'hooks' => '',
  'resource' => '',
  'event' => '',
  'failure_count' => 0,
  'user_id' => 0,
  'api_version' => 3,
  'pending_delivery' => false,
);

    /**
     * Load webhook data based on how WC_Webhook is called.
     *
     * @param WC_Webhook|int $data Webhook ID or data.
     * @throws Exception If webhook cannot be read/found and $data is set.
     */
    public function __construct($data = 0)
    {
        // stub
    }

    /**
     * Enqueue the hooks associated with the webhook.
     *
     * @since 2.2.0
     */
    public function enqueue()
    {
        // stub
    }

    /**
     * Process the webhook for delivery by verifying that it should be delivered.
     * and scheduling the delivery (in the background by default, or immediately).
     *
     * @since  2.2.0
     * @param  mixed $arg The first argument provided from the associated hooks.
     * @return mixed $arg Returns the argument in case the webhook was hooked into a filter.
     */
    public function process($arg)
    {
        // stub
    }

    /**
     * Helper to check if the webhook should be delivered, as some hooks.
     * (like `wp_trash_post`) will fire for every post type, not just ours.
     *
     * @since  2.2.0
     * @param  mixed $arg First hook argument.
     * @return bool       True if webhook should be delivered, false otherwise.
     */
    private function should_deliver($arg)
    {
        // stub
    }

    /**
     * Returns if webhook is active.
     *
     * @since  3.6.0
     * @return bool  True if validation passes.
     */
    private function is_active()
    {
        // stub
    }

    /**
     * Returns if topic is valid.
     *
     * @since  3.6.0
     * @return bool  True if validation passes.
     */
    private function is_valid_topic()
    {
        // stub
    }

    /**
     * Validates the criteria for certain actions.
     *
     * @since  3.6.0
     * @param  mixed $arg First hook argument.
     * @return bool       True if validation passes.
     */
    private function is_valid_action($arg)
    {
        // stub
    }

    /**
     * Validates post actions.
     *
     * @since  3.6.0
     * @param  mixed $arg First hook argument.
     * @return bool       True if validation passes.
     */
    private function is_valid_post_action($arg)
    {
        // stub
    }

    /**
     * Validates user actions.
     *
     * @since  3.6.0
     * @param  mixed $arg First hook argument.
     * @return bool       True if validation passes.
     */
    private function is_valid_user_action($arg)
    {
        // stub
    }

    /**
     * Validates WC processing actions.
     *
     * @since  3.6.0
     * @param  mixed $arg First hook argument.
     * @return bool       True if validation passes.
     */
    private function is_valid_processing_action($arg)
    {
        // stub
    }

    /**
     * Checks the resource for this webhook is valid e.g. valid post status.
     *
     * @since  3.6.0
     * @param  mixed $arg First hook argument.
     * @return bool       True if validation passes.
     */
    private function is_valid_resource($arg)
    {
        // stub
    }

    /**
     * Checks if the specified resource has already been queued for delivery within the current request.
     *
     * Helps avoid duplication of data being sent for topics that have more than one hook defined.
     *
     * @param mixed $arg First hook argument.
     *
     * @return bool
     */
    protected function is_already_processed($arg)
    {
        // stub
    }

    /**
     * Deliver the webhook payload using wp_safe_remote_request().
     *
     * @since 2.2.0
     * @param mixed $arg First hook argument.
     */
    public function deliver($arg)
    {
        // stub
    }

    /**
     * Get WP API integration payload.
     *
     * @since  3.0.0
     * @param  string $resource    Resource type.
     * @param  int    $resource_id Resource ID.
     * @param  string $event       Event type.
     * @return array
     */
    private function get_wp_api_payload($resource, $resource_id, $event)
    {
        // stub
    }

    /**
     * Build the payload data for the webhook.
     *
     * @param mixed $resource_id First hook argument, typically the resource ID.
     * @return mixed              Payload data.
     * @throws \Exception The webhook is configured to use the Legacy REST API, but the Legacy REST API plugin is not available.
     * @since  2.2.0
     */
    public function build_payload($resource_id)
    {
        // stub
    }

    /**
     * Generate a base64-encoded HMAC-SHA256 signature of the payload body so the
     * recipient can verify the authenticity of the webhook. Note that the signature
     * is calculated after the body has already been encoded (JSON by default).
     *
     * @since  2.2.0
     * @param  string $payload Payload data to hash.
     * @return string
     */
    public function generate_signature($payload)
    {
        // stub
    }

    /**
     * Generate a new unique hash as a delivery id based on current time and wehbook id.
     * Return the hash for inclusion in the webhook request.
     *
     * @since  2.2.0
     * @return string
     */
    public function get_new_delivery_id()
    {
        // stub
    }

    /**
     * Log the delivery request/response.
     *
     * @since 2.2.0
     * @param string         $delivery_id Previously created hash.
     * @param array          $request     Request data.
     * @param array|WP_Error $response    Response data.
     * @param float          $duration    Request duration.
     */
    public function log_delivery($delivery_id, $request, $response, $duration)
    {
        // stub
    }

    /**
     * Track consecutive delivery failures and automatically disable the webhook.
     * if more than 5 consecutive failures occur. A failure is defined as a.
     * non-2xx response.
     *
     * @since 2.2.0
     */
    private function failed_delivery()
    {
        // stub
    }

    /**
     * Get the delivery logs for this webhook.
     *
     * @since  3.3.0
     * @return string
     */
    public function get_delivery_logs()
    {
        // stub
    }

    /**
     * Get the delivery log specified by the ID. The delivery log includes:
     *
     * + duration
     * + summary
     * + request method/url
     * + request headers/body
     * + response code/message/headers/body
     *
     * @since 2.2
     * @deprecated 3.3.0
     * @param int $delivery_id Delivery ID.
     * @return void
     */
    public function get_delivery_log($delivery_id)
    {
        // stub
    }

    /**
     * Send a test ping to the delivery URL, sent when the webhook is first created.
     *
     * @since  2.2.0
     * @return bool|WP_Error
     */
    public function deliver_ping()
    {
        // stub
    }

    /**
     * Get the friendly name for the webhook.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
        // stub
    }

    /**
     * Get the webhook status.
     *
     * - 'active' - delivers payload.
     * - 'paused' - does not deliver payload, paused by admin.
     * - 'disabled' - does not delivery payload, paused automatically due to consecutive failures.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string status
     */
    public function get_status($context = 'view')
    {
        // stub
    }

    /**
     * Get webhook created date.
     *
     * @since  3.2.0
     * @param  string $context  What the value is for.
     *                          Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
        // stub
    }

    /**
     * Get webhook modified date.
     *
     * @since  3.2.0
     * @param  string $context  What the value is for.
     *                          Valid values are 'view' and 'edit'.
     * @return WC_DateTime|null Object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
    {
        // stub
    }

    /**
     * Get the secret used for generating the HMAC-SHA256 signature.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_secret($context = 'view')
    {
        // stub
    }

    /**
     * Get the webhook topic, e.g. `order.created`.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_topic($context = 'view')
    {
        // stub
    }

    /**
     * Get the delivery URL.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_delivery_url($context = 'view')
    {
        // stub
    }

    /**
     * Get the user ID for this webhook.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_user_id($context = 'view')
    {
        // stub
    }

    /**
     * API version.
     *
     * @since  3.0.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_api_version($context = 'view')
    {
        // stub
    }

    /**
     * Get the failure count.
     *
     * @since  2.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_failure_count($context = 'view')
    {
        // stub
    }

    /**
     * Get pending delivery.
     *
     * @since  3.2.0
     * @param  string $context What the value is for.
     *                         Valid values are 'view' and 'edit'.
     * @return bool
     */
    public function get_pending_delivery($context = 'view')
    {
        // stub
    }

    /**
     * Set webhook name.
     *
     * @since 3.2.0
     * @param string $name Webhook name.
     */
    public function set_name($name)
    {
        // stub
    }

    /**
     * Set webhook created date.
     *
     * @since 3.2.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime.
     *                                  If the DateTime string has no timezone or offset,
     *                                  WordPress site timezone will be assumed.
     *                                  Null if their is no date.
     */
    public function set_date_created($date = null)
    {
        // stub
    }

    /**
     * Set webhook modified date.
     *
     * @since 3.2.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime.
     *                                  If the DateTime string has no timezone or offset,
     *                                  WordPress site timezone will be assumed.
     *                                  Null if their is no date.
     */
    public function set_date_modified($date = null)
    {
        // stub
    }

    /**
     * Set status.
     *
     * @since 3.2.0
     * @param string $status Status.
     */
    public function set_status($status)
    {
        // stub
    }

    /**
     * Set the secret used for generating the HMAC-SHA256 signature.
     *
     * @since 2.2.0
     * @param string $secret Secret.
     */
    public function set_secret($secret)
    {
        // stub
    }

    /**
     * Set the webhook topic and associated hooks.
     * The topic resource & event are also saved separately.
     *
     * @since 2.2.0
     * @param string $topic Webhook topic.
     */
    public function set_topic($topic)
    {
        // stub
    }

    /**
     * Set the delivery URL.
     *
     * @since 2.2.0
     * @param string $url Delivery URL.
     */
    public function set_delivery_url($url)
    {
        // stub
    }

    /**
     * Set user ID.
     *
     * @since 3.2.0
     * @param int $user_id User ID.
     */
    public function set_user_id($user_id)
    {
        // stub
    }

    /**
     * Set API version.
     *
     * @since 3.0.0
     * @param int|string $version REST API version.
     */
    public function set_api_version($version)
    {
        // stub
    }

    /**
     * Set pending delivery.
     *
     * @since 3.2.0
     * @param bool $pending_delivery Set true if is pending for delivery.
     */
    public function set_pending_delivery($pending_delivery)
    {
        // stub
    }

    /**
     * Set failure count.
     *
     * @since 3.2.0
     * @param bool $failure_count Total of failures.
     */
    public function set_failure_count($failure_count)
    {
        // stub
    }

    /**
     * Get the associated hook names for a topic.
     *
     * @since  2.2.0
     * @param  string $topic Topic name.
     * @return array
     */
    private function get_topic_hooks($topic)
    {
        // stub
    }

    /**
     * Get the hook names for the webhook.
     *
     * @since  2.2.0
     * @return array
     */
    public function get_hooks()
    {
        // stub
    }

    /**
     * Get the resource for the webhook, e.g. `order`.
     *
     * @since  2.2.0
     * @return string
     */
    public function get_resource()
    {
        // stub
    }

    /**
     * Get the event for the webhook, e.g. `created`.
     *
     * @since  2.2.0
     * @return string
     */
    public function get_event()
    {
        // stub
    }

    /**
     * Get the webhook i18n status.
     *
     * @return string
     */
    public function get_i18n_status()
    {
        // stub
    }

}

